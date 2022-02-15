<?php
$u = $_POST['user'];
$p = $_POST['pass'];

if($u=="username" && $p=="password")
{
        header("Location:ratan.php");
    // "Login correct";

}else
{
    echo "Login InCorrect";
}

?>