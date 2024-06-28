<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {     
     
     $this->data['page'] = 'admin.dashboard';
     return $this->admin_dashboard();
     
    } 
}
