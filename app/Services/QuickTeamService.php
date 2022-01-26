<?php  

namespace App\Services;

use App\Models\Worker;
use Illuminate\Support\Facades\DB;

    class QuickTeamService
    {
        public function scan($scan, $category, $team, $ability)
        {
            // Category Logic
            if($category == 'Aplikasi') {
                $service = [1,2,4];
                $available = [1,2,3,4,5];
            } else if($category == 'Youtube Content') {
                $service = [3,6,7];
                $available = [1,2,3,4,5];
            }

            // Team Logic

            if($team == 'Small') {
                $limit = 4;
            } else if($team == 'Medium') {
                $limit = 10;
            } else {
                $limit = 20;
            }

            // Ability Logic

            if($ability == 'Rookie') {
                $experience = ['Fresher', 'Intermediate'];
            } else if($team == 'Pro') {
                $experience = ['Pro', 'Intermediate'];
            } else {
                $experience = ['Pro', 'Expert'];
            }

            // $services = Service::whereIn('id', $service)->with(['worker' => function($query) use ($service, $available, $limit, $experience) {
            //     $query->whereIn('workers.service_id', $service)
            //     ->whereHas('availability', function($query) use ($available) {
            //         $query->whereIn('id', $available);
            //     })
            //     ->whereIn('workers.experience', $experience)
            //     ->join(DB::raw('workers b'), function($join) {
            //         $join->on('workers.service_id', '=', 'b.service_id')
            //         ->on('b.id', '>=', 'workers.id'); 
            //     })
            //     ->groupBy('workers.id')
            //     ->groupBy('workers.service_id')
            //     ->havingRaw("count(*) <= $limit");
            // }])->get();
            // return response()->json($services);
            
            if ($scan) {
                $workers = Worker::select('workers.*')->with('service')
                    ->whereIn('workers.service_id', $service)
                    ->whereHas('availability', function($query) use ($available) {
                        $query->whereIn('id', $available);
                    })
                    ->whereIn('workers.experience', $experience)
                    ->join(DB::raw('workers b'), function($join) {
                        $join->on('workers.service_id', '=', 'b.service_id')
                        ->on('b.id', '>=', 'workers.id'); 
                    })
                    ->groupBy('workers.id')
                    ->groupBy('workers.service_id')
                    ->havingRaw("count(*) <= $limit")
                    ->get();

                $salary_start = $workers->pluck('salary_start');
                $salary_end = $workers->pluck('salary_end');

                $data['data'] = $workers;
                $data['costs'] = $salary_start->merge($salary_end)->sum()/2;
                $data['services'] = $workers->pluck('service')->duplicates()->unique()->values();
                return $data;
            }
        }
    }
?>