<?php
 $server = "localhost";
 $database = "jewogsax_portfolio";
 $user = "jewogsax_portfolio";
 $pwd = "giG64m5E#(n.";

 $connection = mysqli_connect($server, $user, $pwd, $database);
 if(!$connection){
     die(mysqli_connect_error());
 }
// if($connection){
//     print "success";
// }else{
//     print "fail";
// }
?>