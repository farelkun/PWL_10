@extends('mahasiswas.layout')
@section('content')
    <div class="row my-3">
        <div class="col">
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>No_Handphone</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswas as $Mahasiswa)
        <tr>

            <td>{{ $Mahasiswa->Nim }}</td>
            <td>{{ $Mahasiswa->Nama }}</td>
            <td>{{ $Mahasiswa->Kelas }}</td>
            <td>{{ $Mahasiswa->Jurusan }}</td>
            <td>{{ $Mahasiswa->No_Handphone }}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy',$Mahasiswa->Nim) }}" method="POST">

                <a class="btn btn-info" href="{{ route('mahasiswa.show',$Mahasiswa->Nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$Mahasiswa->Nim) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    <div class="row">
        <div class="col-12 text-center">
            {{ $mahasiswas->links() }}
        </div>
    </div>
@endsection
