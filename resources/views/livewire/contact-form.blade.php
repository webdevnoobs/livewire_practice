<div>
    {{-- Be like water. --}}

    @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
    @endif

    <form class="form-control mx-auto my-5 w-50 p-5" wire:submit.prevent="send">

        <div class="row mb-3">
            <label for="name" class="form-label">Name</label>
            <input id="name" type="text" class="form-control" wire:model="name">
            @error('name') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="row mb-3">
            <label for="email" class="form-label">Email</label>
            <input id="email" type="email" class="form-control" wire:model="email">
            @error('email') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="row mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input id="subject" type="text" class="form-control" wire:model="subject">
            @error('subject') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="row mb-3">
            <label for="message" class="form-label"></label>
            <textarea class="form-control" id="message" cols="30" rows="6" wire:model="message"></textarea>
            @error('message') <span class="text-danger">{{$message}}</span> @enderror
        </div>
        <div class="row">
            <button class="btn btn-primary">Send Message</button>
        </div>
    </form>
</div>
