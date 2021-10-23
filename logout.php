<?php
session_start();
if(session_destroy())
{
    header("Location: Page_1.php");
}
?>
