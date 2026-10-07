<?php
$levelMaks = 15;

//For
echo "Menggunakan For";
echo "<br />";

for ($level; $level <= $levelMaks; $level++) {
    echo "Level Hero: ".$level;
    echo "<br />";
}
//indeks dimulai dari 0
$heroMM = [
    "name" => ["Lesley", "Wanwan"],
    "type" => ["truedamage", "mobility"],
    "damage" => [3000, 2000],
];

echo $heroMM["damage"][0]; 
echo "<br />";
// Output: 3000
// var_dump($heroMM);
//indeks dimulai dari 0
//$heroMM = [
  //  "Lesley" => "truedamage",
    //"Wanwan" => "mobility",
    //"Claude" => "support",
    //"Granger" => "ranged",
//];

//echo $heroMM["Granger"]; // Output: ranged
// var_dump($heroMM);


$heroMM = [
    "name" => ["Lesley", "Wanwan"],
    "type" => ["truedamage", "mobility"],
    "damage" => [3000, 2000],
];

//Iterasi
foreach ($heroMM as $key => $value) {
    foreach ($value as $val) {
        echo $val;
        echo "<br />";
    }
    //echo $heroMM[$key][1];
    echo "<br />";
}