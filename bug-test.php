
<html>
<head>
<title>test XSS</title>
</head>
<body>
	<form method='get'>
		<input name="name" type="text" placeholder="enter value"/>
		<input type="submit" value="submit"/>
	</form>
<?php
$name= $_GET['name'];
echo "<h3>hello $name </h3>";
?>
<script>
	function hyper_test(){
		var link="http://localhost:80/bug_hunting/xss-lab/test.php?name=<?= $name;?>";
	}
</script>
</body>
