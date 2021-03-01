<?php

namespace App\Http\Controllers\Kampus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KampusController extends Controller
{
    public function index() {
    	return view('superadmin.section.kampus.buat');
    }
}
