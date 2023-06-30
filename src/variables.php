<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Variables</title>
</head>
<body>
    <nav class ="indent">
        <a href="index.php">Back<br></a>
    </nav>

    <?php require "utils.php";

        echo "<div class =\"indent\">Date updated: " . date('j-m-y, h:i:s') . "</div>";
        section_start("Variables");

            echo "\$str   = \"" . $str;     echo "\""; nline();
            echo "\$int   = "   . $int;     nline();
            echo "\$float = "   . $float;   nline();
            echo "\$bool  = "   . $bool;     nline();
            echo "\$num2  = "   . $num2;    nline(2);

            echo "\$int +  \$float == " . ($int + $float);  nline();
            echo "\$int +  \$bool  == " . ($int + $bool);   nline();
            echo "\$int +  \$str   == " . ($int + $str);    nline();
            echo "\$int ^ !\$bool  == " . ($int ** !$bool); nline();
            echo "int + str == " . gettype($int + $str);    nline(2);

            echo "(\$int == \$str) == "  . ( ($int == $str)  ? "true" : "false" );  nline();
            echo "(\$int === \$str) == " . ( ($int === $str) ? "true" : "false" );  nline(2);

            $num2 = &$int;
            echo "\$num2 = &\$int = " . $num2;  nline();
            echo "\$int  = " . $int = 7;        nline();
            echo "\$num2 == " . $num2;          nline(2);

            echo "var_dump(\$num2) -> ";
            var_dump($num2);            nline();

            echo "var_dump((string)\$num2) -> ";
            var_dump((string)$num2);    nline(2);

        section_end();

    ?>
</body>
</html>