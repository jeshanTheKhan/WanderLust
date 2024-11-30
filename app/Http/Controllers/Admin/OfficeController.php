<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    //
    public function index(){
        return view("Admin.Office.index");
    }
    public function save(Request $req){   
        $store=new Office();
        $store->office_address=$req->header;
        $store->office_email=$req->email;
        $store->office_phonenumber=$req->phone;
        $store->office_telephone=$req->telephone;
        $store->fb=$req->facebook;
        $store->instagram=$req->instagram;
        $store->linkdln=$req->linkdln;

        $store->save();
        if($store){
            $notification = array(
                'message' => 'Office Added Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Add!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);

    }
    // Table
    public function table(){
        $data=Office::all();
        return view('Admin.Office.table',compact('data'));
    }
    // Update Status
    public function UpdateStatus(Request $request, $id)
    {
    
        $data = Office::find($id);

 
        $data->status = $request->input('status');
        $data->save();  

  
        return redirect()->back()->with('status', 'Status updated successfully!');
    }
    public function view($id){
        $data=Office::find($id);
        return view('Admin.Office.view',compact('data'));
    }
    public function edit($id){
        $data=Office::find($id);
        return view('Admin.Office.edit',compact('data'));
    }
    // Update
    public function update(Request $req){
        $store = Office::find($req->c_id);
        $store->office_address = $req->header ?? $store->office_address;
        $store->office_email = $req->email ?? $store->office_email;
        $store->office_phonenumber = $req->phone ?? $store->office_phonenumber;
        $store->office_telephone = $req->telephone ?? $store->office_telephone;
        $store->fb = $req->facebook ?? $store->fb;
        $store->instagram = $req->instagram ?? $store->instagram;
        $store->linkdln = $req->linkdln ?? $store->linkdln;
        $store->save();
        if($store){
            $notification = array(
                'message' => 'Office Update Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Update!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->route('admin.all.office')->with($notification);
    }
    public function del($id){
        $result = Office::find($id);
    
        // Delete the database entry
        $result->delete();
        
        $notification = array(
            'message' => 'Office Deleted Successfully',
            'alert-type' => 'error'
        );
        
        return redirect()->back()->with($notification);
    }
}
