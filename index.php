<?php

$excludeDir = ['.', '..', 'homepage-webserver'];
$dirList = array_diff(scandir('.'), $excludeDir);
foreach ($dirList as $element){
    if(!is_dir($element)){
        unset($dirList[array_search($element, $dirList)]);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="homepage-webserver/ressources/app/materialize-src/sass/materialize.css"  media="screen,projection"/>
    <link rel="icon" href="homepage-webserver/favicon.ico">
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<div>
    <div class="row">
        <nav>
            <div class="nav-wrapper">
                <form>
                    <div class="input-field">
                        <input id="search" type="search" required autocomplete="off">
                        <label for="search"><i class="material-icons">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
            </div>
        </nav>
    </div>
    <div class="row">
        <?php
            foreach ($dirList as $element){
                ?>
                <div class="col m6 l4 s12 element" id="<?php echo $element ?>">
                    <a href="<?php echo $element ?>">
                        <ul class="collection hoverable">
                            <li class="collection-item avatar">
                                <i class="material-icons circle">folder</i>
                                <span class="title"><?php echo $element ?></span>
                                <p>
                                    <?php
                                        $dir = scandir($element);
                                        echo count($dir);
                                    ?>
                                    sub-folder¹ / files¹
                                </p>
                                <i class="material-icons secondary-content">open_in_new</i>
                            </li>
                        </ul>
                    </a>
                </div>
                <?php
            }
        ?>
    </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="homepage-webserver/ressources/app/materialize-src/js/materialize.min.js"></script>
<script type="text/javascript" src="homepage-webserver/ressources/js/custom.js"></script>
</body>
</html>
