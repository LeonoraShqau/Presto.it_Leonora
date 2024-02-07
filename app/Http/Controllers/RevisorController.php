<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    public function index(){
        $announcement_to_check = Announcement::where('is_accepted' , null)->orderBy('created_at','desc' )->get();
        $denieds = Announcement::where('is_accepted' , 0)->take(8)->orderBy('created_at' , 'desc')->get();
        return view('revisor.index' , compact('announcement_to_check' , 'denieds'));
    }

    public function show(Announcement $announcement_to_check){
      return view('revisor.show' , compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement){
       $announcement->setAccepted(true);
       return redirect(route('revisor.index'))->with('message' , 'Annuncio accettato');
    }

    public function rejectAnnouncement(Announcement $announcement){
        $announcement->setAccepted(false);
        return redirect(route('revisor.index'))->with('message' , 'Annuncio rifiutato');
     }

     public function backInReview(Announcement $announcement){
      $announcement->setAccepted(null);
      return redirect()->back()->with('message' , 'Annuncio riportato in revisione');
     }

     public function becomeRevisor(){
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message', 'Complimenti! hai richiesto di diventare un revisore');
     }

     public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor', ["email"=>$user->email]);
        return redirect('/')->with('message', 'Complimenti! L\'utente è diventato revisore');
     }

     
}
