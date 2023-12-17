<?php

namespace App\Livewire\Admin\Post\Edit;

use FilesManager\Models\FileManager;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Post\Models\Post;

class Status extends Component
{
    public $post , $statusPublish , $typePost , $specialPin , $formatPost='text' , $file_address , $file_name , $file_size
     , $disableFilds=false , $post_id , $files;


    public function mount()
    {
        $this->post_id = $this->post->id ;
        $this->statusPublish = $this->post->statusPublish ;
        $this->typePost = $this->post->typePost ;
        $this->specialPin = $this->post->specialPin ;
        $this->formatPost = $this->post->formatPost ;
        if ($this->formatPost == 'dl-file'){
            $this->file_name = $this->post->name ;
        }
        $this->files = FileManager::query()->where([
            'where'=>'post',
            'where_id'=>$this->post->id,
            'for_what' => 'for free Download'
        ])->get();
    }
    public function render()
    {
        return view('livewire.admin.post.edit.status' , [
            'files' => $this->files ,
        ]);
    }

    public function updated()
    {
        $post = Post::find($this->post_id);
        $post->statusPublish = $this->statusPublish ;
        $post->typePost = $this->typePost ;
        $post->specialPin = $this->specialPin ;
        $post->formatPost = $this->formatPost ;
        $post -> save() ;

        //dd($this->files);
    }

    public function saveFile()
    {
        $this->disableFilds = true ;
        $newFile = new FileManager();
        $newFile->filename = $this->file_name ;
        $newFile->path = $this->file_address ;
        $newFile->user_id = Auth::id() ;
        $newFile->where ='post' ;
        $newFile->where_id = $this->post_id ;
        $newFile->for_what = 'for free Download' ;
        $newFile->size = $this->file_size ;
        $newFile->save() ;


        $this->reset('file_name');
        $this->reset('file_address');
        $this->reset('file_size');

        $this->disableFilds = false ;

        $this->files = FileManager::query()->where([
            'where'=>'post',
            'where_id'=>$this->post_id,
            'for_what' => 'for free Download'
        ])->get();
    }

    public function deleteFile($file_id)
    {
        $file = FileManager::query()->find($file_id);
        $file->delete();
        $this->files = FileManager::query()->where([
            'where'=>'post',
            'where_id'=>$this->post_id,
            'for_what' => 'for free Download'
        ])->get();
    }
}
