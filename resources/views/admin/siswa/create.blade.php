{{-- @extends('layouts.admin')

@section('content')
<div class="container">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-header">Add Data Siswa</div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="forms-sample" action="{{ route('siswa.store') }}" method="post" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="nis" class="col-sm-3 col-form-label">NIS</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nama" class="col-sm-3 col-form-label">Nama Siswa</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama" class="form-control" id="nama_" placeholder="Nama Siswa" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <label class="radio-inline">
                                        <input type="radio" name="jk" value="L" id="L" required> Laki - laki
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="jk" value="P" id="P" required> Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_kelas" class="col-sm-3 col-form-label">Kelas</label>
                                <div class="col-sm-9">
                                    <select class="form-control" name="id_kelas" id="id_kelas" required>
                                        <option value="">-- Pilih Kelas --</option>
                                        @foreach ($kelas as $data)
                                            <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ url('siswa') }}" class="btn btn-dark">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
