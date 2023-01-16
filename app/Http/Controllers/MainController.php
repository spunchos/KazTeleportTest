<?php

namespace App\Http\Controllers;

use App\Models\Favourite;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Unsplash\OAuth2\Client\Provider\Unsplash;
use Unsplash\Search;

class MainController extends Controller
{
    public function home ()
    {
        $url = "https://api.unsplash.com/search/photos?page=1&query=office&client_id=Oab2OCs4FzfQpynQWIrEtCRLAmu1mktgDM13gH58aa4";
        $result_data = self::sendCurl($url);

//        file_get_contents("")
//        $result_data = Search::photos('forest', 1, 2, 'landscape');
//        dd($result_data);
        return view('index', ["posts" => $result_data]);
    }

    public function search ()
    {
        $url = "https://api.unsplash.com/search/photos?page=1&query=".$_GET["search"]."&client_id=Oab2OCs4FzfQpynQWIrEtCRLAmu1mktgDM13gH58aa4";
        $result_data = self::sendCurl($url);
        return view('index', ["posts" => $result_data]);
    }

    public function post ($id)
    {
        $url = "https://api.unsplash.com/photos/".$id."?client_id=Oab2OCs4FzfQpynQWIrEtCRLAmu1mktgDM13gH58aa4";
        $result_data = self::sendCurl($url);
        return view('post', ["post" => $result_data]);
    }

    public function savePic ()
    {

    }

    public function sendCurl ($url)
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl);
        curl_close($curl);
        return json_decode($result, true);
    }
}
