<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
      <title>Mango - Ries der Welt</title>
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
                <a href="index.html"><img src="../../media/de/home.png" alt='Mangos Welt' ></a>
            </div>
			
			<div id="chooseLanguage">
                <form method="get" action="../../index.php">
                    <p>
                        <select name="lang" id="lang" onChange="this.form.submit();">
                            <option value="en">English</option>
                            <option value="de" selected="selected">Deutsch</option>
                            <option value="fr">Français</option>
                        </select>
						<input type="hidden" name="page" value="contact.php">
                    </p>
                </form>
            </div>
        
			<div id="menu">
		        <ul>
			        <li><a href="index.html">Startseite</a></li>
			        <li>
                        <a href="mango.html">Mango</a>
                        <ul>
                                <li><a href="download.php">Herunterladen</a></li>
                                <li><a href="features.html">Features</a></li>
								<li><a href="screenshots.html">Vorschauen</a></li>
                        </ul>
                    </li>
			        <li>
                        <a href="support.html">Support</a>
                        <ul>
                                <li><a href="faq.html">F.a.q</a></li>
                                <li><a href="aboutUs.html">Über</a></li>
								<li><a href="mentions.html">Impressum</a></li>
                        </ul>
                    </li>
			        <li><a href="contact.php">Kontakt</a></li>
		        </ul>
            </div>
			
			<div id="breadcrumb">
				<ul>
					<li class="first">
						<a href="index.html" title="Zu Hause gehen"><img src="../../media/navHome.png" alt="Zu Hause gehen"></a><span class="end"></span>
					</li>
					<li>
						<span>Kontakt</span><span class="end"></span>
					</li>
				</ul>
			</div>
			
			<div id="content">
			
				<div class="clearme">
					
					<h1>Kontaktieren Sie Uns</h1><br>
					<h4>Lassen Sie uns eine Nachricht hinter !</h4>
					<?php
						// if the user has sent a message
						if (isset($_POST['lastName']) AND isset($_POST['firstName']) AND isset($_POST['message']))
						{
					?>
					<div id="messageSent">
						Ihre Nachricht wurde erfolgreich geschikt ! Sie werden eine Antwort bald bekommen. <br>
						Hier können Sie die Zusammenfassung von Ihrer Nachricht finden. <br>
						<div id="summary">
					<?php
							// we show it
							echo '<strong>Last Name</strong> : ' . $_POST['lastName'] . '<br>';
							echo '<strong>First Name</strong> : ' . $_POST['firstName'] . '<br>';
							echo '<strong>Message</strong> : ' . $_POST['message'] . '<br>';
							echo '<br><br>';
							echo '<a href="contact.php">Zurück</a>';
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
								<label class="form_col" for="lastName">Nachname :</label>
								<input name="lastName" id="lastName" type="text">
								<span class="tooltip">Ihre Nachname muss länger als 2 Zeichen sein.</span>
								<br><br>
							</p>
						
							<p>
								<label class="form_col" for="firstName">Vorname :</label>
								<input name="firstName" id="firstName" type="text">
								<span class="tooltip">Ihre Vorname muss länger als 2 Zeichen sein.</span>
								<br><br>
							</p>
						
							<p>
								<label class="form_col" for="message">Nachricht :</label>
								<textarea name="message" id="message" rows="10" cols="50"></textarea>						
								<span class="tooltip">Ihre Nachricht muss länger als 10 Zeichen sein.</span>
								<br><br>
							</p>
							<p class="submitButtons">
								<input type="submit" value="Abgeben">
								<input type="reset" value="Neu stellen">
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
					<a href="index.html"><img src="../../media/footerImage.png" alt="Mangos Welt"></a>
				</span>
				<div class="footerColumn">
					<div class="footerColumnTitle">
						MANGO
					</div>
					<ul>
						<li>
							<a href="features.html">Features</a>
						</li>
						<li>
							<a href="download.php">Herunterladen</a>
						</li>
					</ul>
				</div>
				<div class="footerColumn">
					<div class="footerColumnTitle">
						MEHR INFOS
					</div>
					<ul>
						<li>
							<a href="aboutUs.html">Über</a>
						</li>
						<li>
							<a href="faq.html">F.A.Q</a>
						</li>
						<li>
							<a href="mentions.html">Impressum</a>
						</li>
					</ul>
				</div>
				<div class="footerColumn">
					<div class="footerColumnTitle">
						KONTAKT
					</div>
					<ul>
						<li>
							<a href="contact.php">Kontaktieren Sie Uns</a>
						</li>
					</ul>
				</div>
				<div id="supportedNav">
					<a href="http://www.mozilla.com/"><img src="../../media/mozillaFirefox.png" alt="Mozilla Firefox logo"></a>
					<a href="http://www.google.com/chrome"><img src="../../media/googleChrome.png" alt="Google Chrome logo"></a><br>
					Optimitiert für Google Chrome und Mozilla Firefox
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