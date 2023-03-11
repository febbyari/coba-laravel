<div>
    <form wire:submit.prevent="store">
        <div class="form-group">
            <div class="row mb-3">
                <div class="col-sm-6">
                    <input wire:model="name" type="text" name="" id="" class="form-control @error('name') is-invalid @enderror" placeholder="Name">
                    @error('name')
                        <span>
                           <strong>{{ $message }}</strong> 
                        </span>
                    @enderror
                </div>
                <div class="col-sm-6">
                    <input wire:model="phone" type="text" name="" id="" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone">
                    @error('phone')
                    <span>
                       <strong>{{ $message }}</strong> 
                    </span>
                @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        {{-- {{ $name }} --}}
    </form>
</div>
