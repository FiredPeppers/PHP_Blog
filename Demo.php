<?php

// Start my session
session_start();

// Get the current session id
$my_session_id = session_id();

// Change the session id
session_id("new-id123");

// Set session variables
$_SESSION["sessionInt"] = 50;
$_SESSION["sessionStr"] = "My string for the session";

// Set local variables equal to session variables
$localInt = $_SESSION["sessionInt"];
$localStr = $_SESSION["sessionStr"];

// Delete the sessionInt variable from the session
session_unset("sessionInt");

// Stop the session and delete all session variables
session_destroy();

?>