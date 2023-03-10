<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Illuminate\Support\Facades\Http;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Publication::all()->where('user_id', '=', 1);
    }

    public function get_posts() {
        $posts = Publication::all()->where('user_id', '=', 1);
        $data = [];
        
        foreach ($posts as $key => $post) {
            $data[$key] = $post;
            $comment = $this->get_from_reference($post->comment);
            $image = $this->get_from_reference($post->image);
            $data[$key]->comment = $comment;
            $data[$key]->image = $image;
        }
        return $data;   
    }

    private function get_from_reference($reference) {
        $data = json_decode(file_get_contents(storage_path('app/references.json')), true);
        return $data[$reference];
    }

    // Aquest mètode intenta simular el que faria l'api de MirMeet
    public function get_data_from_reference(Request $request) {
        return 'hey';
        if ( is_null($request->reference) ) return 'no';
        $data = [
            'ujhygtrfes' => 'image1',
            'sertfyhuiolp' => 'image2',
            'gtfr' => 'This is a post!',
            'rftgyujiolp' => 'Post amazing!',
            'esdrfgyjkl' => 'base64:/gyhuji'
        ];
        return 'hola';
        return $data[$request->reference];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Publication();
        $post->image = $request->input('image');
        $post->comment = $request->input('comment');
        $post->user_id = $request->input('user_id');
        $post->save();
    }

}
