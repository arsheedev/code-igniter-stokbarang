        <link rel="stylesheet" href="<?php echo base_url(); ?>/resources/style/incoming.css">
        <div class="container-incoming">
            <h3>Barang Masuk</h3>

            <form action="<?php echo base_url('masuk/hasil_cari_masuk'); ?>" method="POST">
                <input type="date" name="dari">
                <input type="date" name="sampai">
                <input type="submit" value="Cari">
            </form>
            <br>
            <table>
                <thead>
                    <tr>
                        <th style='text-align: center;padding:6px;width: 40px;'>No</th>
                        <th style='text-align: center;padding:6px;'>Nama Barang</th>
                        <th style='text-align: center;padding:6px;width: 160px;'>Kd Barang</th>
                        <th style='text-align: center;padding:6px;width: 140px;'>Kategori</th>
                        <th style='text-align: center;padding:6px;width:60px;'>Qty</th>
                        <th style='text-align: center;padding:6px;width:60px;'>Uom</th>
                        <th style='text-align: center;padding:6px;width: 160px;'>Tanggal Masuk</th> 
                        <th style='text-align: center;padding:6px;width:60px;'>Loc</th>
                        <th style='text-align: center;padding:6px;width:90px;'>Suplier</th>
                    </tr>
                </thead>
                                  
                <tbody>
                    <?php $no = 1; foreach($masuk as $row) { ?>
                        <tr class='unik'>
                            <td style='text-align: center;padding: 4px;'><?= $no; ?></td>
                            <td style='padding: 4px;'><?= $row->nama_barang; ?></td>
                            <td style='text-align: center;padding: 4px;'><?= $row->kode_barang; ?></td>
                            <td style='text-align: center;padding: 4px;'><?= $row->kategori; ?></td>
                            <td style='text-align: center;padding: 4px;'><?= $row->jumlah; ?></td>
                            <td style='text-align: center;padding: 4px;'><?= $row->satuan; ?></td>
                            <td style='text-align: center;padding: 4px;'><?= $row->tgl; ?></td>
                            <td style='text-align: center;padding: 4px;'><?= $row->location; ?></td>
                            <td style='text-align: center;padding: 4px;'><?= $row->suplier; ?></td>
                          </tr>
                    <?php $no++; } ?>
                </tbody>
            </table><br>
            <li>
                <a href="<?php echo base_url('masuk/form_input'); ?>"><iconify-icon icon="ic:baseline-plus" class="icon"></iconify-icon><span>Add Incoming Item</span></a>
            </li>
            <div class="list-cetak">
                <a href="<?php echo base_url('masuk/cetak_masuk'); ?>">Cetak PDF</a>
                <a href="<?php echo base_url('masuk/excel_masuk'); ?>">Cetak XLS</a>
            </div>
        </div>
    </div>
</body>
</html>