<?php

    require_once '/usr/share/php5/Smarty3/Smarty.class.php';
    
    $smarty = new Smarty();
     
    $smarty->setTemplateDir('/srv/www/htdocs/myblog/templates');
    $smarty->setCompileDir('/srv/www/htdocs/myblog/templates_c');
    $smarty->setCacheDir('/srv/www/htdocs/myblog/cache');
    $smarty->setConfigDir('/srv/www/htdocs/myblog/configs');