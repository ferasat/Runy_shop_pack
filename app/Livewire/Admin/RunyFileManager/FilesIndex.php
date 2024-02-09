<?php

namespace App\Livewire\Admin\RunyFileManager;

use FilesManager\Models\FileManager;
use Livewire\Component;

class FilesIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.runy-file-manager.files-index' , [
            'files'=>FileManager::query()->orderByDesc('id')->paginate(20)
        ]);
    }

    public function deleteFile($file_id)
    {
        FileManager::query()->find($file_id)->delete();
        return $this->render();
    }
}
