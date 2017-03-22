<?php include 'inc/header.php'; ?>
<h2>Topics: Project List</h2>
<div class="content">
    <div class="topics">


    <table>
        <tr>
            <td>Filter Name</td>
            <td>Filter ID</td>
        </tr>
        <?php
            echo "<br/>";
            foreach (filter_list() as $id =>$filter ) {
                echo '<tr><td>'.$filter.'</td><td>'.filter_id($filter).'</td></tr>';
            }

        /*
        echo "<br/>";
        $str = "<h3>I am a string.</h3>";
        $nestr = filter_var($str, FILTER_SANITIZE_STRING);
        echo $nestr;
        */

        /*
         * integer validate
        $int = 654;
        if (filter_var($int,FILTER_VALIDATE_INT)) {

            echo "It's an integer";
            } else {
            echo "Not interger";
        }
          */

        /*
         $ip = "192.168.2.8";
        if (filter_var($ip,FILTER_VALIDATE_IP)) {
            echo "Valid IP";
        } else {
            echo "Invalid IP";
        }
         * */
        /*
         $email = "khan.gmail.com";
        if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
            echo "$emial is valid email address";
        } else {
            echo "$emial is invalid email address";

        }
         * */

        /*
        //Advanced filter
        $intnum = 300;
        $min = 1;
        $max = 200;

        if (filter_var($intnum, FILTER_VALIDATE_INT, array("options" => array("min_range" =>$min, "max_range" =>$max)))) {
            echo "It is valid range";
        } else {
            echo "It is invalid range ";
        }

        */

        echo "<br/>";
        $url = "http://www.example.com/index.html?q=123";
        if (filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)) {
            echo "It is valid url";
        } else {
            echo "It has no query string";
        }


        echo "<hr/>";
        echo "<hr/>";



        ?>
    </table>
    </div>
</div>
<?php include 'inc/footer.php'; ?>