@extends('master')

@section('konten')
    <div class="container"><br>
        <div class="col-md-6 col-md-offset-3">
                <hr>
                @if(Auth::user()->biodata == null)
                <a type="submit" class="btn btn-primary btn-block text-light mb-4" href="tambahbio">Tambahkan Pengalaman</a>
                @endif
                <form action="{{ route('actionedit') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Email" required="" value="{{ Auth::user()->email }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ Auth::user()->tanggal_lahir }}">
                    </div>
                    <div class="form-group">
                        <label>Deskipsi</label>
                        <input type="textarea" name="deskripsi" class="form-control" placeholder="Deskipsi" value="{{ Auth::user()->deskripsi }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                    <hr>
                </form>
        </div>
    </div>
@endsection
