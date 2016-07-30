<?php

namespace App\Http\Controllers\home;

use App\Comment;
use App\Sku;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function comment(Request $request)
    {
//        $data = $request->all();

//        $sku = Sku::find($data['id']);

        //测试!
        $sku = Sku::find(2);


        

        return view('\home\comment',['sku'=>$sku]);
    }

    public function insert(Request $request)
    {
        $data = $request->all();
        $comment = new Comment();
        $comment->star = round($data['score']*10)/10;
        $comment->content = $data['content'];
        $comment->good_id = $data['good_id'];
        $comment->user_id = session('uid');
        $comment->save();


        return redirect('/detail?id='.$data['good_id'].'&&#comment');
    }
}
