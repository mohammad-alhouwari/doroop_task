<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view("dashboard.index", ['blogs' => $blogs]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.addBlog");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'blog' => 'required|string',
            'image_data' => 'required',

        ]);
        // Create a new Blog model instance
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->textContent = $request->input('blog');

        // Save the image to your storage (you may need to configure storage settings)
        $imageData = $request->input('image_data');
        $imageData = substr($imageData, strpos($imageData, ',') + 1);
        $imageData = base64_decode($imageData);
        $filename = time() . '_' . Str::random(10) . '.jpg';
        file_put_contents(public_path('images/' . $filename), $imageData);

        // Set the image file path in the database
        $blog->image = 'images/' . $filename;

        // Save the blog entry
        $blog->save();
        
        // Redirect back to the dashboard.index view
        return redirect()->route('blog.index')->with('success', 'تم إضافة المقال بنجاح!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            abort(404);
        }

        return view('dashboard.showBlog', compact('blog'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            abort(404);
        }

        return view('dashboard.editBlog', compact('blog'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            'blog' => 'required|string',
            'image_data' => 'nullable',
            // Allow image_data to be nullable for cases where the image is not updated
        ]);

        // Find the blog post by ID
        $blog = Blog::find($id);

        if (!$blog) {
            abort(404); // Handle the case where the blog post is not found
        }

        // Update the title and content
        $blog->title = $request->input('title');
        $blog->textContent = $request->input('blog');

        // Check if a new image is uploaded
        if ($request->has('image_data') && $request->input('image_data') > 10) {
            // Handle the image data
            $imageData = $request->input('image_data');
            $imageData = substr($imageData, strpos($imageData, ',') + 1);
            $imageData = base64_decode($imageData);

            // Generate a new filename
            $filename = time() . '_' . Str::random(10) . '.jpg';

            // Save the image to your storage (you may need to configure storage settings)
            file_put_contents(public_path('images/' . $filename), $imageData);

            // Set the image file path in the database
            $blog->image = 'images/' . $filename;
        }

        // Save the updated blog entry
        $blog->save();

        // Redirect back to the blog.index view
        return redirect()->route('blog.index')->with('success', 'تم تحديث المقال بنجاح!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);

        if ($blog) {
            $blog->delete();
            return redirect()->route('blog.index')->with('success', 'تم حذف المقال بنجاح');
        } else {
            abort(404);
        }
    }

}
