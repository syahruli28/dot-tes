<?php

namespace App\Http\Controllers;

use App\Models\Kota;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Kavist\RajaOngkir\RajaOngkir;

class RajaOngkirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $apiKey = '0df6d5bf733214af6c6644eb8717c92c'; // apiKey Rajaongkir

    public function index()
    {
        //
    }

    public function tambahKeDb()
    {
        $rajaOngkir = new RajaOngkir($this->apiKey);
        $daftarProvinsi = $rajaOngkir->provinsi()->all();
        $daftarKota = $rajaOngkir->kota()->all();

        // tambah provinsi ke db
        foreach ($daftarProvinsi as $dp) {
            $data = array(
                'provinsi_id' => $dp['province_id'],
                'nama_provinsi' => $dp['province'],
            );
            // simpan
            Provinsi::create($data);
        }

        // tambah kota ke db
        foreach ($daftarKota as $dk) {
            $data = array(
                'kota_id' => $dk['city_id'],
                'provinsi_id' => $dk['province_id'],
                'nama_provinsi' => $dk['province'],
                'tipe' => $dk['type'],
                'nama_kota' => $dk['city_name'],
                'kode_pos' => $dk['postal_code'],
            );
            // simpan
            Kota::create($data);
        }

        // notif
        dd('Done');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
