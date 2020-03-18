<?php 
    include "../header.php"; 
    include "../includes/signup.inc.php"; 

?>


        <!-- REGISTRATION FORM STARS -->

        <div class="about-hero">
            <div class="container-fluid hero signup-form wow fadeInUp" >
              
                <h1 id="hero-title">Soyez un membre de notre famille Rhuma Sug</h1>
                <img src="../img/logo.png" alt=""></<img>
            </div>

            <div class="container content">
                <p class="wow fadeInUp">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat optio expedita minus accusantium facere placeat magnam maiores nulla magni dolore blanditiis eligendi, aliquam odio voluptates cum ut officia sit nemo.</p>

                <form method="POST" action="">

                <div class="form-group">
                        <label>ID Utilisateur *</label>
                        <input type="text" name="uid" class="form-control wow fadeInUp" data-wow-delay="0.5s">
                    </div>
                    <div class="form-group">
                        <label>Nom *</label>
                        <input type="text" name="nom" class="form-control wow fadeInUp" data-wow-delay="0.5s">
                    </div>

                    <div class="form-group">
                        <label>Prenom *</label>
                        <input type="text" name="prenom" class="form-control wow fadeInUp" data-wow-delay="0.5s">
                    </div>                 

                    <div class="form-group">
                        <label>E-mail *</label>
                        <input type="email" name="email" class="form-control wow fadeInUp" data-wow-delay="0.7s">
                    </div>

                    <div class="form-group">
                        <label>Confirmation E-mail *</label>
                        <input type="email" name="c_email" class="form-control wow fadeInUp" data-wow-delay="0.7s">
                    </div>

                    <div class="form-group">
                        <label>Téléphone</label>
                        <input type="text" name="tel" class="form-control wow fadeInUp" data-wow-delay="0.7s">
                    </div>

                    <div class="form-group">
                        <label>Mot de Passe *</label>
                        <input type="password" name="mdp" class="form-control wow fadeInUp" data-wow-delay="0.7s">
                    </div>

                    <div class="form-group">
                        <label>Confirmation Mot de Passe *</label>
                        <input type="password" name="c_mdp" class="form-control wow fadeInUp" data-wow-delay="0.7s">
                    </div>

                    <div class="form-group">
                        <label>Adresse</label>
                        <input type="text" name="adresse" class="form-control wow fadeInUp" data-wow-delay="0.7s">
                    </div>

                    <div class="form-group">
                        <label>Ville</label>
                        <input type="text" name="ville" class="form-control wow fadeInUp" data-wow-delay="0.7s">
                    </div>

                    <div class="form-group">
                        <label>Code Postal</label>
                        <input type="text" name="cp" class="form-control wow fadeInUp" data-wow-delay="0.7s">
                    </div>


                    <div class="form-group">
                        <label>Pays</label>
                        <input type="text" name="pays" class="form-control wow fadeInUp" data-wow-delay="0.7s">
                    </div>

                  
                    <div class="form-check">
                        <input class="form-check-input" name="checked" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            Je déclare avoir +18 ans *
                        </label>

                    <div class="add-prod wow fadeInUp" data-wow-delay="0.2s">
                        <button type="submit" name="submit">S'INSECRIR</button>
                        <br>
                        <br>
                        <br>
                        <p>* Champs requis</p>
                    </div>
                   
                </form>

            </div>
        </div>

        <!-- DATA SECTION ENDS -->


        <?php include "../footer.php"; ?>