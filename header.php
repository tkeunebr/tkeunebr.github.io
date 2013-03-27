<?php
    if (isset($_GET['p']) && !empty($_GET['p']) && is_file($_GET['p'].'.php')) {
	    $page = $_GET['p'];
    }
	else {
	    $page = "home";
    }
?>


        <header>
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <a class="brand" href="./?p=home">thomaskeunebroek.fr</a>
                        <div class="nav-collapse collapse">
                            <ul class="nav pull-right">
                            <?php
                                if (isset($page) && !empty($page)) {
                                    if ($page == "projects") {
                            ?>
                                <li><a href="./?p=home">Home</a></li>
                                <li class="active"><a href="./?p=projects">Projects</a></li>
                                <li>
                                    <a rel="tooltip" href="./?p=resume" data-original-title="Available in PDF only at the time">Resume</a>
                                </li>
                            <?php
                                    }
                                    else if ($page == "resume") {
                            ?>
                                <li><a href="./?p=home">Home</a></li>
                                <li><a href="./?p=projects">Projects</a></li>
                                <li class="active">
                                    <a rel="tooltip" href="./?p=resume" data-original-title="Available in PDF only at the time">Resume</a>
                                </li>
                            <?php
                                    }
                                    else {
                            ?>
                                <li class="active"><a href="./?p=home">Home</a></li>
                                <li><a href="./?p=projects">Projects</a></li>
                                <li>
                                    <a rel="tooltip" href="./?p=resume" data-original-title="Available in PDF only at the time">Resume</a>
                                </li>
                            <?php
                                    }
                                }
                                else {
                            ?>
                                <li class="active"><a href="./?p=home">Home</a></li>
                                <li><a href="./?p=projects">Projects</a></li>
                                <li>
                                    <a rel="tooltip" href="./?p=resume" data-original-title="Available in PDF only at the time">Resume</a>
                                </li>
                            <?php
                                }
                            ?>
                                <li>
                                    <a class="obfuscated-link" rel="tooltip" href="thomas keunebroek gmail com" data-original-title="Mailto">Contact</a>
                                    </script>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </header>

