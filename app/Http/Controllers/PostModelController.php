<?php

namespace App\Http\Controllers;

use App\Models\PostModel;
use Illuminate\Http\Request;

class PostModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = PostModel::all();
        return view('index',compact('posts'));
    }

    public function search(Request $request){
        $search = $request->search;
        $posts=PostModel::where(function($query) use ($search){
            $query->where('title','like',"%$search%")->orWhere('description','like',"%$search%");
        })
        ->orWhereHas('category',function($query) use ($search){
            $query->where('name','like',"%$search%");
        })
        ->orWhereHas('user',function($query) use ($search){
            $query->where('name','like',"%$search%");
        })
        ->get();

        return view('index',compact('posts','search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PostModel $postModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostModel $postModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostModel $postModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostModel $postModel)
    {
        //
    }
}
