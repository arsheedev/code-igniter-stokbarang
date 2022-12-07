<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Barang || Kawasaki</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/resources/style/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/regular.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet">
	<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js" async></script>
</head>
<body>
    <div class="container">
		<link rel="stylesheet" href="<?php echo base_url(); ?>/resources/style/header.css">

		<div class="container-nav">
			<div class="pembungkus">
				<div class="container-nav-logo">
					<h3>Just_Q</h3>
				</div>
				<div class="container-nav_home">
					<ul>
						<li><a href="<?php echo base_url('dashboard'); ?>"><iconify-icon icon="material-symbols:home-outline-rounded" class="icon"></iconify-icon><span>Home</span></a></li>
					</ul>   
				</div>
				<div class="container-nav_list">
					<div class="container-nav_list_item">
						<p>Menu</p>
						<ul>
							<li><a href="<?php echo base_url('stock'); ?>"><iconify-icon icon="gg:notes" class="icon"></iconify-icon><span>All Stock</span></a></li>
							<li><a href="<?php echo base_url('masuk'); ?>"><iconify-icon icon="material-symbols:add-notes-outline" class="icon"></iconify-icon><span>Incoming</span></a></li>
							<li><a href="<?php echo base_url('keluar'); ?>"><iconify-icon icon="mdi:note-minus-outline" class="icon"></iconify-icon><span>Outbound</span></a></li>
							<li><a href="<?php echo base_url('stock/tambah_barang'); ?>"><iconify-icon icon="ic:baseline-plus" class="icon"></iconify-icon><span>Add New Item</span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>