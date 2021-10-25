<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_customer extends Controller
{
    public function index(){
        $customer = DB::table('customer')->get();

        $data = array(
                'menu' => 'customer',
                'submenu' => '',
                'customer' => $customer
    	        );
            

        return view('perpus/customer', $data);
    }
    
    public function home(){
        $data = array(
                'menu' => 'home',
                'submenu' => ''
    	        );
            

        return view('perpus/blank_page', $data);
    }

    public function tambahCustomer(){
        $customer = DB::table('customer')->get();
        $data = array(
            'menu' => 'customer',
            'submenu' => '',
            'customer' => $customer
            );
      
        return view('perpus/tambah_cust', $data);
        
    }

    public function insertData(Request $post){
        
        DB::table('customer')->insert([
        'first_name' => $post->f_name,
        'last_name' => $post->l_name,
        'phone' => $post->phone,
        'email' => $post->email,
        'street' => $post->street,
        'city' => $post->city,
        'state' => $post->state,
        'zip_code' => $post->zip_code]);
            
        return redirect('/customer');
    }

    public function editCustomer($idCustomer){
        $customer = DB::table('customer')->where('customer_id', $idCustomer)->get();
        $data = array(
            'menu' => 'customer',
            'submenu' => '',
            'customer' => $customer
            );
        return view('perpus/edit_cust',['customer' => $customer], $data);
    }

    public function updateCustomer(Request $post){
 
        DB::table('customer')->where('customer_id', $post->customer_id)->update([
        'first_name' => $post->f_name,
        'last_name' => $post->l_name,
         'phone' => $post->phone,
        'email' => $post->email,
        'street' => $post->street,
        'city' => $post->city,
        'state' => $post->state,
        'zip_code' => $post->zip_code]);
 
        return redirect('/customer');
    }

}
