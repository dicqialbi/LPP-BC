@extends('template.app')

@section('content')


<div>
    <div class="page-heading">
        <h3>Data Tangkapan</h3>
        <section class="section">
            <div class="card">
                {{-- <div class="card-header">
                    Data Tangkapan
                </div> --}}
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
                                    <span class="badge bg-warning">Proses</span>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                                    <button type="button" class="btn btn-success"><i class="bi bi-printer"></i></button>

                                </td>
                            </tr>
                            <tr>
                                <td>0500 527693</td>
                                <td>fringilla.euismod.enim@quam.ca</td>
                                <td>
                                    <span class="badge bg-success">Selesai</span>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                                    <button type="button" class="btn btn-success"><i class="bi bi-printer"></i></button>

                                </td>
                            </tr>
                            <tr>
                                <td>076 4820 8838</td>
                                <td>vehicula.aliquet@semconsequat.co.uk</td>
                                <td>
                                    <span class="badge bg-warning">Proses</span>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                                    <button type="button" class="btn btn-success"><i class="bi bi-printer"></i></button>

                                </td>
                            </tr>
                            <tr>
                                <td>0500 527693</td>
                                <td>fringilla.euismod.enim@quam.ca</td>
                                <td>
                                    <span class="badge bg-success">Selesai</span>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary"><i
                                            class="bi bi-pencil-square"></i></button>
                                    <button type="button" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                                    <button type="button" class="btn btn-success"><i class="bi bi-printer"></i></button>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="pagination justify-content-end">
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <label class="btn btn-outline-primary" for="primary-outlined"><a class="btn" href="form">Tambah Data</a></label>
        </section>
    </div>
</div>
@endsection