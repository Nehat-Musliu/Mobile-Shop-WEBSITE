<?php
session_start();
session_destroy(); // Fshin sesionin

// Sigurohu që shtegu është i saktë
header("Location: login.php");
exit;
?>
