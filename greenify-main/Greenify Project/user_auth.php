<?php
ob_start();
include 'header.php';
ob_end_clean();
if (isset($_SESSION['user_role_id'])) {
    if (isset($_POST['type']) && $_POST['type'] == 'ajax') {
        if ((time() - $_SESSION['LAST_ACTIVE_TIME']) > 10000) {
            echo "logout";
        }
    }
}
