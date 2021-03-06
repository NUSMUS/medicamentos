<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i> Informe de datos de registro de medicamentos
  </h1>
  <ul class="breadcrumb">
    <li><a href="?module=start"><i class="fa fa-home"></i> Inicio</a></li>
    <li class="active">informe</li>
    <li class="active"> registro de medicamentos</li>
  </ul>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <!-- form start -->
        <form class="form-horizontal" role="form" action="modules/stock_report/print.php" method="GET" target="_blank">
          <div class="box-body">
            <div class="form-group">
              <label class="col-sm-1">Fecha</label>
              <div class="col-sm-2">
                <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_awal"  autocomplete="off" required>
              </div>
              <label class="col-sm-1">Hasta</label>
              <div class="col-sm-2">
                <input type="text" style="margin-left:-35px"  class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tgl_akhir" autocomplete="off" required>
              </div>
            </div>
          </div>

          <div class="box-footer">
            <div class="form-group">
              <div class="col-sm-offset-1 col-sm-11">
                <button type="submit" class="btn btn-primary btn-social btn-submit" style="width:120px;">
                  <i class="fa fa-print"></i> Imprimir
                </button>
              </div>
            </div>
          </div>
        </form>
      </div><!-- /.box -->
    </div><!--/.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
