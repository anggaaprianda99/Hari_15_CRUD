@extends('adminlte.master')

@section('content')
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pertanyaan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="">
              <div class="box-body">
                <div class="form-group">
                  <label for="judul">Judul</label>
                  <input type="text" class="form-control" name="judul" id="judul" placeholder="judul">
                </div>
                <div class="form-group">
                  <label for="isi">Isi</label>
                  <input type="text" class="form-control" id="isi" name="isi" placeholder="isi">
                </div>
                <div class="form-group">
                  <label for="tanggal_dibuat">Tanggal Dibuat</label>
                  <input type="date" id="tanggal_dibuat" name="tanggal_dibuat">
                </div>
                <div class="form-group">
                  <label for="tanggal_dibuat">Tanggal Diperbaharui</label>
                  <input type="date" id="tanggal_diperbaharui" name="tanggal_diperbaharui">
                </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-secondary">Submit</button>
              </div>
            </form>
          </div>
@endsection