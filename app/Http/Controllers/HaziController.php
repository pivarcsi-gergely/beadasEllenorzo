<?php

namespace App\Http\Controllers;

use App\Http\Requests\HaziRequest;
use App\Models\Hazi;
use Illuminate\Support\Facades\DB;

class HaziController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hazik = Hazi::orderBy('diak_nev')->get();
        return view('homework.index', ['hazik' => $hazik]);
    }

    public function create()
    {
        return view('homework.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\HaziRequest  $hRequest
     * @return \Illuminate\Http\Response
     */
    public function store(HaziRequest $hRequest)
    {
        $adatok = $hRequest->only(['diak_nev', 'feladat', 'url']);
        $hw = new Hazi();
        $hw->fill($adatok);
        $hw->save();
        return redirect()->route('homework.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hazi $homework)
    {
        return view('homework.show', ['homework' => $homework]);
    }

    public function edit(Hazi $homework)
    {
        return view('homework.edit', ['homework' => $homework]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\HaziRequest  $hRequest
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HaziRequest $hRequest, Hazi $homework)
    {
        $adatok = $hRequest->only(['diak_nev', 'feladat', 'url']);
        $homework->fill($adatok);
        $homework->save();
        return redirect()->route('homework.show', $homework->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hazi $homework)
    {
        $homework->delete();
        return redirect()->route('homework.index');
    }
}
