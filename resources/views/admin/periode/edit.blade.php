{{-- @extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data periode</div>
                <div class="card-body">
                  <form action="{{route('votingperiode.update', $periode->id)}}" method="POST">
                  @csrf
                  @method('PUT')  
                    <div class="mb-3">
                      <label class="form-label">Nama periode</label>
                      <input type="text" class="form-control" name="nama_periode" value="{{$periode->nama_periode}}">
                      </div>    
                      <button type="submit" class="btn btn-info">Edit</button>
                     <a href="{{url('votingperiode')}}" class="btn btn-success">Back</a>
                  </form>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}