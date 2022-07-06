<?php
if(empty($_SESSION['user'])){
    //guest
    header('location:login.php');die;
}