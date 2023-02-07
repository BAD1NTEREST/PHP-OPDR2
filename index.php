<!DOCTYPE html>
<html>
<head>
  <title>Pizza Bestelformulier</title>
</head>
<body>
  <h1>Pizza Bestelformulier</h1>
  <form action="submit_order.php" method="post">
    <p>
      <label for="bodemformaat">Bodemformaat:</label>
      <select name="bodemformaat" id="bodemformaat">
        <option value="20">20 cm</option>
        <option value="25">25 cm</option>
        <option value="30">30 cm</option>
        <option value="35">35 cm</option>
        <option value="40">40 cm</option>
      </select>
    </p>
    <p>
      <label for="saus">Saus:</label>
      <select name="saus" id="saus">
        <option value="tomatensaus">Tomatensaus</option>
        <option value="extra tomatensaus">Extra Tomatensaus</option>
        <option value="spicy tomatensaus">Spicy Tomatensaus</option>
        <option value="bbq saus">BBQ Saus</option>
        <option value="crème fraîche">Crème Fraîche</option>
      </select>
    </p>
    <p>
      <label>Pizzatoppings:</label><br>
      <input type="radio" name="pizzatoppings" value="vegan">Vegan<br>
      <input type="radio" name="pizzatoppings" value="vegetarisch">Vegetarisch<br>
      <input type="radio" name="pizzatoppings" value="vlees">Vlees
    </p>
    <p>
      <label>Kruiden:</label><br>
      <input type="checkbox" name="kruiden[]" value="peterselie">Peterselie<br>
      <input type="checkbox" name="kruiden[]" value="oregano">Oregano<br>
      <input type="checkbox" name="kruiden[]" value="chili flakes">Chili Flakes<br>
      <input type="checkbox" name="kruiden[]" value="zwarte peper">Zwarte Peper
    </p>
    <input type="submit" value="Bestelling plaatsen">
  </form>
</body>
</html>
