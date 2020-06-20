<?php
include_once("../../conn/dbcon.php"); 
session_start(); 
function rupiah($angka) {
	$result = number_format($angka);
}
?>
<div id="no-more-tables">
	<table class="table-bordered table-striped table-condensed table-hover cf" width="100%" id="table_warna">
		<thead class="thead-dark cf" style="background-color: #EAECEE; height: 20%">
			<tr>
				<th colspan="1"><small><i class="fa fa-rss"></i> Kode</small></th>
				<th colspan="1"><small>Nama Paket</small></th>
				<th colspan="1"><small>Sewa Termpat</small></th>
				<th colspan="1"><small>Listrik</small></th>
				<th colspan="1"><small>Iuran Rw</small></th>
				<th colspan="1"><small>Rawat Kamera</small></th>
				<th colspan="1"><small>Rawat Studio</small></th>
				<th colspan="1"><small>Rawat Komputer</small></th>
				<th colspan="1"><small>Internet</small></th>
				<th colspan="1"><small>Kebersihan</small></th>
				<th colspan="1"><small>Dapur</small></th>
				<th colspan="1"><small>ATK</small></th>
				<th colspan="1"><small>Fee Boy</small></th>
				<th colspan="1"><small>Fee Ijal</small></th>
				<th colspan="1"><small>Fee Raih</small></th>
				<th colspan="1"><small>Promosi</small></th>
				<th colspan="1"><small>Modal</small></th>
				<th colspan="1"><small>Markup</small></th>
				<th colspan="1"><small>Harga Jual</small></th>
				<th colspan="1"><small>Deskripsi</small></th>
				<th colspan="1"><small>Edit Data</small></th>
				<th style="display: none">Qr code</th>
			</tr>
		</thead>
		
		<?php
		$page = (isset($_POST['page']))? $_POST['page'] : 1;

		$limit = 30; // Jumlah data per halamannya
		$limit_start = ($page - 1) * $limit;
		if(isset($_POST['search']) && $_POST['search'] == true){
			$param = '%'.mysqli_real_escape_string($conn, $keyword).'%';
			
			date_default_timezone_set('Asia/Jakarta');
			$tanggalA = date("Y-m-d", strtotime('monday this week - 2 day'));
            //$tanggalA = date('d-m-Y',strtotime($tanggal . "+6 days"));
            $tanggalB = date("Y-m-d", strtotime('saturday this week'));
			
			$sql = mysqli_query($conn, "SELECT * FROM table_paket LIMIT ".$limit_start.",".$limit);
			
			$sql2 = mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM table_paket");
			
			$get_jumlah = mysqli_fetch_array($sql2);
		}else{ // Jika user belum mengklik tombol search (PROSES TANPA AJAX)
			// Buat query untuk menampilkan semua data siswa
			date_default_timezone_set('Asia/Jakarta');
			$tanggalA = date("Y-m-d", strtotime('monday this week - 2 day'));
            //$tanggalA = date('d-m-Y',strtotime($tanggal . "+6 days"));
            $tanggalB = date("Y-m-d", strtotime('saturday this week'));
			$sql = mysqli_query($conn, "SELECT * FROM table_paket LIMIT ".$limit_start.",".$limit);
			
			// Buat query untuk menghitung semua jumlah data
			$sql2 = mysqli_query($conn, "SELECT COUNT(*) AS jumlah FROM table_paket");
			$get_jumlah = mysqli_fetch_array($sql2);
		}
		
		$iloop = 1; $temp =""; $sia = array();
		while($iloop <= $data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
			
			$temp = $iloop;
			$sia[$iloop] = $temp;
		?>
			<tbody>
			
			<?php if ($iloop % 2 == 1) { ?>
				<tr style="background-color: #F4F6F6">
				<td data-title="Kode"><small> <?php echo $data['R_reject'].$data['kode_spkc']; ?></small></td>
				<td data-title="Status"><small> <?php echo $data['status']."-".$data['proses']; ?></small></td>
				<td data-title="Tanggal"><small> <?php echo $data['tanggal_masuk']; ?></small></td>
				<td data-title="Produk"><small> <?php echo $data['produk']; ?></small></td>
				<td data-title="Jumlah"><small> <?php echo $data['jml_awal']; ?></small></td>
				<td data-title="Jumlah"><small> <?php echo $data['konveksi']; ?></small></td>
				<td data-title="Penjahit"><small> <?php echo $data['penjahit']; ?></small></td>
				<td data-title="Action"><button type="button" id="btn-editFin" data-id="<?php echo $data['kode_spkc'] ?>" class="btn btn-xs btn-warning">Edit</button><button type="button" id="btn-updFin" data-id="<?php echo $data['kode_spkc'] ?>" class="btn btn-xs btn-primary">Delete</button></td>
				<td data-title="Qr code" style="display: none"><small> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['qrcode'] ).'" style="height:20%; weight:20%;"/>' ?></small></td>
				</tr>
			<?php } else { ?>
				<tr style="background-color: white">
				<td data-title="Kode"><small> <?php echo $data['R_reject'].$data['kode_spkc']; ?></small></td>
				<td data-title="Status"><small> <?php echo $data['status']."-".$data['proses']; ?></small></td>
				<td data-title="Tanggal"><small> <?php echo $data['tanggal_masuk']; ?></small></td>
				<td data-title="Produk"><small> <?php echo $data['produk']; ?></small></td>
				<td data-title="Jumlah"><small> <?php echo $data['jml_awal']; ?></small></td>
				<td data-title="Jumlah"><small> <?php echo $data['konveksi']; ?></small></td>
				<td data-title="Penjahit"><small> <?php echo $data['penjahit']; ?></small></td>
				<td data-title="Action"><button type="button" id="btn-editFin" data-id="<?php echo $data['kode_spkc'] ?>" class="btn btn-xs btn-primary">Edit</button><button type="button" id="btn-updFin" data-id="<?php echo $data['kode_spkc'] ?>" class="btn btn-xs btn-warning">Delete</button></td>
				<td data-title="Qr code" style="display: none"><small> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $data['qrcode'] ).'" style="height:20%; weight:20%;"/>' ?></small></td>
			</tr>
			<?php } ?>
		</tbody>
				
				
		<?php
		$iloop++;
		} 
		?>
			
			
	</table>
</div>

<!--</div>-->

<?php
$count = mysqli_num_rows($sql);

if($count > 0){ // Jika datanya ada, tampilkan paginationnya
    ?>
    <!--
    -- Buat Paginationnya
    -- Dengan bootstrap, kita jadi dimudahkan untuk membuat tombol-tombol pagination dengan design yang bagus tentunya
    -->
	<center>
    <ul class="pagination">
    	<!-- LINK FIRST AND PREV -->
    	<?php
    	if($page == 1){ // Jika page adalah page ke 1, maka disable link PREV
    	?>
    		<li class="disabled"><a href="#">First</a></li>
    		<li class="disabled"><a href="#">&laquo;</a></li>
    	<?php
    	}else{ // Jika page bukan page ke 1
    		$link_prev = ($page > 1)? $page - 1 : 1;
    	?>
    		<li><a href="javascript:void(0);" onclick="searchWithPagination(1, false)">First</a></li>
    		<li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $link_prev; ?>, false)">&laquo;</a></li>
    	<?php
    	}
    	?>
    	
    	<!-- LINK NUMBER -->
    	<?php
    	$jumlah_page = ceil($get_jumlah['jumlah'] / $limit); // Hitung jumlah halamannya
    	$jumlah_number = 3; // Tentukan jumlah link number sebelum dan sesudah page yang aktif
    	$start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1; // Untuk awal link number
    	$end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page; // Untuk akhir link number
    	
    	for($i = $start_number; $i <= $end_number; $i++){
    		$link_active = ($page == $i)? ' class="active"' : '';
    	?>
    		<li<?php echo $link_active; ?>><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $i; ?>, false)"><?php echo $i; ?></a></li>
    	<?php
    	}
    	?>
    	
    	<!-- LINK NEXT AND LAST -->
    	<?php
    	// Jika page sama dengan jumlah page, maka disable link NEXT nya
    	// Artinya page tersebut adalah page terakhir 
    	if($page == $jumlah_page){ // Jika page terakhir
    	?>
    		<li class="disabled"><a href="#">&raquo;</a></li>
    		<li class="disabled"><a href="#">Last</a></li>
    	<?php
    	}else{ // Jika Bukan page terakhir
    		$link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
    	?>
    		<li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $link_next; ?>, false)">&raquo;</a></li>
    		<li><a href="javascript:void(0);" onclick="searchWithPagination(<?php echo $jumlah_page; ?>, false)">Last</a></li>
			
			

    	<?php
    	}
    	?>
    </ul>
	</center>
    <?php    
	
}
?>