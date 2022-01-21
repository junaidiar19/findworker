<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Availability;
use App\Models\Experience;

class HireIndex extends Component
{
    public function render()
    {
        $var['available'] = Availability::all();
        $var['experience'] = Experience::all();

        return view('livewire.hire-index', $var)
            ->extends('layouts.user');
    }
}
