<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource for the public view.
     */
    public function publicIndex()
    {
        $featured = News::latest()->where('is_featured', 1)->first();
        
        $sidebarQuery = News::latest();
        if ($featured) {
            $sidebarQuery->where('id', '!=', $featured->id);
        }
        $sidebar = $sidebarQuery->take(3)->get();

        $allQuery = News::latest();
        if ($featured) {
            $allQuery->where('id', '!=', $featured->id);
        }
        $all = $allQuery->paginate(9);

        return view('berita', compact('featured', 'sidebar', 'all'));
    }

    /**
     * Display a listing of the resource for the admin view.
     */
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('manajemenBerita', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->only('title', 'content');

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('news_images', 'public');
        }

        News::create($data);

        return redirect()->route('news.manage')
            ->with('success', 'Berita berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->only('title', 'content');

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            $data['image'] = $request->file('image')->store('news_images', 'public');
        }

        $news->update($data);

        return redirect()->route('news.manage')
            ->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        
        $news->delete();

        return redirect()->route('news.manage')
            ->with('success', 'Berita berhasil dihapus.');
    }
}