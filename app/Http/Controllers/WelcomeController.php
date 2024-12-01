<?php

namespace App\Http\Controllers;
use App\Models\Carosel;
use App\Models\Contract;
use App\Models\Service;
use App\Models\Place;
use App\Models\Destination;
use App\Models\Package;
use App\Models\Guide;
use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\About;
use App\Models\Office;
use Auth;


use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index(){
        $carosel = Carosel::where('status', 1)
                  ->take(3)
                  ->get();
        $place=Place::where('place_status',1)->get();
        $service=Service::where('service_status',1)->take(4)->get();
        $destinations = Destination::where('destination_status', 1)
                           ->select('destination_place') // Select only the destination_place column
                           ->distinct() // Ensure unique results
                           ->get();

        
         $package = Package::where('package_status', 1)
                ->orderBy('package_id', 'desc') // Sort by 'id' in descending order
                ->take(6)
                ->get();

         $package_name=Package::where('package_status',1)->get();
         $about=About::where('status',1)->get();
         $guide=Guide::where('guide_status',1)->get();
         $blog=Blog::where('blog_status',1)->take(6)->get();
         $testimonial=Testimonial::where('status',1)->get();
        return view('welcome',compact('carosel','service','place','package','guide','blog','testimonial','about','package_name'));
    }

    // About Page
    public function about(){
        $about=About::where('status',1)->get();
        $guide=Guide::where('guide_status',1)->get();
        return view('Front.about',compact('guide','about'));
    }

    public function services(){
        $service=Service::where('service_status',1)->take(4)->get();
        $testimonial=Testimonial::where('status',1)->get();
        return view('Front.service',compact('service','testimonial'));
    }
    public function notice(){
     $office=Office::where('status',1)->first();
        return view('Front.notice',compact('office'));
    }
    public function policy(){
     $office=Office::where('status',1)->first();
        return view('Front.policy',compact('office'));
    }
    public function term(){
     $office=Office::where('status',1)->first();
        return view('Front.term',compact('office'));
    }
    public function packages(){
        $package_name=Package::where('package_status',1)->get();
        $place=Place::where('place_status',1)->get();
        $package=Package::where('package_status',1)->get();
        return view('Front.package',compact('package','place','package_name'));
    }
    public function blog(){
        $blog=Blog::where('blog_status',1)->get();
        return view('Front.blog',compact('blog'));
    }
    public function contact(){
        return view('Front.contract');
    }

    public function addsave(Request $req){
        $store=New Contract();
        $store->name= $req->name;
        $store->email= $req->email;
        $store->subject= $req->subject;
        $store->message= $req->message;

        $store->save();
        if($store){
            $notification = array(
                'message' => 'Message Send Successfully',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
        else{
            $notification = array(
                'message' => 'Failed To Send!!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    // Message
    public function message(){
        $place=Contract::where('status',1)->get();
        return view('Admin.Message.table',compact('place'));
    }
    public function moderator_message(){
        $place=Contract::where('status',1)->get();
        return view('Moderator.Message.table',compact('place'));
    }
    //Package Read More
	public function details($id){
		$data = Package::find($id);
		return view('Front.Package-details',compact('data'));
	}
    public function blog_details($id){
        $package = Package::where('package_status', 1)
        ->latest() // Or ->orderBy('id', 'desc') for a specific column like 'id'
        ->take(2)
        ->get();
    
        $place=Place::all();
		$data = Blog::find($id);
		return view('Front.blog-details',compact('data','place','package'));
	}
}
