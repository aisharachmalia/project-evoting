{{-- @extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Kandidat</div>
                    <div class="card-body">
                        <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama_kelas"
                                    value="{{ $kelas->nama_kelas }}">
                            </div>
                            <div class="mb-2">
                                <label for="foto">Image</label>
                                @if ($kandidat->image)
                                    <p><img src="{{ asset('images/kandidat/' . $kandidat->image) }}" alt="image"
                                            width="100px">
                                    </p>
                                @endif
                                <input type="file" name="image"
                                    class="form-control @error('image') is-invalid @enderror">
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="nis">Visi</label>
                                <input type="text" class="form-control @error('visi') is-invalid @enderror"
                                    name="visi" value="{{ old('visi', $kandidat->visi) }}">
                                @error('visi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="nis">Visi</label>
                                <input type="text" class="form-control @error('misi') is-invalid @enderror"
                                    name="misi" value="{{ old('misi', $kandidat->misi) }}">
                                @error('misi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                              
                            <button type="submit" class="btn btn-info">Edit</button>
                            <a href="{{ url('kelas') }}" class="btn btn-success">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}
