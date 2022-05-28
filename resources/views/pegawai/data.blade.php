@extends('pegawai.app')

@section('content')


<div>
    <div class="page-heading">
        <div class="d-flex justify-content-between mb-3">
            <h3 class="">Data Tangkapan</h3>
            <a href="/pegawai/formdata" class="btn icon icon-left btn-primary"><i data-feather="plus"></i> Tambah Data</a>
        </div>
        <div class="page-content">
            <section class="row">
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No. Surat</th>
                                        <th>Dasar Surat</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>076 4820 8838</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>
                                            <span class="badge bg-success">Selesai</span>
                                        </td>
                                        <td>
                                            <div class="button">
                                                <a href="/pegawai/viewdata" class="btn icon btn-outline-primary"><i data-feather="book-open"></i></a>
                                                <a href="#" class="btn icon btn-outline-danger"><i data-feather="trash"></i></a>
                                                <a href="export-surat" class="btn icon btn-outline-success" target="_blank"><i
                                                        data-feather="printer"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0500 527693</td>
                                        <td>fringilla.euismod.enim@quam.ca</td>
                                        <td>
                                            <span class="badge bg-secondary">Proses</span>
                                        </td>
                                        <td>
                                            <div class="button">
                                                <a href="/pegawai/viewdata" class="btn icon btn-outline-primary"><i data-feather="book-open"></i></a>
                                                <a href="export-surat" class="btn icon btn-outline-success" target="_blank"><i
                                                        data-feather="printer"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>076 4820 8838</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>
                                            <span class="badge bg-success">Selesai</span>
                                        </td>
                                        <td>
                                            <div class="button">
                                                <a href="/pegawai/viewdata" class="btn icon btn-outline-primary"><i data-feather="book-open"></i></a>
                                                <a href="#" class="btn icon btn-outline-danger"><i data-feather="trash"></i></a>
                                                <a href="export-surat" class="btn icon btn-outline-success" target="_blank"><i
                                                        data-feather="printer"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>0500 527693</td>
                                        <td>fringilla.euismod.enim@quam.ca</td>
                                        <td>
                                            <span class="badge bg-secondary">Proses</span>
                                        </td>
                                        <td>
                                            <div class="button">
                                                <a href="/pegawai/viewdata" class="btn icon btn-outline-primary"><i data-feather="book-open"></i></a>
                                                <a href="export-surat" class="btn icon btn-outline-success" target="_blank"><i
                                                        data-feather="printer"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="pagination justify-content-end">

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination pagination-primary">
                                        <li class="page-item"><a class="page-link" href="#">
                                                <span aria-hidden="true"><i class="bi bi-chevron-left"></i></span>
                                            </a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">
                                                <span aria-hidden="true"><i class="bi bi-chevron-right"></i></span>
                                            </a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </section>
            </section>
        </div>

    </div>
</div>
@endsection