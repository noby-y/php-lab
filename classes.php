<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Classes</title>
</head>
<body>
    <nav class ="indent">
        <a href="index.php">Back<br></a>
    </nav>

    <?php require "utils.php";
    
    echo "<div class =\"indent\">Date updated: " . date('j-m-y, h:i:s') . "</div>";
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

            public function __construct(string $public_info = ""){
                $this->info = $public_info == "" ? $this->info : $public_info;
                echo "BaseClass constructor called!";   nline();
            }

            function __destruct(){
                // echo "DESTRUCTOR called!";
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

        echo "- \$obj_base = new BaseClass();";  nline();
        $obj_base = new BaseClass();
        nline();
        echo "- \$obj_sub = new SubClass();";  nline();
        $obj_sub  = new SubClass();
        nline();
        // echo "var_dump(\$obj1) & var_dump(\$obj2):";  nline();
        // var_dump($obj_base);    nline();
        // var_dump($obj_sub);     nline();
        // nline();

        echo "- Public info getter function returned:";    nline();
        echo $obj_base->get_info_public();      nline(2);
        echo "- Private info getter function returned:";   nline();
        echo $obj_base->get_info_private();     nline(2);

        echo "- All info getter function (a private function):";    nline();
        try {
            echo $obj_base->get_info_all();
        } catch (Error $ex) {
            echo $ex;
        }
        nline(2);

        $obj_base_new = new BaseClass("Custom base class info added through a constructor");
        echo $obj_base_new->get_info_public();
        $obj_base = $obj_base_new;
        nline(2);


        class Singleton {
            private static $instance = null;

            public static function getInstance(){
                if(self::$instance === null){
                    self::$instance = new static();
                } else{
                    echo "Can not create more than 1 instance";
                    nline();
                }
                return self::$instance;
            }
        }


        echo "- \$obj_singl = new Singleton();";  nline();
        echo "- \$obj_singl -> getInstance();";  nline(2);
        $obj_singl = new Singleton();
        $obj_singl -> getInstance();

        echo "- \$obj_singl_new = new Singleton();";  nline();
        echo "- \$obj_singl_new -> getInstance();";  nline();
        $obj_singl_new = new Singleton();
        $obj_singl_new -> getInstance();
        nline();
    
        
    section_end();

    ?>
</body>
</html>