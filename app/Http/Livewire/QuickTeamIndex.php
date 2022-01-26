<?php

namespace App\Http\Livewire;

use App\Models\Worker;
use App\Models\Service;
use Livewire\Component;
use App\Models\Availability;
use GuzzleHttp\Psr7\Request;

class QuickTeamIndex extends Component
{
    public $scan = false;
    public $projectName;
    public $category;
    public $team;
    public $ability;
    
    public function render()
    {
        $var['teamcategory'] = ['Small', 'Medium', 'Big'];
        $var['teamability'] = ['Rookie', 'Pro', 'Elite'];
        $var['projectcategory'] = ['Aplikasi', 'Youtube Content'];

        $var['services'] = Service::all();
        $var['workers'] = Worker::actived()->latest()->limit(5)->get();

        return view('livewire.quick-team-index', $var)->extends('layouts.user');
    }

    public function scan()
    {
        $this->scan = true;
    }
}
