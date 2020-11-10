<?php
/*  引入  */
require_once "user.php";

$comments = isset($_REQUEST['comments']) ? my_filter($_REQUEST['comments'], "string") : '';

//輸入評論
function comment_in($comments){
    global $mysqli;
    foreach ($_POST as $var_name => $var_val) {
        $$var_name = $mysqli->real_escape_string($var_val);
    }
    $sql = "INSERT INTO `comment` (`comments`) VALUES ('{$comments}')";
    $mysqli->query($sql) or die($mysqli->connect_error);
}