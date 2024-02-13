<!DOCTYPE html>
<html lang="en">

<footer style="background-color: rgb(77, 88, 69); color: white;">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2024 Copyright by Dan Vu
    </div>
    <!-- Copyright -->
    
    <?php
    $filename = basename($_SERVER['PHP_SELF']);
    $date = filemtime($filename);
    $time = date("F j, Y, g:i a", $date);
    echo "<div class=\"footer-copyright text-center py-3\">" . $filename . " was last modified on: " . $time . "</div>";
    ?>

</footer>

</html>
