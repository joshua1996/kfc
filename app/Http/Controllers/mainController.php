<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\bannerModel;
use App\deliveryfoodModel;
use Illuminate\Support\Facades\Session;

class mainController extends Controller
{

    //delivery food special enum
    //0 - normal
    //1 - new
    //2 - special

    //delivery food type enum
    //0 - combo
    //1 - ala carte

    //delivery food tag enum
    //0 - family
    //1 - Individual
    //2 - chicken/burgers
    //3 - add-ons
    //4 - desserts & beverages

    public function home()
    {
        if (!Session::has('cartItemID') ||  !in_array('sample', Session::get('cartItemID'))  )
        {
            Session::push('cartItemID', 'sample');
        }
        $banner = new bannerModel();
        $bannerResult = $banner->get();
        $deliveryfood = new deliveryfoodModel();
        $deliveryfoodResult = $deliveryfood->where('visible', '=', true)->get();
        return view('home', ['banner' => $bannerResult, 'df' => json_encode($deliveryfoodResult)]);
        //return response()->json(['banner' => $bannerResult]);
    }

    public function menuFavourites()
    {
        // Session::forget('cartItemID');
        if (!Session::has('cartItemID') ||  !in_array('sample', Session::get('cartItemID'))  )
        {
            Session::push('cartItemID', 'sample');
        }
        $deliveryfood = new deliveryfoodModel();
        $deliveryfoodResult = $deliveryfood->where('visible', '=', true)->get();
        return view('delivery.menu.favourites', ['deliveryFood' => $deliveryfoodResult, 'df' => json_encode($deliveryfoodResult)]);
    }

    public function menuInStore()
    {
        return view('menu.in-store');
    }

    public function addItem(Request $r)
    {

        Session::push('cartItemID', $r->itemID);
        return Session::get('cartItemID');
    }

    public function remove(Request $r)
    {
        $sessArr = Session::get('cartItemID');
        $ii =  array_search($r->itemID, $sessArr);
        array_splice($sessArr, $ii, 1);
//        session(['cartItemID' => $sessArr]);
        Session::put('cartItemID', $sessArr);
//       // Session::forget('cartItemID');
        return $ii;//Session::get('cartItemID');
    }

    public function addItems(Request $r)
    {
        foreach ($r->items as $i => $v)
        {
            Session::push('cartItemID', $v['itemId']);
        }
       return Session::get('cartItemID');

    }

    public function register()
    {

    }
}
