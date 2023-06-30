<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Arrays & loops</title>
</head>
<body>
    <nav class ="indent">
        <a href="index.php">Back<br></a>
    </nav>

    <?php require "utils.php";
    
    echo "<div class =\"indent\">Date updated: " . date('j-m-y, h:i:s') . "</div>";
    section_start("Arrays & loops");
    
        print_r($arr = [
            $str,
            $int,
            $float,
            $bool,
            $num2,
        ]);
        nline();
        nline();
        
        echo "for loop with type checks:";               nline();
        for($i = 0; $i < count($arr); $i++){
            echo "\$arr[$i] is " . gettype($arr[$i]);
            nline();
        }
        nline();
        
        /* Alternative loop using foreach */
        
        // foreach($arr as $item){
        //     static $i = 0;
        //     echo "\$arr[" . $i++ . "] is " . gettype($item); 
        //     nline();
        // }
        
        $arr_imploded = implode(', ', $arr);
        echo "\$arr_imploaded = implode(', ', \$arr)";          nline();
        echo "\$arr_imploaded == " . $arr_imploded;             nline(2);
        
        $arr_exploaded = explode(', ', $arr_imploded);
        echo "\$arr_exploaded = explode(', ', \$arr_imploded)"; nline();
        echo "\$arr_exploaded == ";
        print_r($arr_exploaded);    nline(2);
        
        
    section_end();

    ?>
</body>
</html>