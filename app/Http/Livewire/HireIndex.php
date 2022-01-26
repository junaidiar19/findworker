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
    public $q;
    public $location;
    public $ready;
    public $experience;
    
    protected $queryString = ['q', 'location', 'ready', 'experience'];

    public function mount()
    {
        $this->q = request()->query('q', $this->q);
        $this->location = request()->query('location', $this->location);
        $this->ready = request()->query('ready', $this->ready);
        $this->experience = request()->query('experience', $this->experience);
    }

    public function render()
    {
        $params = [
            'q' => $this->q,
            'location' => $this->location,
            'ready' => $this->ready,
            'experience' => $this->experience,
        ];

        $var['availability'] = Availability::all();
        $var['experiences'] = Experience::all();
        $var['workers'] = Worker::filter($params)->actived()->latest()->paginate($this->paginate);
        $var['kota'] = Kota::all();

        return view('livewire.hire-index', $var)
            ->extends('layouts.user');
    }
}
