@extends('admin.app')

@section('content')

<div class="page-heading">
    <div class="mb-3">
        <h3 class="">Data Tangkapan</h3>
    </div>
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
                                    <div class="collapse">

                                        <a href="/admin/viewdata" class="btn icon btn-outline-primary"><i
                                                data-feather="book-open"></i></a>
                                    </div>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#danger"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="danger" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Konfirmasi
                                                        </h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin untuk menghapus data ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="button" class="btn btn-danger ml-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                    <a href="/admin/viewdata" class="btn icon btn-outline-primary"><i
                                            data-feather="book-open"></i></a>
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
                                    <a href="/pegawai/viewdata" class="btn icon btn-outline-primary"><i
                                            data-feather="book-open"></i></a>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#danger"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="danger" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Konfirmasi
                                                        </h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin untuk menghapus data ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="button" class="btn btn-danger ml-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                    <a href="/pegawai/viewdata" class="btn icon btn-outline-primary"><i
                                            data-feather="book-open"></i></a>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#danger"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="danger" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Konfirmasi
                                                        </h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin untuk menghapus data ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="button" class="btn btn-danger ml-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <a href="export-surat" class="btn icon btn-outline-success"
                                        target="_blank"><i data-feather="printer"></i></a>
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
                                    <a href="/pegawai/viewdata" class="btn icon btn-outline-primary"><i
                                            data-feather="book-open"></i></a>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#danger"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="danger" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-danger">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Konfirmasi
                                                        </h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin untuk menghapus data ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-x d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Close</span>
                                                        </button>
                                                        <button type="button" class="btn btn-danger ml-1"
                                                            data-bs-dismiss="modal">
                                                            <i class="bx bx-check d-block d-sm-none"></i>
                                                            <span class="d-none d-sm-block">Accept</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <a href="export-surat" class="btn icon btn-outline-success"
                                        target="_blank"><i data-feather="printer"></i></a>
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
                                    <a href="/admin/viewdata" class="btn icon btn-outline-primary"><i
                                            data-feather="book-open"></i></a>
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
                                    <a href="/admin/viewdata" class="btn icon btn-outline-primary"><i
                                            data-feather="book-open"></i></a>
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
                                    <a href="/admin/viewdata" class="btn icon btn-outline-primary"><i
                                            data-feather="book-open"></i></a>
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
                                    <a href="/admin/viewdata" class="btn icon btn-outline-primary"><i
                                            data-feather="book-open"></i></a>
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
                                    <a href="/admin/viewdata" class="btn icon btn-outline-primary"><i
                                            data-feather="book-open"></i></a>
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
                                    <a href="/admin/viewdata" class="btn icon btn-outline-primary"><i
                                            data-feather="book-open"></i></a>
                                    <a href="export-surat" class="btn icon btn-outline-success" target="_blank"><i
                                            data-feather="printer"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

@endsection