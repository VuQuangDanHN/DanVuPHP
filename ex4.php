<?php
$title = "Exercise 4: Control flow and loops";
include 'header.php';?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercise 4</title>
</head>
<body>
    <?php
    // If-Else for Voter Eligibility
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['age'])) {
        $age = $_POST['age'];
        $name = $_POST['name'];
        if ($age >= 18) {
            echo "<p>Hello $name, you are eligible for voting.</p>";
        } else {
            echo "<p>Hello $name, you are not eligible for voting.</p>";
        }
    }

    // Form for age and name input
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" placeholder="Type your full name"><br>
        <label for="age">Age:</label>
        <input type="text" name="age" class="form-control" placeholder="Type your current age"><br>
        
        <input type="submit">
    </form>

    <?php
    // Switch Case for Month Check
    $currentMonth = date("F");
    switch ($currentMonth) {
        case "August":
            echo "<p>It's August, so it's still holiday.</p>";
            break;
        default:
            echo "<p>Not August, this is $currentMonth so I don't have any holidays.</p>";
    }

    // For Loop for Multiplication Table
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['number'])) {
        $number = $_POST['number'];
        echo "<p>Multiplication table of $number:</p>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<p>$number x $i = " . ($number * $i) . "</p>";
        }
    }

    // Form for number input
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="number">Enter a number for multiplication table:</label>
        <input type="number" name="number" required><br>
        <input type="submit">
    </form>

    <?php
    // While Loop for Number Printing
    $n = 10; // Change this value as needed
    $i = 1;
    echo "<p>Numbers from 1 to $n:</p>";
    while ($i <= $n) {
        echo "<p>$i</p>";
        $i++;
    }

    // Foreach Loop for Array Elements
    $array = array("apple", "banana", "orange"); // Example array
    echo "<p>Elements of the array:</p>";
    foreach ($array as $element) {
        echo "<p>$element</p>";
    }
    ?>
</body>
</html>
<?php include 'footer.php'; ?>