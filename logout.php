<?php

require 'conect.php';

unset($_SESSION['user']);

header('location: index.php');

?>