<?php
 #CONFIGURACION DE MENUS
        $menu = array(
            array(
                'id' => 'pagina-1',
                'titulo' => 'Inicio',
                'enlace' => BASE_URL .DS . 'index'
            ),
            array(
                'id' => 'pagina-2',
                'titulo' => 'Noticias',
                'enlace' => BASE_URL . DS . 'index/noticias'
            ),
             array(
                'id' => 'pagina-3',
                'titulo' => 'Pagina Vacía',
                'enlace' => BASE_URL
            )
        );

        #RUTAS DEL LAYOUT POR DEFECTO
        $_layoutParams = array(
            'ruta_css' => BASE_URL . '/views/layout/' . DEFAULT_LAYOUT . '/css/',
            'ruta_img' => BASE_URL . '/views/layout/' . DEFAULT_LAYOUT . '/img/',
            'ruta_js' => BASE_URL . '/views/layout/' . DEFAULT_LAYOUT . '/js/',
            'menu' => $menu
        );