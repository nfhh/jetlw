<div>
    @foreach ($user->posts as $i => $post)
        <div>
            <input type="text" class="w-full" wire:model="user.posts.{{ $i }}.title"/>
            <span class="error">
                @error('user.posts.'.$i.'.title') {{ $message }} @enderror
            </span>
        </div>

        <div>
            <textarea class="w-full" wire:model="user.posts.{{ $i }}.content"></textarea>
            <span class="error">
                @error('user.posts.'.$i.'.content') {{ $message }} @enderror
            </span>
        </div>

        <div class="py-6"></div>
    @endforeach

    <button wire:click="save">Save</button>
</div>
