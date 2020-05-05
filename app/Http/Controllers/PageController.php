<?php

namespace App\Http\Controllers;
use App\Slide;
use App\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function getIndex(){
    $slide = Slide::all();
    // return view('page.trangchu',['slide'=>$slide]);
    $new_product = Product::where('new',1)->paginate(4,['*'],'pag1');
    // dd($new_product);
    $sale_products = Product::where('promotion_price','<>',0)->paginate(8,['*'],'pag2');
    // dd($hot_products);
    $all_products = Product::paginate(12,['*'],'pag3');
    return view('page.trangchu',compact('slide','new_product','sale_products','all_products'));
  }

  public function getProductType(){
    return view('page.loai_sanpham');
  }

  public function getProductInfo(){
    return view('page.chitiet_sanpham');
  }

  public function getContact(){
    return view('page.lienhe');
  }

  public function getWebInfo(){
    return view('page.gioithieu');
  }
}
