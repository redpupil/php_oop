<?php 
include 'inc/header.php'; 
include 'func.php'; 

?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">
         
      
    <form method="post" action="">
        <table >
            <tr>
                <td> Enter First Number : </td>
                <td><input type="number" name="num1"></td>
            </tr>
            <tr>
                <td>Enter Second Number : </td>
                <td><input type="number" name="num2"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="calculation" value="Calculate"></td>
            </tr>
        </table>

    </form>
        
    <?php

        if (isset($_POST['calculation'])) {
            $numOne = $_POST['num1'];
            $numTwo = $_POST['num2'];
        
        
            if (empty($numOne) || empty($numTwo)) {
                echo "<span style='color:red'>Field must be filled</span> <br/>";
            } else {
                echo 'First number is: '.$numOne. " <br/>Second number is: ".$numTwo."<br/>";
                
                $cal = new Calculation();
        
                $cal->add($numOne, $numTwo);
                $cal->sub($numOne, $numTwo);
                $cal->mul($numOne, $numTwo);
                $cal->div($numOne, $numTwo);
            }  
        
        }
    ?>  
   
    </div>
</div>
<?php include 'inc/footer.php'; ?>