<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

//załaduj Smarty
require_once _ROOT_PATH.'/lib/smarty/Smarty.class.php';

// 1. pobranie parametrów

function getParams(&$form){
	$form['amount'] = isset($_REQUEST['amount']) ? $_REQUEST['amount'] : null;
	$form['years'] = isset($_REQUEST['years']) ? $_REQUEST['years'] : null;
	$form['rate'] = isset($_REQUEST['rate']) ? $_REQUEST['rate'] : null;	
}

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

function validate(&$form,&$infos,&$msgs,&$hide_intro) {


// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($form['amount']) && isset($form['years']) && isset($form['rate']))) return false;


$hide_intro = true;

$infos [] = 'Przekazano parametry.';

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ( $form['amount'] == "") $msgs [] = 'Nie podano kwoty';
if ( $form['years'] == "") $msgs [] = 'Nie podano długości zobowiązania w latach';
if ( $form['rate'] == "") $msgs [] = 'Nie podano oprocentowania';

//nie ma sensu walidować dalej gdy brak parametrów
if (count ( $msgs ) == 0) {
	
	// sprawdzenie, czy $form['amount'], $form['years'], $form['rate'] są liczbami całkowitymi
	if (! is_numeric( $form['amount'] )) $msgs [] = 'Kwota nie jest liczbą całkowitą';
	if (! is_numeric( $form['years'] )) $msgs [] = 'Ilość lat nie jest liczbą całkowitą';	
	if (! is_numeric( $form['rate'] )) $msgs [] = 'Oprocentowanie nie jest liczbą całkowitą';
	if ($form['amount'] <= 0 || $form['years'] <= 0 || $form['rate'] <= 0) $msgs [] = 'Liczba nie może być mniejsza niż 0';
}

	if (count ( $msgs ) > 0) return false;
	else return true;

}

// 3. wykonanie zadania

function process(&$form,&$infos,&$msgs,&$result){
	
	$infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	
	//konwersja parametrów na float
	$form['amount'] = floatval($form['amount']);
	$form['years'] = floatval($form['years']);
	$form['rate'] = floatval($form['rate']);
	
	//wykonanie
	$result = (($form['amount'] * (($form['rate']/100)*$form['years'])) + $form['amount']) / ($form['years']*12);
	
}

//definicja zmiennych kontrolera
$form = null;
$infos = array();
$messages = array();
$result = null;
$hide_intro = false;

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($form);
if ( validate($form,$infos,$messages,$hide_intro) ) { // gdy brak błędów
	process($form,$infos,$messages,$result);
}

// 4. Przygotowanie danych dla szablonu

$smarty = new Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
$smarty->assign('page_title','Kalkulator kredytowy');
$smarty->assign('page_description','Profesjonalne szablonowanie oparte na bibliotece Smarty');
$smarty->assign('page_header','Szablonowanie Smarty');

$smarty->assign('hide_intro',$hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('form',$form);
$smarty->assign('result',$result);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc.tpl');