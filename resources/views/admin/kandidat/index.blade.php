{{-- @extends('layouts.admin')
<!-- [Leads] start -->
@section('content')
<div class="container">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> kelas</h4>
    <div class="card">
        <div class="card-header">
            <div class="float-start">
                <h5>Kandidat</h5>
            </div>
            <div class="float-end">
                <a href="{{route('kandidat.create')}}" class="btn btn-sm btn-primary">
                    Add
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nonwrap">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Calon Kandidat</th>
                            <th scope="col">Periode</th>
                            <th scope="col">Foto Calon</th>
                            <th scope="col">Visi</th>
                            <th scope="col">Misi</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($kandidat as $data)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{ $data->nama_calon }}</td>
                            <td>{{ $data->VotingPeriode->periode }}</td>
                            <td><img src="{{ asset('images/kandidat/' . $data->image) }}" width="100"></td>
                            <td>{{ $data->visi }}</td>
                            <td>{{ $data->misi }}</td>
                            <td>
                                <a href="{{ route('kandidat.edit', $data->id) }}" class="btn btn-success">Edit</a>
                                <a href="{{ route('kandidat.show', $data->id) }}" class="btn btn-warning">Show</a>
                                <form action="{{ route('kandidat.destroy', $data->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Delete</button>
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
@endsection --}}
