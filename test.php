<?php
require_once 'conn.php';
require_once 'User.php';

$db = new dbConnect();
$conn = $db->connect();

function data ($conn, $name, $age){
    $create = (new User($conn, $name, $age))->addUser();
    return $create;
}

function view ($conn){
    $fetch = new User($conn);
    $data = $fetch->viewUser();
    return $data;
}

function update ($conn, $name, $age){
    
}

data($conn, 'b', 4);

$fetch = view($conn);

require_once 'header.php';
?>

<table>
  <tr>
    <th>Name</th>
    <th>Age</th>
  </tr>
  <?php foreach ($fetch as $data): ?>
  <tr>
    <td><?= htmlspecialchars($data['name']) ?></td>
    <td><?= htmlspecialchars($data['age']) ?></td>
  </tr>
  <?php endforeach ?>
</table>
</body>
</html>
