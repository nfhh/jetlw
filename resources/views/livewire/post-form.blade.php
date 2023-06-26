<form wire:submit.prevent="save">
    @foreach ($posts as $index => $post)
        <div wire:key="post-field-{{ $post->id }}">
            <div class="mb-4">
                <input type="text" class="w-full mb-4" wire:model="posts.{{ $index }}.title">
            </div>

            <div>
                <textarea class="w-full" wire:model="posts.{{ $index }}.content"></textarea>
            </div>
        </div>
        <div class="py-6"></div>
    @endforeach

    <button type="submit">Save</button>
</form>
