<?php
session_start();
require_once 'roles.php';

function checkAccess($required_permission) {
    global $roles;

    $user_role = $_SESSION['user_role'] ?? 'guest';

    return in_array($required_permission, $roles[$user_role]);
}
