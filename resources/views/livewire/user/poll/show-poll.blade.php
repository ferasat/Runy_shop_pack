<div class="container">
    <div class="form-group">
        <h3 class="mb-2">{{$question->title}}</h3>
        @foreach($options as $option)
        <div class="form-check">
            <input class="form-check-input" type="radio" name="color" id="color1" value="{{$option->id}}" wire:model.blur="answer">
            <label class="form-check-label" for="color1">{{$option->option}}</label>
        </div>
        @endforeach
    </div>


    <button  class="btn btn-primary" wire:click="save_answer()">ذخیره</button>

</div>
