@extends('master')

@section('konten')
    <div class="container"><br>
        <div class="col-md-6 col-md-offset-3">
                <hr>
                <form action="{{ route('actiontambahbio') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Pendidikan</label>
                        <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan" required="">
                    </div>
                    <div class="form-group">
                        <label>Pelatihan</label>
                        <input type="text" name="pelatihan" class="form-control" placeholder="Pelatihan" >
                    </div>
                    <div class="form-group">
                        <label>Pengalaman</label>
                        <input type="text" name="pengalaman" class="form-control" placeholder="Pengalaman" >
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                    <hr>
                </form>
        </div>
    </div>
@endsection
