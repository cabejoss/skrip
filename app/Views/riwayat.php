<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url('assets/css/materialize.min.css')?>">
	<script src="<?=base_url('assets/js/jquery-3.5.1.min.js')?>"></script>
	<script src="<?=base_url('assets/js/materialize.min.js')?>"></script>
    <title>Document</title>
	<style>
		body{
			height:110vh;
		}
		h5{
			margin-top:50px;
		}
		 table {
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		 table td, table th {
			border: 1px solid #ddd;
			padding: 8px;
			text-align:center;
		}

		table tr:nth-child(even){background-color: #f2f2f2;}

		table tr:hover {background-color: #ddd;}

		table th {
			padding-top: 12px;
			padding-bottom: 12px;
			background-color: #4CAF50;
			color: white;
		}
		.btn{
			background-color: #4CAF50;
		}
		.btn:hover{
			background-color: #4CAF50;
		}
		nav, .nav-wrapper{
			background-color: #4CAF50;
		}
	</style>
</head>
<body>
	<div class="navbar-fixed" >
		<nav style="margin-bottom: 15px ">
			<div class="nav-wrapper container">
				<a href="#" class="brand-logo">Logo</a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="<?=base_url('transaksi')?>">Transaksi</a></li>
					<li><a href="<?=base_url('mining')?>">Mining</a></li>
					<li><a href="<?=base_url('riwayat')?>">Riwayat</a></li>
					
				</ul>
			</div>
		</nav>
	</div>
	<div class="container" style="margin-top: 20px">
	
		<table class="highlight">
			<thead>
				<tr>
					<th>No</th>
					<th>Riwayat Mining</th>
					<th>Tanggal</th>
					<th>Aksi</th>

				</tr>
			</thead>
			<tbody>
				<?php date_default_timezone_set("Asia/Jakarta");?>
			<?php if(!empty($riwayat)):?>
				<?php $no=1; foreach($riwayat as $r):?>
					<?php $link = base_url('riwayat/show')."/".$r['riwayat_kd'];?>
					<?php $link_delete = base_url('riwayat/delete')."/".$r['riwayat_kd'];?>

					<tr>
						<td style="width: 10%"><?= $no; ?></td>
						<td style="width: 70%; text-align: left;"><a href="<?=$link?>"><?= "kd_".$r['riwayat_kd']?></a></td>
						<td style="width: 20%"><?= date('d/m/Y, H:i', $r['riwayat_kd']); ?></td>
						<td style="width: 70%; text-align: left;"><a href="<?=$link_delete?>"  onclick="return confirm('Yakin ingin menhapus?')">Hapus</a></td>
					</tr>
				<?php $no++; endforeach;?>
			<?php else:?>
				<tr>
					<td colspan="3">Tidak ada data</td>		
				</tr>
			<?php endif;?>
			</tbody>
		</table>
	</div>
</body>
</html>

