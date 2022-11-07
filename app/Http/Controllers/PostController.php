<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Comment;

   
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

       $comment=Comment::find(1);
       return $comment->post;
    // foreach($post->comments as $comment){
       
    //     echo $comment->body;

    // }
       
    }
}