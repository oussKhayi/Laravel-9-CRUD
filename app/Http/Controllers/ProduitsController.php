<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all(); // $posts, not $post, because we are retrieving more than one
        $prs = Produits::get();
        return view('Affiche_produits', compact('prs'));
    }

    public function create()
    {
        return view('produitForm');   
    }

    public function store(Request $request)
    {
        $p = New Produits();
        $p -> Titre =$request -> titre;
        $p -> Prix =$request -> prix;
        $p -> save();
        $done = $request -> titre;
        return view('/produitForm', compact('done'));

    }

    public function show($id)
    {
        $produit = Produits::find($id);
      return  view('produit', compact('produit'));
    }


    public function edit(Request $request, $id)
    {
        $produit = Produits::find($id);
        return  view('editPr', compact('produit'));
    }

    public function update(Request $request, $id)
    {
        $pr = Produits::find($id);
        $pr -> Titre = $request -> Titre;
        $pr -> Prix = $request  ->  Prix;
        $pr -> save();
        return redirect('/home');

    }

    public function destroy(Request $request , $id)
    {
        $p = Produits::find($id);
        $p->delete();
    return redirect('/home');
    }
    

    public function destroyAll()
    {
        // Produits::all()->delete();
        Produits::truncate();
    return redirect('/home');
    }


    public function trashed()
    {
        $trash = Produits::onlyTrashed()->get();
        return view('trashed', compact('trash'));
    }

    public function restoreAll()
    {
        Produits::onlyTrashed()->restore();
        return redirect('/home');
    }

    public function restoreOne($id)
    {
        Produits::whereId($id)->restore();
        return redirect('/trashed');
    }
}
