<?php

/**
 * Controller Borne
 */
class BorneController extends DefaultController
{
    public function appelRender($vue, $variables = array())
    {
        parent::render($vue, $variables);
    }
    public function afficherBorne($coordinates)
    {
        $born = new BorneManager();
        $borne = $born->afficherInfoBorne($coordinates);
        return $borne;
    }
}
