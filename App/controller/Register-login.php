<?php
require_once(__DIR__ . '../config/Config.php');
require_once(__DIR__ . 'UserController.php');
require_once(__DIR__ . '../utils/Utility.php');

session_start();

// Create a new instance of the Database class
$database = new Database();
$pdo = $database->getConnection();
$userManager = new UserController($pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    try {
        // If the user is already logged in, redirect them
        if (isset($_SESSION['user_id'])) {
            $redirect_url = Utility::getDirectUrl($_SESSION['user_type']);
            header("Location: $redirect_url");
            exit();
        }

        // Handle registration
        $userId = $userController->register($name, $email, $password);
        if ($userId) {
            $_SESSION["user_id"] = $userId;
            $_SESSION["name"] = $name;
            $_SESSION["user_type"] = 'user';
            echo json_encode(['status' => 'success', 'message' => 'Registration successful']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Registration failed']);
        }

        // Handle login
        $user = $$userController->validateLogin($email, $password);
        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_type'] = $user['type'];

            $redirect_url = Utility::getDirectUrl($user['type']);
            header("Location: $redirect_url");
            exit();
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid email or password']);
        }
    } catch (Exception $e) {
        echo json_encode(['status' => 'failed', 'message' => 'Failed to register: ' . $e->getMessage()]);
    }
}
