<?php

namespace App\Http\Livewire;

use App\Models\Availability;
use Livewire\Component;

class QuickTeamIndex extends Component
{
    public function render()
    {
        $var['categoryteam'] = ['Small', 'Medium', 'Big'];
        $var['categoryproject'] = ['Start Up', 'Bussiness', 'Personal'];

        return view('livewire.quick-team-index', $var)->extends('layouts.user');
    }
}
