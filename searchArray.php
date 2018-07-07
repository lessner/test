<?php
/*
$rangeArray[] = array(
    array( 'min' => 0.00, 'max' => 16046.43,  'val' => 0),
    array( 'min' => 16046.43, 'max' => 19385.22,  'val' => 15),
    array( 'min' => 19385.22, 'max' => 45081.90,  'val' => 20),
    array( 'min' => 45081.90, 'max' => 9999999.99,  'val' => 25)
    );

$input = 16000.00;
$precision = 0.00001;

$data = array_values($rangeArray);

foreach($rangeArray as $current)
{
  if( ($input - $current['min']) > $precision and ($input - $current['max']) <= $precision )
    {
      echo $current['val'];
      break;
    }
}*/
// Multidimensional array
$superheroes = array(
    "spider-man" => array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    "super-man" => array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    "iron-man" => array(
        "name" => "Harry Potter",
        "email" => "harrypotter@mail.com",
    )
);
 
// Printing all the keys and values one by one
$keys = array_keys($superheroes);
for($i = 0; $i < count($superheroes); $i++) {
    echo $keys[$i] . "{<br>";
    foreach($superheroes[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "}<br>";
}