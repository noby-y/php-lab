<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PHP lab</title>
</head>

<body>
    <?php 

    function section_start(string $text = ""){
        echo "<br><div class =\"section_start indent\">" . $text . "</div><br>";
        echo "<div class =\"indent\">" . "{" . "</div>";
    }
    function section_end(){
        echo "<div class =\"indent\">" . "}" . "</div>";
    }
    function nline(){
        echo "<br>";
    }

    // ! VARIABLES section
    
    echo "<div class =\"indent\">Date updated: " . date('j-m-y, h:i:s') . "</div>";
    section_start("Variables");

        echo "\$str   = \"" . $str   = "10"; echo "\""; nline();
        echo "\$int   = "   . $int   = 10;              nline();
        echo "\$float = "   . $float = 0.3;             nline();
        echo "\$bool  = "   . $bool  = true;            nline();
        echo "\$num2  = "   . $num2  = 0;               nline();
        nline();

        echo "\$int +  \$float == " . ($int + $float);  nline();
        echo "\$int +  \$bool  == " . ($int + $bool);   nline();
        echo "\$int +  \$str   == " . ($int + $str);    nline();
        echo "\$int ^ !\$bool  == " . ($int ** !$bool); nline();
        echo "int + str == " . gettype($int + $str);    nline();
        nline();

        echo "(\$int == \$str) == "  . ( ($int == $str)  ? "true" : "false" );  nline();
        echo "(\$int === \$str) == " . ( ($int === $str) ? "true" : "false" );  nline();
        nline();

        $num2 = &$int;
        echo "\$num2 = &\$int = " . $num2;  nline();
        echo "\$int  = " . $int = 7;        nline();
        echo "\$num2 == " . $num2;          nline();
        nline();

        echo "var_dump(\$num2) -> ";
        var_dump($num2);            nline();
        
        echo "var_dump((string)\$num2) -> ";
        var_dump((string)$num2);    nline();
        nline();
    
    section_end();

    // ! ARRAYS AND LOOPS section
    
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
        echo "\$arr_imploaded == " . $arr_imploded;             nline();
        nline();
        
        $arr_exploaded = explode(', ', $arr_imploded);
        echo "\$arr_exploaded = explode(', ', \$arr_imploded)"; nline();
        echo "\$arr_exploaded == ";
        print_r($arr_exploaded);    nline();
        nline();
        
        
        section_end();
        
        // ! CLASSES section
        
        section_start("Classes");
        
        class BaseClass {
            public $info = "default base class public info";
            private $_info = "default base class private info";
            
            public function get_info_public(){
                return "Public class info: [" . $this->info . "]";
            }
            public function get_info_private(){
                return "Private class info: [" . $this->_info . "]";
            }
            private function get_info_all(){
                return "All class info. Public: [" . $this->info . "]; Private: [" . $this->_info . "]";
            }

            public function __construct (string $public_info = ""){
                $this->info = $public_info == "" ? $this->info : $public_info;
                echo "BaseClass constructor called!";   nline();
            }

        }

        class SubClass extends BaseClass {
            public $info_child;
            function __construct(string $public_info_parent = "", string $public_info_child = "") {
                $this->info_child = $public_info_child;
                echo "SubClass constructor called!\n";  nline();
                parent::__construct($public_info_parent);
            }
        }

        echo "\$obj_base = new BaseClass();";  nline();
        $obj_base = new BaseClass();
        nline();
        echo "\$obj_sub = new SubClass();";  nline();
        $obj_sub  = new SubClass();
        nline();
        
        // echo "var_dump(\$obj1) & var_dump(\$obj2):";  nline();
        // var_dump($obj_base);    nline();
        // var_dump($obj_sub);     nline();
        // nline();

        echo "Public info getter function:";  nline();
        echo $obj_base->get_info_public();              nline();
        nline();
        echo "Private info getter function:"; nline();
        echo $obj_base->get_info_private();             nline();
        nline();
        
        echo "All info getter function (a private function):";    nline();
        try {
            echo $obj_base->get_info_all();
        } catch (Error $ex) {
            echo $ex;
        }
        nline();
        nline();

        $obj_base_new = new BaseClass("Custom base class info added through a constructor");
        echo $obj_base_new->get_info_public();



    section_end();

    ?>
</body>

</html>