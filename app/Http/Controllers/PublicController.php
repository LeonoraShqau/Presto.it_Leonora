<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Mail\SendCV;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home () {
        $announcements= Announcement::where('is_accepted', true)->take(8)->orderBy('created_at' , 'desc')->get();
        return view('welcome' , compact('announcements'));
    }

    public function categoryShow(Category $category){
       return view('categoryShow' , compact('category'));
    }

    public function searchAnnouncements(Request $request){
        $announcements= Announcement::search($request->searched)->where('is_accepted', true)->paginate(8);
        return view('announcements.index', compact('announcements'));
    }

    public function setLanguage($lang){
        session()->put('locale', $lang);
        return redirect()->back();
    }

    public function formCv(){
        return view('formCv');
    }
  
    public function sendCv(Request $request){
        $request->validate([
            "CV"=>'required|mimes:pdf',
            "name"=>'required',
            "email"=>'required',
            "body"=>'required'
        ]);
        $CV=$request->file('CV')->store('public/cv');

        Mail::to('admin@presto.it')->send(new SendCV($request->name , $request->email , $request->body , $CV));

        return redirect()->back()->with('message', 'Complimenti! Hai inviato il tuo CV!');
    }

    public function faq(){
        return view('faq');
    }
}
