<?php include 'inc/header.php'; ?>
<h2>Topics: Object Array</h2>
<div class="content">
    <div class="topics">


    <?php


    $arr = array("HTML", "CSS", "PHP", "JavaScript");
    $coding = new ArrayObject($arr);
    $coding->append("JAVA");

    $iterator = $coding->getIterator();
    while ($iterator->valid()){
        echo $iterator->current() . "<br/>";
        $iterator->next();
    }
    ?>
    </div>
</div>
<?php include 'inc/footer.php'; ?>