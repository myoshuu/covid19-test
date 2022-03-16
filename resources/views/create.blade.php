@extends('layouts.default')

@section('content')
    <h3 class="fw-bold text-center mb-3">Add Data Test Antigen & PCR</h3>
    <form action="{{ url('/store') }}" method="post" class="">
        @csrf
        <div class="row">
            <div class="form-group col-md-6 mb-2">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" required>
            </div>
            <div class="form-group col-md-6 mb-2">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" required>
            </div>

            <div class="form-group col-md-12 mb-2">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat"></textarea>
            </div>

            <div class="form-group col-md-6 mb-2">
                <label for="tgl_mulai_gejala">Tanggal Mulai Gejala</label>
                <input type="date" class="form-control" name="tgl_mulai_gejala" id="tgl_mulai_gejala" required>
            </div>
            <div class="form-group col-md-6 mb-2">
                <label for="gejala">Gejala</label>
                <input type="text" class="form-control" name="gejala" id="gejala" required>
            </div>

            <div class="form-group col-md-6 mb-2 mt-3 d-flex justify-content-center align-items-center flex-column">
                <label for="hasil_antigen">Hasil Antigen</label>
                <div class="mt-2">
                    <div class="">
                        <input type="radio" name="hasil_antigen" id="positif" value="Positif" required>
                        <label for="positif"><i class="bi bi-plus-circle-fill text-success"></i> Positif</label>
                    </div>
                    <div class="div">
                        <input type="radio" name="hasil_antigen" id="negatif" value="Negatif" required>
                        <label for="negatf"><i class="bi bi-dash-circle-fill text-danger"></i> Negatif</label>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6 mb-2 mt-3 d-flex justify-content-center align-items-center flex-column">
                <label for="hasil_pcr">Hasil PCR</label>
                <div class="mt-2">
                    <div class="">
                        <input type="radio" name="hasil_pcr" id="positif" value="Positif" required>
                        <label for="positif"><i class="bi bi-plus-circle-fill text-success"></i> Positif</label>
                    </div>
                    <div class="div">
                        <input type="radio" name="hasil_pcr" id="negatif" value="Negatif" required>
                        <label for="negatf"><i class="bi bi-dash-circle-fill text-danger"></i> Negatif</label>
                    </div>
                </div>
            </div>
            <div class="col-md-12 d-flex justify-content-center align-items-center">
                <button class="btn btn-primary mt-3 w-100 text-center" onclick="store()">Add Data</button>
            </div>
        </div>
    </form>
@endsection
