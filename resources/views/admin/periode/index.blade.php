{{-- @extends('layouts.admin')
<!-- [Leads] start -->
@section('content')
<div class="container">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-header">Add Data Siswa</div>
                    <div class="card-body">
                        <a href="{{ route('siswa.create') }}" class="btn btn-primary">Add Data</a>
                        <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>id</th>
                            <th>periode</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                          @php $i=1; @endphp
                          @foreach ($votingperiode as $data)
                              <tr>
                                <td>{{$i++}}</td>
                                <td>{{$data->id}}</td>
                                <td>{{$data->periode}}</td>
                                <td>
                                    <form action="{{route('periode.destroy',$data->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('periode.edit',$data->id)}}" class="btn btn-sm btn-warning">
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
