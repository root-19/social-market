<?php

class Utility {
    public static function getDirectUrl($userType) {
        return $userType == 'admin' ? 'admin_dashboard.php' : 'user_dashboard.php';
    }
}
