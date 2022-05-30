<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class ExportPDFController extends Controller
{
    public function cetakPdf(){
        $data = [
            'dasar_surat' => 'Pelanggaran',
            'nama_pelaku' => 'Bravo Charlie',
            'alamat_pelaku' => 'jakarta barat',
            'lokasi_penangkapan' => 'situbondo',
            'nama_pengangkut' => 'sobirin',
            'bendera' => 'itali',
            'no_register' => '991',
            'no_voy' => '001',
            'kapasitas_muatan' => '2000 ton',
            'merek_kapasitas_mesin' => 'dalkin',
            'nahkoda' => 'michael',
            'awak_kapal' => 'yanto',
            'jenis_no_dokumen' => '02',
            'uraian_penindakan' => 'tertangkap basah',
            'alasan_penindakan' => 'pelanggaran cukai',
            'dugaan_pelanggaran' => 'cukai',
            'tindakan_yang_dilakukan' => 'penangkapan',
            'kategori_penindakan' => 'hukuman',
            'status_penindakan' => 'aktif',
            'waktu_mulai_penindakan' => '21 mei 2022',
            'waktu_selesai_penindakan' => '25 mei 2022',
            'pejabat_penindak' => 'Bravo',
            'komoditi' => 'import',
            'jenis_kemasan' => 'sachet',
            'jumlah_kemasan' => '2500',
            'jenis_barang' => 'cair',
            'jumlah_barang' => '900'

        ];
        // $pdf = PDF::loadview('pegawai.viewpdfdata');
        $pdf = PDF::loadview('.pdf');

        return $pdf->stream();
    }
}
