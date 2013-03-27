<?php
    if (isset($_GET['p']) && !empty($_GET['p']) && is_file($_GET['p'].'.php') && $_GET['p'] != "home" && $_GET['p'] != "resume") {
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
                                <li class="active">
                                    <a rel="tooltip" href="#" data-original-title="Coming soon">Projects</a>
                                </li>
                                <li><a href="./?p=resume">Resume <img src="./static/img/Pdf-icon.png" alt="PDF" /></a></li>
                            <?php
                                    }
                                    else if ($page == "resume") {
                            ?>
                                <li><a href="./?p=home">Home</a></li>
                                <li>
                                    <a rel="tooltip" href="#" data-original-title="Coming soon">Projects</a>
                                </li>
                                <li><a href="./?p=resume">Resume <img src="./static/img/Pdf-icon.png" alt="PDF" /></a></li>
                            <?php
                                    }
                                    else {
                            ?>
                                <li class="active"><a href="./?p=home">Home</a></li>
                                <li>
                                    <a rel="tooltip" href="#" data-original-title="Coming soon">Projects</a>
                                </li>
                                <li><a href="./?p=resume">Resume <img src="./static/img/Pdf-icon.png" alt="PDF" /></a></li>
                            <?php
                                    }
                                }
                                else {
                            ?>
                                <li class="active"><a href="./?p=home">Home</a></li>
                                <li>
                                    <a rel="tooltip" href="#" data-original-title="Coming soon">Projects</a>
                                </li>
                                <li><a href="./?p=resume">Resume <img src="./static/img/Pdf-icon.png" alt="PDF" /></a></li>
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

