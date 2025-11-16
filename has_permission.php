<?php
require_once 'roles.php';
require_once 'users.php';

function hasPermission($user_id, $permission) {
    global $users, $roles;

    if (!isset($users[$user_id])) return false;

    $user_role = $users[$user_id]['role'];
    return in_array($permission, $roles[$user_role]);
}
