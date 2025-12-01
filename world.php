<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
//$stmt = $conn->query("SELECT * FROM countries");

$country = $_GET['country'] ?? "";
//$lookup = $_GET[]
//$stmt = $conn->prepare("SELECT * FROM countries WHERE name LIKE :country");
$stmt = $conn->prepare("SELECT name, continent, independence_year, head_of_state FROM countries WHERE name LIKE :country");
$stmt->execute([":country" => "%$country%"]);



$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<table>
  <tr>
    <th> Name </th>
    <th> Continent </th>
    <th> Independence </th>
    <th> Head of State </th>
  </tr>

  <?php foreach ($results as $row): ?>
    <tr>
      <td><?= $row['name']; ?> </td>
      <td><?= $row['continent']; ?></td>
      <td><?=$row['independence_year']; ?></td>
      <td><?=$row['head_of_state']; ?></td>
    </tr>
  <?php endforeach; ?>
</table>