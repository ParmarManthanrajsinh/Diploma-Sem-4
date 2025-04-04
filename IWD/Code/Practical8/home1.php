<?php

session_start();

if (!isset($_SESSION['name'])) {
    header("Location: q1.php");
}
echo "Welcome " . $_SESSION['name'];