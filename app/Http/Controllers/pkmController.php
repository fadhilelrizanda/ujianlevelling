<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pkm;

class pkmController extends Controller
{
    public function index()
    {

        return view('posts.index');
    }


    public function listing()
    {
        $posts = Pkm::latest()->paginate(100);
        return view('posts.listing', compact('posts'));
    }

    public function editlist()
    {
        $posts = Pkm::latest()->paginate(100);
        return view('posts.editlist', compact('posts'));
    }



    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'jenis' => 'required',
            'anggota1' => 'required',
            'anggota2' => 'required',
            'link' => 'required',
            'filepkm' => 'required',
        ]);



        Pkm::create($request->all());
        $request->file('filepkm')->store('public');
        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');
    }

    public function show(Pkm $post)
    {
        return view('posts.show', compact('post'));
    }

    public function edit(Pkm $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Pkm $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully');
    }

    public function destroy(Pkm $post)
    {
        $post->delete();

        return redirect()->route('editinglist')
            ->with('success', 'Deleted successfully');
    }
}
