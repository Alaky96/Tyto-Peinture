<?php 
use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';
if (!empty($_POST["Prenom"])) {
	

	$nom = $_POST['Nom'];
	$prenom = $_POST['Prenom'];
	$telephone = $_POST['Telephone'];
	$courriel = $_POST['Courriel'];
	$message = $_POST['Message'];
	  
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->Host = 'localhost';
	$mail->SMTPAuth = false;
	$mail->SMTPAutoTLS = false; 
	$mail->Port = 25; 


  $mail->IsHTML(true);
  $mail->AddAddress("mlacharite.tyto@gmail.com");
  $mail->SetFrom("info@tytopeinture.com", "Formulaire Contactez-Nous Tyto");
  $mail->AddReplyTo($courriel, $prenom . " " . $nom);
  $mail->Subject = "Tyto peinture - formulaire Contactez-Nous";
  $content = "<b>De : ".$prenom . " " . $nom . "<br/> Telephone : ". $telephone . "<br/> Courriel : " . $courriel . "<br/>Message : " . $message ."</b>";

  $mail->MsgHTML($content); 
  if(!$mail->Send()) {
    
  } else {
    echo "Nous vous répondrons dans les plus brefs délais.";
  }
}
?>
<!DOCTYPE html>
<html>
<title>Tyto Peinture</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
    <div class="w3-bar" id="myNavbar">
        <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
            <i class="fa fa-bars"></i>
        </a>
        <a href="#home" class="w3-bar-item w3-button">ACCUEIL</a>
        <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> À PROPOS</a>
        <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACTEZ-NOUS</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
        <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()"> À PROPOS</a>
        <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACTEZ-NOUS</a>

    </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
        <span class="w3-center w3-padding-large w3-xlarge w3-wide w3-animate-opacity"><img src="images/texte.png" class="w3-image"/></span>
        <!--<div><img src ="images/logo.png" class="w3-image"/></div>-->
    </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center">À propos</h3>
    <p class="w3-center"><em>Une entreprise sérieuse et professionnelle pour tous vos projets résidentiels ou commerciaux.</br>
        Voici un petit aperçu de son histoire de père en fils…</em></p>
    <p>Né d’un père ambitieux qui avait comme rêve de devenir entrepreneur et ouvrir sa compagnie d’installation de plancher, j’ai vite découvert que j’avais hérité de cette ambition puisque dès l’âge de 23 ans j’ouvris mon entreprise de revêtement de plancher.
        Après avoir acquis plusieurs années d’expérience auprès de mon père et ayant été formé minutieusement pour installer un plancher d’époxy seul, j’ai entamé les démarches pour obtenir ma licence RBQ et ouvrir ma compagnie Fennec Sol Service.

    </p>
    <div class="w3-row">
        <div class="w3-col m6 w3-center w3-padding-large">

            <img src="images/4.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
        </div>

        <!-- Hide this text on small devices -->
        <div class="w3-col m6 w3-padding-large">
            <p>
                Œuvrant depuis plus de 15 ans dans ce domaine et ayant une clientèle de confiance, je me suis souvent fait approcher par des contracteurs pour des applications d’époxy sur des murs de béton ou autres projets semblables. Afin de pouvoir répondre à ces demandes, j’ai décidé de créer une équipe attitrée pour ces réalisations. Voici les débuts de Tyto peinture inc.
            </p>
        </div>
		<div class="w3-row">
            <h4 class="w3-center">Époxy </h4>
            <p>
               Notre vaste expérience en installation d’époxy nous permet de vous offrir une réalisation de plancher liquide et design au goût du jour. De plus, avec notre équipement adapté à toutes les situations qui se présentent devant nous, nous pouvons assurer un travail impeccable. Vous pouvez compter sur nous pour vos projets d’imitations de marbre, de plancher métallisé, couleur unique, pour un agencement de couleur ou une nuit étoilée, pour vos balcons ou encore même pour vos marches extérieures.
            </p>
        </div>
        <div class="w3-row">
            <h4 class="w3-center">Fer Forgé</h4>
            <p>
                Fatigué de la rouille sur vos clôtures, escaliers, rampes et balcons en fer forgé ? Notre
                équipe d’expert est qualifiée pour répondre à vos besoins au meilleur prix sur le marché. <br/>
                N’hésitez pas à contacter nos spécialistes pour toutes questions et afin de réaliser vos
                projets.<br/>
                Tous nos travaux sont réalisés avec qualité ainsi qu’une garantie de rendement
                professionnel.
            </p>
        </div>
		<div class="w3-row">
            <h4 class="w3-center">Peinture </h4>
            <p>
			Puisque chaque projet est unique et important, nous travaillons minutieusement et nous nous impliquons à 100%  pour votre satisfaction. Que ce soit pour vos plafonds, planchers, murs intérieurs et extérieurs, nous serons là pour amener vos projets à terme.
            </p>
        </div>
        <div class="w3-row">
            <h4 class="w3-center">Écologie</h4>
            <p>
                Puisque nous avons à cœur la santé de notre planète, notre système écologique est une
                de nos priorités. Nous privilégions donc la peinture et des fournitures 100% écologiques.
                Soyez assuré que nous prenons toutes les mesures nécessaires afin de prendre soin de
                notre avenir.
            </p>


        </div>
    </div>
    <blockquote class="w3-panel main-color w3-leftbar w3-light-grey" style = "border-left: 6px solid #660d0d!important;">
        <p class="w3-large">
            <i>Vous désirez une soumission, une expertise, des idées ? N'hésitez  pas à nous contacter.</i></p>
        <p>Maxime Lacharité, Président</p>
    </blockquote>

</div>

<div class="w3-row w3-center main-color w3-padding-16">
    <div class="w3-quarter w3-section w3-hover-opacity ">
        <i class='fas fa-paint-roller w3-xxlarge'></i><br>
        Qualité Assurée
    </div>
    <div class="w3-quarter w3-section w3-hover-opacity ">
        <i class='fas fa-phone w3-xxlarge'></i><br>
        Service Rapide
    </div>
    <div class="w3-quarter w3-section w3-hover-opacity ">
        <i class='fas fa-grin-alt w3-xxlarge'></i><br>
        Satisfaction Garantie
    </div>
    <div class="w3-quarter w3-section w3-hover-opacity ">
        <i class='fab fa-envira w3-xxlarge'></i><br>
        Écologique
    </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<!--<div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
    </div>
</div>-->

<!-- Container (Portfolio Section) -->
<!--<div class="w3-content w3-container w3-padding-64" id="portfolio">
    <h3 class="w3-center">NOS RÉALISATIONS</h3>
    <p class="w3-center"><em>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sapien orci, sagittis sit amet sapien nec, posuere venenatis purus. <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sapien orci, sagittis sit amet sapien nec, posuere venenatis purus. </em></p><br> -->

    <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <!--<div class="w3-row-padding w3-center">
        <div class="w3-col m3">
            <img src="/w3images/p1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist over the mountains">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffee beans">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Bear closeup">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p4.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Quiet ocean">
        </div>
    </div>

    <div class="w3-row-padding w3-center w3-section">
        <div class="w3-col m3">
            <img src="/w3images/p5.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="The mist">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p6.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="My beloved typewriter">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p7.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Empty ghost train">
        </div>

        <div class="w3-col m3">
            <img src="/w3images/p8.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Sailing">
        </div>
        <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px">LOAD MORE</button>
    </div>-->
<!--</div> -->

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
    </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide">CONTACTEZ-NOUS</span>
    </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
    <h3 class="w3-center">CONTACTEZ-NOUS</h3>
    <p class="w3-center"><em>Besoin d'une soumission ou d'information ? Il vous suffit de remplir ce formulaire !</em></p>

    <div class="w3-row w3-padding-32 w3-section">
        <div class="w3-col m4 w3-container">
            <img src="images/2.jpg" class="w3-image w3-circle" style="width:100%">
        </div>
        <div class="w3-col m8 w3-panel">
            <div class="w3-large w3-margin-bottom">
                <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i>(514) 882-9548<br>
                <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> mlacharite.tyto@gmail.com<br>
            </div>
            <p>Il nous fera plaisir de vous répondre dans les meilleurs délais :</p>
            <form action="index.php" method="post">
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Prenom" required name="Prenom">
                    </div>
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Nom" required name="Nom">
                    </div>
                </div>
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Téléphone" required name="Telephone">
                    </div>
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Courriel" required name="Courriel">
                    </div>
                </div>

                <textarea class="w3-input w3-border" required name="Message" placeholder="Parlez-nous de votre projet"></textarea>
                <button class="w3-button button w3-right w3-section" type="submit">
                    <i class="fa fa-paper-plane"></i> ENVOYER
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="w3-center  w3-padding-64">
    <a href="#home" class="w3-button button"><i class="fa fa-arrow-up w3-margin-right"></i>Haut de page</a>
    <div class="w3-xlarge w3-section">
        <i class="fab fa-facebook w3-hover-opacity"></i>
        <i class="fab fa-facebook-messenger w3-hover-opacity"></i>
        <i class="fab fa-google w3-hover-opacity"></i>
    </div>
    <p>Copyright 2020 Tyto Peinture. Tous Droits Réservés.</a></p>
</footer>

<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function() {myFunction()};
    function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
        }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>

<script>
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
</script>
</body>
</html>
