<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:description" content="Romain Chasseré - CV interactif" />
  <meta property="og:name" content="Romain Chasseré" />
  <!--   <meta property="og:url" content="http://www.romainchassere.fr" />
  <meta property="og:image" content="img/..." /> -->



  <link href="img/favicon.png" rel="shortcut icon" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/font-awesome-4.6.1/css/font-awesome.css" />
  <link rel="stylesheet" href="css/animate.css" />
</head>

<body>
      <div class="mainpic">
        <span class="name"> Romain Chasseré </span>
        <span class="undertitle"> Développement & Intégration </span>
        <a href="#navigation" id="fleche_anim"><img src="img/Arrow.png" class="animated infinite fadeInDown fleche scroll-down" address="true"/> </a>
      </div>

<div class="wrapper">

      <nav id="navigation" class="header_nav">
        <ul>
          <li> <a href="#competences_id" id="mainmenu"> Compétences</a> </li>
          <li> <a href="#portfolio_id" id="mainmenu">Portfolio </a> </li>
          <li> <a href="#parcours_id" id="mainmenu">Parcours </a> </li>
          <li> <a href="#contact_id" id="mainmenu">Contact </a> </li>
        </ul>
      </nav>

     <div class="presentation" id="presentation_id">
      <div class="picture">
        <img src="img/romain.png" alt="Ma tête" class="romain" />
      </div>

      <div class="descrip"> Bonjour et bienvenue sur mon CV intéractif ! Actuellement en première année de DUT MMI
      et passioné par les nouvelles technologies depuis plusieurs années. Etant curieux et à l'affût de nouveautés, je me tiens toujours informé sur l'actu web. <br> Pour en savoir plus sur moi, n'hésitez pas à me contacter grâce à la section <span> <a href="#contact_id"> contact </a> </span> </div>

      <div class="centreinteret">
        <span class="interest"> Mes centres d'intérêts </span> <br>
        <img src="img/manette.jpg" alt="Manette de jeu" class="imginterest" />
        <img src="img/raquette.png" alt="Raquette de tennis de table" class="imginterest" />
        <img src="img/linux.png" alt="Linuxpinguin" class="imginterest" />
      </div>
    </div>

    <hr id="competences_id" />

    <div class="competences">
      <h2> Compétences </h2>
      <div class="code">
        <i class="fa fa-code" aria-hidden="true"></i>
        <p class="skillstext"> Développement en PHP, MySQL et connaissances basiques de C. HTML5 & CSS3 pour intégrer de façon responsive </p>
      </div>

      <div class="design">
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
        <p class="skillstext"> Création de maquettes, affiches et flyers à l'aide de Photoshop et Illustrator </p>
      </div>

      <div class="language">
        <i class="fa fa-language" aria-hidden="true"></i>
        <p class="skillstext"> Allemand bilingue et bon niveau d’anglais (B2) </p>
      </div>
    </div>

    <hr id="portfolio_id" />

    <div class="portfolio">
      <h2> Portfolio </h2>
      <div class="thumbnail-grid flex">
        <a href="img/portfolio/bulles.png" target="_blank" class="flex-item">
    <figure class="i1">
      <figcaption> Création de bulles sur Photoshop</figcaption>
    </figure>
      </a>
    <a href="https://tp.iha.unistra.fr/~chassere/TP%20-%20Appli%20finale/index.php" target="_blank" class="flex-item">
    <figure class="i2">
      <figcaption> Application PHP de gestion d'une bibliothèque </figcaption>
    </figure>
    </a>
    <a href="img/portfolio/Fiction.mp4"class="flex-item" target="_blank">
    <figure class="i3">
      <figcaption>Mini-fiction</figcaption>
    </figure>
    </a>
    </div>

    <div class="thumbnail-grid flex">
      <a href="img/portfolio/logo.png" target="_blank" class="flex-item">
  <figure class="i4">
    <figcaption> Création d'un logo fictif pour un FabLab </figcaption>
  </figure>
    </a>
  <a href="img/portfolio/pictosbureau.jpg" target="_blank" class="flex-item">
  <figure class="i5">
    <figcaption> Pictogrammes réalisés sur Illustrator </figcaption>
  </figure>
  </a>
  <a href="img/portfolio/pictosgarage.png" target="_blank" class="flex-item">
  <figure class="i6">
    <figcaption>Pictogrammes pour une application mobile</figcaption>
  </figure>
  </a>
  </div>
  </div>

    <hr id="parcours_id" />

    <div class="parcours">
      <h2> Parcours </h2>
        <div class="date"> <span class="duree"> 2015 - 2017  </span> <br><span class="details_lycee"> IUT de Haguenau </span><br>
        <span class="duree" id="duree_responsive"> 2012 - 2015  </span> <br><span class="details_lycee"> Lycée Robert Schuman de Haguenau </span> </div>

      <div class="div_etudes">
        <span class="etude"> DUT Métiers du Multimédia et de l'Internet </span><br>
        <span class="details"> Développement et intégration web, ergonomie, infographie, audiovisuel,
          communication et marketing </span><br>

        <span class="etude"> Baccalauréat ES option math et obtention de l'ABIBAC </span><br>
        <span class="details"> Connaissances des sciences économiques et sociales, culture générale </span> </div>
    </div>

    <hr id="contact_id" />


  <div class="formulaire">
    <h2> Contact </h2>
  <form method="post" action="index.php?#contact_id">
    <input name="name" type="text" class="feedback-input" placeholder="Nom"  autocomplete="off"/>
    <input name="email" type="email" class="feedback-input" placeholder="Email" autocomplete="off" />
    <textarea name="message" class="feedback-input" placeholder="Votre message..."></textarea>
    <input type="submit" value="Envoyer" name="submit"/>
  </form>

    <div class="infosperso">
      <div class="mail">
        <span class="fa fa-envelope" aria-hidden="true"></span>
        <span class="personnal"> romainchassere@gmail.com </span>
      </div>
      <div class="phone">
        <i class="fa fa-mobile" aria-hidden="true"></i>
        <span class="personnal"> &nbsp;+33 6.31.52.97.82 </span>
      </div>
      <div class="twitter">
        <i class="fa fa-twitter-square" aria-hidden="true"></i>
        <span> <a href="https://twitter.com/Romain_Chsr" target="_blank" class="personnal"> &nbsp;Romain_Chsr </a> </span>
      </div>
      <div class="github">
        <i class="fa fa-github-square" aria-hidden="true"></i>
        <span> <a href="https://github.com/RomainChassere" target="_blank" class="personnal"> &nbsp;RomainChassere </a> </span>
      </div>
    </div>
      <div class="dlcv"> <a class="btn btn-primary btn-lg active" href="downloads/CV_Romain_CHASSERE.pdf" target="_blank" role="button"> Téléchargez mon CV </a>

       <a class="btn btn-primary btn-lg active" href="downloads/Lebenslauf_CHASSERE.pdf" target="_blank" role="button"> Mein Lebenslauf laden </a>
      </div>

    </div>
   </div>

      <?php //INIT VAR
      $name = isset($_POST['name']) ? $_POST['name'] : NULL;
      $email = isset($_POST['email']) ? $_POST['email'] : NULL;
      $message = isset($_POST['message']) ? $_POST['message'] : NULL; // CONTENU DU MESSAGE

      $to = 'romainchassere@gmail.com'; // ADRESSE DESTINATION
      $subject = "From: $name\n E-mail: $email\n"; // SUJET DU MAIL


  if ($name && $email && $message)
    if ($_POST['submit']) {
      if (mail ($to, $subject, $message)) {
        echo "<script>";
     		echo "alert('Votre message a bien été envoyé. Merci !');";
     		echo "</script>";
    } else {
        echo "<script>";
        echo "alert('Une erreur est survenue. Veuillez réessayer !');";
        echo "</script>";
    }
} ?>


  <footer>
    <p id="rights"> Romain Chasseré &copy; | 2016 &nbsp; &nbsp; &nbsp; Header picture: AxiomDesign  </p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
