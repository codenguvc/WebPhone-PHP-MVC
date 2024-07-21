<?php
require '../libs/PHPMailer/Exception.php';
require '../libs/PHPMailer/PHPMailer.php';
require '../libs/PHPMailer/SMTP.php';
require('../models/pdo.php');
include('../models/reset_password_temp.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reset Mật Khẩu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <?php
                        if (isset($_POST["email"]) && isset($_POST["action"]) && ($_POST["action"] == "update")) {
                            $resetPassword = new ResetPasswordTemp();
                            $resetPassword->updatePassword(
                                $_POST["email"],
                                $_POST["pass1"],
                                $_POST["pass2"]
                            );
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>