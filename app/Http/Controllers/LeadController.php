<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;


class LeadController extends Controller
{
    public function show()
    {
        $lead=Lead::all();
        return view('leaddata',['leads'=>$lead]);
    }
}
