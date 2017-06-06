<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <?php

        class Person{
            const NAME = "Md. Riazul Islam khan";//default public. constant
        
        function displayPerson() {
            echo "Full Name is: ".Person::NAME;
            }
        }
        
        $ur = new Person;
        $ur->displayPerson();

    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>