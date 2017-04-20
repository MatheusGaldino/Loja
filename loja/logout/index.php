<?php
include('../autentica/verifica.php');
session_destroy();
header('Location: ../autentica');

?>