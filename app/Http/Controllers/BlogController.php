<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Blog/Index', [
            'blogs' => Blog::all()->map(function ($blog) {
                return [
                    'id' => $blog->id,
                    'title' => $blog->title,
                    'body' => $blog->body,
                    'created_at' => $blog->created_at,
                ];
            })
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Blog::create(
        //     Request::validate([
        //         'title' => ['required', 'max:50'],
        //         'body' => ['required', 'max:50'],
        //     ])
        // );

        Validator::make($request->all(), [
            'title' => ['required'],
            'body' => ['required'],
        ])->validate();
  
        Blog::create($request->all());
  
        return redirect()->back()
                    ->with('message', 'Post Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Validator::make($request->all(), [
            'title' => ['required'],
            'body' => ['required'],
        ])->validate();
  
        if ($request->has('id')) {
            Blog::find($request->input('id'))->update($request->all());
            return redirect()->back()
                    ->with('message', 'Post Updated Successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if ($request->has('id')) {
            Blog::find($request->input('id'))->delete();
            return redirect()->back();
        }
    }
}
