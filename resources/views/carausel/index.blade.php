@extends('template')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Selamat Datang Admin, 
            <small>Anda login sebagai Super Admin. Anda memiliki akses penuh terhadap sistem.</small>
        </h1>
    </section>

    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-blue"><i class="fa fa-inbox"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Jumlah Surat Masuk</span>
                      <span class="info-box-number">1</span>
                    </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-grey"><i class="fa fa-send-o"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Jumlah Surat Keluar</span>
                      <span class="info-box-number">9</span>
                    </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-orange"><i class="fa fa-file"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Jumlah Disposisi</span>
                      <span class="info-box-number">9</span>
                    </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-green"><i class="fa fa-bookmark"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Jumlah Klasifikasi Surat</span>
                      <span class="info-box-number">2</span>
                    </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <!-- Apply any bg-* class to to the icon to color it -->
                    <span class="info-box-icon bg-purple"><i class="fa fa-user"></i></span>
                    <div class="info-box-content">
                      <span class="info-box-text">Jumlah Pengguna</span>
                      <span class="info-box-number">1</span>
                    </div><!-- /.info-box-content -->
                  </div><!-- /.info-box -->
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
@stop