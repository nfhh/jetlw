<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EditUsersPosts extends Component
{
    public User $user;

    public function mount()
    {
        $this->user = auth()->user();
    }

    protected $rules = [
        'user.posts.*.title' => 'required',
        'user.posts.*.content' => 'required',
    ];

    public function save()
    {
        $this->validate();

        $this->user->posts->each->save();
    }

    public function render()
    {
        return view('livewire.edit-users-posts');
    }
}
