{{-- @extends('layouts.admin')
<!-- [Leads] start -->
@section('content')
<div class="container">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span>kelas</h4>
    <div class="card">
        <div class="card-header">
            <div class="float-start">
                <h5> kelas</h5>
            </div>
            <div class="float-end">
                <a href="{{route('kelas.create')}}" class="btn btn-sm btn-primary">
                    Add
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive text-nonwrap">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>id</th>
                            <th>Kelas</th>
                            <th>Jumlah Siswa</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                          @php $i=1; @endphp
                          @foreach ($kelasList as $data)
                              <tr>
                                <td>{{$i++}}</td>
                                <td>{{$data->id}}</td>
                                <td>{{$data->nama_kelas}}</td>
                                <td>{{$data->siswa_count}}</td>
                                <td>
                                    <form action="{{route('kelas.destroy',$data->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('kelas.edit',$data->id)}}" class="btn btn-sm btn-warning">
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

    <!-- [Leads] end -->
@endsection --}}
