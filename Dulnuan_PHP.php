<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>PHP Exercises - User Input Version</title>
<style>
  body {
    background-color: #808080; /* grey */
    color: #000;
    font-family: Arial, sans-serif;
    padding: 20px;
  }
  h1 {
    margin-bottom: 40px;
  }
  section {
    margin-bottom: 30px;
    background: #ddd;
    padding: 15px;
    border-radius: 8px;
    text-align: justify;
  }
  label {
    display: block;
    margin-top: 8px;
  }
  input[type="text"], input[type="number"] {
    width: 200px;
    padding: 5px;
    margin-top: 3px;
  }
  input[type="submit"] {
    margin-top: 10px;
    padding: 6px 12px;
  }
  .result {
    margin-top: 10px;
    background: #eee;
    padding: 10px;
    border-radius: 6px;
  }
</style>
</head>
<body>

<h1>PHP Exercises - User Input</h1>

<!-- Activity 1: Greet user with name, age, color -->
<section>
  <h3>Activity 1</h3>
  <form method="post">
    <label>Name: <input type="text" name="act1_name" required></label>
    <label>Age: <input type="number" name="act1_age" min="0" required></label>
    <label>Favorite color: <input type="text" name="act1_color" required></label>
    <input type="submit" name="act1_submit" value="Submit">
  </form>
  <?php
  if (isset($_POST['act1_submit'])) {
    $name = htmlspecialchars($_POST['act1_name']);
    $age = (int)$_POST['act1_age'];
    $color = htmlspecialchars($_POST['act1_color']);
    echo "<div class='result'>Hi, I'm $name, I am $age years old, and my favorite color is $color.</div>";
  }
  ?>
</section>

<!-- Activity 2: Calculator add, subtract, multiply, divide -->
<section>
  <h3>Activity 2</h3>
  <form method="post">
    <label>Number a: <input type="number" name="act2_a" required></label>
    <label>Number b: <input type="number" name="act2_b" required></label>
    <input type="submit" name="act2_submit" value="Calculate">
  </form>
  <?php
  if (isset($_POST['act2_submit'])) {
    $a = $_POST['act2_a'];
    $b = $_POST['act2_b'];
    echo "<div class='result'>";
    echo "Sum: " . ($a + $b) . "<br>";
    echo "Difference: " . ($a - $b) . "<br>";
    echo "Product: " . ($a * $b) . "<br>";
    if ($b != 0) {
      echo "Quotient: " . ($a / $b);
    } else {
      echo "Quotient: Division by zero error";
    }
    echo "</div>";
  }
  ?>
</section>

<!-- Activity 3: Rectangle area and perimeter -->
<section>
  <h3>Activity 3</h3>
  <form method="post">
    <label>Length: <input type="number" name="act3_length" step="any" required></label>
    <label>Width: <input type="number" name="act3_width" step="any" required></label>
    <input type="submit" name="act3_submit" value="Calculate">
  </form>
  <?php
  if (isset($_POST['act3_submit'])) {
    $length = $_POST['act3_length'];
    $width = $_POST['act3_width'];
    $area = $length * $width;
    $perimeter = 2 * ($length + $width);
    echo "<div class='result'>Area: $area<br>Perimeter: $perimeter</div>";
  }
  ?>
</section>

<!-- Activity 4: Celsius to Fahrenheit -->
<section>
  <h3>Activity 4</h3>
  <form method="post">
    <label>Celsius: <input type="number" name="act4_celsius" step="any" required></label>
    <input type="submit" name="act4_submit" value="Convert">
  </form>
  <?php
  if (isset($_POST['act4_submit'])) {
    $celsius = $_POST['act4_celsius'];
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "<div class='result'>$celsius °C is equal to $fahrenheit °F.</div>";
  }
  ?>
</section>

<!-- Activity 5: Swap two numbers -->
<section>
  <h3>Activity 5</h3>
  <form method="post">
    <label>x: <input type="number" name="act5_x" required></label>
    <label>y: <input type="number" name="act5_y" required></label>
    <input type="submit" name="act5_submit" value="Swap">
  </form>
  <?php
  if (isset($_POST['act5_submit'])) {
    $x = $_POST['act5_x'];
    $y = $_POST['act5_y'];
    echo "<div class='result'>";
    echo "Before swapping: x = $x, y = $y<br>";
    $temp = $x;
    $x = $y;
    $y = $temp;
    echo "After swapping: x = $x, y = $y";
    echo "</div>";
  }
  ?>
</section>

<!-- Activity 6: Net Salary -->
<section>
  <h3>Activity 6</h3>
  <form method="post">
    <label>Basic Salary: <input type="number" name="act6_basic_salary" step="any" required></label>
    <label>Allowance: <input type="number" name="act6_allowance" step="any" required></label>
    <label>Deduction: <input type="number" name="act6_deduction" step="any" required></label>
    <input type="submit" name="act6_submit" value="Calculate">
  </form>
  <?php
  if (isset($_POST['act6_submit'])) {
    $basic_salary = $_POST['act6_basic_salary'];
    $allowance = $_POST['act6_allowance'];
    $deduction = $_POST['act6_deduction'];
    $net_salary = $basic_salary + $allowance - $deduction;
    echo "<div class='result'>Net Salary: ₱" . number_format($net_salary, 2) . "</div>";
  }
  ?>
</section>

<!-- Activity 7: BMI -->
<section>
  <h3>Activity 7</h3>
  <form method="post">
    <label>Weight (kg): <input type="number" name="act7_weight" step="any" required></label>
    <label>Height (m): <input type="number" name="act7_height" step="any" required></label>
    <input type="submit" name="act7_submit" value="Calculate BMI">
  </form>
  <?php
  if (isset($_POST['act7_submit'])) {
    $weight = $_POST['act7_weight'];
    $height = $_POST['act7_height'];
    if ($height > 0) {
      $bmi = $weight / ($height * $height);
      echo "<div class='result'>Your BMI is " . round($bmi, 2) . "</div>";
    } else {
      echo "<div class='result'>Invalid height value.</div>";
    }
  }
  ?>
</section>

<!-- Activity 8: String operations -->
<section>
  <h3>Activity 8</h3>
  <form method="post">
    <label>Enter a sentence: <input type="text" name="act8_sentence" required></label>
    <input type="submit" name="act8_submit" value="Analyze">
  </form>
  <?php
  if (isset($_POST['act8_submit'])) {
    $sentence = htmlspecialchars($_POST['act8_sentence']);
    echo "<div class='result'>";
    echo "Number of characters: " . strlen($sentence) . "<br>";
    echo "Number of words: " . str_word_count($sentence) . "<br>";
    echo "Uppercase: " . strtoupper($sentence) . "<br>";
    echo "Lowercase: " . strtolower($sentence);
    echo "</div>";
  }
  ?>
</section>

<!-- Activity 9: Balance after deposit and withdrawal -->
<section>
  <h3>Activity 9</h3>
  <form method="post">
    <label>Initial Balance: <input type="number" name="act9_balance" step="any" required></label>
    <label>Deposit: <input type="number" name="act9_deposit" step="any" required></label>
    <label>Withdraw: <input type="number" name="act9_withdraw" step="any" required></label>
    <input type="submit" name="act9_submit" value="Calculate Balance">
  </form>
  <?php
  if (isset($_POST['act9_submit'])) {
    $balance = $_POST['act9_balance'];
    $deposit = $_POST['act9_deposit'];
    $withdraw = $_POST['act9_withdraw'];
    $final_balance = $balance + $deposit - $withdraw;
    echo "<div class='result'>Final Balance: ₱" . number_format($final_balance, 2) . "</div>";
  }
  ?>
</section>

<!-- Activity 10: Grade based on average -->
<section>
  <h3>Activity 10</h3>
  <form method="post">
    <label>Math score: <input type="number" name="act10_math" min="0" max="100" required></label>
    <label>English score: <input type="number" name="act10_english" min="0" max="100" required></label>
    <label>Science score: <input type="number" name="act10_science" min="0" max="100" required></label>
    <input type="submit" name="act10_submit" value="Calculate Grade">
  </form>
  <?php
  if (isset($_POST['act10_submit'])) {
    $math = $_POST['act10_math'];
    $english = $_POST['act10_english'];
    $science = $_POST['act10_science'];
    $average = ($math + $english + $science) / 3;
    if ($average >= 90) {
      $grade = "A";
    } elseif ($average >= 80) {
      $grade = "B";
    } elseif ($average >= 70) {
      $grade = "C";
    } elseif ($average >= 60) {
      $grade = "D";
    } else {
      $grade = "F";
    }
    echo "<div class='result'>Average: " . round($average, 2) . "<br>Grade: $grade</div>";
  }
  ?>
</section>

<!-- Activity 11: Currency converter -->
<section>
  <h3>Activity 11</h3>
  <form method="post">
    <label>PHP Amount: <input type="number" name="act11_php_amount" step="any" required></label>
    <input type="submit" name="act11_submit" value="Convert">
  </form>
  <?php
  if (isset($_POST['act11_submit'])) {
    $php_amount = $_POST['act11_php_amount'];
    $usd_rate = 0.018;
    $eur_rate = 0.016;
    $jpy_rate = 2.7;
    $usd = $php_amount * $usd_rate;
    $eur = $php_amount * $eur_rate;
    $jpy = $php_amount * $jpy_rate;
    echo "<div class='result'>";
    echo "PHP $php_amount = USD " . number_format($usd, 2) . "<br>";
    echo "PHP $php_amount = EUR " . number_format($eur, 2) . "<br>";
    echo "PHP $php_amount = JPY " . number_format($jpy, 2);
    echo "</div>";
  }
  ?>
</section>

<!-- Activity 12: Estimated travel cost -->
<section>
  <h3>Activity 12</h3>
  <form method="post">
    <label>Distance (km): <input type="number" name="act12_distance" step="any" required></label>
    <label>Fuel consumption (km/liter): <input type="number" name="act12_fuel_consumption" step="any" required></label>
    <label>Fuel price (₱ per liter): <input type="number" name="act12_fuel_price" step="any" required></label>
    <input type="submit" name="act12_submit" value="Calculate Cost">
  </form>
  <?php
  if (isset($_POST['act12_submit'])) {
    $distance = $_POST['act12_distance'];
    $fuel_consumption = $_POST['act12_fuel_consumption'];
    $fuel_price = $_POST['act12_fuel_price'];
    if ($fuel_consumption > 0) {
      $fuel_needed = $distance / $fuel_consumption;
      $total_cost = $fuel_needed * $fuel_price;
      echo "<div class='result'>Estimated travel cost: ₱" . number_format($total_cost, 2) . "</div>";
    } else {
      echo "<div class='result'>Fuel consumption must be greater than zero.</div>";
    }
  }
  ?>
</section>

<!-- Final form you asked to add -->
<section>
  <h3>Final Activity - User Information Form</h3>
  <form action="welcome.php" method="post">
    <label>Name: <input type="text" name="name" required></label>
    <label>E-mail: <input type="email" name="email" required></label>
    <input type="submit" value="Submit">
  </form>
</section>

</body>
</html>
