<div class="container-fluid">
	<div class="card">
  <h5 class="card-header">Detail</h5>
  <div class="card-body">
  	<?php foreach ($products as $prduk): ?>
  		<div class="row">
  			<div class="col-md-4">
  				<img src="<?php echo base_url(). '/uploads/' .$prduk->images ?>" class="card-img-top">
  			</div>
  			<div class="col-md-8">
  				<table class="table">
  						<tr>
  							<td>Title</td>
  							<td><strong><?php echo $prduk->title?></strong></td>
  						</tr>

  						<tr>
  							<td>Deskripsi</td>
  							<td><strong><?php echo $prduk->deskripsi?></strong></td>
  						</tr>
                        <tr>
                            <td>Price</td>
                            <td><strong><?php echo $prduk->price?></strong></td>
                        </tr>
                        <tr>
                            <td>Discount Percentage</td>
                            <td><strong><?php echo $prduk->discountpercentage?></strong></td>
                        </tr>
                        <tr>
                            <td>Rating</td>
                            <td><strong><?php echo $prduk->rating?></strong></td>
                        </tr>
                        <tr>
                            <td>Stock</td>
                            <td><strong><?php echo $prduk->stock?></strong></td>
                        </tr>
                        <tr>
                            <td>Brand</td>
                            <td><strong><?php echo $prduk->brand?></strong></td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td><strong><?php echo $prduk->category?></strong></td>
                        </tr>
                    
  				</table>
  			</div>	
  		</div>
  	<?php endforeach; ?>
  </div>
</div>
</div>