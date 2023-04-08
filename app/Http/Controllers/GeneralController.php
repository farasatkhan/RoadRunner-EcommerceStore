<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class GeneralController extends Controller
{
    public function showAbout(){
        return view('/about');
    }

    public function  showLandingPage(){
        $shoesData = DB::select('select * from products');

        $shoesDataArray = array();

        foreach ($shoesData as $shoes){
            
            $arrayItem = [$shoes->product_id, $shoes->product_title, $shoes->product_price, $shoes->product_sizes, $shoes->product_quality, $shoes->product_description, $shoes->product_images];
            
            array_push($shoesDataArray, $arrayItem);
        }

        return view('/landingPage', ["shoesDataArray"=>$shoesDataArray]);
    }

    public function showShoeDetails(){
        $id = $_GET['id'];
        $userId=Session::get('id');
        $shoesData = DB::select('select * from products where product_id = ?', [$id]);
        $reviews = DB::select('select * from reviews where product_id = ?', [$id]);
        $reviewData = DB::select('select count(*) as count, avg(stars) as stars from reviews where product_id = ? '
            ,[$id]);
        $showBtns = DB::select('select * from reviews where product_id = ? and userID = ?',
         [
             $id,
             $userId
            ]);

        $shoesDataArray = array();
        $reviewsArr = array();

        foreach ($shoesData as $shoes){
            
            $arrayItem = [$shoes->product_id, $shoes->product_title, $shoes->product_price, $shoes->product_sizes, $shoes->product_quality, $shoes->product_description, $shoes->product_images];
            
            array_push($shoesDataArray, $arrayItem);
        }

        foreach ($reviews as $review){
            
            $arrayItem = [$review->userName, $review->stars, $review->comment, $review->date];
            
            array_push($reviewsArr, $arrayItem);
            break;
        }
        $decision = "true";
        
        foreach ($showBtns as $showBtn){
            
            $decision = "false";
            
        }
        
        foreach ($reviewData as $data){
            
            $stars=$data->stars;
            $ppl=$data->count;
            
        }


        $shoesDataMayLike = DB::select('select * from products');
        $shoesDataMayLikeArray = array();

        foreach ($shoesDataMayLike as $shoes){
            
            $arrayItem = [$shoes->product_id, $shoes->product_title, $shoes->product_price, $shoes->product_sizes, $shoes->product_quality, $shoes->product_description, $shoes->product_images];
            
            array_push($shoesDataMayLikeArray, $arrayItem);
        }

        return view('/viewItemsDetail', ["reviewsArr"=>$reviewsArr,"stars"=>$stars,"ppl"=>$ppl,"shoesDataArray"=>$shoesDataArray, "shoesDataMayLikeArray"=>$shoesDataMayLikeArray,"id"=>$id,"decision"=>$decision]);
    }


}
