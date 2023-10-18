<?php
session_start();
$name = $_SESSION['name'] ?? '';
$msg = $_SESSION['msg'] ?? '';
require('../template/header.php');


$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$msg = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

function validateForm($name, $email, $msg) {
    if($name && $email && $msg) {
       return;
    } else {
        $_SESSION['warn'] = "You need to fill out the form!";
        header('Location: getinTouch.php');
        exit();
    }
}
validateForm($name, $email, $msg);
?>

<main class="formReceiver home">
    <section>
        <h1 style="border-left: none;">
            <span>🟢</span>
            Form Sent
            <span>🟢</span>
        </h1>
        <div class="box-container">
            <div class="image">
                <img src="../IMG_3350.JPG" class="user" />
            </div>
            <div class="content">
                <h2>
                <?php echo $name;?>
                </h2>
                <p> <?php echo $msg; ?></p>
                <button class="button">
                    <a href="../index.php" style="color: #FFF;">come back to home</a>
                </button>
            </div>
        </div>
    </section>
</main>