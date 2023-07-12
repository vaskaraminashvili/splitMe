<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Generators\InterfaceGenerator;

class ModuleGeneratorController extends Controller
{
    public function index()
    {
        $generator = new InterfaceGenerator('Thread');
dd('end');
        return Inertia::render('moduleGenerator.index');
    }

    public function create()
    {
        return Inertia::render('moduleGenerator.create');
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
