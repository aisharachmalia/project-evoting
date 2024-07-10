{{-- @extends('layouts.admin')

@section('content')
<div class="container">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-header">Add Data Siswa
                        <a href="{{ route('siswa.create') }}" class="btn btn-primary">Add Data</a>

                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NIS</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jenis Kelamin</th>
                                    <th scope="col">Kelas</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($siswa as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->nis }}</td>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->jk}}</td>
                                        <td>{{ $data->kelas->nama_kelas }}</td>
                                        <td>
                                        <form action="{{ route('siswa.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <form action="{{route('siswa.destroy',$data->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('siswa.edit',$data->id)}}" class="btn btn-sm btn-warning">
                                                    Edit
                                                </a>
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are You Sure?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                      </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
