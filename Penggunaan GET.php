<?php
if(isset($_GET['send']))
{
echo"Welcome ".$_POST["name"] ."<br>";
echo"You are ".$_POST["age"]." years old!";
}