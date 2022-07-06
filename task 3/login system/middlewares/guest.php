<?php
if(!empty($_SESSION['user'])){
    //guest
    header('location:index.php');die;
}