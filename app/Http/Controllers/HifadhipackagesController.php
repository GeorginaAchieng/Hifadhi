<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
 
class HifadhipackagesController extends Controller
{
    /**
     * Show the form to create a new blog post.
     */
    public function create(): View
    {
        return view('hifadhipackages');
    }
 
    // /**
    //  * Store a new blog post.
    //  */
    // public function store(Request $request): RedirectResponse
    // {
    //     // Validate and store the blog post...
 
    //     $post = /** ... */
 
    //     return to_route('post.show', ['post' => $post->id]);
    // }
}