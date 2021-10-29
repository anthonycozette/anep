<?php
echo "<div class='container'>";
echo "<table style='border: solid 1px black;'>";
echo "<tr style='border: solid 1px black;'>
<th style='border: solid 1px black;'>ID</th>
<th style='border: solid 1px black;'>nom_ordinateur</th>
<th style='border: solid 1px black;'>nom_utilisateur</th>
<th style='border: solid 1px black;'>prenom_utlisateur</th>
<th style='border: solid 1px black;'></th>
</tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

try {
  $conn = new PDO('mysql:host=localhost;dbname=test1;charset=utf8', 'root', '');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT ID, nom_ordinateur, nom_utilisateur, prenom_utlisateur FROM information_pc");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
echo "</di>";
