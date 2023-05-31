<div class="container-fluid">
	<h3><i class="fas fa-edit"></i>EDIT DATA PRODUK</h3>

	<?php foreach ($products as $prduk): ?>
		<form method="post" action="<?php echo base_url(). 'data_produk/update'?>">
			<div class="for-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control" value="<?php echo $prduk->title ?>">
			</div>
			<div class="for-group">
				<label>Deskripsi</label>
				<input type="hidden" name="id" class="form-control" value="<?php echo $prduk->id ?>">
				<input type="text" name="deskripsi" class="form-control" value="<?php echo $prduk->deskripsi ?>">
			</div>
			<div class="for-group">
				<label>Price</label>
				<input type="text" name="price" class="form-control" value="<?php echo $prduk->price ?>">
			</div>
			<div class="for-group">
				<label>Discount Percentage</label>
				<input type="text" name="discountpercentage" class="form-control" value="<?php echo $prduk->discountpercentage ?>">
			</div>
			<div class="for-group">
				<label>Rating</label>
				<input type="text" name="rating" class="form-control" value="<?php echo $prduk->rating ?>">
			</div>
			<div class="for-group">
				<label>Stock</label>
				<input type="text" name="stock" class="form-control" value="<?php echo $prduk->stock ?>">
			</div>
			<div class="for-group">
				<label>Brand</label>
				<input type="text" name="rating" class="form-control" value="<?php echo $prduk->brand ?>">
			</div>
			<div class="for-group">
				<label>Category</label>
				<input type="text" name="category" class="form-control" value="<?php echo $prduk->category ?>">
			</div>
			<div class="for-group">
				<label>Images</label>
				<input type="text" name="images" class="form-control" value="<?php echo $prduk->images ?>">
			</div>
			<button type="submit" class="btn btn-primary btn-sm mt-3"> Simpan</button>

		</form>

	<?php endforeach; ?>
</div>