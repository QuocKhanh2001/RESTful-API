<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;

class PostController extends Controller
{
    //
    public function index(){
        // $allPosts = Post::all(); //lay tat ca ban ghi
        // if ($allPosts->count()>0){
        // foreach($allPosts as $item){
        //     echo $item->title.'<br/>';//lay ra cac title
        // }
        // }



        // $detail = Post::find(1); //lay ra 1 ban ghi
        // dd($detail);


        //su dung query builder
        // $activePosts = DB::table('posts')->where('id',1)->get();
        // dd($activePosts);


        // $activePosts = Post::where('id',1)->get();
        //  if ($activePosts->count()>0){
        // foreach($activePosts as $item){
        //     echo $item->title.'<br/>';//lay ra cac title
        // }
        // }

        // $allPosts = Post::all();
        // $activePosts=$allPosts->reject(function($post) { //reject :loai bo tat ca cac truong hop id =1
        //     return $post->id==1;
        // });
        // dd($activePosts);
    }
    
    public function add(){
    //     $dataInsert = [        //insert dung array
    //         'title'=> 'Cập nhật giá vàng chốt phiên 13.12: Tính đến 17h, giá vàng trong ',
    //         'content' =>'Cập nhật giá vàng chốt phiên 13.12: Vàng SJC đột ngột tăng vọt',
    //         'status'=> 1,
    //     ];
    //     $post = Post::create($dataInsert);// chen them du lieu vao database
    //    echo 'id vua insert: '.$post->id;

    
    $post = new Post(); //chen them du lieu vao databse dung object
    $post->title = 'bai viet moi';
    $post->content = 'noi duing moi';

    $post->save();
    echo 'id vua insert: '.$post->id; 
   // dd($post);

    }


}