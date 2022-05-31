@extends('admin.app')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Daftar Pengguna</h3>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Graiden</td>
                            <td>vehicula.aliquet@semconsequat.co.uk</td>
                            <td>Username1</td>
                            <td>Offenburg</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <div class="button">
                                    <div class="modal-primary d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data"><i data-feather="edit"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="edit-data" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-secondary">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Edit Data Pengguna
                                                        </h5>
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <label>Name: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Nama Lengkap"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email Address"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Username: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Username"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Confirm Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Confirm Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Cancel</span>
                                                                </button>
                                                                <button type="button" class="btn btn-success ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
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
                                                        Apakah anda yakin ingin menghapus pengguna ini?
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
                                                            <span class="d-none d-sm-block">Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Dale</td>
                            <td>fringilla.euismod.enim@quam.ca</td>
                            <td>Username2</td>
                            <td>New Quay</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <div class="button">
                                    <div class="modal-primary d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data"><i data-feather="edit"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="edit-data" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-secondary">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Edit Data Pengguna
                                                        </h5>
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <label>Name: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Nama Lengkap"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email Address"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Username: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Username"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Confirm Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Confirm Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Cancel</span>
                                                                </button>
                                                                <button type="button" class="btn btn-success ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
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
                                                        Apakah anda yakin ingin menghapus pengguna ini?
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
                                                            <span class="d-none d-sm-block">Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Nathaniel</td>
                            <td>mi.Duis@diam.edu</td>
                            <td>Username3</td>
                            <td>Grumo Appula</td>
                            <td>
                                <span class="badge bg-danger">Inactive</span>
                            </td>
                            <td>
                                <div class="button">
                                    <div class="modal-primary d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data"><i data-feather="edit"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="edit-data" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-secondary">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Edit Data Pengguna
                                                        </h5>
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <label>Name: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Nama Lengkap"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email Address"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Username: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Username"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Confirm Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Confirm Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Cancel</span>
                                                                </button>
                                                                <button type="button" class="btn btn-success ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
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
                                                        Apakah anda yakin ingin menghapus pengguna ini?
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
                                                            <span class="d-none d-sm-block">Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Darius</td>
                            <td>velit@nec.com</td>
                            <td>Username4</td>
                            <td>Ways</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <div class="button">
                                    <div class="modal-primary d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data"><i data-feather="edit"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="edit-data" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-secondary">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Edit Data Pengguna
                                                        </h5>
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <label>Name: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Nama Lengkap"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email Address"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Username: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Username"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Confirm Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Confirm Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Cancel</span>
                                                                </button>
                                                                <button type="button" class="btn btn-success ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
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
                                                        Apakah anda yakin ingin menghapus pengguna ini?
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
                                                            <span class="d-none d-sm-block">Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Oleg</td>
                            <td>rhoncus.id@Aliquamauctorvelit.net</td>
                            <td>Username5</td>
                            <td>Rossignol</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <div class="button">
                                    <div class="modal-primary d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data"><i data-feather="edit"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="edit-data" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-secondary">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Edit Data Pengguna
                                                        </h5>
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <label>Name: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Nama Lengkap"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email Address"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Username: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Username"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Confirm Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Confirm Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Cancel</span>
                                                                </button>
                                                                <button type="button" class="btn btn-success ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
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
                                                        Apakah anda yakin ingin menghapus pengguna ini?
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
                                                            <span class="d-none d-sm-block">Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Kermit</td>
                            <td>diam.Sed.diam@anteVivamusnon.org</td>
                            <td>Username6</td>
                            <td>Patna</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <div class="button">
                                    <div class="modal-primary d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data"><i data-feather="edit"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="edit-data" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-secondary">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Edit Data Pengguna
                                                        </h5>
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <label>Name: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Nama Lengkap"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email Address"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Username: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Username"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Confirm Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Confirm Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Cancel</span>
                                                                </button>
                                                                <button type="button" class="btn btn-success ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
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
                                                        Apakah anda yakin ingin menghapus pengguna ini?
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
                                                            <span class="d-none d-sm-block">Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Jermaine</td>
                            <td>sodales@nuncsit.org</td>
                            <td>Username7</td>
                            <td>Mold</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <div class="button">
                                    <div class="modal-primary d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data"><i data-feather="edit"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="edit-data" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-secondary">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Edit Data Pengguna
                                                        </h5>
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <label>Name: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Nama Lengkap"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email Address"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Username: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Username"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Confirm Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Confirm Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Cancel</span>
                                                                </button>
                                                                <button type="button" class="btn btn-success ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
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
                                                        Apakah anda yakin ingin menghapus pengguna ini?
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
                                                            <span class="d-none d-sm-block">Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Ferdinand</td>
                            <td>gravida.molestie@tinciduntadipiscing.org</td>
                            <td>Username8</td>
                            <td>Marlborough</td>
                            <td>
                                <span class="badge bg-danger">Inactive</span>
                            </td>
                            <td>
                                <div class="button">
                                    <div class="modal-primary d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data"><i data-feather="edit"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="edit-data" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-secondary">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Edit Data Pengguna
                                                        </h5>
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <label>Name: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Nama Lengkap"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email Address"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Username: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Username"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Confirm Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Confirm Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Cancel</span>
                                                                </button>
                                                                <button type="button" class="btn btn-success ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
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
                                                        Apakah anda yakin ingin menghapus pengguna ini?
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
                                                            <span class="d-none d-sm-block">Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Kuame</td>
                            <td>Quisque.purus@mauris.org</td>
                            <td>Username9</td>
                            <td>Tresigallo</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <div class="button">
                                    <div class="modal-primary d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data"><i data-feather="edit"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="edit-data" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-secondary">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Edit Data Pengguna
                                                        </h5>
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <label>Name: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Nama Lengkap"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email Address"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Username: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Username"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Confirm Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Confirm Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Cancel</span>
                                                                </button>
                                                                <button type="button" class="btn btn-success ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
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
                                                        Apakah anda yakin ingin menghapus pengguna ini?
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
                                                            <span class="d-none d-sm-block">Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Deacon</td>
                            <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
                            <td>Username10</td>
                            <td>Karapınar</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <div class="button">
                                    <div class="modal-primary d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data"><i data-feather="edit"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="edit-data" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-secondary">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Edit Data Pengguna
                                                        </h5>
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <label>Name: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Nama Lengkap"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email Address"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Username: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Username"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Confirm Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Confirm Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Cancel</span>
                                                                </button>
                                                                <button type="button" class="btn btn-success ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
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
                                                        Apakah anda yakin ingin menghapus pengguna ini?
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
                                                            <span class="d-none d-sm-block">Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Channing</td>
                            <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
                            <td>Username11</td>
                            <td>Warrnambool</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <div class="button">
                                    <div class="modal-primary d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data"><i data-feather="edit"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="edit-data" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-secondary">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Edit Data Pengguna
                                                        </h5>
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <label>Name: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Nama Lengkap"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email Address"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Username: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Username"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Confirm Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Confirm Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Cancel</span>
                                                                </button>
                                                                <button type="button" class="btn btn-success ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
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
                                                        Apakah anda yakin ingin menghapus pengguna ini?
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
                                                            <span class="d-none d-sm-block">Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Aladdin</td>
                            <td>sem.ut@pellentesqueafacilisis.ca</td>
                            <td>Username12</td>
                            <td>Bothey</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <div class="button">
                                    <div class="modal-primary d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data"><i data-feather="edit"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="edit-data" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-secondary">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Edit Data Pengguna
                                                        </h5>
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <label>Name: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Nama Lengkap"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email Address"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Username: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Username"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Confirm Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Confirm Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Cancel</span>
                                                                </button>
                                                                <button type="button" class="btn btn-success ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
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
                                                        Apakah anda yakin ingin menghapus pengguna ini?
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
                                                            <span class="d-none d-sm-block">Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Cruz</td>
                            <td>non@quisturpisvitae.ca</td>
                            <td>Username13</td>
                            <td>Shikarpur</td>
                            <td>
                                <span class="badge bg-success">Active</span>
                            </td>
                            <td>
                                <div class="button">
                                    <div class="modal-primary d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-data"><i data-feather="edit"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="edit-data" tabindex="-1" role="dialog"
                                            aria-labelledby="myModalLabel120" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                                role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-secondary">
                                                        <h5 class="modal-title white" id="myModalLabel120">
                                                            Edit Data Pengguna
                                                        </h5>
                                                    </div>
                                                    <div class="form-group">
                                                        <form action="#">
                                                            <div class="modal-body">
                                                                <label>Name: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Nama Lengkap"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="email" placeholder="Email Address"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Username: </label>
                                                                <div class="form-group">
                                                                    <input type="text" placeholder="Username"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Password"
                                                                        class="form-control">
                                                                </div>
                                                                <label>Confirm Password: </label>
                                                                <div class="form-group">
                                                                    <input type="password" placeholder="Confirm Password"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light-secondary"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-x d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Cancel</span>
                                                                </button>
                                                                <button type="button" class="btn btn-success ml-1"
                                                                    data-bs-dismiss="modal">
                                                                    <i class="bx bx-check d-block d-sm-none"></i>
                                                                    <span class="d-none d-sm-block">Save</span>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-danger d-inline-block">
                                        {{-- button --}}
                                        <button class="btn icon btn-outline-danger" data-bs-toggle="modal"
                                            data-bs-target="#delete"><i data-feather="trash"></i></button>
                                        {{-- modal --}}
                                        <div class="modal fade text-left" id="delete" tabindex="-1" role="dialog"
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
                                                        Apakah anda yakin ingin menghapus pengguna ini?
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
                                                            <span class="d-none d-sm-block">Delete</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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