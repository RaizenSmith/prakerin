<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Kategori;
// use App\Tag;
// use App\Artikel;

class FrontendController extends Controller
{
    public function index()
    {
        // $artikel = Artikel::orderBy('created_at', 'desc')->take(4)->get();
        return view('frontend.index', compact(''));
    }
    public function contact()
    {
        // $artikel = Artikel::orderBy('created_at', 'desc')->take(4)->get();
        return view('frontend.contact');
    }
    public function about()
    {
        return view('frontend.about');
    }

    public function blog()
    {
        // $artikel = Artikel::orderBy('created_at', 'desc')->get();
        // $kategori = Kategori::all();
        // $tag = Tag::all();
        return view('frontend.blog', compact('artikel', 'kategori', 'tag'));
    }


    public function singleblog(Artikel $artikel)
    {
        // $kategori = Kategori::all();
        // $tag = Tag::all();
        return view('frontend.single-blog', compact('artikel'));
    }

    public function blogtag(Tag $tag)
    {
        // $artikel = $tag->Artikel()->latest()->paginate(5);
        // $kategori = Kategori::all();
        // $tag = Tag::all();
        // return view('frontend.blog', compact('artikel', 'kategori'));
    }

    public function blogkategori(Kategori $kategori)
    {
        // $artikel = $kategori->Artikel()->latest()->paginate(5);
        // $kategori = Kategoti::all();
        // $tag = Tag::all();
        // return view('frontend.blog', compact('artikel', 'kategori'));
    }
}
