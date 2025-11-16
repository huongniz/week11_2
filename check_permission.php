<?php
require_once 'session_access.php';

function requirePermission($permission) {
    if (!checkAccess($permission)) {
        echo "Bạn không có quyền truy cập trang này.";
        exit();
    }
}
