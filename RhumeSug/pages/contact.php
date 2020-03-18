<?php include "../header.php"; ?>

<?php
    if (isset($_POST['submit'])){
        $nom = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];

        $mailTo = "alaa@gmail.com";
        $headers = "From: ".$email;
        $txt = "You have recieved a message from".$name.".\n\n".$message;
        email($mailTo, $headers, $txt);
        header("Location: index.php?mailsent");
    }

?>

        <!-- DATA SECTION STARS -->

        <div class="about-hero">
            <div class="container-fluid hero wow fadeInUp">
                <h1 id="hero-title">Contactez-Nous</h1>
            </div>

            <div class="container content">
                <p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat optio expedita minus accusantium facere placeat magnam maiores nulla magni dolore blanditiis eligendi, aliquam odio voluptates cum ut officia sit nemo.</p>

                <form method="POST" action="">
                    <div class="form-group">
                        <label>Nom</label>
                        <input type="text" name="nom" class="form-control wow fadeInUp" data-wow-delay="0.5s">
                    </div>

                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" name="email" class="form-control wow fadeInUp" data-wow-delay="0.7s">
                    </div>

                    <div class="form-group">
                        <label>Message</label>
                        <textarea rows="3" name="msg" class="form-control wow fadeInUp" data-wow-delay="0.8s"></textarea>
                    </div>

                    <div class="add-prod wow fadeInUp" data-wow-delay="0.2s">
                        <a type="submit" name="submit" href="#">ENVOYER</a>
                    </div>
                </form>

            </div>
        </div>

        <!-- DATA SECTION ENDS -->


        <?php include "../footer.php"; ?>