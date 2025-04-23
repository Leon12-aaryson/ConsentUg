<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Document;
use Illuminate\Http\Request;

use function Pest\Laravel\get;

class ArchivesController extends Controller
{
    public function index(Request $request)
    {
        // Fetch paginated gallery items
        $galleries = Gallery::latest()->simplePaginate(12); // 12 items per page

        // Fetch reports
        $reports = Document::latest()->take(10)->get();
        $totalReports = Document::count(); // Get total number of reports

        if ($request->ajax()) {
            $type = $request->query('type');
            $view = $type === 'gallery' ? 'gallery-ajax' : 'reports-ajax';
            $data = $type === 'gallery' ? $galleries : $reports;

            return response()->json([

                'html' => view($view, compact($type))->render(),
                'next_page_url' => $data->nextPageUrl(),
            ]);
        }

        return view('archives', compact('galleries', 'reports', 'totalReports'));
    }

    public function reportsIndex(Request $request)
    {
        $reports = Document::paginate(10); // Paginate all reports (e.g., 10 per page)
        return view('reports', compact('reports'));
    }
}
