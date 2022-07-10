<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\intro;

class homeController extends Controller
{
    public function index(){
        $product=product::with('gallery')->orderBy('id','DESC')->where('status','!=',0)->limit(30)->get();
        $top_love=product::with('gallery')->orderBy('id','ASC')->where('status','!=',0)->limit(30)->get();
        $post=post::get();
        return view('public.home')->with(compact('product','top_love','post'));
    }
    public function keywords(Request $Request){
        $data = $Request->all();
        if($data['query']){
            $product = product::where('status','!=',0)->where('name','LIKE','%'.$data['query'].'%')->get();
            $output = '
            <ul class="dropdown-menu" style="display:block; position:absolute">'
            ;
            foreach($product as $key => $val){
               $output .= '
               <p><li class="li_search_ajax"><a href="#">'.$val->name.'</a></li>
               ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }
    public function search(Request $request){
        $product=product::with('gallery')->where('name','LIKE','%'.$request->search.'%')->orderBy('id','DESC')->where('status','!=',0)->get();
        return view('public.search')->with(compact('product'));
    }
    public function taikhoan(){
        return view('public.taikhoan.info');
    }
    public function gioithieu()
    {
        $intro=intro::first();
        return view('public.intro')->with(compact('intro'));
    }
}
