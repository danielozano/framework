<?php
    include_once 'menus.php'
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF8" />
        <title><?php if (isset($this->titulo)) echo $this->titulo; ?></title>
        <link href="<?php echo $_layoutParams['ruta_css'] ?>styles.css" rel="stylesheet" type="text/css" />
        <script src="http://code.jquery.com/jquery-latest.min.js "></script>
        
    </head>
    <body>
        <div id="main">
        <div id="header">
            <div>
                <h1><?php echo APP_NAME; ?></h1> 
            </div>

            <div id="menu-top">
                <ul>
                    <?php
                    if (isset($_layoutParams['menu'])):
                        foreach ($_layoutParams['menu'] as $menu):
                            ?>
                    <li>
                        <span>
                            <a id="<?php echo $menu['id'] ?>" href="<?php echo $menu['enlace']; ?>">
                                <?php echo $menu['titulo']; ?>
                            </a>
                        </span>
                    </li>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
        <div id="container-gen">

