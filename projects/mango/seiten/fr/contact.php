<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
      <title>Mango - Parcours le monde</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15">
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="../../scripte/design.css">
        <link rel="shortcut icon" type="image/png" href="../../media/favicon.png">
        <!--[if !IE]> <-->
            <style type="text/CSS">
                #menu li ul 
                {
                    position:absolute;
                }
            </style>
        <!--><![endif]-->
    </head>
	
	<body>
	    <div id="container">
        
            <div id="header">
                <a href="index.html"><img src="../../media/fr/home.png" alt='Mango World' ></a>
            </div>
			
			<div id="chooseLanguage">
                <form method="get" action="../../index.php">
                    <p>
                        <select name="lang" id="lang" onChange="this.form.submit();">
                            <option value="en">English</option>
                            <option value="de">Deutsch</option>
                            <option value="fr" selected="selected">Fran�ais</option>
                        </select>
						<input type="hidden" name="page" value="contact.php">
                    </p>
                </form>
            </div>
        
			<div id="menu">
		        <ul>
			        <li><a href="index.html">Accueil</a></li>
			        <li>
                        <a href="mango.html">Mango</a>
                        <ul>
                                <li><a href="download.php">T�l�charger</a></li>
                                <li><a href="features.html">Fonctionnalit�s</a></li>
								<li><a href="screenshots.html">Aper�us</a></li>
                        </ul>
                    </li>
			        <li>
                        <a href="support.html">Support</a>
                        <ul>
                                <li><a href="faq.html">F.a.q</a></li>
                                <li><a href="aboutUs.html">A propos</a></li>
								<li><a href="mentions.html">Mentions</a></li>
                        </ul>
                    </li>
			        <li><a href="contact.php">Contact</a></li>
		        </ul>
            </div>
			
			<div id="breadcrumb">
				<ul>
					<li class="first">
						<a href="index.html" title="Aller � l'accueil"><img src="../../media/navHome.png" alt="Aller � l'accueil"></a><span class="end"></span>
					</li>
					<li>
						<span>Contact</span><span class="end"></span>
					</li>
				</ul>
			</div>
			
			<div id="content">
			
				<div class="clearme">
					
					<h1>Nous contacter</h1><br>
					<h4>Laissez-nous un message !</h4>
					<?php
						// if the user has sent a message
						if (isset($_POST['lastName']) AND isset($_POST['firstName']) AND isset($_POST['message']))
						{
					?>
					<div id="messageSent">
						Votre message a �t� envoy� avec succ�s ! Nous vous r�pondrons dans les plus brefs d�lais. <br>
						Voici le r�capitulatif de ce que vous nous avez envoy�. <br>
						<div id="summary">
					<?php
							// we show it
							echo '<strong>Nom</strong> : ' . $_POST['lastName'] . '<br>';
							echo '<strong>Pr�nom</strong> : ' . $_POST['firstName'] . '<br>';
							echo '<strong>Message</strong> : ' . $_POST['message'] . '<br>';
							echo '<br><br>';
							echo '<a href="contact.php">Retour</a>';
							echo '</div>';
							echo '</div>';
						}
						else
						{
						// else we show the form
					?>
					<div id="contact">
						<form id="contactForm" method="POST" action="contact.php">
							<p>
								<label class="form_col" for="lastName">Nom :</label>
								<input name="lastName" id="lastName" type="text">
								<span class="tooltip">Votre nom doit faire plus de 2 carat�res.</span>
								<br><br>
							</p>
						
							<p>
								<label class="form_col" for="firstName">Pr�nom :</label>
								<input name="firstName" id="firstName" type="text">
								<span class="tooltip">Votre nom doit faire plus de 2 carat�res.</span>
								<br><br>
							</p>
						
							<p>
								<label class="form_col" for="message">Message :</label>
								<textarea name="message" id="message" rows="10" cols="50"></textarea>						
								<span class="tooltip">Votre message doit faire plus de 10 carat�res.</span>
								<br><br>
							</p>
							<p class="submitButtons">
								<input type="submit" value="Envoyer">
								<input type="reset" value="Tout effacer">
							</p>
						</form>
						<?php }; ?>
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		<div id="footer">
            <div id="split"></div>
            <div id="footerContent">
                <span id="footerLogo">
					<a href="index.html"><img src="../../media/footerImage.png" alt="Mango World"></a>
				</span>
				<div class="footerColumn">
					<div class="footerColumnTitle">
						MANGO
					</div>
					<ul>
						<li>
							<a href="features.html">Fonctionnalit�s</a>
						</li>
						<li>
							<a href="download.php">T�l�charger</a>
						</li>
					</ul>
				</div>
				<div class="footerColumn">
					<div class="footerColumnTitle">
						PLUS D'INFOS
					</div>
					<ul>
						<li>
							<a href="aboutUs.html">A propos</a>
						</li>
						<li>
							<a href="faq.html">F.A.Q</a>
						</li>
						<li>
							<a href="mentions.html">Mentions</a>
						</li>
					</ul>
				</div>
				<div class="footerColumn">
					<div class="footerColumnTitle">
						CONTACT
					</div>
					<ul>
						<li>
							<a href="contact.php">Nous contacter</a>
						</li>
					</ul>
				</div>
				<div id="supportedNav">
					<a href="http://www.mozilla.com/"><img src="../../media/mozillaFirefox.png" alt="Mozilla Firefox logo"></a>
					<a href="http://www.google.com/chrome"><img src="../../media/googleChrome.png" alt="Google Chrome logo"></a><br>
					Optimis� pour Google Chrome et Mozilla Firefox	
					<br><br>
					<p>
						<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Strict" height="31" width="88"></a>
  					</p>
				</div>
            </div>
        </div>
	<script type="text/javascript" src="../../scripte/validateForm.js"></script>
	</body>
</html>