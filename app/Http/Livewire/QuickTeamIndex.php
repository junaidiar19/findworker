<?php

namespace App\Http\Livewire;

use App\Models\Availability;
use Livewire\Component;

class QuickTeamIndex extends Component
{
    public function render()
    {
        $available = Availability::all();

        return view('livewire.quick-team-index', [
            'available' => $available
        ])->extends('layouts.user');
    }
}
