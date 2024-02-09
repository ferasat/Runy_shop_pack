<div class="container">
    <div class="row py-5">
        @foreach($files as $file)
        <div class="col-md-4 col-sm-6">
            <div class="card my-4">
                <div class="card-header d-flex justify-content-between">
                    <div class="">نام فایل: {{ $file->filename }}</div>

                    <div class="">نوع : {{ $file->extension }}</div>
                </div>
                <div class="card-body">
                    @if(in_array($file->extension , ['jpg', 'jpeg' , 'webp' , 'bmp', 'ttf'] ) )
                        <img class="w-100" src="{{ asset($file->path) }}" alt="{{ $file->filename }}">
                    @else
                        <a href="{{ asset($file->path) }}">{{ $file->filename }}</a>
                    @endif
                    <p>توضیح : {{ $file->description }}</p>
                        آدرس فایل :
                        <p class="bg-black bg-opacity-25 rounded p-1" style="text-align: left;direction: ltr">{{ asset($file->path) }}</p>

                </div>
                <div class="card-footer d-flex justify-content-between">
                    <div class="">
                        <button class="btn btn-danger" wire:click.prevent="deleteFile({{ $file->id }})">حذف</button>
                    </div>
                    <div class="">بخش : {{ $file->where }}</div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="col-12 py-5">
            <div class="card ">
                <div class="card-body">
                    {{ $files->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
