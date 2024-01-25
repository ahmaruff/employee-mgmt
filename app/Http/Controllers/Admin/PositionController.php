<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $positions = Position::all();
        $data = [
            'title' => 'Position',
            'positions' => $positions,
        ];

        return view('admin.position.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Position',
        ];

        return view('admin.position.create', $data);
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

        Position::create($validatedReq);
        return redirect()->route('admin.position.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Position $position)
    {
        $data = [
            'position' => $position
        ];

        return view('admin.position.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Position $position)
    {
        $data = [
            'position' => $position
        ];

        return view('admin.position.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Position $position)
    {
        $rules = [
            'name' => ['string', 'required']
        ];

        $validatedReq = $request->validate($rules);

        $position->name = $validatedReq['name'];
        $position->save();

        return redirect()->route('admin.position.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Position $position)
    {
        $position->delete();
        return redirect()->route('admin.position.index');
    }
}
