@extends('layouts.default')

@section('content')
    <div class="mt-3 d-flex justify-content-lg-around">
        <h3 class="fw-bold">Data Test Antigen dan PCR</h3>
        <button class="btn btn-primary" onclick="create()">Add Data +</button>
        {{-- <a href="{{ url('create') }}">Create</a> --}}

        {{-- Modal --}}
        <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Data Pasien</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" style="margin-top: -30px">
                        <div id="form"></div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Modal --}}
    </div>

    <div class="row">
        <div class="col-lg">
            <table class="table table-hover text-center mt-4">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">NIK</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Tanggal Mulai Gejala</th>
                        <th scope="col">Gejala</th>
                        <th scope="col">Antigen</th>
                        <th scope="col">PCR</th>
                        <th scope="col">Act</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($datas as $data)
                        <tr>
                            <th scope="row">{{ $data->id }}</th>
                            <td>{{ $data->nik }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->tgl_mulai_gejala }}</td>
                            <td>{{ $data->gejala }}</td>
                            <td>{{ $data->hasil_antigen }}</td>
                            <td>{{ $data->hasil_pcr }}</td>
                            <td>
                                <a href="{{ url('/show/' . $data->id) }}" class="btn btn-success badge"><i
                                        class="bi bi-pencil"></i></a>
                                <a href="{{ url('/delete/' . $data->id) }}" class="btn btn-danger badge"><i
                                        class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <script>
        function create() {
            $.get("{{ url('create') }}", {}, (data, status) => {
                $("#form").html(data);
                $("#formModal").modal("show");
            });
        }
    </script>
@endsection
