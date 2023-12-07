<?php

namespace App\Http\Controllers;

use App\Models\OurDoctor;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function index()
    {
        $data['services']=Service::get();
        $data['ourdoctor']=OurDoctor::get();
        $data['testimonial']=Testimonial::get();
        //dd($data['services']);
        return view('front_page',$data);
    }

    public function about()
    {
        $data['title'] = "About Us";
        $data['path'] = "About";
        $data['ourdoctor']=OurDoctor::get();

        return view('Front_about',$data);
    }

    public function services()
    {
        $data['services']=Service::get();
        $data['testimonial']=Testimonial::get();
        $data['title'] = "Services";
        $data['path'] = 'Services';
        return view('front_services',$data);
    }

    public function feature(){
        $data['title'] = "Feature";
        $data['path'] = 'Feature';
        return view("front_feature",$data);
    }

    public function ourdoctor()
    {
        $data['ourdoctor']=OurDoctor::get();
        $data['title'] = "Doctor";
        $data['path'] = 'Doctor';
        return view('front_ourdoctor',$data);
    }

    public function appointment(){
        $data['title'] = "Appointment";
        $data['path'] = 'Appointment';
        return view('front_appointment',$data);
    }

    public function testimonial()
    {
        $data['testimonial']=Testimonial::get();
        
        $data['title'] = "Testimonial";
        $data['path'] = 'Testimonial';
        return view('front_testimonial',$data);
    }

    public function error(){
        $data['title'] = "404 Error";
        $data['path'] = '404 Error';
        return view('front_error',$data);
    }

    public function contact(){
        $data['title'] = "Contact Us";
        $data['path'] = "Contact";
        return view('front_contact',$data);
    }

    // public function admin(){
    //     return view('admin');
    // }

    // public function table(){
    //     return view('layouts/front_table');
    // }


}
