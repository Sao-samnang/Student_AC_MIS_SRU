<?php
session_start();
$email=htmlspecialchars($_SESSION['email']);
$lname=htmlspecialchars($_SESSION['lname']);