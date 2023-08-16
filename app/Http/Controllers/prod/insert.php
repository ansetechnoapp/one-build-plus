<?php

namespace App\Http\Controllers\prod;

use App\Models\img;
use Illuminate\Http\Request;
use App\Models\prod;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

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


        // $request->validate([
        //     'main_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $filename = time() . '.' . $request->main_image->extension();
        $path = $request->file('main_image')->storeAs(
            'imageprod',
            $filename,
            'public'
        );
        $land_owner = $request->land_owner;
        $address = $request->address;
        $department = $request->department;
        $communes = $request->communes;
        $borough = $request->borough;
        $area = $request->area;
        $price = $request->price;
        $price_min = $request->price_min;
        $img1 = $request->img1;
        $img2 = $request->img2;
        $img3 = $request->img3;
        $img4 = $request->img4;
        $description = $request->description;
        $ground_type = $request->ground_type;

        $insert = prod::create([
            /* 'civility' => $civility, */
            'land_owner' => $land_owner,
            'address' => $address,
            'department' => $department,
            'communes' => $communes,
            'borough' => $borough,
            'area' => $area,
            'price' => $price,
            'price_min' => $price_min,
            'description' => $description,
            'ground_type' => $ground_type,

        ]);
        $img = new img();
        $img->main_image = $path;
        $img->prod()->associate($insert); // Associe le modèle Prod à la relation
        $img->save();


        return redirect()->route('list_prod');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $posts = prod::all();
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
