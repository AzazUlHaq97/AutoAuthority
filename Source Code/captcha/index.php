<?php

session_start();

$_SESSION['secure'] = rand(1000, 9999);

?>

<img src="generate.php" />

<?php echo $_SESSION['secure']; ?>