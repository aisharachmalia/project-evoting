{{-- @extends('layouts.admin')
@section('content')
<div class="container">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Data Kandidat</h4>
                        <p class="card-description">Masukkan data kandidat yang ingin anda tambahkan</p>
                    </div>
                    <div class="card-body">
                        <form class="forms-sample" action="{{ route('kandidat.store') }}" method="post" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Nama Kandidat</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="putih" name="nama_calon" placeholder="Nama Kandidat" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Periode</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name=periode" id="putih" id="exampleSelectGender">
                                        @foreach ($votingperiode as $data)
                                        <option value="{{ $data->id }}">{{ $data->periode }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Cover</label>
                                <input type="file" name="image" class="file-upload-default" required>
                                <div class="input-group col-sm-9">
                                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                                    <span class="input-group-append">
                                    </span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Visi</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="visi" id="putih" rows="4" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Misi</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="misi" id="putih" rows="4" required></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ url('kandidat') }}" class="btn btn-dark">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
