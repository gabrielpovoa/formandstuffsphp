<?php
session_start();
$name = $_SESSION['name'] ?? '';
$msg = $_SESSION['msg'] ?? '';

require('../template/header.php');
require('./receive.php');

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
                <img src="https://assets.stickpng.com/images/585e4bcdcb11b227491c3396.png" class="user" />
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