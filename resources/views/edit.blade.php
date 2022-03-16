@extends('layouts.default')

@section('content')
    <div class="row mt-3">
        <div class="col-md-6 ">
            <h3 class="fw-bold mt-3">Add Data Test Antigen & PCR</h3>
            <form action="{{ url('/update/' . $datas->id) }}" method="post" class="mt-4">
                @csrf
                <div class="row">
                    <div class="mb-3 col-md-5">
                        <label for="nik" class="mb-2">NIK</label>
                        <input type="number" class="form-control" name="nik" id="nik" value="{{ $datas->nik }}" required>
                    </div>
                    <div class="mb-3 col-md-5">
                        <label for="nama" class="mb-2">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="{{ $datas->nama }}"
                            required>
                    </div>

                    <div class="mb-3 col-md-10">
                        <label for="alamat" class="mb-2">Alamat</label>
                        <textarea name="alamat" class="form-control" id="alamat" required>{{ $datas->alamat }}</textarea>
                    </div>

                    <div class="mb-3 col-md-5">
                        <label for="tgl" class="mb-2">Tanggal Mulai Gejala</label>
                        <input type="date" class="form-control" name="tgl_mulai_gejala" id="tgl"
                            value="{{ $datas->tgl_mulai_gejala }}" required>
                    </div>
                    <div class="mb-3 col-md-5">
                        <label for="gejala" class="mb-2">Gejala</label>
                        <input type="text" class="form-control" name="gejala" id="gejala" value="{{ $datas->gejala }}"
                            required>
                    </div>

                    <div class="mb-3 col-md-5">
                        <label for="antigen" class="mb-2">Antigen</label>
                        <div class="">
                            <input type="radio" name="hasil_antigen" id="positif" value="Positif"
                                {{ $datas->hasil_antigen == 'Positif' ? 'checked' : '' }}>
                            <label for="positif">Positif</label>
                        </div>
                        <div class="">
                            <input type="radio" name="hasil_antigen" id="negatif" value="Negatif"
                                {{ $datas->hasil_antigen == 'Negatif' ? 'checked' : '' }}>
                            <label for="negatif">Negatif</label>
                        </div>
                    </div>
                    <div class="mb-3 col-md-5">
                        <label for="pcr" class="mb-2">PCR</label>
                        <div class="">
                            <input type="radio" name="hasil_pcr" id="positif" value="Positif"
                                {{ $datas->hasil_pcr == 'Positif' ? 'checked' : '' }}>
                            <label for="positif">Positif</label>
                        </div>
                        <div class="">
                            <input type="radio" name="hasil_pcr" id="negatif" value="Negatif"
                                {{ $datas->hasil_pcr == 'Negatif' ? 'checked' : '' }}>
                            <label for="negatif">Negatif</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary col-md-10">Update Data</button>
                    <a href="{{ url('/') }}" class="text-decoration-none mt-3">&laquo; Back</a>
                </div>
            </form>
        </div>
    </div>
@endsection
