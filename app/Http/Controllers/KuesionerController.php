<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KuesionerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function gizi(Request $request)
    {
        $tanggal = "2024-02-27";
        $noRawat = $request->no_rawat;
        $noRawat = substr_replace($noRawat, '/', 8, 0);
        $noRawat = substr_replace($noRawat, '/', 6, 0);
        $noRawat = substr_replace($noRawat, '/', 4, 0);

        $data = DB::connection('simsvbaru')->select(
            "
            select ran.no_rawat as no_rawat, pasien.nm_pasien as nama,
            bgl.nm_bangsal as bgsl, bgl.kd_bangsal as kdbgs, pasien.alamat as alamat, reg.p_jawab as pj,
            kel.nm_kel as kel,kec.nm_kec as kec,kab.nm_kab as kab,prop.nm_prop as prov

            from kamar_inap as ran
            inner join reg_periksa as reg on ran.no_rawat = reg.no_rawat
            inner join pasien as pasien on pasien.no_rkm_medis= reg.no_rkm_medis
            inner join kamar as kmr on ran.kd_kamar = kmr.kd_kamar
            inner join bangsal as bgl on bgl.kd_bangsal = kmr.kd_bangsal
            inner join kelurahan as kel on pasien.kd_kel = kel.kd_kel
            inner join kecamatan as kec on pasien.kd_kec = kec.kd_kec
            inner join kabupaten as kab on pasien.kd_kab = kab.kd_kab
            inner join propinsi as prop on pasien.kd_prop = prop.kd_prop

            where tgl_keluar='".$tanggal."'and stts_pulang ='-'
            and ran.no_rawat='" . $noRawat . "'
            order by bgl.nm_bangsal"
        );

        // and ran.no_rawat='".$request->no_rawat."'
        // 2024/02/23/000081

        if (isset($data[0])) {
            // dd($data);
            return view('koesioner_gizi', ['data' => $data[0]]);
        } else {
            $data = DB::connection('simsvbaru')->select(
                "
            select ran.no_rawat as no_rawat, pasien.nm_pasien as nama,
            bgl.nm_bangsal as bgsl, bgl.kd_bangsal as kdbgs, pasien.alamat as alamat, reg.p_jawab as pj,
            kel.nm_kel as kel,kec.nm_kec as kec,kab.nm_kab as kab,prop.nm_prop as prov

            from kamar_inap as ran
            inner join reg_periksa as reg on ran.no_rawat = reg.no_rawat
            inner join pasien as pasien on pasien.no_rkm_medis= reg.no_rkm_medis
            inner join kamar as kmr on ran.kd_kamar = kmr.kd_kamar
            inner join bangsal as bgl on bgl.kd_bangsal = kmr.kd_bangsal
            inner join kelurahan as kel on pasien.kd_kel = kel.kd_kel
            inner join kecamatan as kec on pasien.kd_kec = kec.kd_kec
            inner join kabupaten as kab on pasien.kd_kab = kab.kd_kab
            inner join propinsi as prop on pasien.kd_prop = prop.kd_prop

            where tgl_keluar='".$tanggal."'and stts_pulang ='-'
            order by bgl.nm_bangsal"
            );
            dd ($data);
        }


        //   0 => {
        //     +"no_rawat": "2024/02/23/000081"
        //     +"nama": "SULIMAH"
        //     +"bgsl": "KEMUNING 5"
        //     +"kdbgs": "KEM5"
        //     +"alamat": "BEJI 01/04"
        //     +"pj": "HARI AGUS"
        //     +"kel": "JUNREJO"
        //     +"kec": "BATU"
        //     +"kab": "BATU"
        //     +"prov": " JAWA TIMUR"
        //   }
        // ]


        // dd($data);


    }
}
