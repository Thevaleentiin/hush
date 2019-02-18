<?php

/**
 * BorneManager
 */
class BorneManager extends Borne
{
    public function findAllBorne()
    {
        $sql = 'SELECT * FROM borne';
        return BDD::select($sql, null, 'BorneManager');
    }
    public static function findOneById($id)
    {
        $sql = 'SELECT * FROM borne WHERE id= :id ';
        $array = array('id'=> $id);
        return current(BDD::select($sql, $array, 'BorneManager'));
    }
    public function afficherInfoBorne($coordinates, $idborne)
    {
        ?><div class='container-borne'><h2>Borne</h2><p><?= $coordinates ?></p><form class='cont-fav' action='?p=mycarnet' method='post'><input type='hidden' name='id_borne' value='<?= $idborne ?>'><input type='submit' name='Addfavoris' value=''></form><p class='distance-borne'>2km</p><div class='container-infos'><div class='infos-borne'><img src='src/asset/images/prise-noir.png' alt='prise noir courant electrique'><p>2 places disponible</p><span>|</span><img src='src/asset/images/euro-noir.png' alt='euro noir monnaie'><p>0,30€ / min</p></div></div><a href='?p=methodpayment&id_borne=<?= $idborne ?>'>Réserver une place</a></div><?php
    }
}
