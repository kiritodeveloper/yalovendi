<?php

namespace App\Http\Controllers;

use App\Venta;
use Illuminate\Http\Request;
use App\Http\Requests\StoreVentasRequest;
use App\Http\Requests\UpdateVentasRequest;

class VentasController extends Controller
{

    /**
     * Display a listing of venta.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Venta::all();

        return view('ventas.index', compact('ventas'));
    }

    /**
     * Show the form for creating new venta.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('ventas.create');
    }

    /**
     * Store a newly created venta in storage.
     *
     * @param  \App\Http\Requests\StoreventasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVentasRequest $request)
    {
        Venta::create($request->all());

        return redirect()->route('ventas.index');
    }

    /**
     * Show the form for editing venta.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         

        $venta = Venta::findOrFail($id);

        return view('ventas.edit', compact('venta'));
    }

    /**
     * Update venta in storage.
     *
     * @param  \App\Http\Requests\UpdateventasRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVentasRequest $request, $id)
    {
        $venta = Venta::findOrFail($id);
        $venta->update($request->all());

        return redirect()->route('ventas.index');
    }

     
    /**
     * Remove venta from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $venta = Venta::findOrFail($id);
        $venta->delete();

        return redirect()->route('ventas.index');
    }

    /**
     * Delete all selected venta at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Venta::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
