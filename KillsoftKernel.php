<?php

namespace Killsoft;

class KillsoftKernel extends Kernel
{
    public function getRoutes()
    {
        return array(
            ['GET', '/', 'Killsoft\Controller\IndexController:indexAction'],
            ['GET', '/articles/{id}', 'Killsoft\Controller\ArticleController:getArticleAction'],
            ['PUT', '/articles/{id}', 'Killsoft\Controller\ArticleController:putArticleAction'],
            ['POST', '/articles/{id}', 'Killsoft\Controller\ArticleController:postArticleAction'],
            ['DELETE', '/articles/{id}', 'Killsoft\Controller\ArticleController:deleteArticleAction'],

            ['GET', '/articles', 'Spolischook\Controller\ArticleController:getArticlesAction'],
        );
    }
    public function getTemplateHandler()
    {
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../../app/views');
        $twig = new \Twig_Environment($loader);

        return $twig;
    }
}