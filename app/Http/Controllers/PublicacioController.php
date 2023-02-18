<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacio;
use Illuminate\Support\Facades\Http;

class PublicacioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function get_posts() {
        return Publicacio::all()->where('user_id', '=', 1);
        $data = [];
        return Http::get('http://insertgenerator.tk', ['reference' => 'ujhygtrfes' ]);
        // foreach ($posts as $key => $post) {
        //     $data[$key] = $post;
        //     $request = ['reference' => $post->comment];
        //     $comment = Http::get('http://localhost/api');
        //     return $comment->body();
        // }
        // return $data;
    }

    // Aquest mètode intenta simular el que faria l'api de MirMeet
    public function get_data_from_reference(Request $request) {
        if ( is_null($request->reference) ) return 'no';
        $data = [
            'ujhygtrfes' => 'image1',
            'sertfyhuiolp' => 'image2',
            'gtfr' => 'This is a post!',
            'rftgyujiolp' => 'Post amazing!',
            'esdrfgyjkl' => 'base64:/gyhuji'
        ];
        return $data[$request->reference];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Publicacio();
        $post->image = $request->input('image');
        $post->comment = $request->input('comment');
        $post->user_id = $request->input('user_id');
        $post->save();
    }

}
