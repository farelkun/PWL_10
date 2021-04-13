@extends('mahasiswas.layout')
@section('content')
    <div class="row my-3">
        <div class="col">
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <h3><strong>KARTU HASIL STUDI (KHS)</strong></h3>
        </div>
        <div class="col-12 my-4">
            <p class="m-0"><strong>Nama:</strong> {{ $mahasiswa->Nama }}</p>
            <p class="m-0"><strong>NIM:</strong> {{ $mahasiswa->Nim }}</p>
            <p class="m-0"><strong>Kelas:</strong> {{ $mahasiswa->kelas->nama_kelas }}</p>
        </div>
        <div class="col-12">
            <table class="table table-bordered">
                <tr>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Semester</th>
                    <th>Nilai</th>
                </tr>
                @foreach ($mahasiswa->matakuliah as $mk)
                    <tr>
                        <td>{{ $mk->nama_matkul }}</td>
                        <td>{{ $mk->sks }}</td>
                        <td>{{ $mk->semester }}</td>
                        <td>{{ $mk->pivot->nilai }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
