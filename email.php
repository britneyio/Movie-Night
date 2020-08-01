<?php

if($_POST["Movie"]){
	mail("britneys.smiths@gmail.com", "Movie Night Request", $_POST["message"], "From: email@email.com");
}
?>