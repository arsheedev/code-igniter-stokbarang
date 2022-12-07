        <link rel="stylesheet" href="<?php echo base_url(); ?>/resources/style/allstock.css">
        <div class="container-allstock">
            <h3>Stok Barang</h3>
            <table>
                <thead>
                    <tr>
                        <th style='text-align: center;padding:6px;width: 40px;'>No</th>
                        <th style='text-align: center;padding:6px;'>Nama Barang</th>
                        <th style='text-align: center;padding:6px;width: 100px;'>Kd Barang</th>
                        <th style='text-align: center;padding:6px;width: 100px;'>Kategori</th>
                        <th style='text-align: center;padding:6px;width:60px;'>Qty</th>
                        <th style='text-align: center;padding:6px;'>Uom</th>
                        <th style='text-align: center;padding:6px;'>Loc</th>
                        <th style='text-align: center;padding:6px;'>Terakhir Diupdate</th>
                        <th style='text-align: center;padding:6px;'>Admin</th>
                    </tr>
                </thead>
                            
                <tbody>
                    <?php $no = 1; foreach($stock as $row) { ?>
                        <tr class="unik">
                            <td style='text-align: center;padding: 4px;'><?= $no; ?></td>
                            <td style='padding: 4px 0.8rem;'><?= $row->nama_barang; ?></td>
                            <td style='text-align: center;padding: 4px;'><?= $row->kd_barang; ?></td>
                            <td style='text-align: center;padding: 4px;'><?= $row->kategori; ?></td>
                            <td style='text-align: center;padding: 4px;'><?= $row->stok; ?></td>
                            <td style='text-align: center;padding: 4px;'><?= $row->satuan; ?></td>
                            <td style='text-align: center;padding: 4px;'><?= $row->location; ?></td>
                            <td style='text-align: center;padding: 4px;'><?= $row->terakhir_diupdate; ?></td>
                            <td style='text-align: center;padding: 4px;'><?= $row->koordinator; ?></td>
                        </tr>
                    <?php $no++; } ?>
                </tbody>
            </table><br>
            <div class='list-cetak'>
                <a href="<?php echo base_url('stock/cetak_stok'); ?>">Print to PDF</a>
                <a href="<?php echo base_url('stock/excel_stok'); ?>">Print to XLS</a>
            </div>
        </div>
	</div>
</body>
</html>