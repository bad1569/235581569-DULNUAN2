<h1>PHP Exercises</h1>
<h3>Activity 1</h3>
<?php
$name = "Brenzer Ace";
$age = 22;
$color = "cyan";

echo "Hi, I'm $name, I am $age years old, and my favorite color is $color.";
?>

<h3>Activity 2</h3>
<?php
$a = 10;
$b = 5;

echo "Sum: " . ($a + $b) . "<br>";
echo "Difference: " . ($a - $b) . "<br>";
echo "Product: " . ($a * $b) . "<br>";
echo "Quotient: " . ($a / $b);
?>

<h3>Activity 3</h3>
<?php
$length = 8;
$width = 4;

$area = $length * $width;
$perimeter = 2 * ($length + $width);

echo "Area: $area<br>";
echo "Perimeter: $perimeter";
?>

<h3>Activity 4</h3>
<?php
$celsius = 30;
$fahrenheit = ($celsius * 9/5) + 32;

echo "$celsius °C is equal to $fahrenheit °F.";
?>

<h3>Activity 5</h3>
<?php
$x = 10;
$y = 20;

echo "Before swapping: x = $x, y = $y<br>";

$temp = $x;
$x = $y;
$y = $temp;

echo "After swapping: x = $x, y = $y";
?>

<h3>Activity 6</h3>
<?php
$basic_salary = 20000;
$allowance = 5000;
$deduction = 3000;

$net_salary = $basic_salary + $allowance - $deduction;

echo "Net Salary: ₱$net_salary";
?>

<h3>Activity 7</h3>
<?php
$weight = 60; // in kg
$height = 1.65; // in meters

$bmi = $weight / ($height * $height);

echo "Your BMI is " . round($bmi, 2);
?>

<h3>Activity 8</h3>
<?php
$sentence = "TS is choppped";

echo "Number of characters: " . strlen($sentence) . "<br>";
echo "Number of words: " . str_word_count($sentence) . "<br>";
echo "Uppercase: " . strtoupper($sentence) . "<br>";
echo "Lowercase: " . strtolower($sentence);
?>

<h3>Activity 9</h3>
<?php
$balance = 5000;
$deposit = 1500;
$withdraw = 1000;

$balance = $balance + $deposit - $withdraw;

echo "Final Balance: ₱$balance";
?>

<h3>Activity 10</h3>
<?php
$math = 85;
$english = 90;
$science = 88;

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

echo "Average: " . round($average, 2) . "<br>";
echo "Grade: $grade";
?>

<h3>Activity 11</h3>
<?php
$php_amount = 1000;
$usd_rate = 0.018;
$eur_rate = 0.016;
$jpy_rate = 2.7;

$usd = $php_amount * $usd_rate;
$eur = $php_amount * $eur_rate;
$jpy = $php_amount * $jpy_rate;

echo "PHP $php_amount = USD " . number_format($usd, 2) . "<br>";
echo "PHP $php_amount = EUR " . number_format($eur, 2) . "<br>";
echo "PHP $php_amount = JPY " . number_format($jpy, 2);
?>

<h3>Activity 12</h3>
<?php
$distance = 250; // km
$fuel_consumption = 12; // km per liter
$fuel_price = 70; // per liter

$fuel_needed = $distance / $fuel_consumption;
$total_cost = $fuel_needed * $fuel_price;

echo "Estimated travel cost: ₱" . number_format($total_cost, 2);
?>