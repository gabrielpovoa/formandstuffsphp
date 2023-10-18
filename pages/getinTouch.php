<?php
session_start();
require('../template/header.php');

?>

<main class="getintouch">
    <section class="contact">
        <h1>Get in Touch</h1>
        <h2 class="warn" style="color: #FFF; font-weight: 500; border-bottom: .5rem solid #1D2D44; background-color: #7159cc; padding:1rem;border-radius:.4rem;    box-shadow: 0px 10px 15px -3px rgba(0,0,0,0.1); width:35rem; max-width: 100%;">
            <?php
             echo $_SESSION['warn'];
            ?>
        </h2>
        <form method="POST" action="receive.php" class="form-contact">
            <label for="name">
                name
                <input type="text" id="name" name="name" class="box">
            </label>
            <label for="email">
                email
                <input type="text" id="email" name="email" class="box">
            </label>
            <!-- <label>
                gender
                <div class="checkbox-content">
                    <input type="checkbox" name="male" id="male" value="man">
                    <span id="man">man</span>
                    <input type="checkbox" name="female" id="female" value="woman">
                    <span id="woman">woman</span>
                </div>
            </label> -->
            <label for="message">
                message
                <textarea name="message" id="message" class="textarea"></textarea>
            </label>
            <input type="submit" value="Send" class="submit">
        </form>
        </div>
    </section>
    <div class="container">
        <div class="contact-image">
            <img src="../phishing.png" alt="get in touch">
        </div>
    </div>
</main>