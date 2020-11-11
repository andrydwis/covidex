<div>
    <form action="" wire:submit.prevent="submit">
        <div class="form-group">
            @if($photoValid)
            <div class="d-flex justify-content-center">
                <figure class="avatar mr-2 avatar-xl">
                    <img src="{{$photoValid->temporaryUrl()}}">
                </figure>
            </div>
            @else
            <div class="d-flex justify-content-center">
                <figure class="avatar mr-2 avatar-xl">
                    @if($photoNow)
                    <img src="{{asset($photoNow)}}">
                    @else
                    <img src="{{asset('assets/img/avatar/avatar-1.png')}}">
                    @endif
                </figure>
            </div>
            @endif
        </div>
        <div class="form-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input @error('photo'){{'is-invalid'}}@enderror" id="customFile" accept=".png,.jpg,.jpeg" wire:model="photo">
                <label class="custom-file-label" for="customFile">{{$photoName ?? 'Choose a Photo'}}</label>
                @error('photo')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control @error('description'){{'is-invalid'}}@enderror" wire:model="description"></textarea>
            @error('description')
            <div class="invalid-feedback">{{$message}}</div>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-lg btn-block">Save</button>
        </div>
    </form>
</div>