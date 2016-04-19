<?php

# functions
require('../../functions/functions.php');

# Objects
$Database   = new Database_PDO;
$Result     = new Result;
$User       = new User ($Database);

$Trap_update = new Trap_update ($Database);

# verify that user is logged in
$User->check_user_session();

/*
print "<pre>";
var_dump($_POST);
die('alert-danger');
*/

# execute
if ($_POST['action']=="define")     { $Trap_update->update_trap ($_POST['action'], $_POST); }
elseif ($_POST['action']=="delete") { $Trap_update->update_trap ($_POST['action'], $_POST); }
elseif ($_POST['action']=="ignore") { $Trap_update->update_trap ($_POST['action'], $_POST); }
else                                { $Result->show ("warning", "Not implemented yet !", false); }
?>