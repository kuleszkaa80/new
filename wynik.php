<?php

$o1 = $_POST['o1'];
$o2 = $_POST['o2'];
$o3 = $_POST['o3'];
$o4 = $_POST['o4'];


$wynik = 0;


$conn = mysqli_connect('localhost', 'root', '' , 'testowa');
$zap = mysqli_query($conn, "SELECT * from odpowiedzi WHERE id=1");

$row = mysqli_fetch_array($zap);



if($o1 == $row[2]){
    $wynik++;
}
if($o2 == $row[3]){
    $wynik++;
}
if($o3 == $row[4]){
    $wynik++;
}
if($o4 == $row[5]){
    $wynik++;
}
else{
    
}


echo $wynik;
?>