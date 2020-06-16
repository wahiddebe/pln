
@extends('template')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Cetak Agenda Surat Masuk
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
          <a href="" class="btn btn-sm btn-primary"><i class="fa fa-eye"> Tampilkan</i></a>
        </div>
      </div>
        <h4>
          Agenda Surat Masuk dari tanggal  sampai dengan tanggal
        </h4>
        <a href="" class="btn btn-sm btn-success"><i class="fa fa-print"> Cetak</i></a>
      <div class="row">
        
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No. Agenda/Kode</th>
                                <th>Isi Ringkas/File</th>
                                <th>Asal</th>
                                <th>No. Surat/Tgl Surat</th>
                                <th>Tanggal Diterima</th>
                                <th>Penerima</th>
                                <th>Paraf</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr>
                                <td>1 / nomor kode </td>
                                <td>isi / <br> <b>File</b> : namafile.png</td>
                                <td>Tujuan</td>
                                <td>1212 / 13 Juni 2020</td>
                                <td>13 Juni 2020</td>
                                <td>Admin</td>
                                <td></td>
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
<script>

</script>

@stop