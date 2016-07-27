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

            $info[] = Sku::where('attr',$value)->first()->info;

            foreach (Sku::where('attr',$value)->get() as $k => $v ){

                $color[$value][$k] = $v->color;
            }
            $i++;
        }

        $good->attr = $color;
        $good->info = $info;
        

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
            $sub_title = sub_title()[0];
            $value->sub_title =$sub_title;
        }

        return view('home.list',['goods'=>$goods]);
    }

    
}
