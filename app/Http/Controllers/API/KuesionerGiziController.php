<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\PostRequestKuesionerGizi;
use App\Models\KoeisionerGiziModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KuesionerGiziController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // PostRequestKuesionerGizi
        if (Auth::user()) {
            try {
                KoeisionerGiziModel::create($data = [
                    "no_rawat" => $request->no_rawat,
                    "nama" => $request->nama,
                    "bgsl" => $request->bgsl,
                    "rasa" => $request->rasa,
                    "penampilan" => $request->penampilan,
                    "tekstur" => $request->tekstur,
                    "variasi" => $request->variasi,
                    "saran" => $request->saran,
                    "tgl" => $request->tgl
                ]);
                return response()->json(['data'=> $data], 200);
            } catch (\Throwable $th) {
                //throw $th;
                return response()->json(['data'=> 'failed'], 500);
            }
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(KoeisionerGiziModel $koeisionerGiziModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KoeisionerGiziModel $koeisionerGiziModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KoeisionerGiziModel $koeisionerGiziModel)
    {
        //
    }
}
