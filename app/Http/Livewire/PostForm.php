<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PostForm extends Component
{

    public $posts;

    protected $rules = [
        'posts.*.title' => 'required|string|min:6',
        'posts.*.content' => 'required|string|max:500',
    ];

    public function mount()
    {
        $this->posts = auth()->user()->posts;
    }

    public function save()
    {
        $this->validate();

        foreach ($this->posts as $post) {
            $post->save();
        }
    }

    public function render()
    {
        return view('livewire.post-form');
    }
}
