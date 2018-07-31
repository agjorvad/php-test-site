<!-- // htmlspecialchars() makes sure any characters that are special
in html are properly encoded so you can't inject HTML tags or JS into your page. -->
Hi <?php echo htmlspecialchars($_POST['name']); ?>.
<!-- // (int) converts a number into an integer -->
You are <?php echo (int)$_POST['age']; ?> years old.