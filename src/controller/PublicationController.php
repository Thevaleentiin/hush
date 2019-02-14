<?php

/**
 * Controller Borne
 */
class PublicationController extends DefaultController
{
    public function appelRender($vue, $variables = array())
    {
        parent::render($vue, $variables);
    }
    public function RecupPublication($id){
        $req = new PublicationManager();
        return $req->GetAllPubli($id);
    }
    public function SendPublication($id, $id_borne, $publication)
    {
        $rez = new PublicationManager();
        return $rez->AjouterPubli($id, $id_borne, $publication);
    }

}
