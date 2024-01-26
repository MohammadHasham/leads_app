<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;


class LeadController extends Controller
{
    public function index(Request $request)
    {
        $query = Lead::query();

        // Check if name search is set
        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->filled('company_name')) {
            $query->where('company_name', 'like', '%' . $request->input('company_name') . '%');
        }

        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->input('title') . '%');
        }
    
        // Check if industry_domain filter is set
        if ($request->filled('industry_domain')) {
            $query->when($request->filled('name'), function ($query) use ($request) {
                // If name search is also set, apply 'and' condition with industry_domain filter
                $query->where('industry_domain', $request->input('industry_domain'));
            }, function ($query) use ($request) {
                // If only industry_domain filter is set, apply 'or' condition
                $query->orWhere('industry_domain', $request->input('industry_domain'));
            });
        }
    
        $filteredLeads = $query->get();
    
        return view('leads.index', compact('filteredLeads'));
    }
}
