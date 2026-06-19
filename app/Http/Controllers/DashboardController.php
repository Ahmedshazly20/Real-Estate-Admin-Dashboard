<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('pages.dashboard', [
            'stats' => [
                ['title' => 'Total Properties', 'value' => '120', 'icon' => 'building'],
                ['title' => 'Total Clients', 'value' => '85', 'icon' => 'users'],
                ['title' => 'New Orders', 'value' => '15', 'icon' => 'clipboard'],
                ['title' => 'Total Sales', 'value' => '$2.5M', 'icon' => 'sales'],
            ],
            'latestProperties' => PropertyController::latest(),
        ]);
    }
}
