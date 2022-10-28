<?php



// =============
// FIRST CONNECTION
// =============




session_start();

// variables 

$host       =  "localhost";
$user       =  "root";
$password   =  "dankibwika18072001";
$dbname     =  "logos_rhema";


// create connection or connector string 

$conn = mysqli_connect($host,$user,$password,$dbname);


//check the connection 

 
if(!$conn){

die("Connection failed: ".mysqli_connect_error());

}


// =============
// SECOND CONNECTION
// =============

// $host       =  "localhost";
// $user       =  "root";
// $password   =  "dankibwika18072001";
// $dbname     =  "instateneous_worship";


// // ---------------------------------
// // //CREATE CONNECTION HERE 
// // --------------------------------


// $conn = mysqli_connect($host, $user, $password, $dbname);


// // ---------------------------------
// // //CHECK CONNECTION HERE 
// // --------------------------------


// if(!$conn){

// die("Connection failed: ".mysqli_connect_error());

// }


?>