<?php

namespace App\Http\Livewire;

use Livewire\Component;
use app\Models\User;

class Users extends Component
{
    public $search = '';
    
    public function render()
    {
        return view('livewire.users', [
            'users' => User::where('ref', 'LIKE', "%$this->search%")->get()
        ]);
    }
}
