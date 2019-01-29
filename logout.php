<?php
SESSION_START();

$_SESSION = array();
session_destroy();
?>
<?php
require 'RegForm.html';
?>