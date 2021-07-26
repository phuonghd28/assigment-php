<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApartmentRequest;
use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *

     */
    public function index()
    {
        $apartments = Apartment::query()->paginate(6);
        return view('list',[
            'data' => $apartments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('form',[
            'data' => null
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(ApartmentRequest $request)
    {
        $apartment = new Apartment();
        $apartment->fill($request->validated());
        $apartment->save();
        return redirect()->route('listAP');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $detail = Apartment::find($id);
        return view('form',[
            'data' => $detail
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(ApartmentRequest $request, $id)
    {
        $detail = Apartment::find($id);
        $detail->update($request->validated());
        $detail->save();
        return redirect()->route('listAP');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $detail = Apartment::find($id);
        $detail->delete();
        return redirect()->route('listAP');
        //
    }
}
