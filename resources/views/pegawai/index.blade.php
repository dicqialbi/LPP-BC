@extends('pegawai.app')

@section('content')
<div>
    <div class="page-heading">
        <h3>Dashboard</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Grafik Jumlah Tangkapan / Bulan</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-profile-visit"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Peta Sebaran Tangkapan</h4>
                    </div>
                    <div class="card-body">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
            <div id="groups">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Jumlah Tangkapan Berdasarkan Status</h4>
                            </div>
                            <div class="card-group">
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid" src={{asset('assets/images/samples/1.png')}}
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Pelanggaran Cukai</h4>
                                            <p class="card-text">
                                                This card has supporting text below as a natural lead-in to additional
                                                content.</p>
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid" src={{asset('assets/images/samples/2.png')}}
                                            alt="Card image cap" />
                                        <div class="card-body">
                                            <h4 class="card-title">Pelanggaran Pabean</h4>
                                            <p class="card-text">
                                                This card has supporting text below as a natural lead-in to additional
                                                content.
                                            </p>
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <img class="card-img-top img-fluid" src={{asset('assets/images/samples/3.png')}}
                                            alt="Card image cap">
                                        <div class="card-body">
                                            <h4 class="card-title">Card title</h4>
                                            <p class="card-text">
                                                This card has supporting text below as a natural lead-in to additional
                                                content.
                                            </p>
                                            <small class="text-muted">Last updated 3 mins ago</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection