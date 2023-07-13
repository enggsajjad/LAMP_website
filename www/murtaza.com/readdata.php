
<html>
  <title>Using BLOB and MySQL</title>
  <body>

  <?php

  require_once 'config2.php';

  $sql = "SELECT * FROM employees";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  ?>

  <table border = '1' align = 'center'> <caption>Products Database</caption>
    <tr>
      <th>Emp Id</th>
      <th>Name</th>
      <th>Address</th>
      <th>Desig.</th>
	  <th>Phone</th>
	  <th>Email</th>
	  <th>Salary</th>
    </tr>

  <?php
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '<tr>';
      echo '<td>' . $row['id'] . '</td>';
      echo '<td>' . $row['name'] . '</td>';
      echo '<td>' . $row['address'] . '</td>';

      echo '<td>' . $row['designation'] . '</td>';
	  echo '<td>' . $row['phone'] . '</td>';
	  echo '<td>' . $row['email'] . '</td>';
	  echo '<td>' . $row['salary'] . '</td>';
      echo '</tr>';
  }
  ?>

  </table>
  </body>
</html>
