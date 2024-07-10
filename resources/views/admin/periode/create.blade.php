{{-- @extends('layouts.admin')

@section('content')
<div class="container">
<div class="container-xxl flex-grow-1 container-p-y ">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">Add Data periode</div>
                <div class="card-body">
                  <form action="{{ route('votingperiode.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label" @required(true)>Periode</label>
                      <input type="text" class="form-control" name="periode"> 
                    </div>    
                      <button type="submit" class="btn btn-info">Save</button>
                  </form>
               </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  @endsection --}}