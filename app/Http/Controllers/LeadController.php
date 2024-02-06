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
            $names = explode(',', $request->input('name'));
            
            $query->where(function ($query) use ($names) {
                foreach ($names as $name) {
                    $query->orWhere('name', 'like', '%' . trim($name) . '%');
                }
            });
        }

        // Check if company name search is set
        if ($request->filled('company_name')) {
            $companyNames = explode(',', $request->input('company_name'));
            
            $query->where(function ($query) use ($companyNames) {
                foreach ($companyNames as $companyName) {
                    $query->orWhere('company_name', 'like', '%' . trim($companyName) . '%');
                }
            });
        }


        // Check if title search is set
        if ($request->filled('title')) {
            $titles = explode(',', $request->input('title'));
            
            $query->where(function ($query) use ($titles) {
                foreach ($titles as $title) {
                    $query->orWhere('title', 'like', '%' . trim($title) . '%');
                }
            });
        }

        // Check if country filter is set
        if ($request->filled('country')) {
            $countries = explode(',', $request->input('country'));
            $query->whereIn('country', $countries);
        }
            
        // Check if state filter is set
        if ($request->filled('state')) {
            $states = explode(',', $request->input('state'));
            $query->whereIn('state', $states);
        }
        
        // Check if city filter is set
        if ($request->filled('city')) {
            $cities = explode(',', $request->input('city'));
            $query->whereIn('city', $cities);
        }

        // Check if industry_domain filter is set
        if ($request->filled('industry_domain')) {
            $query->whereIn('industry_domain', $request->input('industry_domain'));
        }
    
        $filteredLeads = $query->paginate(10)->withQueryString();
    
        return view('leads.index', compact('filteredLeads'));
    }
}
