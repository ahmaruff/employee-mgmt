<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $divisions = Division::all();
        $data = [
            'title' => 'Division',
            'divisions' => $divisions,
        ];

        return view('admin.division.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Division',
        ];

        return view('admin.division.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => ['string', 'required']
        ];

        $validatedReq = $request->validate($rules);

        Division::create($validatedReq);
        return redirect()->route('admin.division.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Division $division)
    {
        $data = [
            'division' => $division
        ];

        return view('admin.division.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Division $division)
    {
        $rules = [
            'name' => ['string', 'required']
        ];

        $validatedReq = $request->validate($rules);

        $division->name = $validatedReq['name'];
        $division->save();
        
        return redirect()->route('admin.division.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Division $division)
    {
        $division->delete();
        return redirect()->route('admin.division.index');
    }
}
