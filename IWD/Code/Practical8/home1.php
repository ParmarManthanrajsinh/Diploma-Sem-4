<?php

session_start();

if (!isset($_SESSION['name'])) {
    header("Location: p8.php");
}
echo "Welcome " . $_SESSION['name'];