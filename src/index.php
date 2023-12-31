<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP lab</title>
</head>

<body>
    <!-- 
    <nav class ="indent">
        <a href="index.php">        Main            <br></a>
        <a href="variables.php">    Variables       <br></a>
        <a href="arrays_loops.php"> Arrays % loops  <br></a>
        <a href="classes.php">      Classes         <br></a>
    </nav> -->

    <?php
    require "utils.php";

    echo "<div class =\"indent\">Date updated: " . date('j-m-y, h:i:s') . "</div>";
    section_start("Variables");
        echo "<a href=\"variables.php\">Variables<br></a>";
    section_end();

    section_start("Arrays & loops");
        echo "<a href=\"arrays_loops.php\">Arrays % loops<br></a>";
    section_end();

    section_start("Classes");
        echo "<a href=\"classes.php\">Classes<br></a>";
    section_end();

    ?>

    <!-- POST method -->

    <form class="indent" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['fname'];
        if (empty($name)) {
            echo "<a class=\"indent\" style=\"text-decoration: none;\">Name is empty</a>";
        } else {
            echo "<a class=\"indent\" style=\"text-decoration: none;\">" . $name . "</a>";
        }
    }
    ?>
</body>

</html>