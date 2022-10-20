<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// 1. pobranie parametrów

$amount = $_REQUEST ['amount'];
$years = $_REQUEST ['years'];
$rate = $_REQUEST ['rate'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($amount) && isset($years) && isset($rate))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
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
if (empty( $messages )) {
	
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

}

// 3. wykonanie zadania

if (empty ( $messages )) { // gdy brak błędów
	
	//konwersja parametrów na int oraz float
	$amount = intval($amount);
	$years = intval($years);
	$rate = floatval($rate);
	
	//wykonanie 
	$result = (($amount * (($rate/100)*$years)) + $amount) / ($years*12);
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$amount,$years,$rate,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';