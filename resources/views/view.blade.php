<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zuramai.github.io/mazer/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 May 2022 00:32:30 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Laporan P2</title>

    <link rel="stylesheet" href="{{ url('/')}}/assets/css/main/app.css">
    {{-- <style>
        .container{
            width: 2550px;
            height: 3300px;
            margin: auto;
            background-color: silver
        }
        .card{
            background-color: white;
            margin: 50px
        }

    </style> --}}
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div id="invoice">
                    <div class="invoice">
                        <div style="min-width: 600px">
                            <header>
                                <div class="row">

                                    <div class="col company-details text-end">
                                        <h2 class="name">
                                            <a target="_blank" href="">
                                                KPPBC TMP C JEMBER
                                            </a>
                                        </h2>
                                        <div>455 Foggy Heights, AZ 85004, US</div>
                                        <div>(123) 456-789</div>
                                        <div>kppbctmpcjember@gmail.com</div>
                                    </div>
                                </div>
                            </header>
                            <main>
                                <div class="row contacts">
                                    <div class="col invoice-to">
                                        <div class="text-gray-light">LETTER TO:</div>
                                        <h2 class="to">John Doe</h2>
                                        <div class="address">796 Silver Harbour, TX 79273, US</div>
                                        <div class="email"><a href="#">john@example.com</a>
                                        </div>
                                    </div>
                                    <div class="col invoice-details text-end">
                                        <h3 class="invoice-id">Surat Penindakan</h3>
                                        <div class="date">Date of Letter: 01/10/2018</div>
                                        <div class="date">Due Date: 30/10/2018</div>
                                    </div>
                                </div>
                                <table class="table table-striped my-4" id="table1">
                                    <thead>
                                        <tr>
                                            <th>NO.</th>
                                            <th class="text-left">DESKRIPSI</th>
                                            <th class="text-right">KETERANGAN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="no">01</td>
                                            <td class="text-left">
                                                Dasar Surat
                                            </td>
                                            <td class="unit">$0.00</td>
                                        </tr>
                                        <tr>
                                            <td class="no">02</td>
                                            <td class="text-left">
                                                Nama Pelaku
                                            </td>
                                            <td class="unit">Rizal</td>
                                        </tr>
                                        <tr>
                                            <td class="no">03</td>
                                            <td class="text-left">
                                                Alamat Pelaku
                                            </td>
                                            <td class="unit">Jakarta Barat</td>
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
                                <div class="thanks">Thank you!</div>
                                <div class="col invoice-details text-end">
                                    <div class="date">Jember, 12 Mei 2022</div>
                                    <br><br><br><br>
                                    <div class="text">Kepala Kantor</div>
                                    <div class="text">Asep Munandar</div>
                                </div>
                                <div class="notices">
                                    <div>NOTICE:</div>
                                    <div class="notice">Dimohon untuk lokasi penangkapan bisa disertakan dengan lengkap
                                    </div>
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
    </div>
</body>

</html>