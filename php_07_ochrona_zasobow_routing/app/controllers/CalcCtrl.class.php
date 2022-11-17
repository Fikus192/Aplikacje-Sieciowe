<?php

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;

/** Kontroler kalkulatora
 * @author Mateusz Ratajczak
 *
 */
class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	
	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->amount = getFromRequest('amount');
		$this->form->years = getFromRequest('years');
		$this->form->rate = getFromRequest('rate');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->amount ) && isset ( $this->form->years ) && isset ( $this->form->rate ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false;
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->amount == "") {
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->years == "") {
			getMessages()->addError('Nie podano długości zobowiązania w latach');
		}
		if ($this->form->rate == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $xamount, $years i $rate są liczbami całkowitymi
			if (! is_numeric ( $this->form->amount )) {
				getMessages()->addError('Kwota nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->years )) {
				getMessages()->addError('Ilość lat nie jest liczbą całkowitą');
			}

			if (! is_numeric ( $this->form->rate )) {
				getMessages()->addError('Oprocentowanie nie jest liczbą całkowitą');
			}

			if (( $this->form->amount ) <= 0 || ( $this->form->years ) <= 0 || ( $this->form->rate ) <= 0 ) {
				getMessages()->addError('Liczba nie może być mniejsza niż 0');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function action_calcCompute(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->amount = intval($this->form->amount);
			$this->form->years = intval($this->form->years);
			$this->form->rate = intval($this->form->rate);
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
			if ( inRole('admin') ) {
			$this->result->result = (($this->form->amount * (($this->form->rate/100)*$this->form->years)) + $this->form->amount) / ($this->form->years*12);
			} else if ( inRole('user') && $this->form->amount <= 50000) {
				$this->result->result = (($this->form->amount * (($this->form->rate/100)*$this->form->years)) + $this->form->amount) / ($this->form->years*12);
			} else {
				getMessages()->addError('Maksymalna kwota zobowiązania wynosi 50000 zł');
			}
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));

		getSmarty()->assign('page_title','Kalkulator Kredytowy');
		
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}
}
