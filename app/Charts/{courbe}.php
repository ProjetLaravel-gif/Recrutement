<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\{chartjs}\Chart;
use App\Charts\SampleChart;
class {courbe} extends Chart
{
    /**
     * Initializes the chart.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }


  

    $today_users = Offre::whereDate('created_at', today())->count();
     $yesterday_users = Offre::whereDate('created_at', today()->subDays(1))->count();
    $users_2_days_ago = Offre::whereDate('created_at', today()->subDays(2))->count();

      $chart = new SampleChart;
       $chart->labels(['2 days ago', 'Yesterday', 'Today']);
       $chart->dataset('My dataset', 'line', [$users_2_days_ago, $yesterday_users, $today_users]);

       return view('simple', compact('chart'));
       {!! $chart->container() !!}
       {!! $chart->script() !!}
       window.{{ $chart->id }}
}
