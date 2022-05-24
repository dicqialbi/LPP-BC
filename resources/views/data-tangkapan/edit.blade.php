@extends('template.app')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Edit Data Tangkapan </h3>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Dasar Surat</h4>
            </div>
            <div class="card-body">
                <p>Pastikan dan teliti data kembali sebelum disubmit ulang </p>
                <div id="snow">
                    <p>Hello World!</p>
                </div>
                <div class="col-12 d-flex justify-content-end pt-2">
                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                    <button type="reset"
                        class="btn btn-light-secondary me-1 mb-1">Cencel</button>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="assets/js/extensions/quill.js"></script>
@endsection