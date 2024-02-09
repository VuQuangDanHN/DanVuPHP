<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        echo "<h3>Hello " . htmlspecialchars($firstname) . " " . htmlspecialchars($lastname) . ", You are welcome to my site.</h3>";
    }
    ?>

    <!-- Form Creation -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-group">
        <label for="firstname">Firstname:</label>
        <input type="text" name="firstname" class="form-control">
        <label for="lastname">Lastname:</label>
        <input type="text" name="lastname" class="form-control">
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- HTML Table -->
    <table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        </tr>
    </tbody>
    </table>    

    <?php
    // String Variables
    $str1 = "Hello";
    $str2 = "World";
    $joinedString = $str1 . " " . $str2;
    echo "<p>Joined string length: " . strlen($joinedString) . "</p>";

    // Number Addition
    $num1 = 298;
    $num2 = 234;
    $num3 = 46;
    $sum = $num1 + $num2 + $num3;
    echo "<p>Sum: " . $sum . "</p>";

    // Browser Detection
    echo "<p>Browser: " . $_SERVER['HTTP_USER_AGENT'] . "</p>";

    // File Modification Time
    echo "<footer>Last modified: " . date("F d Y H:i:s.", filemtime(basename($_SERVER['SCRIPT_FILENAME']))) . "</footer>";
    ?>
</body>
</html>



<?php include 'footer.php'; ?>