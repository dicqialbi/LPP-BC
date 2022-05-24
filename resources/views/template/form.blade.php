@extends('template.app')

@section('content')
<div class="page-heading">
    <h3 class="mb-3">Tambahkan Data Tangkapan</h3>
    <div class="page-content">
        <section id="basic-vertical-layouts">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form form-vertical">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label for="letter">Dasar Surat</label>
                                                    <input type="text" id="letter" class="form-control" name="letter"
                                                        placeholder="Surat Penangkapan Pelanggaran Cukai">
                                                </div>
                                                <div class="form-group">
                                                    <label for="suspect-name">Nama Pelaku</label>
                                                    <input type="text" id="suspect-name" class="form-control"
                                                        name="suspect-name" placeholder="Nama lengkap">
                                                </div>
                                                <div class="form-group">
                                                    <label for="location">Lokasi</label>
                                                    <input type="text" id="location" class="form-control"
                                                        name="location" placeholder="Lokasi penangkapan">
                                                </div>
                                                <div class="form-group">
                                                    <label for="carrier-name">Nama Pengangkut</label>
                                                    <input type="text" id="carrier-name" class="form-control"
                                                        name="carrier-name" placeholder="Nama lengkap">
                                                </div>
                                                <div class="form-group">
                                                    <label for="flag">Bendera</label>
                                                    <input type="text" id="flag" class="form-control" name="flag"
                                                        placeholder="Bendera">
                                                </div>
                                                <div class="form-group">
                                                    <label for="no-register">Nomor Registrasi</label>
                                                    <input type="number" id="no-register" class="form-control"
                                                        name="no-register" placeholder="123456">
                                                </div>
                                                <div class="form-group">
                                                    <label for="no-voy">Nomor Voy</label>
                                                    <input type="number" id="no-voy" class="form-control" name="no-voy"
                                                        placeholder="123456">
                                                </div>
                                                <div class="form-group">
                                                    <label for="capacity">Kapasitas Muatan</label>
                                                    <input type="number" id="capacity" class="form-control"
                                                        name="capacity" placeholder="1500 ton">
                                                </div>
                                                <div class="form-group">
                                                    <label for="merk">Merek Kapasitas Mesin</label>
                                                    <input type="text" id="merk" class="form-control" name="merk"
                                                        placeholder="Jaya Sentosa">
                                                </div>
                                                <div class="form-group">
                                                    <label for="nahkoda">Nahkoda</label>
                                                    <input type="text" id="nahkoda" class="form-control" name="nahkoda"
                                                        placeholder="Kapten Tsubasa">
                                                </div>
                                                <div class="form-group">
                                                    <label for="member">Awak Kapal</label>
                                                    <input type="text" id="member" class="form-control" name="member"
                                                        placeholder="awak kapal">
                                                </div>
                                                <div class="form-group">
                                                    <label for="no-doc">Jenis Nomor Dokumen</label>
                                                    <input type="number" id="no-doc" class="form-control" name="no-doc"
                                                        placeholder="1234 Pelanggaran Pabean">
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="description-of-action" class="form-label">Uraian
                                                        Penindakan</label>
                                                    <textarea class="form-control" id="description-of-action"
                                                        rows="3"></textarea>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="reason-for-action" class="form-label">Alasan
                                                        Penindakan</label>
                                                    <textarea class="form-control" id="reason-for-action"
                                                        rows="3"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="violation">Dugaan Pelanggaran</label>
                                                    <input type="text" id="violation" class="form-control"
                                                        name="violation" placeholder="Pelanggaran Pabean">
                                                </div>
                                                <label for="tindakan">Tindakan yang dilakukan</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="tindakan">
                                                        <option>Diizinkan meneruskan perjalanan</option>
                                                        <option>Pemeriksaan dihentikan</option>
                                                        <option>Diserahkan ke Kantor Pabean Terdekat</option>
                                                        <option>Diserahkan ke Kantor Wilayah DJBC</option>
                                                        <option>Diserahkan kepada penyidik</option>
                                                        <option>Dibawa ke KPPBC TMP C Jember</option>
                                                    </select>
                                                </fieldset>
                                                <label for="kategori-penindakan">Kategori penindakan</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="kategori-penindakan">
                                                        <option>Pabean</option>
                                                        <option>Cukai</option>
                                                    </select>
                                                </fieldset>
                                                <label for="status-penindakan">Status penindakan</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="status-penindakan">
                                                        <option>Penyidikan</option>
                                                        <option>Penangkapan</option>
                                                    </select>
                                                </fieldset>
                                                <div class="form-group">
                                                    <label for="start-prosecution">Waktu Mulai Penindakan</label>
                                                    <input type="date" id="start-prosecution" class="form-control"
                                                        name="start-prosecution" placeholder="mulai">
                                                </div>
                                                <div class="form-group">
                                                    <label for="finish-prosecution">Waktu Selesai Penindakan</label>
                                                    <input type="date" id="finish-prosecution" class="form-control"
                                                        name="finish-prosecution" placeholder="selesai">
                                                </div>
                                                <label for="pejabat-penindak">Pejabat Penindak</label>
                                                <fieldset class="form-group">
                                                    <select class="form-select" id="pejabat-penindak">
                                                        <option>Bravo</option>
                                                        <option>Charlie</option>
                                                    </select>
                                                </fieldset>
                                                <div class="form-group">
                                                    <label for="komoditi">Komoditi</label>
                                                    <input type="text" id="komoditi" class="form-control"
                                                        name="komoditi" placeholder="Ekspor/Import">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis-kemasan">Jenis Kemasan</label>
                                                    <input type="text" id="jenis-kemasan" class="form-control"
                                                        name="jenis-kemasan" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jumlah-kemasan">Jumlah Kemasan</label>
                                                    <input type="text" id="jumlah-kemasan" class="form-control"
                                                        name="jumlah-kemasan" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis-barang">Jenis Barang</label>
                                                    <input type="text" id="jenis-barang" class="form-control"
                                                        name="jenis-barang" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jumlah-barang">Jumlah Barang</label>
                                                    <input type="number" id="jumlah-barang" class="form-control"
                                                        name="jumlah-barang" placeholder="">
                                                </div>
                                            </div>
                                            {{-- button --}}
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                <button type="reset"
                                                    class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

@endsection