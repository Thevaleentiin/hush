<?php

/**
 * Class Chat Messenger
 */
class ChatController extends DefaultController
{
    public function appelRender($vue, $variables = array())
    {
        parent::render($vue, $variables);
    }

    public function RecupConversation()
    {
        $conv = new ChatManager();
        $req = $conv->findAllMessage();
    }

    public function RecupMessages($toId,$fromId){
        $text = new ChatManager();
        $req = $text->findMessages($toId,$fromId)
    }
}
