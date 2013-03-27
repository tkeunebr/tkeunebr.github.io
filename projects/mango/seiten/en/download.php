<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
      <title>Mango - Browse the world</title>
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
                <a href="index.html"><img src="../../media/en/home.png" alt='Mango World'></a>
            </div>
            
            <div id="chooseLanguage">
                <form method="get" action="../../index.php">
                    <p>
                        <select name="lang" id="lang" onChange="this.form.submit();">
                            <option value="en" selected="selected">English</option>
                            <option value="de">Deutsch</option>
                            <option value="fr">Fran�ais</option>
                        </select>
						<input type="hidden" name="page" value="download.php">
                    </p>
                </form>
            </div>
        
            <div id="menu">
		        <ul>
			        <li><a href="index.html">Home</a></li>
			        <li>
                        <a href="mango.html">Mango</a>
                        <ul>
                                <li><a href="download.php">Download</a></li>
                                <li><a href="features.html">Features</a></li>
								<li><a href="screenshots.html">Screenshots</a></li>
                        </ul>
                    </li>
			        <li>
                        <a href="support.html">Support</a>
                        <ul>
                                <li><a href="faq.html">F.a.q</a></li>
                                <li><a href="aboutUs.html">About</a></li>
								<li><a href="mentions.html">Mentions</a></li>
                        </ul>
                    </li>
			        <li><a href="contact.php">Contact</a></li>
		        </ul>
            </div>
			
			<div id="breadcrumb">
				<ul>
					<li class="first">
						<a href="index.html" title="Go to Home"><img src="../../media/navHome.png" alt="Go to Home"></a><span class="end"></span>
					</li>
					<li>
						<a href="mango.html" title="Go to Mango page">Mango</a><span class="end"></span>
					</li>
					<li>
						<span>Download</span><span class="end"></span>
					</li>
				</ul>
			</div>
			
			<div id="content">
			
				<div class="clearme">
					
					<h1>Download</h1>
					
					<div class="tabNav">
						<ul id="navList">
							<li><a href="#windows" onclick="setTab('winContent', 'winLink');" style="background-color: White;" id="winLink">Windows</a></li>
							<li><a href="#linux" onclick="setTab('linuxContent', 'linuxLink');" id="linuxLink">Linux</a></li>
							<li><a href="#mac" onclick="setTab('macContent', 'macLink');" id="macLink">Mac</a></li>
						</ul>
						<div class="tabContent" id="winContent" style="display: block;">
							<h1>Windows Download</h1>
							<div class="downloadContent">
								<div class="changeLog">
									<strong>Changelog</strong>
									<br><br><hr>
									<div class="lastVersion">
										<h4>V 1.2 - 04/07/11</h4>
										<ul>
											<li>Basic download manager added</li>
											<li>Added WebInspector</li>
											<li>Function to hightlight specific text on the page</li>
											<li>Bug fix in the function which closes tabs</li>
											<li>You don't need to reboot app anymore to apply new settings</li>
											<li>If the download dir doesn't exist, it'll be created automatically</li>
											<li>Added functions Copy/Cut/Paste/Select all</li>
											<li>Added private browsing mode</li>
											<li>Few other tweaks and fixes</li>
										</ul>
									</div>
									<div class="oldVersions">
										<h4>V 1.1 - 01/07/11</h4>
										<ul>
											<li>New design</li>
											<li>Preferences panel</li>
											<li>View menu</li>
											<li>Bug fix in the search query algorithm</li>
											<li>Other bug fixes</li>
										</ul>
									</div>
									<div class="oldVersions">
										<h4>V 1.0 - 25/06/11</h4>
										<ul>
											<li>First release</li>
										 	<li>For any comment, please <a href="contact.php">contact us.</a></li>
										</ul>
									</div>
								</div>
								<img src="../../media/logoWindows.png" class="os" alt="Windows Logo">
								<strong>Last version</strong> : 1.2 <br>
								<strong>Size</strong> : 14.3 MB <br>
								<strong>Format</strong> : .zip <br>
								<a href="../../download/mango_windows_1.2.zip"><img src="../../media/en/buttonDownload.png" class="downloadButton" alt="Download Button"></a>
							</div>
						</div>
						<div class="tabContent" id="linuxContent">
							<h1>Linux Download</h1>
							<div class="downloadContent">
								<div class="changeLog">
									<strong>Changelog</strong>
									<br><br><hr>
									<div class="lastVersion">
										<h4>V 1.1 - 04/07/11</h4>
										<ul>
											<li>Basic download manager added</li>
											<li>Added WebInspector</li>
											<li>Function to hightlight specific text on the page</li>
											<li>Bug fix in the function which closes tabs</li>
											<li>You don't need to reboot app anymore to apply new settings</li>
											<li>If the download dir doesn't exist, it'll be created automatically</li>
											<li>Added functions Copy/Cut/Paste/Select all</li>
											<li>Added private browsing mode</li>
											<li>Few other tweaks and fixes</li>
										</ul>
									</div>
									<div class="oldVersions">
										<h4>V 1.0 - 01/07/11</h4>
										<ul>
											<li>First release</li>
											<li>For any comment, please <a href="contact.php">contact us.</a></li>
										</ul>
									</div>
								</div>
								<img src="../../media/logoLinux.png" class="os" alt="Linux Logo">
								<strong>Last version</strong> : 1.1 <br>
								<strong>Size</strong> : 1.35 MB <br>
								<strong>Format</strong> : .tar.gz <br>
								<a href="../../download/mango_linux_1.1.tar.gz"><img src="../../media/en/buttonDownload.png" class="downloadButton" alt="Download Button"></a>
							</div>
						</div>
						<div class="tabContent" id="macContent">
							<h1>Mac OS Download</h1>
							<div class="downloadContent">
								<div class="changeLog">
									<strong>Changelog</strong>
									<br><br><hr>
									<div class="lastVersion">
										<h4>V 1.0 - 01/07/11</h4>
										<ul>
											<li>First release</li>
											<li>For any comment, please <a href="contact.php">contact us.</a></li>
										</ul>
									</div>
									<div class="oldVersions">
										<ul>
											<li style="list-style-type: none;"></li>
										</ul>
									</div>
								</div>
								<img src="../../media/logoMac.png" class="os" alt="Mac Logo">
								<strong>Last version</strong> : 1.0 <br>
								<strong>Size</strong> : 700 KB <br>
								<strong>Format</strong> : .zip <br>
								<a href="../../download/mango_mac_1.0.app.zip"><img src="../../media/en/buttonDownload.png" class="downloadButton" alt="Download Button"></a>
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
							<a href="features.html">Features</a>
						</li>
						<li>
							<a href="download.php">Download</a>
						</li>
					</ul>
				</div>
				<div class="footerColumn">
					<div class="footerColumnTitle">
						MORE INFOS
					</div>
					<ul>
						<li>
							<a href="aboutUs.html">About</a>
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
							<a href="contact.php">Contact us</a>
						</li>
					</ul>
				</div>
				<div id="supportedNav">
					<a href="http://www.mozilla.com/"><img src="../../media/mozillaFirefox.png" alt="Mozilla Firefox logo"></a>
					<a href="http://www.google.com/chrome"><img src="../../media/googleChrome.png" alt="Google Chrome logo"></a><br>
					Optimized for Google Chrome and Mozilla Firefox	
					<br><br>
					<p>
						<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Strict" height="31" width="88"></a>
  					</p>
				</div>
            </div>
        </div>
		
	</body>
</html>

