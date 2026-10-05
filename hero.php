<?php

$namaHeroML = "Zhask";
$level = 3;

//if($level < 4) {
 //   echo $namaHeroML." belum memiliki ulti";
//} else if($level >= 4){
    echo $namaHeroML." sudah memiliki ulti";
//} else {
   // echo $namaHeroML." tidak ada dalam permainan";
//}
//switch ($level) {
  //  case 2:
  //      echo $namaHeroML." belum memiliki ulti, hanya sk";
   //     break;

   // case 3:
  //      echo $namaHeroML." belum memiliki ulti, hanya sk";
  //      break;

  //  case 4:
  //      echo $namaHeroML." sudah memiliki ulti";
  //
   // default:
   //     echo $namaHeroML." tidak ada dalam permainan";
   //     break;
//}
// variable = (kondisi) ? true : false;
$skill = $level < 4 ? $namaHeroML." belum memiliki ulti" : $namaHeroML." sudah memiliki ulti";
echo $skill;
