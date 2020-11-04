<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('blog.index', compact('blogs'));
    }

    /**
     * create
     *
     * @return void
     */
    public function create()
    {
        return view('blog.create');
    }


    /**
     * store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'title'     => 'required',
            'content'   => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/blogs', $image->hashName());

        $blog = Blog::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        if ($blog) {
            //redirect dengan pesan sukses
            return redirect()->route('blog.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->route('blog.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
