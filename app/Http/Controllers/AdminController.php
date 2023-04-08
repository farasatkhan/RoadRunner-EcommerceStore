<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Session;

class AdminController extends Controller
{
    public function showAdminSearchPage(Request $request){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            return redirect('/adminSearchResults');
        }
        return view('/adminLogin');
    }

    public function showAdminLoginPage(){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            return redirect('/admin_dashboard');
        }
        return view('/adminLogin');
    }


    public function adminSearchResults(Request $request){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            // $results = DB::select("select * from products where product_title like '%".$request->input('Search')."%';");

            $search = $request->input('Search');

            // if search is empty
            if($search == ''){
                return view('/admin_editProducts', ['shoesDataArray' => [], 'r' => []]);
            }

            $results = DB::table('products')->where('product_title', 'LIKE', '%'.$search.'%')->get();

            $shoesDataArray = array();
            foreach ($results as $shoes){
                
                $arrayItem = [$shoes->product_id, $shoes->product_title, $shoes->product_price, $shoes->product_sizes, $shoes->product_quality, $shoes->product_description, $shoes->product_images];
                
                array_push($shoesDataArray, $arrayItem);
            }
            
            if($request->input('selectValue') == "Edit"){
                return view('/admin_editProducts', ["shoesDataArray"=>$shoesDataArray,'r'=>$results]);
            }
            return view('/admin_deleteProducts', ["shoesDataArray"=>$shoesDataArray,'r'=>$results]);
                
        }
        return view('/adminLogin');
    }

    public function loggedAdmin(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');

        $adminData = DB::select('SELECT admin_password FROM admins where admin_email = ?', [$email]); 

        if (count($adminData) > 0){
            
            foreach ($adminData as $admin) {

                if (($admin->admin_password) == $password){

                    $request->session()->put('privilege', 'admin');

                    return redirect('/admin_dashboard');
                }
            }
        }

        $error='Email or Password does not match';
        return view('/adminLogin')->with('error',$error);
    }


    public function showAdminDashboard(){

        if(Session::has('privilege') && Session::get('privilege') == 'admin'){

            $totalUsers = DB::select('SELECT user_id FROM users;');
            $totalAdmins = DB::select('SELECT admin_id FROM admins;');
            $totalProducts = DB::select('SELECT product_id FROM products;');
            // Change this once add sales are added to db
            $totalSales = DB::select('SELECT no_of_items FROM checkouts;');
    
            $dashboardItems = array(count($totalUsers), count($totalAdmins), count($totalProducts), count($totalSales));
    
            return view('/admin_dashboard', ["dashboardItems"=>$dashboardItems]);
        }

        return view('/adminLogin');
    }

    public function showAddAdminPage(){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            return view('admin_addAdmin');
        }
        return view('/adminLogin');
    }

    public function showBanAdminPage(){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            return view('admin_banAdmin');
        }
        return view('/adminLogin');
    }

    public function showBanUserPage(){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            return view('admin_banUser');
        }
        return view('/adminLogin');
    }

    public function AddNewAdmin(Request $request){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            $email = $request->input('email');
            $password = $request->input('password');
            $privilege = 'admin';
    
            DB::insert('INSERT INTO admins (admin_email, admin_password, privilege) values (?, ?, ?)', [$email, $password, $privilege]);
    
            return redirect('/admin_addAdmin')->with('status', "Inserted Successfully");
        }
    }


    public function banUser(Request $request){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            $email = $request->input('email');

            $query = DB::delete('DELETE FROM users WHERE user_email= ?', [$email]);

            if($query == 1){
                return view('/admin_banUser')->with('status', "Success: User banned successfully");
            }

            return view('/admin_banUser')->with('status', "ERROR: User not found");
        }
        return view('/adminLogin');
    }


    public function banAdmin(Request $request){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            $email = $request->input('email');

            $query = DB::delete('DELETE FROM admins WHERE admin_email= ?', [$email]);

            if($query == 1){
                return view('/admin_banAdmin')->with('status', "Success: User banned successfully");
            }
            return view('/admin_banAdmin')->with('status', "ERROR: User not found");
        }
        return view('/adminLogin');
    }

    public function showAddProductPage(){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            return view('/admin_addProducts');
        }
        return view('/adminLogin');
    }

    public function showEditProductPage(){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            $shoesData = DB::select('select * from products');

            $shoesDataArray = array();
    
            foreach ($shoesData as $shoes){
                
                $arrayItem = [$shoes->product_id, $shoes->product_title, $shoes->product_price, $shoes->product_sizes, $shoes->product_quality, $shoes->product_description, $shoes->product_images];
                
                array_push($shoesDataArray, $arrayItem);
            }
    
            return view('/admin_editProducts', ["shoesDataArray"=>$shoesDataArray]);
        }
        return view('/adminLogin');
    }

    public function showUpdateProducts(){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            $id = request('id');

            $shoesData = DB::select('select * from products where product_id = ?', [$id]);
    
            return view('/admin_updateProducts', ["shoesData"=> $shoesData, "id"=>$id]);
        }
        return view('/adminLogin');
    }

    public function updateProducts($id){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            $title = request('title');
            $price = request('price');
            $sizes = request('sizes');
            $description = request('description');
    
            DB::update('update products set product_title = ?, product_price = ?, product_sizes = ?, product_description = ? where product_id = ?', [$title, $price, $sizes, $description, $id]);
            
            return redirect('/admin_editProducts')->with('status', "Updated Successfully");
        }
        
        return view('/adminLogin');
    }

    public function showDeleteProducts(){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            $shoesData = DB::select('select * from products');

            $shoesDataArray = array();
    
            foreach ($shoesData as $shoes){
                
                $arrayItem = [$shoes->product_id, $shoes->product_title, $shoes->product_price, $shoes->product_sizes, $shoes->product_quality, $shoes->product_description, $shoes->product_images];
                
                array_push($shoesDataArray, $arrayItem);
            }
    
            return view('/admin_deleteProducts', ["shoesDataArray"=>$shoesDataArray]);
        }

        return view('/adminLogin');
    }

    public function deleteProducts(){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            $id = request('id');

            DB::delete('DELETE FROM products WHERE product_id = ?', [$id]);
    
            return redirect('/admin_deleteProducts')->with('status', "Deleted Successfully");
        }
        return view('/adminLogin');
    }

    public function logoutAdmin(){
        if(Session::has('privilege') && Session::get('privilege') == 'admin'){
            if(session()->has('privilege')){
                session()->forget('privilege');
            }
            return redirect('/adminLogin');
        }
        return view('/adminLogin');
    }
}
