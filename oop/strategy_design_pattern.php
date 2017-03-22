<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php
        /*
        Formal way to inclue files
         
        include './autoloading/Java.php';
        include './autoloading/PHP.php';
        include './autoloading/Python.php';
        include './autoloading/Ruby.php';   
        
        //Autolaod using __autoload but not encouraged. us spl_autoload_register instead
        function __autoload($class_name){
            echo "$class_name<br/>";
            include "autoloading/".$class_name."php";
        }
        */
       
        //Preferred method to load classes
        spl_autoload_register(function ($class_name) {
            
            include './autoloading/'.$class_name . '.php';
            
        });

        $user = new User();
        $msg = $user->getMsg();

        switch ($msg) {

            case 'email' :
                $objmsg = new SendEmail();
                break;

            case 'sms' :
                $objmsg = new SendSms();
                break;

            case 'fax' :
                $objmsg = new SendFax();
                break;
        }

        $objmsg->notification();
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>