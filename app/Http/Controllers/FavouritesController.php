<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Http\Request;

class FavouritesController extends Controller
{
    public function favourites ()
    {
        $favourites = Favourite::all();
        return view('favourites', ["posts" => $favourites]);
    }

    public function addToFavourite ($id) //добавить проверку на наличие записей в базе. сделать через AJAX
    {
        $favourites = Favourite::create([
            "id" => $id,
            "url" => $_GET["url"]
        ]);
        return redirect(route("favourites"));
    }
}
