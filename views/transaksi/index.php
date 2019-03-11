<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\Kasir;
use app\models\Barang;
use app\models\Penjualan;
use app\models\Distributor;

$this->title = 'Transaksi';

?>

<head>
    <link href="http://localhost/ayu/yiibasic/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="http://localhost/ayu/yiibasic/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
</head>

<script src="http://localhost/ayu/yiibasic/vendor/datatables/js/jquery.js"></script>
<div class="transaksi-index">

<br>    
<br>
<br>

     <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            DATA TRANSAKSI
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body responsive">
                        <div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="tabel_transaksi">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Id Penjualan</th>
                                        <th>Nama Barang</th>
                                        <th>Nama Kasir</th>
                                        <th>Jumlah</th>
                                        <th>Total</th>
                                        <th>Tanggal</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $n=0; foreach ($query as $item): $n++;?>
                                    <tr>
                                        <td><?= $n; ?></td>
                                        <td><?= $item['id_penjualan']; ?></td>
                                        <td><?= $item['nama_barang']; ?></td>
                                        <td><?= $item['nama']; ?></td>
                                        <td><?= $item['jumlah']; ?></td>
                                        <td><?= $item['total']; ?></td>
                                        <td><?= $item['date']; ?></td>
                                        
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
</div>


    <!-- DataTables JavaScript -->
    
    <script src="http://localhost/ayu/yiibasic/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="http://localhost/ayu/yiibasic/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="http://localhost/ayu/yiibasic/vendor/datatables-responsive/dataTables.responsive.js"></script>


<script>
//$.noConflict();
jQuery( document ).ready(function( $ ) {
    $('#tabel_transaksi').DataTable();
});
// Code that uses other library's $ can follow here.
</script>
