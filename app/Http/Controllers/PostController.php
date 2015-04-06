<?php namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Response;

class PostController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @param null $format
     *
     * @return Response
     */
    public function index($format = null)
    {
        $posts = Post::all();

        if ($format === 'json') {
            return response()->json($posts);
        }

        return view('post.index', ['posts' => $posts]);
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

    /**
     * Display the specified resource.
     *
     * @param string $slug
     *
     * @return Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', '=', $slug)->firstOrFail();

        return view('post.show', ['post' => $post]);
    }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
