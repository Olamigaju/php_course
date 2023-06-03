<?php

// $a= array(1,3,4);

// var_dump($a);

// for ($x = 0; $x <10; $x++){
//     echo "x is $x, ";
// }
// // echo $a;

$people = [
    ["name" => "Adedoyin", "age" => 12],
    ["name" => "Ade", "age" => 25],
    ["name" => "Oyin", "age" => 10],
    ["name" => "doyin", "age" => 32],
    ["name" => "Olawuyi", "age" => 18],
    ["name" => "Daniel", "age" => 26],
    ["name" => "Timi", "age" => 5],
    ["name" => "Quwiyu", "age" => 27],
    ["name" => "Dan", "age" => 8],
    ["name" => "Tom", "age" => 10],

];

$adultAlicant =0;
$childrenApplicant=0;
$qualifyApplicant = [];


foreach ($people as $person) {
    $age = $person["age"];
    if($age >= 18){
        $adultAlicant++;
        if($age >=18 && $age <= 32){
            $qualifyApplicant[] = $age;    
        }
    }else{
        $childrenApplicant ++;
    }
   
}
echo "there are adult $adultAlicant in the community \n"; 

echo "there are children $childrenApplicant in the community \n";

echo "there are children in the community" .PHP_EOL;
print_r($qualifyApplicant);


