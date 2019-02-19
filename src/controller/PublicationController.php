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
     public function RecupererDesPubli($id_borne)
     {
         $pb = new PublicationManager();
         $publis = $pb->getAllPublibyBorne($id_borne);

         foreach ($publis as $publi) {
             $nomuser = new UserController();
             $lenom = $nomuser->findNameForOneUser($publi->getidUser());
             ?>
             <article class="publication-content">
                 <div class="top-content">
                     <img src="src/asset/images/profil-picture.png" alt="photo de profil">
                     <div class="text-content">
                         <p class="title-content"><span><?= $lenom->getNom().' '.$lenom->getPrenom() ?></span> à partagé une publication</p>
                         <p class="date"><?= $publi->getTimemessage() ?></p>
                     </div>
                 </div>
                 <p class="message-content">
                     <?= $publi->getPublication() ?>
                 </p>
             </article>
             <?php
         }
     }
}
