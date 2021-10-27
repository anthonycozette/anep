<?php

echo "<table style='border: solid 1px black;'>";
echo "<tr style='border: solid 1px black;'>
<th style='border: solid 1px black;'>ID</th>
<th style='border: solid 1px black;'>nom_ordinateur</th>
<th style='border: solid 1px black;'>nom_utilisateur</th>
<th style='border: solid 1px black;'>prenom_utlisateur</th>
<th style='border: solid 1px black;'>ref_qualite</th>
<th style='border: solid 1px black;'>production</th>
<th style='border: solid 1px black;'>emplacement</th>
<th style='border: solid 1px black;'>services</th>
<th style='border: solid 1px black;'>adresse_ip</th>
<th style='border: solid 1px black;'>reference</th>
<th style='border: solid 1px black;'>lan_reseau</th>
<th style='border: solid 1px black;'>type_materiel</th>
<th style='border: solid 1px black;'>en_service</th>
<th style='border: solid 1px black;'>numero_serie</th>
<th style='border: solid 1px black;'>systeme_exploitation</th>
<th style='border: solid 1px black;'>mac_adresse</th>
<th style='border: solid 1px black;'>date_achat</th>
<th style='border: solid 1px black;'>login_admin_local</th>
<th style='border: solid 1px black;'>pwd_admin_local</th>
<th style='border: solid 1px black;'>login_admin_boissy</th>
<th style='border: solid 1px black;'>pwd_admin_boissy</th>
<th style='border: solid 1px black;'>user_login</th>
<th style='border: solid 1px black;'>user_pwd</th>
<th style='border: solid 1px black;'>vpn</th>
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
  $stmt = $conn->prepare("SELECT * FROM information_pc");
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
