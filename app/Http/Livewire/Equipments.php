<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Equipment;

class Equipments extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.equipments', [
            'equipments' => Equipment::all()
        ]);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required'
        ]);

        Equipment::create([
            'name' => $this->name
        ]);

    }

    public function destroy($id)
    {
        Equipment::destroy($id);
    }
}
