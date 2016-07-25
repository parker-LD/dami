<?php

namespace App\Http\Controllers\admin;

use App\comment;
use App\good;
use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class commentController extends Controller
{
    public function getIndex()
    {
        
        $comments = comment::all();
        
        return view('admin.comment.index',['comments'=>$comments,'title'=>'回复列表']);
    }
    public function getAdd()
    {
        $goods = good::all();
        $comments = comment::where('pid',0)->get();
        return view('admin.comment.add',['title'=>'添加用户','goods'=>$goods,'comments'=>$comments]);
    }

//    public function postInsert(Requests\commentInsertRequest $request)
    public function postInsert(Request $request)
    {
        $comment = new comment();
        $data = $request->all();
        $comment->user_id = $data['user_id'];
        $comment->good_id = $data['good_id'];
        $comment->star = $data['star'];
        $comment->pid = $data['pid'];
        if($data['pid']==0){
            $comment->path = 0;
        }else{
            $pcomment = comment::find($data['pid']);
            $comment->path = $pcomment->pid.','.$pcomment->id;
        }
        $comment->status = 1;
        if($request->hasFile('pic'))
        {
            $comment->img = self::uploadFile();

        }else{
            $comment->img = config('app.upload_image_dir').'good.png';
        }
        $comment->content = $data['content'];


        if($comment->save()){
            return redirect('admin/comment/add')->with('info','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    public static function uploadFile()
    {
        $pic = $_FILES['pic']['name'];
        $dir = config('app.upload_image_dir');
        $name = trim($dir.rand(1000000,9000000).time().'.'.pathinfo($pic,4),'.');
        Input::file('pic')->move($dir,'/'.$name);
        return $name;
    }

    public function getEdit(Request $request)
    {
        $comment = comment::find($request->id);
        $goods = good::all();
        $comments = comment::where('pid',0)->get();
        return view('admin.comment.update',['comment'=>$comment,'comments'=>$comments,'goods'=>$goods,'title'=>'修改详情']);
    }

    public function postUpdate(Request $request)
    {
        $data = $request->all();
        $comment = comment::where('id',$request->only('id'))->first();

        //判断用户名
        if($comment['title'] != $request->title) {

            if(comment::where('title','like', $request->title)->first()){

                return back()->with('error','文章标题已存在');

            }
        }

        $comment -> user_id = $data['user_id'];
        $comment -> good_id = $data['good_id'];
        $comment -> star = $data['star'];
        $comment -> pid = $data['pid'];
        $comment -> status = $data['status'];
        $comment -> content = $data['content'];
        if($request->hasFile('pic')){
            self::updateFile();
            $comment->img = self::uploadFile();
        }

        $comment -> save();
        
        return redirect('/admin/comment')->with('info','更新成功');
    }

    public static function updateFile()
    {
        $pic = comment::select('img')->where('id',Input::only('id'))->first();
        
        $dbpic = $pic['img'];

        $defaultpic = config('app.upload_image_dir').'comment.png';

        if($dbpic != $defaultpic)
        {
            if(file_exists($dbpic)){
                unlink(realpath($dbpic));
            }
        }
    }


    public function getDelete(Request $request)
    {
        $id = $request->input('id');
        
        if(comment::where('id',$id)->first()->delete()){
            return back()->with('info','删除成功!');
        }else{
            return back()->with('error','删除失败!');
        }
    }
}
