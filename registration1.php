<?php

//$host='127.0.0.1';
// $myusername='root';
// $password='123';
// $db_name='hid';
// $tbl_name='User';



if ($_POST['telnumber'] == null || $_POST['firstname'] == null || $_POST['lastname'] == null || $_POST['email'] = null || $_POST['pwd'] == null || $_POST['country'] == null || $_POST['repeat'] == null || $_POST['sex'] == null)
{
echo '<script type="text/javascript">alert("You missed a field");</script>';
/* echo '<a href="registration.html">Go back</a>'; */
include 'registration.html';

}
else
{
$first=$_POST['firstname'];
$last=$_POST['lastname'];
$number=$_POST['telnumber'];
$password=$_POST['pwd'];
$countryy=$_POST['country'];
$repeatpass=$_POST['repeat'];
$gender=$_POST['sex'];
$emailaddresss=$_POST['emaill'];
$innoevent=$_POST['inopsubject'];

mysql_connect('127.0.0.1', 'root', '')or die('cannot connect');
mysql_select_db('innoevent');


$sql="INSERT INTO accountinfo
(
accountid, 
firstname, 
lastname, 
country,
password,
repeatpassword,
gender,
telephonenumber,
emailaddresss,
innoeventsubject
)

VALUES('', '$first', '$last', '$countryy', '$password', '$repeatpass', '$gender', '$number', '$emailaddresss', '$innoevent')";

$result=mysql_query($sql);

header('location:registeraccess.php');

session_start();
$_SESSION['lastname'] = $_POST['lastname'];
}
?>
