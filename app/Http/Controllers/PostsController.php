<?php

namespace App\Http\Controllers;

class PostsController {
    public function show($post){
        //Data collection as there is no db at this time.
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post',
        'my-second-post' => 'This is my second post!'
    ];

    if(! array_key_exists($post, $posts)){
        abort(404, 'Sorry that post was not found');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
    }
}
