<?php

//include functions
include_once 'functions.php';
$snapFunctions = new snapFunctions;

//Build a shuffled deck of cards
$deck = $snapFunctions->buildDeck();

//Shuffle deck
shuffle($deck);

//create array of cards for each player
$handsArray = array();
for($i = 1; $i <= $players; $i++){
  //array of cards for each player
  $playerHandArray = array();
  //Add players hand to array of all hands
  $handsArray[] = $playerHandArray;
}

//Now we have an array for each player inside our hands array, lets deal the cards
for($i = 0; $i < 26; $i++){
  $handsArray[0][] = array_shift($deck);
  $handsArray[1][] = array_shift($deck);
}

//Use get winner function to return the winner
echo $snapFunctions->getWinner($handsArray);

?>