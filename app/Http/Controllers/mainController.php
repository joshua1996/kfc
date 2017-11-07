<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bannerModel;
use App\deliveryfoodModel;

class mainController extends Controller
{

    //delivery food special enum
    //0 - normal
    //1 - new
    //2 - special

    //delivery food type enum
    //0 - combo
    //1 - ala carte

    public function home()
    {
        $banner = new bannerModel();
        $bannerResult = $banner->get();
        return view('home', ['banner' => $bannerResult]);
        //return response()->json(['banner' => $bannerResult]);
    }

    public function menuFavourites()
    {
        $deliveryfood = new deliveryfoodModel();
        $deliveryfoodResult = $deliveryfood->where('visible', '=', true)->get();
        return view('delivery.menu.favourites', ['deliveryFood' => $deliveryfoodResult]);
    }
}
