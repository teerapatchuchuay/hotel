<?php 
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'hotel';

$db =  new mysqli($server,$username,$password,$dbname);

if($db->connect_error){
    die("connent error");
}


function alertloginsuccess() { 
    echo "<script>alert('เข้าสู่ระบบสำเร็จ');</script>"; 
} 
?>