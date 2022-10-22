<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

// 1. pobranie parametrów

function getParams(&$amount,&$years,&$rate){
	$amount = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
	$years = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$rate = isset($_REQUEST['rate']) ? $_REQUEST['rate'] : null;	
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

function validate(&$amount, &$years, &$rate, &$messages) {


// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($amount) && isset($years) && isset($rate))) {
	return false;
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $amount == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $years == "") {
	$messages [] = 'Nie podano długości zobowiązania w latach';
}
if ( $rate == "") {
	$messages [] = 'Nie podano oprocentowania';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $amount, $years, $rate są liczbami całkowitymi
	if (! is_numeric( $amount )) {
		$messages [] = 'Kwota nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $years )) {
		$messages [] = 'Ilość lat nie jest liczbą całkowitą';
	}	

	if (! is_numeric( $rate )) {
		$messages [] = 'Oprocentowanie nie jest liczbą całkowitą';
	}

	if ($amount <= 0 || $years <= 0 || $rate <= 0) {
		$messages [] = 'Liczba nie może być mniejsza niż 0';
	}
	
	if (count ( $messages ) != 0) return false;
	else return true;

}

// 3. wykonanie zadania

function process(&$amount,&$years,&$rate,&$messages,&$result){
	global $role;
	
	//konwersja parametrów na int oraz float
	$amount = intval($amount);
	$years = intval($years);
	$rate = floatval($rate);
	
	//wykonanie
	if ( $role == 'admin') {
	$result = (($amount * (($rate/100)*$years)) + $amount) / ($years*12);	
	} else if ( $role == 'user' && $amount <= 50000 ) {
		$result = (($amount * (($rate/100)*$years)) + $amount) / ($years*12);
	}
	else {
		$messages [] = 'Maksymalna kwota zobowiązania wynosi 50000 zł';
	}
}

//definicja zmiennych kontrolera
$amount = null;
$years = null;
$rate = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($amount,$years,$rate);
if ( validate($amount,$years,$rate,$messages) ) { // gdy brak błędów
	process($amount,$years,$rate,$messages,$result);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$amount,$years,$rate,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';