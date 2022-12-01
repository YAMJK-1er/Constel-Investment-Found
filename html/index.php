<?php

use PHPMailer\PHPMailer\PHPMailer;

    require_once "../PHPMailer-master/src/Exception.php";
    require_once "../PHPMailer-master/src/PHPMailer.php";
    require_once "../PHPMailer-master/src/SMTP.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constel Investment Found</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/mediaquerries.css">
    <link rel="stylesheet" href="../css/fontawesome-free-6.0.0-beta3-web/css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome-free-6.0.0-beta3-web/css/v4-shims.min.css">
</head>
<body>
<div id="bloc-page">
    <div id="heading">
        <div id="header">
            <div id="title">Constel</div>

            <div id="menu">
                <div class="menu-items"><a href="#">Acceuil</a></div>

                <div class="menu-items"><a href="#about">A propos</a></div>

                <div class="menu-items"><a href="#services">Services</a></div>

                <div class="menu-items"><a href="#conditions-section">Conditions</a></div>
                
                <div class="menu-items"><a href="#contact-form">Contact</a></div>
            </div>

            <div id="burger-menu">
                <i class="fa fa-align-justify fa-2x"></i>
            </div>
        </div>

        <div id="hide-menu">
            <div><a href="#">Acceuil</a></div>
            <div><a href="#about">A propos</a></div>
            <div><a href="#services">Services</a></div>
            <div><a href="#conditions-section">Conditions</a></div>
            <div><a href="#contact-form">Contact</a></div>
        </div>

        <div id="content">
            <div id="text">
                <h1>Investment Found</h1>

                <h2>Grandir ensemble</h2>

                <p>Notre vision, pensée et mûrie depuis de nombreuses années, est d'apporter au peuple burkinabè des solutions d'investissement qui leur permet de fructifier leurs épargnes</p>

            </div>

            <div id="logo">
                <img src="../images/logo.png" alt="Constel Logo" width="100%" height="100%">
            </div>
        </div>
    </div>

    <div id="about">
        <h1>Que dire de Constel Investment Found ?</h1>
        <hr id="about-hr">

        <div id="illustration">
            <img src="../images/03.jpg" alt="Illustration" width="100%" height="100%">
        </div>

        <div id="description">
            <p>CONSTEL INVESTMENT FOUND opère dans les marchés suivants :
                Le trading (FOREX), les produits dérivées des blockchain et de la cryptomonnaie.
                CONCRÈTEMENT qu’est ce que le FOREX : Le Forex, ou marché des changes, est le marché sur lequel les devises dites convertibles sont échangées l’une contre l’autre à des taux de change qui varient en permanence. On ne peut pas échanger de devises mais on achète une monnaie numérique €-$ qu'il faut ensuite re-vendre . Simplement expliquer, gagner de l’argent sur le FOREX c’est : gagner de l’argent grâce aux variations entre les différents paires de monnaies.</p>
        </div>

    </div>

    <div id="services">
        <h1>Nos différents services</h1>

        <h3>Nous vous proposons les prestations suivantes afin de fructifier vos investissements</h3>

        <div id="service-list">

            <div class="service short">
                <div class="icone"><i class="fa fa-donate fa-4x"></i></div>

                <h2>Le stacking</h2>

                <p>Nous mettons à disposition des cryptomonnaies au service d'une blockchain pour en assurer la sécurité et la fiabilité. En matière de stacking, le retour sur investissement en fonciton des cryptomonnaies va de 1 à 80% par an selon le cours actuel du marché 07/02/2022</p>
            </div>

            <div class="service short">
                <div class="icone"><i class="fa fa-chart-line fa-4x"></i></div>

                <h2>Le farming</h2>

                <p>Le farming désigne la génération de revenus passifs à partir de cryptoactifs que l'on est prêt à immobiliser sur une plateforme. En investissant dans le farming nous pouvons générer jusqu’à 229% de bénéfice annuelle.</p>
            </div>

            <div class="service short">
                <div class="icone"><i class="fa fa-dollar-sign fa-4x"></i></div>

                <h2> Les prêts cryptos</h2>

                <p>Nous utilisons des cryptomonnaies pour obtenir un prêt en monnaie fudiciaire (francs, euros, dollars, livre sterling, etc). Nous générons ainsi de l'argent en fournissant de la liquidité aux entreprises de prêts cryptos. Cela permat de recevoir en retour des intérêts allant de 6 à 25% par an.</p>
            </div>

            <div class="service long crypto">
                <div class="icone"><i class="fa fa-bitcoin fa-4x"></i></div>

                <h2>Les cryptomonnaies</h2>

                <p>Les cryptomonnaies étant des actifs numériques, elles obéïssent à la loi de l'offre de la demande, c'est à dire que leur valeur augmente quand de nombreuses personnes cherchent à en acheter pour leur besoin et inversement leur valeur baisse quand moins de personnes cherchent à en acheter. Gràce aux compétences que nous avons acquis depuis plusieurs années, nous achetons au plus bas et nous revendons au plus haut, ce qui nous permet de réaliser des marges considérables.</p>
            </div>

            <div class="service long">
                <div class="icone"><i class="fa fa-exchange-alt fa-4x"></i></div>

                <h2>Les pools de liquidité</h2>

                <p>Un pool de liquidités est une réserve de tokens² librement déposés dans un exchange (place de marché) décentralisé tel que Uniswap et pancakeswap, par de simples individus, afin qu'il soit possible à d'autres d'acheter ces tokens. En investissant de façon efficiente dans les pools de liquidité, on peut générer jus-qu’à 62% de bénéfice annuel</p>
            </div>

        </div>
    </div>
    
    <div id="raisons-sections">
        <h1>Pourquoi nous choisir</h1>
        <hr id="raisons-hr">

        <div id="raisons">
            <div class="raison">
                <div class="icone"><i class='fas fa-users fa-4x'></i></div>

                <p>Nous sommes une équipe pluridisciplinaire formée de spécialistes du trading, de la cryptomonnaie, de la communication et de la gestion d'entreprise.</p>
            </div>

            <div class="raison">
                <div class="icone"><i class="fas fa-users-cog fa-4x"></i></div>

                <p>Nous sommes une équipe expérimentée pour vous pour garantir l'entière sécurité de votre investissement et vous générer des taux de rentabilités imbattables.</p>
            </div>

            <div class="raison">
                <div class="icone"><i class="fas fa-user-clock fa-4x"></i></div>

                <p>Nous sommes à votre écoute 7j/7 pour répondre à toutes vos questions. <br> Notre engaement, être un entreprise proche de nos clients.</p>
            </div>
        </div>
    </div>

    <div id="conditions-section">
        <h1>Conditions d'adhésion</h1>

        <h3>Toute personne désirant investir grâce à CONSTEL INVESTMENT FOUND devra se conformer aux règles suivantes</h3>

        <div id="conditons">
            <div class="condition">
                <div class="icone"><i class="fa fa-user-check fa-4x"></i></div>

                <p>Être de bonne moralité. <br> Faire une déclaration sur honneur que l'argent investi est de source licite.</p>
            </div>

            <div class="condition">
                <div class="icone"><i class="fas fa-money-bill-wave fa-4x"></i></div>
                <p>Souscire à l'investissement <br> Minimum : 250.000f fcfa <br> Maximum : 15.000.000 fcfa</p>
            </div>

            <div class="condition">
                <div class="icone"><i class="fas fa-file-signature fa-4x"></i></div>

                <p>Adhérer à l’esprit de l’investissement en signant le contrat et l’engagement liant la société et le client.</p>
            </div>

        </div>
    </div>

    <div id="rentabilite-section">
        <h1>Taux de rentabilité</h1>
        <h3>Investir auprès de CONSTEL INVESTMENT FOUND vous garantit des taux de rentabilités formidables</h3>

        <div id="rentabilite">
            <div class="taux">
                <div class="icone"><i class="fas fa-coins fa-4x"></i></div>
                
                <p>250.000  fcfa - 1.000.000 fcfa <br> 50% de bénéfices chaque 04 mois</p>
            </div>

            <div class="taux">
                <div class="icone"><i class="fas fa-coins fa-4x"></i></div>

                <p>1.000.000 fcfa - 10.000.000 fcfa <br>60% de bénéfices chaque 04 mois</p>
            </div>

            <div class="taux">
                <div class="icone"><i class="fas fa-coins fa-4x"></i></div>

                <p>10.000.000 fcfa - 15.000.000 fcfa <br> 65% de bénéfices chaque 04 mois</p>
            </div>
        </div>
    </div>

    <div id="contact-section">
        <form action="#contact-section" id="contact-form" method="post">
            <div class="champ"><input type="text" name="nom" placeholder="Nom" required></div>
            <div class="champ"><input type="email" name="mail" placeholder="Email" required></div>
            <div class="champ"><input type="text" name="phone" placeholder="Telephone" required></div>
            <div id="message"><textarea name="message" cols="30" rows="5" placeholder="Votre message"></textarea></div>

            <div class="submit-btn"><button type="submit">Envoyer</button></div>
        </form>

        <h1>Contactez nous</h1>

        <h3>Remplissez ce formulaire afin de nous contacter</h3>
    </div>

    <div id="footer">
        <i class="fa fa-copyright"></i> Tout droits réservés, CONSTEL INVESTMENT FOUND
    </div>
</div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/index.js"></script>

    <?php
        if (isset($_POST['nom']) && isset($_POST['mail']) && isset($_POST['phone']) && isset($_POST['message']))
        {
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = 'smtp.gmail.com';
            $mail->Port='587';

            $mail->setFrom('www.yamjk1er@gmail.com');
            $mail->Username = 'www.yamjk1er@gmail.com';
            $mail->Password = '@A1N14G7E5L12O15';
            $mail->addAddress('www.yamjk@gmail.com');

            $mail->CharSet = 'utf-8' ;
            $mail->isHTML();

            $mail->Subject = 'Email envoyé par ' . $_POST['nom'];
            $mail->Body = '<p style=\'font-size : 1.5em;\'>' . $_POST['message'] . '</p><br>' . '<b>Son mail</b> : ' . $_POST['mail'] . '<br>' . '<b>Son numéros</b> : ' . $_POST['phone'];

            if ($mail->send())
            {
                echo "<script>alert('Votre email a été envoyé')</script>";
            }

            else
            {
                echo "<script>alert('Votre email n\'a pas pu être envoyé. Reéssayer s\'il vous plait')</script>";
            }
        }
    ?>
</body>
</html>