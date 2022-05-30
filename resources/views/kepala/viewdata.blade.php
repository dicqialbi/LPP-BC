@extends('kepala.app')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <div id="invoice">
                <div class="invoice">
                    <div class="px-5 py-3" style="min-width: 100%">
                        <header id="invoice-company-details">
                            <div class="row justify-content-center px-5">
                                <div class="col-3 text-center">
                                    <img src="{{asset('assets/images/logo/logo4.png')}}" style=" width:70%">
                                </div>
                                <div class="col-5 company-details text-center" style="width: 75%">
                                    <h6 class="name">
                                        KEMENTERIAN KEUANGAN REPUBLIK INDONESIA
                                        <div>DIREKTORAT JENDERAL BEA DAN CUKAI</div>
                                        <div>KANTOR WILAYAH DIREKTORAT JENDERAL BEA DAN CUKAI JAWA TIMUR II</div>
                                        <div>KANTOR PENGAWASAN DAN PELAYANAN BEA DAN CUKAI</div>
                                        <div>TIPE MADYA PABEAN C JEMBER</div>
                                    </h6>
                                    <div style="font-size: 9pt">
                                        <div>JALAN KALIMANTAN NOMOR 33 JEMBER</div>
                                        <div>TELEPON (0331)5444442, 5444470; FAKSIMILE (-); LAMAN WWW.BEACUKAI.GO.ID
                                        </div>
                                        <div>PUSAT KONTAK LAYANAN 1500225; SUREL BCJEMBER@CUSTOMS.GO.ID</div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </header>
                        <main>
                            <div class="row contacts">
                                <div class="col invoice-details text-center">
                                    <h3 class="invoice-id">Surat Penindakan</h3>
                                    <div class="date">Date of Letter: 01/10/2022</div>
                                    <div class="date">Due Date: 30/10/2022</div>
                                </div>
                            </div>
                            <table class="table table-bordered my-4" id="table-bordered">
                                <thead>
                                    <tr>
                                        <th>NO.</th>
                                        <th>DESKRIPSI</th>
                                        <th>KETERANGAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="no">01</td>
                                        <td class="text-left">
                                            Dasar Surat
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">02</td>
                                        <td class="text-left">
                                            Nama Pelaku
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">03</td>
                                        <td class="text-left">
                                            Alamat Pelaku
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">04</td>
                                        <td class="text-left">
                                            Lokasi Penangkapan
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">05</td>
                                        <td class="text-left">
                                            Nama Pengangkut
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">06</td>
                                        <td class="text-left">
                                            Bendera
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">07</td>
                                        <td class="text-left">
                                            No Register
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">08</td>
                                        <td class="text-left">
                                            No Voy
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">09</td>
                                        <td class="text-left">
                                            Kapasitas Muatan
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">10</td>
                                        <td class="text-left">
                                            Merek Kapasitas Mesin
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">11</td>
                                        <td class="text-left">
                                            Nahkoda
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">12</td>
                                        <td class="text-left">
                                            Awak Kapal
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">13</td>
                                        <td class="text-left">
                                            Jenis No Dokumen
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">14</td>
                                        <td class="text-left">
                                            Uraian Penindakan
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">15</td>
                                        <td class="text-left">
                                            Alasan Penindakan
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">16</td>
                                        <td class="text-left">
                                            Dugaan Pelanggaran
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">17</td>
                                        <td class="text-left">
                                            Tindakan Yang Dilakukan
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">18</td>
                                        <td class="text-left">
                                            Kategori Penindakan
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">19</td>
                                        <td class="text-left">
                                            Status Penindakan
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">20</td>
                                        <td class="text-left">
                                            Waktu Mulai Penindakan
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">21</td>
                                        <td class="text-left">
                                            Waktu Selesai Penindakan
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">22</td>
                                        <td class="text-left">
                                            Pejabat Penindak
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">23</td>
                                        <td class="text-left">
                                            Komiditi
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">24</td>
                                        <td class="text-left">
                                            Jenis Kemasan
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">25</td>
                                        <td class="text-left">
                                            Jumlah Kemasan
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">26</td>
                                        <td class="text-left">
                                            Jenis Barang
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                    <tr>
                                        <td class="no">27</td>
                                        <td class="text-left">
                                            Jumlah Barang
                                        </td>
                                        <td class="unit">#</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="col invoice-details text-end">
                                <div class="date">Jember, 12 Mei 2022</div>
                                <br><br><br>
                                {{-- <div class="my-2">
                                    {!!QrCode::size(100)->color(255,255,255)->backgroundColor(30,30,45)->generate('RemoteStack')!!}
                                </div> --}}
                                <div class="text">Kepala Kantor</div>
                                <div class="text">Asep Munandar</div>
                            </div>
                        </main>

                        <footer>Kantor Pengawasan dan Pelayanan Bea dan Cukai Tipe Madya Pabean C Jember</footer>
                    </div>

                    <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                    <div></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class=" card card-body">
            <form class="form form-body">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group mb-3">
                            <label for="description-of-action" class="form-label">Catatan Penindakan</label>
                            <textarea class="form-control" id="description-of-action" rows="3"></textarea>
                        </div>
                    </div>
                    {{-- button --}}
                    <div class="modal-danger me-1 mb-1 d-inline-block">
                        <!-- Button trigger for danger theme modal -->
                        <button type="button" class="btn btn-danger"
                            data-bs-toggle="modal" data-bs-target="#danger">
                            Reset
                        </button>

                        <!--Danger theme Modal -->
                        <div class="modal fade text-left" id="danger" tabindex="-1"
                            role="dialog" aria-labelledby="myModalLabel120"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                role="document">
                                <div class="modal-content">
                                    <div class="modal-header bg-danger">
                                        <h5 class="modal-title white" id="myModalLabel120">
                                            Konfirmasi
                                        </h5>
                                    </div>
                                    <div class="modal-body">
                                        Apakah anda yakin akan mengatur ulang catatan?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button"
                                            class="btn btn-light-secondary"
                                            data-bs-dismiss="modal">
                                            <i class="bx bx-x d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Close</span>
                                        </button>
                                        <button type="reset" class="btn btn-danger ml-1"
                                            data-bs-dismiss="modal">
                                            <i class="bx bx-check d-block d-sm-none"></i>
                                            <span class="d-none d-sm-block">Accept</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <a href="/kepala/validasi" class="btn icon btn-primary">VALIDASI</a>
</div>
</div>

@endsection