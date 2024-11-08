<?php
//Exo 13
// $country = [
// 'France' =>'Paris',
// 'Allemagne' => 'Berlin',
// 'Italie' => 'Rome'
// ];

// foreach ($country as $key => $value) {
//     echo 'Le pays est ' . $key . ' et sa apitale est ' . $value.PHP_EOL;
// }

//////////////////////////////////////////////////////////////////////////////////////////////
//Exo 14
// $tab = [];

// for ($i=0; $i < 10; $i++) {
// $number = rand(1, 100);
// $tab [] = $number;

// };
// if (in_array(42, $tab)) {
//     echo 'Le chiffre 42 est dans le tableau';
// }

// else {
//     echo 'Le chiffre 42 n\'est pas dans le tableau '; 
// }


// var_dump($tab);

/////////////////////////////////////////////////////////////////////////////////////////////////

// Exo 15
// $tab = [];
// $tab1 = [];
// $tab2 = [];
// for ($i=0; $i < 10; $i++) {
// $number = rand(1,100);
// $tab [] = $number;
// }
// foreach ($tab as $value) {
//     if ($value < 50) {
// $tab1 [] = $value;
//     }
//     else {
//         $tab2 [] = $value;
//     }
// }

// var_dump($tab1);
// var_dump($tab2);

////////////////////////////////////////////////////////////////////////////////////////////////////
//Exo 16

// $pays_population = array(
//     'France' => 67595000,
//     'Suede' => 9998000,
//     'Suisse' => 8417000,
//     'Kosovo' => 1820631,
//     'Malte' => 434403,
//     'Mexique' => 122273500,
//     'Allemagne' => 82800000,
//  );
//  $tabSup = [];

//  foreach ($pays_population as $key => $value) {
//     if ($value > 20000000) {

//         echo 'Les pays ayant une population supérieure à 20M sont ' . $key . ' avec une population de ' . $value . ' d\'habitants' . PHP_EOL; 
//     }
//  }

 //////////////////////////////////////////////////////////////////////////////////////////
 //Exo 17

//  $pays_population = array(
//     'France' => 67595000,
//     'Suede' => 9998000,
//     'Suisse' => 8417000,
//     'Kosovo' => 1820631,
//     'Malte' => 434403,
//     'Mexique' => 122273500,
//     'Allemagne' => 82800000,
//  );
// foreach ($pays_population as $key => $value) {
//     $total += $value;
//     echo 'Le totale des habitants est de ' . $total;
// }
///////////////////////////////////////////////////////////////////////////////////////////
//Exo 18

$cocktails = array('Mojito', 'Long Island Iced Tea', 'Gin Fizz', 'Moscow mule');

echo $cocktails[1];