<?php

    $filename ="StockBarang.xls";
    header('Content-type: application/ms-excel');
    header('Content-Disposition: attachment; filename='.$filename);

?>

<table id="example" class="table table-bordered" width="100%">
                      <thead>
                          <tr style="font-size: 14px;">
                              <th style='text-align: center;padding:6px;width: 40px;'>No</th>
                              <th style='text-align: center;padding:6px;width: 100px;'>Nama Barang</th>
                              <th style='text-align: center;padding:6px;width: 100px;'>Kd Barang</th>
                              <th style='text-align: center;padding:6px;width: 100px;'>Kategori</th>
                              <th style='text-align: center;padding:6px;width:60px;'>Qty</th>
                              <th style='text-align: center;padding:6px;width: 100px;'>Uom</th>
                              <th style='text-align: center;padding:6px;width: 100px;'>Loc</th>    
                          </tr>
                      </thead>
                      
                      <tbody>

                <?php
                $no=1;
                foreach ($stock as $row) {
                  echo "<tr style='font-size: 12px;'>
								  <td style='text-align: center;padding: 4px;'>$no</td>";
                  echo"
                  <td style='padding: 4px;'>$row->nama_barang</td>
                  <td style='text-align: center;padding: 4px;'>$row->kd_barang</td>
                  <td style='text-align: center;padding: 4px;'>$row->kategori</td>
                  <td style='text-align: center;padding: 4px;'>$row->stok</td>
                  <td style='text-align: center;padding: 4px;'>$row->satuan</td>
                  <td style='text-align: center;padding: 4px;'>$row->location</td
                  </tr>";
                  $no++;
                }
							  ?>
                      </tbody>
</table>