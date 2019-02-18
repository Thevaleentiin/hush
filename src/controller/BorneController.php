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
    public function afficherBorne($coordinates, $idborne)
    {
        $born = new BorneManager();
        $borne = $born->afficherInfoBorne($coordinates, $idborne);
        return $borne;
    }
    public function chercherUneBorne($id){
        $req = new BorneManager();
        $borne = $req->findOneById($id);
        return $borne;
    }
}
