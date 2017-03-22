<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Php OOP Tutorial</title>
    </head>
    <body>
        <?php
        
		echo "Hello PHP!";
        
        class Animal {
            
            protected $name;
            protected $favorite_food;
            protected $sound;
            protected $id;
            
            public static $number_of_animals =0;
            
            const PI = "3.14159";
            
            function getName() {
                
                return $this->name;
            }
        } 
        
        ?>
        
    </body>
</html>
