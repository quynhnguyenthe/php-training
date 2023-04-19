<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $post;
    public function __construct()
    {
        $this->post = new Post();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $data = $this->post->get();
//        $data = $this->post->find(1);
//        $data = $this->post->first();
//        $data = $this->post->findOrFail(1);
        $data = $this->post->find(1);

        $data = $this->post
            ->orderBy('title', 'desc')
            ->groupBy('status')
            ->having('title', 'LIKE', '%e%')
            ->limit(2)
            ->get();
        $data = $this->post->get();
        return response()->json($data, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cms.post.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        return response($this->post->create($data), 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ($this->post
            ->where('id', $id)
            ->with('author')
            ->findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('cms.post.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return ($this->post->where('id', $id)->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return ($this->post->where('id', $id)->delete());
    }
}
