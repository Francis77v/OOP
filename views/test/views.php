<?php


use Flore\Oop\App\conn;
use Flore\Oop\App\Model\User;

$db = new conn();
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

data($conn, 'be', 5);

$fetch = view($conn);
// var_dump($fetch);

echo $_SERVER['REQUEST_URI'];
require_once 'header.php';
?>

<table>
  <tr>
    <th>NO.</th>
    <th>Name</th>
    <th>Age</th>
  </tr>
  <?php if (!empty($fetch)): ?>
    <?php $i = 1; foreach ($fetch as $data): 
      
      ?>
      <tr>
        <td><?= $i++; ?></td>
        <td hidden><?= htmlspecialchars($data['user_id']) ?></td>
        <td><?= htmlspecialchars($data['name']) ?></td>
        <td><?= htmlspecialchars($data['age']) ?></td>
    <!--display the id of the record and store it in get super global and the ndisplay the id in the href liink. -->
        <td><a href="update.php/id=">patch</a></td>
      </tr>
    <?php endforeach; ?>
  <?php else: ?>
    <tr>
      <td colspan="3">No Data Found</td>
    </tr>
  <?php endif; ?>
</table>

</body>
</html>

