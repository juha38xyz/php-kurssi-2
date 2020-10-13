<?php

session_start();
$_SESSION['name'] = 'Matti';

echo $_SESSION['name'];