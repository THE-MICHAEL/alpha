<?php
require('db.class.php');

$db=new db('localhost','root',''/*password*/,'prototype_fb'/*database*/);

$db->Query("Select * from user");
$data=$db->Get();
echo $data[0][''];
echo "<pre>";
print_r($data);
?>