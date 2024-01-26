<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['name', 'company_name', 'title', 'industry_domain', 'country', 'state', 'city', 'email', 'mobile_no', 'person_linkedin', 'domain_linkedin'];

}
