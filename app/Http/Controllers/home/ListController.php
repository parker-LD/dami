<?php

namespace App\Http\Controllers\home;

use App\Cate;
use App\Good;
use App\Sku;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListController extends Controller
{

    public function detail(Request $request)
    {
//        dd($request->only('id'));

        $good = Good::find($request->only('id')['id']);

        $good->img = explode(',',$good->img);

        $skus = $good->skus ;

        $arr = [];
        foreach ($skus as $key => $value) {
            $arr[] = $value->attr;
        }

        $attr = array_unique($arr);

        $color = [];
        $info = [];

        $i = 0;
        foreach ($attr as $key => $value) {

            $info[$value] = Sku::where('attr',$value)->first()->info;

            foreach (Sku::where('attr',$value)->get() as $k => $v ){

                $color[$value][$k] = $v->color;
            }
            $i++;
        }

        $good->attr = $color;
        $good->info = $info;
        
//        dd($good->info);
        return view('home.detail',['good'=>$good]);
    }
    
    public function list_(Request $request)
    {
//        $data = $request->only('id');
//        $goods = Cate::find($data['id'])->goods;
        
        
        

        $cates = Cate::where('pid','1')->get();

        $arr = [];

        foreach ($cates as $key => $value) {
            $arr[] = $value->id;
        }



        $goods = Good::whereIn('cate_id',$arr)->get();



        foreach ($goods as $key => $value) {
            $sub_title = sub_title();
            $value->sub_title =$sub_title;
        }


        
        return view('home.list',['goods'=>$goods]);
    }

    public function List_Search(Request $request)
    {
        $data = $request->all();

        /**测试**/ $data['kWord'] = '手机'; /**结束**/

        $cates = Cate::where('pid',0)->get();


        $cate = Cate::where('name','like','%'.$data['kWord'].'%')->where('pid',0)->get();

        $pid = [];
        foreach ($cate as $key => $value) {
            $pid[] = $value->id;
        }

        $cate = Cate::whereIn('pid',$pid)->get();

        $pid = [];
        foreach ($cate as $key => $value) {
            $pid[] = $value->id;
        }
        $search_goods = Good::whereIn('cate_id',$pid)->Get();



        $goods = Good::take('10')->orderBy('created_at','desc')->get();

        return view('home.list_search',['cates'=>$cates,'search_goods'=>$search_goods,'goods'=>$goods]);
    }

    
}
