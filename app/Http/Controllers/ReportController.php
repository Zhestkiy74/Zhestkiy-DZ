<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reports;

class ReportController extends Controller
{
    public function index()
    {
        $reports = reports::all();
        return view('report.index', compact('reports'));
    }
    public function destroy(reports $report)
    {
        $report->delete();
        return redirect()->back();
    }
    public function store(Request $request, reports $report)
    {
        $data = $request->validate([
            'description' => 'required|string|max:255',
        ]);
        $data['number']
            = uniqid();
        $report->create($data);
        return redirect()->back();
    }

    public function show(reports $report)
    {
        return view('report.show', compact('report'));
    }

    public function update(Request $request, reports $report)
    {
        $data = $request->validate([
            'description' => 'required|string|max:255',
        ]);

        $report->update($data);
        return redirect()->back();
    }
}
