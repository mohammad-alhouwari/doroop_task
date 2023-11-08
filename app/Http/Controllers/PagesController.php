<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Message;

class PagesController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(7);
        return view("pages.index", ['blogs' => $blogs]);
    }
    public function viewBlog($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            abort(404);
        }

        return view('pages.singleBlog', compact('blog'));
    }
    public function storeContact(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Create a new Message model instance
        $message = new Message;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->message = $request->input('message');

        // Save the message
        $message->save();

        // Redirect back with success message
        return back()->with('success', 'تم إرسال الرسالة بنجاح!');
    }
}
