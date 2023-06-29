<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ModuleGeneratorController extends Controller
{
    public function index()
    {
        return Inertia::render('moduleGenerator.index');
        // return view("admin::page.moduleGenerator.index");
    }
}
