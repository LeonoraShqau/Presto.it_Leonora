<?php

namespace App\Livewire;

use App\Jobs\AddWatermark;
use App\Models\Image;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use App\Jobs\GoggleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CreateAnnouncement extends Component
{
    use WithFileUploads;
    
    public $title;
    public $body;
    public $price;
    public $category;
    public $temporary_images;
    public $images = [];
    public $announcement;
    
    
    
    protected $rules = [
        'title'=>'required|min:3',
        'body'=>'required|min:10',
        'price'=>'required|numeric',
        'category'=>'required',
        'images.*'=>'image|max:1024',
        'temporary_images.*'=>'image|max:1024'
        
    ];
    
    protected $messages=[
        
        'required'=>'Attenzione il campo :attribute è obbligatorio',
        'min'=>'Attenzione il campo :attribute è troppo corto',
        'numeric'=>'Attenzione il campo :attribute deve essere numerico',
        'temporary_images.*.required' => 'L\'immagine è richiesta',
        'temporary_images.*.image' => 'I file devono essere immagini ',
        'temporary_images.*.max' => 'L\'immagine deve essere massimo di 1mb',
        'images.image' => 'I file devono essere immagini ',
        'images.max' => 'L\'immagine deve essere massimo di 1mb'
        
    ];
    
    
    public function updatedTemporaryImages(){
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
            ])) {
                foreach ($this->temporary_images as $image) {
                    $this->images[] = $image;
                }
            }
        }
        
        public function removeImage($key){
            if (in_array($key, array_keys($this->images))){
                unset($this->images[$key]);
            }
        }
        
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    
    public function store(){
        $this->validate();
        $category= Category::find($this->category);

        $this->announcement = $category->announcements()->create([
            'title'=>$this->title,
            'body'=>$this->body,
            'price'=>$this->price,
        ]);
        Auth::user()->announcements()->save($this->announcement);

        if(($this->images)){

            foreach($this->images as $image){
              
                // $this->announcement->images()->create(['path'=>$image->store('images' , 'public')]);
                $newFileName = "announcements/{$this->announcement->id}";
                $newImage = $this->announcement->images()->create(['path'=>$image->store($newFileName , 'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path , 300 , 300),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoggleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
                
            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }
        session()->flash('message', 'Articolo caricato con successo,sarà pubblicato dopo la revisione');
        $this->cleanForm();
    }
    
    public function cleanForm(){
        $this->title= '';
        $this->body= '';
        $this->price= '';
        $this->category= '';
        $this->temporary_images = [];
        $this->images= '';
        
    }
    
        public function render()
        {
            return view('livewire.create-announcement');
        }
    }
    