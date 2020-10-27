@extends('layouts.master')

@section('content')

        <h1>Edit Data Siswa</h1>
        @if (session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
            <form action="/siswa/{{$siswa->id}}/update" method="POST">

                {{csrf_field()}}

                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Depan</label>
                <input value="{{$siswa->nama_depan}}" name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Belakang</label>
                  <input value="{{$siswa->nama_belakang}}"  name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                        <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                        <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>Perempuan</option>
                    </select>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Agama</label>
                  <input  value="{{$siswa->agama}}" name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
                  </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-warning">Submit</button>
                </div>
            </form>
            </div>
        </div>
@endsection    