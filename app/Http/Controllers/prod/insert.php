<?php

namespace App\Http\Controllers\prod;


use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Models\prod\insert as insertion;
use Illuminate\Http\Request;

class insert extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
    //    dd($request);
        $flight = new insertion;

        $flight->land_owner = $request->land_owner;
        $flight->address = $request->address;
        $flight->department = $request->department;
        $flight->communes = $request->communes;
        $flight->borough = $request->borough;
        $flight->area = $request->area;
        $flight->price = $request->price;
        $flight->price_min = $request->price_min;
        // $flight->main_image = $request->main_image;
        // $flight->img1 = $request->img1;
        // $flight->img2 = $request->img2;
        // $flight->img3 = $request->img3;
        // $flight->img4 = $request->img4;
        $flight->description = $request->description;
        $flight->ground_type = $request->ground_type;
 
        $flight->save();
 
        return redirect('/faqs');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $posts = insertion::all();
        return view('show_all_product.index', ['posts' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
