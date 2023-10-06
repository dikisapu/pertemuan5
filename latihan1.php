<?php
// didalam array mampu menampung element berbeda baik string bolean number dan varibel

$hari=["senin","selasa","rabu","kamis","juma't","sabtu"];
$hari2=["senin","selasa","rabu","kamis","juma't","sabtu"];
// var_dump($hari);
// echo "<br>";
// print_r($hari2);
// echo "<br>";
print_r($hari2);
echo $hari2[3];  
$hari2[] = "kamis";
print_r($hari2)  

?>