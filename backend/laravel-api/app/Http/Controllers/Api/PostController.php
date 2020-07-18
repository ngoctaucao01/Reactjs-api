<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    function index(){
        $post = DB::table("posts")->get();

        echo json_encode($post);
    }
    function detail($id){
    	$post = DB::table('posts')->where('id',$id)->get();
        echo $post;
    }
}
