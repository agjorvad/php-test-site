<?php echo 'yo'; ?>

<html>
<head>
<title>PHP Test</title
</head>
<body>
<?php echo '<p>Hello World</p>'; ?>
</body>
</html>

<?php 

// Outputs a large amount of information about the current state of PHP.  
// Commonly used to check configuration settings and for available predefined variables on a given system.
phpinfo();
// Loaded modules and their respective settings.
phpinfo(INFO_MODULES); //can also use 8 as parameter.

?>

<!-- // Printing a variable (array element)
// $_SERVER is a special reserved PHP variable that contains all 
web server information.  Known as a superglobal -->
<?php 
echo $_SERVER['HTTP_USER_AGENT'];
?>

<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE) {
    echo 'You are using Google Chrome.<br />';
}
?>

<!-- // strpos() is a function built into PHP that searches a string for another string. -->
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
<h3>strpos() must have returned non-false</h3>
<p>You are using Internet Explorer</p>
<?php
} else {
?>
<h3>strpos() must have returned false</h3>
<p>You are not using Internet Explorer</p>
<?php
}
?>

<form action="action.php" method="post">
<p>Your name: <input type="text" name="name" /></p>
<p>Your age: <input type="text" name="age" /></p>
<p><input type="submit" /></p>
</form>