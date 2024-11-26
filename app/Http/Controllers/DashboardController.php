<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Blog;
use App\Models\Document;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'totalUsers' => User::count(),
            'totalBlogs' => Blog::count(),
            'totalReports' => Document::count(),
            // 'totalComplaints' => Complaint::count(),
            'recentBlogs' => Blog::with('author')
                                ->latest()
                                ->take(5)
                                ->get(),
            // 'recentComplaints' => Complaint::latest()
            //                     ->take(5)
            //                     ->get(),
        ];

        return view('dashboard', $data);
    }
}
