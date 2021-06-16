<?php

function navigation()
{
    $uri = str_replace(ROOTFOLDER, '', $_SERVER['REQUEST_URI']);
    $page = '404';

    switch ($uri){

        case '/':
            $page = 'home';
            break;

        case '/sponsor':
            $page = 'sponsor';
            break;

        case '/contact':
            $page = 'contact';
            break;

        case '/equipe-CSGO':
            $page = 'equipecsgo';
            break;

        case '/mentions-legales':
            $page = 'legals';
            break;

        case '/rgpd':
            $page = 'rgpd';
            break;
    }

    if($page === '404'){
        http_response_code(404);
    }

    require(REALPATH . '/includes/common/head.php');
    require(REALPATH . '/includes/pages/'. $page .'.php');
    require(REALPATH . '/includes/common/footer.php');
}
?>