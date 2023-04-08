<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use Session;

class ProductsController extends Controller
{
    public function showAddProducts(){
        return view('addProduct');
    }

    // public function AddNewProducts(Request $request){
    //     $title = $request->input('title');
    //     $price = $request->input('price');
    //     $size = $request->input('sizes');
    //     $qualities = implode(',', $request->input('qualities'));
    //     $description = $request->input('description');
        
    //     $imagesArray = [];
    //     foreach($request->file('product-images') as $image)
    //     {
    //         $destinationPath = 'uploads/';
    //         $filename = $image->getClientOriginalName();
    //         $image->move($destinationPath, $filename);
    //         array_push($imagesArray, $filename);
    //     }

    //     $allImages = implode(';', $imagesArray);

    //     DB::unprepared("INSERT INTO products (product_title, product_price, product_sizes, product_quality, product_description, product_images)
    //     VALUES ('$title', '$price', '$size', '$qualities', '$description', '$allImages')");

    //     return view('addProduct');
    // }

    public function AddNewProducts(Request $request){

        $product = new Product();
        $product->product_title = $request->input('title');
        $product->product_price = $request->input('price');
        $product->product_sizes = $request->input('sizes');
        $product->product_quality = implode(',', $request->input('qualities'));
        $product->product_description = $request->input('description');

        $imagesArray = [];
        foreach($request->file('product-images') as $image)
        {
            $destinationPath = 'uploads/';
            $filename = $image->getClientOriginalName();
            $image->move($destinationPath, $filename);
            array_push($imagesArray, $filename);
        }

        $product->product_images = implode(';', $imagesArray);
        $product->save();

        return redirect('/admin_addProducts')->with('status', "Product Inserted Successfully");
    }

    public function showEditProducts(){
        return view('editProduct');
    }

    public function showItems(){
        $shoesData = DB::select('select * from products');

        $shoesDataArray = array();

        foreach ($shoesData as $shoes){
            
            $arrayItem = [$shoes->product_id, $shoes->product_title, $shoes->product_price, $shoes->product_sizes, $shoes->product_quality, $shoes->product_description, $shoes->product_images];
            
            array_push($shoesDataArray, $arrayItem);
        }

        return view('/viewItemsPage', ["shoesDataArray"=>$shoesDataArray]);
    }

    public function searchShoes(Request $request){
        $search=$request->input('search');
        $catagory=$request->input('catagory');
        $price=$request->input('price');
        $date=$request->input('date');
        $query='';
        $hasOneOrder=False;
        $addWhere=False;
        if(strcmp($search,'')!=0)
            {
                $exists=False;
                $arrr = DB::select('select * from searches where value = \''.$search.'\'');


                
                foreach ($arrr as $val){
                    DB::insert('UPDATE `searches` SET `times` = `times`+1 WHERE `searches`.`value` = \''.$search.'\'');
                    $exists=TRUE;
                }
                if(!$exists)
            {DB::insert('INSERT INTO `searches` (`value`, `times`) VALUES ( \''.$search.'\', "1")');}
                $arr=explode(' ',$search);
                $c=FALSE;
                foreach ($arr as  $value) {
                    if($c)  $query.=' and ';
                    $query.=' product_title like "%'.$value.'%"';
                    $c=TRUE;
                }
                $addWhere=TRUE;
        }           
        if(strcmp($catagory,'')!=0)
            {
                if(strcmp($query,'')!=0) $query.=' and ';
                $query.=' product_title like "%'.$catagory.'%"';
                $addWhere=TRUE;
        }           
        if(strcmp($price,'')!=0)
            {
                if(strcmp($price,"Low To High")==0) 
                $query.=' Order by product_price ASC ';
                else $query.=' Order by product_price DESC ';
                $hasOneOrder=TRUE;
        }           
        if(strcmp($date,'')!=0)
            {
                if(!$hasOneOrder) $query.=' order by ';
                else $query.=' , ';
                if(strcmp($date,'Latest To Oldest')==0) $query.=' product_id DESC';
                else $query.=' product_id ASC';
        }           
        if($addWhere) $query=" where " . $query;
        if(strcmp($query,'')!=0)
        $shoesData = DB::select('select * from products '.$query);
        else $shoesData = DB::select('select * from products ');

        $shoesDataArray = array();

        foreach ($shoesData as $shoes){
            
            $arrayItem = [$shoes->product_id, $shoes->product_title, $shoes->product_price, $shoes->product_sizes, $shoes->product_quality, $shoes->product_description, $shoes->product_images];
            
            array_push($shoesDataArray, $arrayItem);
        }

        return view('/viewItemsPage', ["shoesDataArray"=>$shoesDataArray]);
    }

    public function showMensProducts(){
        $shoesData = DB::select('select * from products');

        $shoesDataArray = array();

        foreach ($shoesData as $shoes){
            
            $arrayItem = [$shoes->product_id, $shoes->product_title, $shoes->product_price, $shoes->product_sizes, $shoes->product_quality, $shoes->product_description, $shoes->product_images];
            
            if (str_contains($shoes->product_title, "Men's ")) { 
                array_push($shoesDataArray, $arrayItem);
            }
        }

        return view('/viewItemsPage', ["shoesDataArray"=>$shoesDataArray]);
    }

    public function showWomensProducts(){
        $shoesData = DB::select('select * from products');

        $shoesDataArray = array();

        foreach ($shoesData as $shoes){
            
            $arrayItem = [$shoes->product_id, $shoes->product_title, $shoes->product_price, $shoes->product_sizes, $shoes->product_quality, $shoes->product_description, $shoes->product_images];
            
            if (str_contains($shoes->product_title, "Women's ")) { 
                array_push($shoesDataArray, $arrayItem);
            }
        }

        return view('/viewItemsPage', ["shoesDataArray"=>$shoesDataArray]);
    }

    public function showViewProducts(){
        return view('/viewItemsDetail');
    }

    public function postReviewfun(Request $request){
        if(Session::has('privilege') && Session::get('privilege') == 'user')
        {
            $userID=Session::get('id');
            $userName=Session::get('userName');
            $comment = $request->input('reviewBox');
            $star = $request->input('stars');
            $pId = $request->input('pID');
            DB::insert("INSERT INTO reviews (userId,	product_id,	stars,	comment,userName) VALUES (?,?,?,?,?)", 
            [
                $userID,
                $pId,
                $star , 
                $comment,
                $userName
            ]
        );
            return redirect('/shoe-details?id='.$pId);
         }
        else return redirect('/login');
    }

   
    public function getReviews(){
        $items=request('items');
        $pID=request('pID');
        $reviewsData = DB::select('select * from reviews where product_id='.$pID.'');

        $reviewsDataArray = array();
        $pre = array();

        foreach ($reviewsData as $review){
            
            $new = [$review->comment,$review->userName,$review->stars];
            
            array_push($pre, $new);
        }
        $cnt=0;
        for($i=$items;$i<count($pre) && $cnt++<3;$i++)
            array_push($reviewsDataArray, $pre[$i]);

        $noData=TRUE;
        if(count($reviewsDataArray)>0)
            $noData=False;
            return response()->json(['arr'=>$reviewsDataArray,'noData'=>$noData]);
    }


   
    public function getSuggestions(){
        $sgs = DB::select('select * from searches order by times DESC');

        $sgsArr = array();

        $cnt=0;
        for($i=0;$i<count($sgs) && $cnt++<3;$i++)
            array_push($sgsArr, $sgs[$i]->value);

            return response()->json(['suggestions'=>$sgsArr]);
    }





    public function order(){
        if(Session::has('privilege') && Session::get('privilege') == 'user'){
            $userID=Session::get('id');
            if(isset($_COOKIE['len'])) {
                $len = $_COOKIE['len'];
            }
            for($i=0;$i<$len;$i++){
                if(isset($_COOKIE["{$i}"])) {
                    $arr = explode("|||",$_COOKIE["{$i}"]);
                    DB::insert("INSERT INTO checkouts (product_id, userId,  price,	no_of_items,color,size) VALUES (?,?,?,?,?,?)", 
                    [
                        $arr[0],
                        $userID,
                        $arr[5] , 
                        $arr[1],
                        $arr[2] ,
                        $arr[3] 
                        
                    ]
                );
                }    
            }   
            return redirect('/cart');
        }
        else return redirect('/login');
        

    }

    public function showCart(){
        
        return view('viewItemCart');
    }
}
