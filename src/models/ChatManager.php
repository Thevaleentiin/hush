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

        $sql = 'SELECT MAX(id), fromId, message, toId FROM message WHERE toId = :id GROUP BY fromId ';
        $array = array('id' => $resultat);
        $test = BDD::select($sql, $array, 'ChatManager');
        // var_dump($test);
        $users = array();
        foreach ($test as $key) {
            $sql2 = 'SELECT * FROM users WHERE id = :fromId';
            $array = array('fromId' => $key->getfromId());
            $user = current(BDD::select($sql2, $array, 'UserManager'));
            if (!in_array($user->getEmail(), $users)) {
                array_push($users, $user);
            }
            // var_dump($users);
            foreach ($users as $a) {
                echo'
                <article class="conversation">
                    <div class="img-container">
                        <img src="src/asset/images/profil-picture.png" alt="">
                    </div>
                    <div class="infos-conversation">
                    <form class="convtomessage" action="?p=message" method="post">
                        <input type="hidden" name="toid" value="'.$key->gettoId().'">
                        <input type="hidden" name="fromid" value="'.$key->getfromId().'">
                        <input type="hidden" name="Nom" value="'.$a->getNom().' '.$a->getPrenom().'">

                        <button type="submit" name="button">
                        <p>'.$a->getNom().' '.$a->getPrenom().'</p>
                        <p>Super et toi ? je pense...</p>
                        </button>
                    </form>
                    </div>
                </article>
                ';
            }
        }
    }
    public function findMessages($toId, $fromId)
    {
        $sql = 'SELECT * FROM message WHERE toId = :currentid AND fromId = :otherid OR toId = :otherid AND fromId = :currentid ORDER BY datemessage ASC';
        $array = array('currentid' => $toId, 'otherid' => $fromId);
        return BDD::select($sql, $array, 'ChatManager');
    }
    // Inscription
    public function AjouterMsg($toId, $fromId, $message)
    {
        $date = new DateTime('now');
        $sql = 'INSERT INTO message (toId, fromId, message, datemessage) VALUES (:toId, :fromId, :message, :datemessage)';
        $array = array(
          'toId'=>$toId,
          'fromId'=>$fromId,
          'message'=>$message,
          'datemessage'=> $date->format('Y-m-d H:i:s')
        );
        return BDD::insert($sql, $array);
    }
}
