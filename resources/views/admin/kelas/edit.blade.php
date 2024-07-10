{{-- @extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data kelas</div>
                <div class="card-body">
                  <form action="{{route('kelas.update', $kelas->id)}}" method="POST">
                  @csrf
                  @method('PUT')  
                    <div class="mb-3">
                      <label class="form-label">Nama kelas</label>
                      <input type="text" class="form-control" name="nama_kelas" value="{{$kelas->nama_kelas}}">
                      </div>    
                      <button type="submit" class="btn btn-info">Edit</button>
                     <a href="{{url('kelas')}}" class="btn btn-success">Back</a>
                  </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}