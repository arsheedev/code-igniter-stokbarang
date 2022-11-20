<style type="text/css">

.dataTables_filter{visibility: hidden;}
.dataTables_length{visibility: hidden;}
.tgl{float: right;}
.submite{float: right;}
.pagination{float: left;}
.dataTables_info{visibility: hidden;}
.pagination {float: right;}
</style>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        	<div class="col-md-12">
        		<h3 class="page-header" style="margin-top: 15px;margin:10px;">Outbound<small></small></h3>
        		<div class="col-sm-8">
        		<a href="<?php echo base_url('keluar/form_output'); ?>" data-toggle="tooltip" title="Add"><i class="fa fa-plus-circle fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a>
        		<a href="<?php echo base_url('keluar/cetak_keluar'); ?>" data-toggle="tooltip" title="Print"><i class="fa fa-print fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a>
        		<a href="<?php echo base_url('keluar/excel_keluar'); ?>" data-toggle="tooltip" title="Excel"><i class="fa fa-file-excel-o fa-2x" style="margin-bottom: 10px;padding: 0 0 0 5px;color:#5aab26;"></i></a>


                <form class="form-inline" method="post" action="<?php echo base_url('keluar/hasil_cari_keluar'); ?>" style="margin-bottom: -6px;">
                  <div class="form-group">
                    <input type="text" name="dari" class="form-control form-control-sm" id="dari" required placeholder="Dari tgl" style="height: 25px;font-size:12px">
                  </div>
                  <div class="form-group">
                    <input type="text" name="sampai" class="form-control" id="dar" required  placeholder="Sampai tgl" style="height: 25px;font-size:12px;">
                  </div>
                  <input type="submit" value="cari" class="btn btn-primary" style="height: 25px;font-size: 10px;padding: 3px 10px;">
                </form>
        	        <table id="example" class="table table-bordered" width="100%">
                      <thead>
                          <tr style="font-size: 14px;">
                              <th style='text-align: center;padding:6px;width: 40px;'>No</th>
                              <th style='text-align: center;padding:6px;'>Nama Barang</th>
                              <th style='text-align: center;padding:6px;width: 100px;'>Kd Barang</th>
                              <th style='text-align: center;padding:6px;width: 100px;'>Kategori</th>
                              <th style='text-align: center;padding:6px;width:60px;'>Qty</th>
                              <th style='text-align: center;padding:6px;width:60px;'>Uom</th>
                              <th style='text-align: center;padding:6px;width: 140px;'>Tgl Keluar</th> 
                             
                          </tr>
                      </thead>
                      
                      <tbody>
                            <?php $no = 1; foreach($keluar as $row) { ?>
                            <tr style='font-size: 12px;'>
                                <td style='text-align: center;padding: 4px;'><?= $no; ?></td>
                                <td style='text-align: center;padding: 4px;'><?= $row->nama_barang; ?></td>
                                <td style='text-align: center;padding: 4px;'><?= $row->kode_barang; ?></td>
                                <td style='text-align: center;padding: 4px;'><?= $row->kategori; ?></td>                
                                <td style='text-align: center;padding: 4px;'><?= $row->jumlah; ?></td>
                                <td style='text-align: center;padding: 4px;'><?= $row->satuan; ?></td>
                                <td style='text-align: center;padding: 4px;'><?= $row->tgl; ?></td>              
							</tr>
                            <?php $no++; } ?>
                      </tbody>
                    </table>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	<div class="drop-menu">
		<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu4">
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Regular link</a></li>
		  <li role="presentation" class="disabled"><a role="menuitem" tabindex="-1" href="#">Disabled link</a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another link</a></li>
		</ul>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>/resources/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/resources/js/jquery-3.1.1.min.js"></script>
        <script src="<?php echo base_url(); ?>/resources/js/bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>/resources/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#dari').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
        </script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#dar').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
        </script>
        <script src="<?php echo base_url(); ?>/resources/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>/resources/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url(); ?>/resources/js/dataTables.bootstrap.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#example').dataTable();
            });
        </script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
  </body>
</html>