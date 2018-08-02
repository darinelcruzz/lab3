<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    function index()
    {
        return view('web.templates');
    }

    function create()
    {
        //
    }

    function store(Request $request)
    {
        //
    }

    function show($template)
    {
        return view('web.templates.index', compact('template'));
    }

    function edit($id)
    {
        //
    }

    function update(Request $request, $id)
    {
        //
    }

    function destroy($id)
    {
        //
    }
}
