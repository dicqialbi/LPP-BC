@extends('template.app')

@section('content')


<div>
    <div class="page-heading">
        <h3 class="mb-4">Data Tangkapan</h3>
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
                                                <a href="#" class="btn icon btn-outline-danger"><i data-feather="trash"></i></a>
                                                <a href="#" class="btn icon btn-outline-success"><i
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
                                                <a href="edit" class="btn icon btn-outline-primary"><i data-feather="edit"></i></a>
                                                <a href="#" class="btn icon btn-outline-success"><i
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
                                                <a href="#" class="btn icon btn-outline-danger"><i data-feather="trash"></i></a>
                                                <a href="#" class="btn icon btn-outline-success"><i
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
                                                <a href="edit" class="btn icon btn-outline-primary"><i data-feather="edit"></i></a>
                                                <a href="#" class="btn icon btn-outline-success"><i
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
                    <a href="form" class="btn icon icon-left btn-primary"><i data-feather="plus"></i> Tambah Data</a>
                    {{-- <label class="btn btn-outline-primary" for="primary-outlined"><a class="btn icon" href="form">Tambah
                            Data</a></label> --}}
                </section>
            </section>
        </div>

    </div>
</div>
@endsection