<?php


/**
 *  Class DefaultController
 */
class DefaultController
{
    protected static function render($vue, $variables)
    {
        extract($variables);
        ob_start();
        require_once 'src/views/'.$vue.'.php';
        $contenu = ob_get_clean();
        require_once 'src/views/base.php';
    }
}
