
<html>
  <title>Murtaza MySQL</title>
  <body>

  <?php

  require_once 'config3.php';

  $sql = "SELECT * FROM rack";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();


  $sql1 = "SELECT * FROM energychain";
  $stmt1 = $pdo->prepare($sql1);
  $stmt1->execute();


  $sql2 = "SELECT * FROM item";
  $stmt2 = $pdo->prepare($sql2);
  $stmt2->execute();


  $sql3 = "SELECT * FROM cable";
  $stmt3 = $pdo->prepare($sql3);
  $stmt3->execute();


  $sql4 = "SELECT * FROM rack where rackid=1";
  $stmt4 = $pdo->prepare($sql4);
  $stmt4->execute();

  ?>
  <h1> Fetch and Display the Tables</h1>
  <table border = '1' align = 'center'> <caption>Racks Database</caption>
    <tr>
      <th>Rack Id</th>
      <th>Name</th>
      <th>Height (cm)</th>
      <th>Width (cm)</th>
      <th>Units</th>
    </tr>

  <?php
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      echo '<tr>';
      echo '<td>' . $row['rackid'] . '</td>';
      echo '<td>' . $row['rname'] . '</td>';
      echo '<td>' . $row['height'] . '</td>';
      echo '<td>' . $row['width'] . '</td>';
      echo '<td>' . $row['units'] . '</td>';

      echo '</tr>';
  }
  ?>
  </table>


  <table border = '1' align = 'center'> <caption>Energy Chaining Database</caption>
    <tr>
      <th>Chaining Id</th>
      <th>Name</th>
    </tr>

  <?php
  while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
      echo '<tr>';
      echo '<td>' . $row['chainid'] . '</td>';
      echo '<td>' . $row['cname'] . '</td>';
      echo '</tr>';
  }
  ?>
  </table>



  <table border = '1' align = 'center'> <caption>Items Database</caption>
    <tr>
      <th>Item Id</th>
      <th>Name</th>
      <th>Rech Id</th>
      <th>HUL</th>
      <th>HUN</th>
      <th>chaining</th>

    </tr>

  <?php
  while ($row = $stmt2->fetch(PDO::FETCH_ASSOC)) {
      echo '<tr>';
      echo '<td>' . $row['itemid'] . '</td>';
      echo '<td>' . $row['iname'] . '</td>';
      echo '<td>' . $row['rackid'] . '</td>';
      echo '<td>' . $row['HUL'] . '</td>';
      echo '<td>' . $row['HUN'] . '</td>';
      echo '<td>' . $row['chaining'] . '</td>';

      echo '</tr>';
  }
  ?>
  </table>



  <table border = '1' align = 'center'> <caption>Cables Database</caption>
    <tr>
      <th>Cable Id</th>
      <th>Name</th>
      <th>Code</th>
      <th>Specs</th>
      <th>Source</th>
      <th>Dest.</th>
      <th>s.id</th>      
      <th>p.id</th>
      <th>s.port</th>
      <th>d.port</th>
      <th>s.unit</th>
      <th>p.unit</th>
      <th>adjustment</th>
      <th>length</th>
    </tr>

  <?php
  while ($row = $stmt3->fetch(PDO::FETCH_ASSOC)) {
      echo '<tr>';
      echo '<td>' . $row['cableid'] . '</td>';
      echo '<td>' . $row['cname'] . '</td>';
      echo '<td>' . $row['code'] . '</td>';
      echo '<td>' . $row['specs'] . '</td>';
      echo '<td>' . $row['source'] . '</td>';
      echo '<td>' . $row['destination'] . '</td>';
	echo '<td>' . $row['sid'] . '</td>';
	echo '<td>' . $row['did'] . '</td>';
	echo '<td>' . $row['sport'] . '</td>';
	echo '<td>' . $row['dport'] . '</td>';
	echo '<td>' . $row['sunit'] . '</td>';
	echo '<td>' . $row['dunit'] . '</td>';
	echo '<td>' . $row['adjustment'] . '</td>';
	echo '<td>' . $row['length'] . '</td>';


      echo '</tr>';
  }
  ?>
  </table>

  <h1> Fetch and Display the Tables with Where Clause</h1>
  <h2> Racks Tables</h2>
  <table border = '1' align = 'left'> <caption>Racks Database</caption>
    <tr>
      <th>Rack Id</th>
      <th>Name</th>
      <th>Height (cm)</th>
      <th>Width (cm)</th>
      <th>Units</th>
    </tr>

  <?php
  while ($row = $stmt4->fetch(PDO::FETCH_ASSOC)) {
      echo '<tr>';
      echo '<td>' . $row['rackid'] . '</td>';
      echo '<td>' . $row['rname'] . '</td>';
      echo '<td>' . $row['height'] . '</td>';
      echo '<td>' . $row['width'] . '</td>';
      echo '<td>' . $row['units'] . '</td>';

      echo '</tr>';
  }
  ?>
  </table>







  </body>
</html>
