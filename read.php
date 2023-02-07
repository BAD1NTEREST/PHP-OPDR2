<?php

try {
    $conn = new PDO("mysql:host=maakzelfjepizza.com;dbname=crud-php-pdo-opdracht02", "user", "password");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if ($_POST) {
        $bodemformaat = $_POST['bodemformaat'];
        $saus = $_POST['saus'];
        $pizzatoppings = $_POST['pizzatoppings'];
        $kruiden = implode(", ", $_POST['kruiden']);

        $query = "INSERT INTO pizza (bodemformaat, saus, pizzatoppings, kruiden)
        VALUES (:bodemformaat, :saus, :pizzatoppings, :kruiden)";
        
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':bodemformaat', $bodemformaat);
        $stmt->bindParam(':saus', $saus);
        $stmt->bindParam(':pizzatoppings', $pizzatoppings);
        $stmt->bindParam(':kruiden', $kruiden);
        $stmt->execute();
    }

} catch (PDOException $e) {
    echo "Failed: " . $e->getMessage();
}

?>

<?php

try {
  $conn = new PDO("mysql:host=maakzelfjepizza.com;dbname=crud-php-pdo-opdracht02", "username", "password");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $stmt = $conn->prepare("SELECT * FROM pizza");
  $stmt->execute();
  
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  foreach($result as $row) {
    echo $row['bodemformaat'] . " " . $row['saus'] . " " . $row['pizzatoppings'] . " " . $row['kruiden'] . "<br>";
  }
  
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null;

?>
<?php

try {
  $conn = new PDO("mysql:host=maakzelfjepizza.com;dbname=crud-php-pdo-opdracht02", "username", "password");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
  $stmt = $conn->prepare("UPDATE pizza SET bodemformaat=:bodemformaat, saus=:saus, pizzatoppings=:pizzatoppings, kruiden=:kruiden WHERE id=:id");
  
  $stmt->bindParam(':bodemformaat', $bodemformaat);
  $stmt->bindParam(':saus', $saus);
  $stmt->bindParam(':pizzatoppings', $pizzatoppings);
  $stmt->bindParam(':kruiden', $kruiden);
  $stmt->bindParam(':id', $id);
  
  $bodemformaat = '30';
  $saus = 'extra tomatensaus';
  $pizzatoppings = 'vlees';
  $kruiden = 'peterselie, oregano';
  $id = 1;
  
  $stmt->execute();
  
  echo "Record updated successfully";
  
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null;

?>
<?php
try {
  $pdo = new PDO("mysql:host=maakzelfjepizza.com;dbname=crud-php-pdo-opdracht02", "username", "password");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare statement
  $stmt = $pdo->prepare("UPDATE pizza SET bodemformaat=:bodemformaat, saus=:saus, pizzatoppings=:pizzatoppings, kruiden=:kruiden WHERE id=:id");

  // bind parameters
  $stmt->bindParam(':bodemformaat', $bodemformaat);
  $stmt->bindParam(':saus', $saus);
  $stmt->bindParam(':pizzatoppings', $pizzatoppings);
  $stmt->bindParam(':kruiden', $kruiden);
  $stmt->bindParam(':id', $id);

  // execute the update statement
  $bodemformaat = "25";
  $saus = "bbq saus";
  $pizzatoppings = "vegetarisch";
  $kruiden = "peterselie, oregano";
  $id = "1";
  $stmt->execute();

  echo "Record updated successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$pdo = null;
?>
<?php
try {
  $pdo = new PDO("mysql:host=maakzelfjepizza.com;dbname=crud-php-pdo-opdracht02", "username", "password");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare statement
  $stmt = $pdo->prepare("DELETE FROM pizza WHERE id=:id");

  // bind parameter
  $stmt->bindParam(':id', $id);

  // execute the delete statement
  $id = "1";
  $stmt->execute();

  echo "Record deleted successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$pdo = null;
?>
