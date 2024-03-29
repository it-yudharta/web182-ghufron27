@extends('layout.master')

@section('iniloh')
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
        @endif
            <div class="row">
                <div class="col-6">
                    <h1>DATA SISWA</h1>
                </div>

                <div class="col-6">
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                    Tambah data siswa
                    </button>

                </div>
            <table class="table table-hover">
                <tr>
                    <th>NAMA</th>
                    <th>UMUR</th>
                    <th>ALAMAT</th>
                    <th>NO HP</th>
                    <th>AKSI</th>
                </tr>
                @foreach($data_siswa as $siswa)
                <tr>
                    <td>{{$siswa->nama}}</td>
                    <td>{{$siswa->umur}}</td>
                    <td>{{$siswa->alamat}}</td>
                    <td>{{$siswa->no_hp}}</td>
                    <td>
                        <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('yaklin dihapus')" >Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
            </div>
        </div>
        
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/siswa/create" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama</label>
                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama anda">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Umur</label>
                                <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan umur anda">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea placeholder="Masukkan Alamat anda">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nomer HP</label>
                                <input name="no_hp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nomer HP anda">
                            </div>

                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                        </div>
                    </div>
@endsection                    



