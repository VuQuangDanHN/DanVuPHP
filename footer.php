<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .footer-container {
            background-color: #343a40; /* Màu nền tùy chọn */
            color: #ffffff; /* Màu chữ tùy chọn */
            text-align: center;
            padding: 20px; /* Khoảng cách tùy chọn */
        }

        .copyright {
            border-top: 1px solid #ffffff; /* Đường viền trên tùy chọn */
            margin-top: 10px; /* Khoảng cách trên tùy chọn */
            padding-top: 10px; /* Khoảng cách phía trên bên trong tùy chọn */
        }
    </style>
</head>

<body>

    <footer class="footer-container">
        <!-- Copyright -->
        <div class="copyright">
            <p class="copyright-text container">
                &copy;2024 Dan Vu. All rights reserved.
                <?php
                echo "Last modified: " . date("F d Y H:i:s.", filemtime(basename($_SERVER['SCRIPT_FILENAME'])));
                ?>
            </p>
        </div>
    </footer>

</body>

</html>
