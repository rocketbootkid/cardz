<?php

dealCards(5);

function dealCards($number) {
	
	$deck = shuffleDeck();
	
	for ($c = 0; $c < $number; $c++) {
		echo displayCard($deck[$c]);
	}
	
}

function displayCard($card) {
	
	$arrCards = cardPositions();
	#echo count($arrCards);
	
	$text = "<div style='display: inline-block; background-image: url(cards.png); background-position: " . $arrCards[$card]['x'] . "% " . $arrCards[$card]['y'] . "%; width: 71px; height: 98px;'></div>";
	
	return $text;
	
}

function shuffleDeck() {
	
	$arrDeck = deck();
	shuffle($arrDeck);
	return $arrDeck;
	
}

function cardPositions() {
	
	$arrCards = array(
			'1c' => array('x' => 0.1, 'y' => 0),
			'2c' => array('x' => 8.4, 'y' => 0),
			'3c' => array('x' => 16.7, 'y' => 0),
			'4c' => array('x' => 25.0, 'y' => 0),
			'5c' => array('x' => 33.3, 'y' => 0),
			'6c' => array('x' => 41.6, 'y' => 0),
			'7c' => array('x' => 49.9, 'y' => 0),
			'8c' => array('x' => 58.2, 'y' => 0),
			'9c' => array('x' => 66.5, 'y' => 0),
			'10c' => array('x' => 74.9, 'y' => 0),
			'11c' => array('x' => 83.2, 'y' => 0),
			'12c' => array('x' => 91.5, 'y' => 0),
			'13c' => array('x' => 99.8, 'y' => 0),
			'1s' => array('x' => 0.1, 'y' => 33),
			'2s' => array('x' => 8.4, 'y' => 33),
			'3s' => array('x' => 16.7, 'y' => 33),
			'4s' => array('x' => 25.0, 'y' => 33),
			'5s' => array('x' => 33.3, 'y' => 33),
			'6s' => array('x' => 41.6, 'y' => 33),
			'7s' => array('x' => 49.9, 'y' => 33),
			'8s' => array('x' => 58.2, 'y' => 33),
			'9s' => array('x' => 66.5, 'y' => 33),
			'10s' => array('x' => 74.9, 'y' => 33),
			'11s' => array('x' => 83.2, 'y' => 33),
			'12s' => array('x' => 91.5, 'y' => 33),
			'13s' => array('x' => 99.8, 'y' => 33),			
			'1h' => array('x' => 0.1, 'y' => 67),
			'2h' => array('x' => 8.4, 'y' => 67),
			'3h' => array('x' => 16.7, 'y' => 67),
			'4h' => array('x' => 25.0, 'y' => 67),
			'5h' => array('x' => 33.3, 'y' => 67),
			'6h' => array('x' => 41.6, 'y' => 67),
			'7h' => array('x' => 49.9, 'y' => 67),
			'8h' => array('x' => 58.2, 'y' => 67),
			'9h' => array('x' => 66.5, 'y' => 67),
			'10h' => array('x' => 74.9, 'y' => 67),
			'11h' => array('x' => 83.2, 'y' => 67),
			'12h' => array('x' => 91.5, 'y' => 67),
			'13h' => array('x' => 99.8, 'y' => 67),	
			'1d' => array('x' => 0.1, 'y' => 100),
			'2d' => array('x' => 8.4, 'y' => 100),
			'3d' => array('x' => 16.7, 'y' => 100),
			'4d' => array('x' => 25.0, 'y' => 100),
			'5d' => array('x' => 33.3, 'y' => 100),
			'6d' => array('x' => 41.6, 'y' => 100),
			'7d' => array('x' => 49.9, 'y' => 100),
			'8d' => array('x' => 58.2, 'y' => 100),
			'9d' => array('x' => 66.5, 'y' => 100),
			'10d' => array('x' => 74.9, 'y' => 100),
			'11d' => array('x' => 83.2, 'y' => 100),
			'12d' => array('x' => 91.5, 'y' => 100),
			'13d' => array('x' => 99.8, 'y' => 100)
			);

	return $arrCards;
	
}

function deck() {

	$arrCards = array('1c',	'2c','3c','4c','5c','6c','7c','8c','9c','10c','11c','12c','13c','1s','2s','3s','4s','5s','6s','7s','8s','9s','10s','11s','12s','13s','1h','2h','3h','4h','5h','6h','7h','8h','9h','10h','11h','12h','13h','1d','2d','3d','4d','5d','6d','7d','8d','9d','10d','11d','12d','13d');
		
	return $arrCards;
	
}


?>