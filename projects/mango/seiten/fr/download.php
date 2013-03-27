<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
      <title>Mango - Parcours le monde</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15">
		<link rel="stylesheet" media="screen" type="text/css" title="Design" href="../../scripte/design.css">
        <link rel="shortcut icon" type="image/png" href="../../media/favicon.png">
		<script type="text/javascript" src="../../scripte/tabNav.js"></script>
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
                <a href="index.html"><img src="../../media/fr/home.png" alt='Mango World'></a>
            </div>
            
            <div id="chooseLanguage">
                <form method="get" action="../../index.php">
                    <p>
                        <select name="lang" id="lang" onChange="this.form.submit();">
                            <option value="en">English</option>
                            <option value="de">Deutsch</option>
                            <option value="fr" selected="selected">Français</option>
                        </select>
						<input type="hidden" name="page" value="download.php">
                    </p>
                </form>
            </div>
        
            <div id="menu">
		        <ul>
			        <li><a href="index.html">Accueil</a></li>
			        <li>
                        <a href="mango.html">Mango</a>
                        <ul>
                                <li><a href="download.php">Télécharger</a></li>
                                <li><a href="features.html">Fonctionnalités</a></li>
								<li><a href="screenshots.html">Aperçus</a></li>
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
						<a href="index.html" title="Aller à l'accueil"><img src="../../media/navHome.png" alt="Aller à l'accueil"></a><span class="end"></span>
					</li>
					<li>
						<a href="mango.html" title="Aller à la page Mango">Mango</a><span class="end"></span>
					</li>
					<li>
						<span>Télécharger</span><span class="end"></span>
					</li>
				</ul>
			</div>
			
			<div id="content">
			
				<div class="clearme">
					
					<h1>Téléchargement</h1>
					
					<div class="tabNav">
						<ul id="navList">
							<li><a href="#windows" onclick="setTab('winContent', 'winLink');" style="background-color: White;" id="winLink">Windows</a></li>
							<li><a href="#linux" onclick="setTab('linuxContent', 'linuxLink');" id="linuxLink">Linux</a></li>
							<li><a href="#mac" onclick="setTab('macContent', 'macLink');" id="macLink">Mac</a></li>
						</ul>
						<div class="tabContent" id="winContent" style="display: block;">
							<h1>Télécharger pour Windows</h1>
							<div class="downloadContent">
								<div class="changeLog">
									<strong>Changelog</strong>
									<br><br><hr>
									<div class="lastVersion">
										<h4>V 1.2 - 04/07/11</h4>
										<ul>
											<li>Ajout d'un gestionnaire de téléchargement basique</li>
											<li>WebInspector ajouté</li>
											<li>Fonction de recherche sur la page</li>
											<li>Correction d'un bug dans la gestion de fermeture des onglets</li>
											<li>Le redémarrage de l'application n'est plus nécessaire pour appliquer les nouveaux paramètres</li>
											<li>Si le dossier de téléchargement choisi n'existe pas, il sera créé automatiquement</li>
											<li>Ajout des fonctions Copier/Coller/Couper/Tout sélectionner</li>
											<li>Ajout d'un mode de navigation privée</li>
											<li>Correction d'autres bugs mineurs</li>
										</ul>
									</div>
									<div class="oldVersions">
										<h4>V 1.1 - 01/07/11</h4>
										<ul>
											<li>Nouveau design</li>
											<li>Ajout d'un panneau d'options</li>
											<li>Ajout d'un menu affichage</li>
											<li>Correction d'un bug dans l'algorithme de recherche</li>
											<li>Correction de divers bugs</li>
										</ul>
									</div>
									<div class="oldVersions">
										<h4>V 1.0 - 25/06/11</h4>
										<ul>
											<li>Première release</li>
										 	<li>Pour tout commentaire, <a href="contact.php">contactez-nous.</a></li>
										</ul>
									</div>
								</div>
								<img src="../../media/logoWindows.png" class="os" alt="Logo Windows">
								<strong>Dernière version</strong> : 1.2 <br>
								<strong>Taille</strong> : 14,3 Mo <br>
								<strong>Format</strong> : .zip <br>
								<a href="../../download/mango_windows_1.2.zip"><img src="../../media/fr/buttonDownload.png" class="downloadButton" alt="Bouton télécharger"></a>
							</div>
						</div>
						<div class="tabContent" id="linuxContent">
							<h1>Télécharger pour Linux</h1>
							<div class="downloadContent">
								<div class="changeLog">
									<strong>Changelog</strong>
									<br><br><hr>
									<div class="lastVersion">
										<h4>V 1.1 - 04/07/11</h4>
										<ul>
											<li>Ajout d'un gestionnaire de téléchargement basique</li>
											<li>WebInspector ajouté</li>
											<li>Fonction de recherche sur la page</li>
											<li>Correction d'un bug dans la gestion de fermeture des onglets</li>
											<li>Le redémarrage de l'application n'est plus nécessaire pour appliquer les nouveaux paramètres</li>
											<li>Si le dossier de téléchargement choisi n'existe pas, il sera créé automatiquement</li>
											<li>Ajout des fonctions Copier/Coller/Couper/Tout sélectionner</li>
											<li>Ajout d'un mode de navigation privée</li>
											<li>Correction d'autres bugs mineurs</li>
										</ul>
									</div>
									<div class="oldVersions">
										<h4>V 1.0 - 01/07/11</h4>
										<ul>
											<li>Première release</li>
											<li>Pour tout commentaire, <a href="contact.php">contactez-nous.</a></li>
										</ul>
									</div>
								</div>
								<img src="../../media/logoLinux.png" class="os" alt="Logo Linux">
								<strong>Dernière version</strong> : 1.0 <br>
								<strong>Taille</strong> : 1,35 Mo <br>
								<strong>Format</strong> : .tar.gz <br>
								<a href="../../download/mango_linux_1.1.tar.gz"><img src="../../media/fr/buttonDownload.png" class="downloadButton" alt="Bouton télécharger"></a>
							</div>
						</div>
						<div class="tabContent" id="macContent">
							<h1>Télécharger pour Mac OS</h1>
							<div class="downloadContent">
								<div class="changeLog">
									<strong>Changelog</strong>
									<br><br><hr>
									<div class="lastVersion">
										<h4>V 1.0 - 02/07/11</h4>
										<ul>	
											<li>Première release</li>
											<li>Pour tout commentaire, <a href="contact.php">contactez-nous.</a></li>
										</ul>
									</div>
									<div class="oldVersions">
										<ul>
											<li style="list-style-type: none;"></li>
										</ul>
									</div>
								</div>
								<img src="../../media/logoMac.png" class="os" alt="Logo Mac">
								<strong>Dernière version</strong> : 1.0 <br>
								<strong>Taille</strong> : 700 Ko <br>
								<strong>Format</strong> : .zip <br>
								<a href="../../download/mango_mac_1.0.app.zip"><img src="../../media/fr/buttonDownload.png" class="downloadButton" alt="Bouton télécharger"></a>
							</div>
						</div>
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
							<a href="features.html">Fonctionnalités</a>
						</li>
						<li>
							<a href="download.php">Télécharger</a>
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
					Optimisé pour Google Chrome et Mozilla Firefox	
					<br><br>
					<p>
						<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Strict" height="31" width="88"></a>
  					</p>
				</div>
            </div>
        </div>
		
	</body>
</html>

