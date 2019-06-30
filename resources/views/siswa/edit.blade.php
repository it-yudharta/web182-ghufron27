@extends('layout.master')

@section('iniloh')
        <h1>Edit data siswa</h1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
        @endif
            <div class="row">
                <div class="col-lg-12">
                 <form action="/siswa/{{$siswa->id}}/update" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama anda" value="{{$siswa->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Umur</label>
                        <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan umur anda" value="{{$siswa->umur}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea placeholder="Masukkan Alamat anda">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomer HP</label>
                       <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomer HP anda" value="{{$siswa->no_hp}}">
                    </div>
                            <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                    </div>
            </div>
@endsection