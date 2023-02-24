<?php

namespace App\Http\Controllers\frontend;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{
  public function Home()
 {
    $testimonials=Testimonial::where('is_active',1)->latest('id')->limit(3)->select(['id','client_name','client_designation','client_message','client_image'])->get();

    // return $testimonials;
    $categories=Category::where('is_active',1)->latest('id')->limit(3)->select(['id','title','slug','category_image'])->get();

    return view('frontend.pages.home',compact('testimonials','categories'));
 }
}
