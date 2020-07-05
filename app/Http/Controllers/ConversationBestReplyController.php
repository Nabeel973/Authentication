<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;

class ConversationBestReplyController extends Controller
{
    public function store(Reply $reply)
    {
        //authorize the current user has the permission to select the best reply
        
        //$this->authorize('update-conversation',$reply->conversation);

        $this->authorize('update',$reply->conversation);
        
        //then set it,conversations's best_reply_id=reply_id

        // $reply->conversation->best_reply_id=$reply->id;
        // $reply->conversation->save();

        //wrap it in model
        $reply->conversation->setBestReply($reply);

        return back();


    }
}
