{{-- @extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
            <div class="card">
                <div class="card-header">Edit Data Siswa</div>
                <div class="card-body">
                    <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label for="nis" class="col-sm-3 col-form-label">NIS</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nis" name="nis" value="{{ $siswa->nis }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nama" class="col-sm-3 col-form-label">Nama Siswa</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $siswa->nama }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <label class="radio-inline">
                                    <input type="radio" name="jk" value="L" {{ $siswa->jk == 'L' ? 'checked' : '' }} required> Laki - laki
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="jk" value="P" {{ $siswa->jk == 'P' ? 'checked' : '' }} required> Perempuan
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="id_kelas" class="col-sm-3 col-form-label">Kelas</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="id_kelas" id="id_kelas" required>
                                    <option value="">-- Pilih Kelas --</option>
                                    @foreach ($kelas as $data)
                                        <option value="{{ $data->id }}" {{ $siswa->id_kelas == $data->id ? 'selected' : '' }}>
                                            {{ $data->nama_kelas }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                        <a href="{{ route('siswa.index') }}" class="btn btn-dark">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
