@extends('mahasiswas.layout')
    @section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="row">
                <div class="col-lg-10">
                    <form action="{{ route('mahasiswa.search') }}" method="GET">
                        <div class="col-lg-6">
                            <div class="input-group">
                                <input type="text" name="keywords" class="form-control" id="keywords"
                                    aria-describedby="keywords" placeholder="Masukkan nama mahasiswa">
                                <span class="input-group-btn ml-3">
                                    <button class="btn btn-outline-primary" type="submit">Cari</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-2 ml-auto">
                    <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

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
            <td>{{ $Mahasiswa->kelas->nama_kelas }}</td>
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
                <a class="btn btn-warning" href="{{ route('mahasiswa.nilai', $Mahasiswa->Nim) }}">Nilai</a>
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