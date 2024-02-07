<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class AnnouncementController extends Controller
{
    public function create (){
        return view('announcements.create');
    }

    public function show(Announcement $announcement){
        return view('announcements.show' , compact('announcement'));
    }

    public function index(){
       $announcements =Announcement::where('is_accepted',true)->orderBy('created_at' , 'desc')->paginate(8);
        return view('announcements.index' , compact('announcements'));
    }

    public function personal(){
        $announcements = Announcement::where('user_id' , Auth::user()->id)->orderBy('created_at' , 'desc')->paginate(6);
        return view('announcements.personal' , compact('announcements'));
    }
}
