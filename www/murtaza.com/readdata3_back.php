
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


  $sql4 = "select r.rackid, rname , height , width , units, cname ,  iname, HUL, HUN from rack r join item i on r.rackid=i.rackid join energychain e on i.chaining=e.chainid";# where itemid=1";
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
  <br>
  <h1> Fetch and Display the Tables with Where Clause</h1>
  <h2> Rack Table Select</h2>
  <table border = '1' align = 'left'> <caption>Racks Database</caption>
    <tr>
      <th>RackID</th>
      <th>RName</th>
      <th>Height (cm)</th>
      <th>Width (cm)</th>
      <th>Units</th>
      <th>CName</th>
      <th>IName</th>
      <th>HUL</th>
      <th>HUN</th>

    </tr>

  <?php
  while ($row = $stmt4->fetch(PDO::FETCH_ASSOC)) {
	  echo '<tr>';
	  echo '<td>' . $row['rackid'] . '</td>';
      echo '<td>' . $row['rname'] . '</td>';
      echo '<td>' . $row['height'] . '</td>';
      echo '<td>' . $row['width'] . '</td>';
      echo '<td>' . $row['units'] . '</td>';
      echo '<td>' . $row['cname'] . '</td>';
      echo '<td>' . $row['iname'] . '</td>';
      echo '<td>' . $row['HUL'] . '</td>';
      echo '<td>' . $row['HUN'] . '</td>';

      echo '</tr>';
  }
  ?>
  </table>
</br> 
</br>
</br>
</br>
</br>
</br>
</br>
</br>

<h2> Read in Arrays</h2>
</br>
</br>
</br>
</br>

<?php

  echo "\r\n";

  require_once 'config3.php';
  print("TouchScreen-PC");
  $sql5 = "select r.rackid, rname , height , width , units, cname ,  iname, HUL, HUN from rack r join item i on r.rackid=i.rackid join energychain e on i.chaining=e.chainid where itemid=1";
  $stmt5 = $pdo->prepare($sql5);
  $stmt5->execute();

  $sql6 = "select r.rackid, rname , height , width , units, cname ,  iname, HUL, HUN from rack r join item i on r.rackid=i.rackid join energychain e on i.chaining=e.chainid where itemid=2";
  $stmt6 = $pdo->prepare($sql6);
  $stmt6->execute();

  $sql7 = "select r.rackid, rname , height , width , units, cname ,  iname, HUL, HUN from rack r join item i on r.rackid=i.rackid join energychain e on i.chaining=e.chainid where itemid=3";
  $stmt7 = $pdo->prepare($sql7);
  $stmt7->execute();

  $sql8 = "select r.rackid, rname , height , width , units, cname ,  iname, HUL, HUN from rack r join item i on r.rackid=i.rackid join energychain e on i.chaining=e.chainid where itemid=4";
  $stmt8 = $pdo->prepare($sql8);
  $stmt8->execute();

 
  print("<h2>Example: Source-Destination 1:</h2>");
  echo "<br>";

  $s1 = $stmt5->fetch(PDO::FETCH_ASSOC);
  echo "<h3>Cable Source:1 </h3>";
  echo "<br>";
  print_r($s1);
  echo "<br>";
  if ($s1['cname']=='direct')
	  $s1Adj = $s1['width'];
  else
	  $s1Adj = $s1['width']*2;

  $d1 = $stmt6->fetch(PDO::FETCH_ASSOC);
  if ($d1['cname']=='direct')
          $d1Adj = $d1['width'];
  else
	  $d1Adj = $d1['width']*2;


  print_r("<h3>Cable Destination:1</h3>");
  echo "<br>";
  print_r($d1);
  echo "<br>";

  if ($s1['rackid']==$d1['rackid'])
  {
          $spc1 = 0;

  	print_r("Length: ");
  	$a = $s1['HUL']-($d1['HUL']+$d1['HUN']-1);
  	$b = ($s1['HUN']+$d1['HUN'])/2;
  	$c = $s1['height']/$s1['units'];
  	$l = ($a+$b)*$c+$s1Adj+$d1Adj+$spc1;
  	print($l);
  	echo "<br>";
  }
  else
  {
   	  $spc1 = 30;
	
        print_r("Length: ");
   	$a = $s1['HUL']+$s1['HUN']/2;
        $b = $d1['HUL']+$d1['HUN']/2;
        $c = $s1['height']/$s1['units'];
        $l = ($a+$b)*$c+$s1Adj+$d1Adj+$spc1;
        print($l);
        echo "<br>";
  }

  print("<h2>Example: Source-Destination 2:</h2>");
  echo "<br>";

  $s2 = $stmt8->fetch(PDO::FETCH_ASSOC);
  if ($s2['cname']=='direct')
          $s2Adj = $s2['width'];
  else
          $s2Adj = $s2['width']*2;

  print_r("<h3>Cable Source:2</h3>");
  echo "<br>";
  print_r($s2);
  echo "<br>";


  $d2 = $stmt7->fetch(PDO::FETCH_ASSOC);
  if ($d2['cname']=='direct')
          $d2Adj = $d2['width'];
  else
          $d2Adj = $d2['width']*2;


  print_r("<h3>Cable Destination:2</h3>");
  echo "<br>";
  print_r($d2);
  echo "<br>";

  if ($s2['rackid']==$d2['rackid'])
  {
          $spc2 = 0;

        print_r("Length: ");
        $a = $s2['HUL']-($d2['HUL']+$d2['HUN']-1);
        $b = ($s2['HUN']+$d2['HUN'])/2;
        $c = $s2['height']/$s2['units'];
        $l = ($a+$b)*$c+$s2Adj+$d2Adj+$spc2;
        print($l);
        echo "<br>";
  }
  else
  {
          $spc2 = 30;

        print_r("Length: ");
        $a = $s2['HUL']+$s2['HUN']/2;
        $b = $d2['HUL']+$d2['HUN']/2;
        $c = $s2['height']/$s2['units'];
        $l = ($a+$b)*$c+$s2Adj+$d2Adj+$spc2;
        print($l);
	echo "<br>";
	print($a);
        echo "<br>";

print($b);
        echo "<br>";

print($c);
        echo "<br>";


  }

  

  ?>





  </body>
</html>
