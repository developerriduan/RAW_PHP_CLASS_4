<?php
// Exp : 1;-----------------------------
$outNumber = 100;

function getNumbers (){

    global $outNumber;
}

echo $outNumber;


// Exp: 2;-----------------------------

$number = 123; 
function numberCount (){
    $num = 100;
    
    return $num;
}
echo numberCount();

// Exp : 3;-----------------------------

function mobileRecharge($Proviou_Money){
        static $recharege  = 49;
        $recharege += $Proviou_Money;
        echo $recharege.'</br>';
    
}
mobileRecharge(500);
mobileRecharge(50);
mobileRecharge(21);

// Exp : 4;-----------------------------

$mobile = [
    'Brand' => 'mi',
    'model' => 'note 8',
    'color' => 'green',
    'number'=> '124356',

];

echo "<pre>";
$mobile ['color'] = 'red';
$mobile ['model'] = 'poco m3';

print_r($mobile);
echo "</pre>";


// Exp : 5;-----------------------------

$loptop = [
    'Brand' => [
        'Dell' => 'dsk235',
        'hp' => [
            'batteryhealht' => '90%',
            'price' => '40000',
        ],
    ],
    'model' => 'des546e',
    'color' => 'silver',
];

print_r($loptop['Brand']['hp']['batteryhealht']);

// Exp : 6;-----------------------------

$name = 'RIDUAN ';

echo strtolower($name)."</br>";

// Exp : 7;-----------------------------

$names = "riduan";

echo strtoupper($names)."</br>";

// Exp : 8;-----------------------------

$name = 'riduan hossen.';

printf("my name is : %s" ,ucwords($name))."</br>";

// Exp : 9;-----------------------------

$reverse = "Satkaina";

echo strtoupper(strrev($reverse));

// Exp : 10;-----------------------------
 $reverse = "Satkaina";

echo str_shuffle(strrev($reverse));


// Exp : 11;-----------------------------

$reverseWord = 'Riduan';

echo str_shuffle(strrev($reverseWord))."</br>";

function wordReverse ($reverses){
    global $reverseWord;
    if($reverseWord == $reverses){
        echo "winn";
    }else{
        echo "Sorry";
    }
}
wordReverse('Riduan');

// Exp : 12;-----------------------------

$check_word = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Placeat omnis expedita magnam
 deleniti eaque impedit voluptatem aut laboriosam esse blanditiis.';

 if(strpos($check_word , 'sit') && strpos($check_word,'aut')){
    echo 'yes';
 }else{
    echo "no";
 }

// Exp: 13;------------------------------

$word_wrapper = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.
 Ab tenetur illo fuga nobis quisquam aspernatur excepturi
  iusto totam dolorem dolores dolore sed quasi, doloremque
   ipsum numquam laboriosam officia corrupti harum.';

   echo substr($word_wrapper,0,100)."...";

// Exp: 14;------------------------------

$mark_fail = [
   '29',
   '30',
   '31',
];

$good_mark = [
   '50',
   '45',
   '70',
];
$replace_word = 'amar english mark 30 . amar bangla mark 29';

echo str_ireplace($mark_fail,$good_mark,$replace_word);

// Exp: 15;------------------------------

$cont_word = " My Name is Riduan "."Hossen";

echo "without trim :" . $cont_word."</br>";
echo " with trim : " .rtrim ($cont_word)."</br>";

// Exp: 16;------------------------------
