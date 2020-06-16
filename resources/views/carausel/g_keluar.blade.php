
@extends('template')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cetak Agenda Surat Keluar
        </h1>
    </section>

    <section class="content container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="input-group date" data-provide="datepicker">
            <input type="text" class="form-control" placeholder="Dari Tanggal">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
        </div>
        <div class="col-md-3">
          <div class="input-group date" data-provide="datepicker">
            <input type="text" class="form-control" placeholder="Sampai Tanggal">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
        </div> 
        <div class="col-md-2">
          <a href="" class="btn btn-sm btn-primary"><i class="fa fa-filter"> Filter</i></a>
        </div>
      </div>
        <h4>
          Galeri File Surat Keluar dari tanggal  sampai dengan tanggal
        </h4>
      <div class="row">
        
          <div class="col-md-2">
            <div class="card" style="width: 5rem;">
              <img class="card-img-top img-fluid" src="https://i0.wp.com/salamadian.com/wp-content/uploads/2018/01/format-surat-izin-1.png"  alt="...">
              <div class="card-body">
                <a href="#" class="btn btn-primary">Lihat Ukuran Penuh</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
</div>
<div class="modal fade confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background:#dd4b39;color:#FFFFFF">
                <h4 class="modal-title">Peringatan !</h4>
            </div>
            <div class="modal-body messages">
                <!-- NTONG DIEUSIAN -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                <a class="btn btn-danger btn-ok">Hapus</a>
            </div>
        </div>
    </div>
</div>
<script>

</script>

@stop