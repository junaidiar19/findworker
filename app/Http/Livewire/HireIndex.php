<?php

namespace App\Http\Livewire;

use App\Models\Worker;
use Livewire\Component;
use App\Models\Experience;
use App\Models\Availability;
use App\Models\Kota;
use Livewire\WithPagination;

class HireIndex extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $paginate = 15;
    
    public function render()
    {
        $var['availability'] = Availability::all();
        $var['experiences'] = Experience::all();
        $var['workers'] = Worker::actived()->latest()->paginate($this->paginate);
        $var['kota'] = Kota::all();

        return view('livewire.hire-index', $var)
            ->extends('layouts.user');
    }
}
