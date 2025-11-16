<?php
require_once 'session_access.php';

echo "<h2>Menu</h2>";

if (checkAccess('view_user')) {
    echo "<p>Xem người dùng</p>";
}

if (checkAccess('edit_user')) {
    echo "<p>Chỉnh sửa người dùng</p>";
}

if (checkAccess('delete_user')) {
    echo "<p>Xóa người dùng</p>";
}
