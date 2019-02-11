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
        return current(BDD::select($sql, $array, 'UserManager'));
    }
    public function afficherInfoBorne($coordinates)
    {
        ?><div class='container-borne'><h2>Borne Hush</h2><p><?= $coordinates ?></p><p class='distance-borne'>2km</p><div class='container-infos'><div class='infos-borne'><img src='src/asset/images/prise-noir.png' alt='prise noir courant electrique'><p>2 places disponible</p><span>|</span><img src='src/asset/images/euro-noir.png' alt='euro noir monnaie'><p>0,30€ / min</p></div></div></div><?php
    }
}
