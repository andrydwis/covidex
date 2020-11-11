<div>
    <form action="" wire:submit.prevent="submit">
        <div class="form-group">
            <label for="github">Github</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fab fa-github"></i>
                    </div>
                </div>
                <input id="github" type="text" class="form-control @error('github'){{'is-invalid'}}@enderror" name="github" wire:model="github" placeholder="username">
                @error('github')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="linkedin">Linkedin</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
                <input id="linkedin" type="text" class="form-control @error('linkedin'){{'is-invalid'}}@enderror" name="linkedin" wire:model="linkedin">
                @error('linkedin')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="instagram">Instagram</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fab fa-instagram"></i>
                    </div>
                </div>
                <input id="instagram" type="text" class="form-control @error('instagram'){{'is-invalid'}}@enderror" name="instagram" wire:model="instagram" placeholder="username">
                @error('instagram')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">
                Save
            </button>
        </div>
    </form>
</div>