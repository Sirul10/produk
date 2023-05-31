<div class="container-fluid">
	<h5>DATA PRODUK</h5>

	<table class="table table-bordered table-dark table-striped">
		<tr>
			<th>NO</th>
			<th>TITLE</th>
			<th>DESKRIPSI</th>
			<th>PRICE</th>
			<th>DISCOUNTPERCENTAGE</th>
			<th>RATING</th>
			<th>STOCK</th>
			<th>BRAND</th>
			<th>CATEGORY</th>
			<th>IMAGES</th>
			<th colspan="3">Aksi</th>
		</tr>

		<?php 
		$no=1;
		foreach($products as $prduk) : ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $prduk->title ?></td>
				<td><?php echo $prduk->deskripsi ?></td>
				<td><?php echo $prduk->price ?></td>
				<td><?php echo $prduk->discountpercentage ?></td>
				<td><?php echo $prduk->rating ?></td>
				<td><?php echo $prduk->stock ?></td>
				<td><?php echo $prduk->brand ?></td>
				<td><?php echo $prduk->category ?></td>
				<td><?php echo $prduk->images ?></td>
				<td><td><?php echo anchor('data_produk/edit/' .$prduk->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>' ) ?></td>
				<td><?php echo anchor('data_produk/lihat_data/' .$prduk->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-solid fa-database"></i></div>')?></td>
			</td>
			</tr>

		<?php endforeach;?>
	</table>
</div>
