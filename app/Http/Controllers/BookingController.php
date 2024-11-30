<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Booking;
use Auth;

class BookingController extends Controller
{
    //
    public function pending(){
        return view('pending-book');
    }

    public function complete(){
        return view('complete-book');
    }
	
	//book req
	public function bookReq(Request $req){
		if(Auth::check() == true){
			$package = Package::find($req->pakage);
			$package_name = $package->package_name;
			$users = $package->user;
			
			$store = new Booking();
			$store->name = $req->name;
			$store->email = $req->email;
			$store->day = $req->days;
			$store->date = date('d-m-y',strtotime($req->date));
			$store->destination = $req->place;
			$store->person = $req->person;
			$store->package_name = $package_name;
			$store->posted_by = $users;
			$store->save();
			return redirect()->back();
			if($store){
				$notification = array(
					'message' => 'Booking Request Success',
					'alert-type' => 'success'
				);
			}
			else{
				$notification = array(
					'message' => 'Try Again! Booking Failed.',
					'alert-type' => 'success'
				);
			}
		}
		else{
			$notification = array(
                'message' => 'Log-In First',
                'alert-type' => 'error'
            );
		}
		return redirect()->back()->with($notification);
	}
}
