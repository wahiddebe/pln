
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
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No. Agenda/Kode</th>
                                <th>Isi Ringkas/File</th>
                                <th>Tujuan</th>
                                <th>No. Surat/Tgl Surat</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td>1 / nomor kode </td>
                                <td>isi / <br> <b>File</b> : namafile.png</td>
                                <td>Tujuan</td>
                                <td>1212 / 13 Juni 2020</td>
                                <td>
                                    <div class="btn-group">
      
                                    <a href="" class="btn btn-sm btn-warning"><i class="fa fa-edit"> Edit</i></a>
                                    <a href="" class="btn btn-sm btn-success"><i class="fa fa-file"> Display</i></a>
                                    <a href="" class="btn btn-sm btn-primary"><i class="fa fa-print"> Print</i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="fa fa-trash"> Delete</i></a>
      
                                   </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
@stop