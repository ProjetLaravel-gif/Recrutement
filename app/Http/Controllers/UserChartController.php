<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\UserChart;
class UserChartController extends Controller
{
    public function index()
    {
        $ $usersChart = new UserChart;
        $usersChart->labels(['Jan', 'Feb', 'Mar']);
        $usersChart->dataset('Users by trimester', 'line', [10, 25, 13])
            ->color("rgb(255, 99, 132)")
            ->backgroundcolor("rgb(255, 99, 132)");
        return view('simple', [ 'usersChart' => $usersChart ] );
    }
}
