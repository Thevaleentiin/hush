<?php

/**
 *  Chat Manager
 */
class ChatManager extends Chat
{
    public function findAllMessage()
    {
        $req = new UserController();
        $resultat = $req->AfficherNomCompte($_SESSION['email'], 'id');

        $sql = 'SELECT * FROM message WHERE toId = :id';
        $array = array('id' => $resultat);
        $test = BDD::select($sql, $array, 'ChatManager');
        var_dump($test);
        $users = array();
        foreach ($test as $key) {
            $sql2 = 'SELECT * FROM users WHERE id = :fromId';
            $array = array('fromId' => $key->getfromId());
            $user = current(BDD::select($sql2, $array, 'UserManager'));
            if (!in_array($user->getEmail(), $users)) {
                array_push($users, $user);
            }
            var_dump($users);
            // foreach ($users as $a) {
            //     echo'
            //     <article class="conversation">
            //         <div class="img-container">
            //             <img src="src/asset/images/profil-picture.png" alt="">
            //         </div>
            //         <div class="infos-conversation">
            //             <p>'.$a->getNom().' '.$a->getPrenom().'</p>
            //             <p>Super et toi ? je pense...</p>
            //         </div>
            //     </article>
            //     ';
            // }
        }
    }
}
