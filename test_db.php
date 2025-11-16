<?php
require_once "get_permissions.php";

$permissions = getUserPermissions(1);

echo "<pre>";
print_r($permissions);
echo "</pre>";
