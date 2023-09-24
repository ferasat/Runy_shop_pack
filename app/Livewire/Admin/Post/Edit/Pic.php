<?php

namespace App\Livewire\Admin\Post\Edit;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Livewire;
use Livewire\WithFileUploads;
use Post\Models\Post;

class Pic extends Component
{
    use WithFileUploads;
    public $post , $pic , $startUp = false ;

    public function mount()
    {
        $this->pic = $this->post->pic ;
    }

    public function render()
    {
        return view('livewire.admin.post.edit.pic');
    }

    protected $rules = [
        'pic' => 'image|max:1024',
    ];
    protected $messages = [
       'pic.max' => 'حجم فایل زیاد است زیر یک مگ',
    ];

    public function can_upload_photo()
    {
        Storage::fake('avatars');

        $file = UploadedFile::fake()->image('avatar.png');

        Livewire::test(UploadPhoto::class)
            ->set('photo', $file)
            ->call('upload', 'uploaded-avatar.png');

        Storage::disk('avatars')->assertExists('uploaded-avatar.png');
    }

    public function uploadPicPost()
    {
        $year = now()->year;
        $month = now()->month;
        $day = now()->day;

        //dd($this->pic);

        $dir = "pic-post/$year/$month/$day";
        $nameFile = rand('1' , '9999').'-'.$this->pic->getClientOriginalName();


        $reUp = $this->pic->storeAs($dir , $nameFile);
        //$this->pic->file('pic')->move(public_path("storage/".$dir), $nameFile );

        //$this->pic->store('photos');

        //dd($reUp);

        log::channel('test')->info('up:'."$reUp");
        return "$dir/$nameFile" ;

    }

    public function updated()
    {
        $this->validate();

        $this -> startUp = true ;

        $upPost = Post::find($this->post->id);
        $upPost->pic = $this->uploadPicPost();
        $upPost->save() ;
        log::channel('test')->info('pic post: '. $upPost->pic);
        log::channel('test')->info('saved post: '. $upPost->save());

    }

    public function uploadPhoto ()
    {
        $this->validate();

        $this -> startUp = true ;

        $upPost = Post::find($this->post->id);
        $upPost->pic = $this->uploadPicPost();
        $upPost->save() ;
        log::channel('test')->info($upPost->save());
    }

}
