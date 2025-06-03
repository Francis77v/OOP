<?php
require_once 'conn.php';
require_once 'User.php';

$db = new dbConnect();
$conn = $db->connect();

function data ($conn, $name, $age){
    $create = (new User($conn, $name, $age))->addUser();
}

function view ($conn){
    
}

data($conn, 'a', 2);


?>

<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
  </tr>

</table>