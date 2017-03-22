<!DOCTYPE html>
<head>
<meta charset=utf-8" />
<title>First Page</title>
</head>

<body>

<?php $link_name = "Second Page";?>
<?php $id = 2;?>
<?php $name = "John & mohn";?>
<a href="secondpage.php?id=<?php echo $id;?>&name=<?php echo urlencode($name);?>" target="_blank"><?php echo $link_name;?></a>

</body>
</html>