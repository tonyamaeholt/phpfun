<!doctype HTML>
<html>
<head><meta charset="utf-8">
<title>PHP Fun</title>
<link rel="stylesheet" href="stylesheet.css"/>
</head>
<body>
<hr>
<p>Hello, Tonya. Today is <?php echo date('F jS, o');?> and you are looking fabulous!</p>
<?php
$target=mktime(8,0,0,8,28,2017);
$today=time();
$difference=($target-$today);
$days=(int)($difference/86400);
print"<p>You will begin your next adventure in $days days!</p>";
?>
</body>
</html>
