<?php echo form_open('admin/packages/insert_content'); ?>
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="<?php echo site_url('/admin') ?>">Dashboard</a>
	</li>
	<li class="breadcrumb-item active">Edit Package</li>
</ol>
<div class="row" style="margin-left: 5px;">
	<h2>Edit Package</h2>
</div>
<br>
<?php foreach ($packages as $package) : ?>
	<div class="row">

		<div class="col-md-6 packages-item-left">
			<fieldset>
				<legend class="packages-only">Package</legend>
				<table>
					<tr>
						<td>Package Number:</td>
						<td style="padding-left: 50px;"><input type="text" name="package-no" value="<?= $package['package_no']; ?>"></input></td>
					</tr>
					<tr><td></td></tr>
					<tr>
						<td>Price:</td>
						<td style="padding-left: 50px;"><input type="text" name="price" value="<?php echo $package['price']; ?>"></input></td>
					</tr>
				</table>
			</fieldset>
		</div>

		<div class="col-md-6 packages-item">
			<fieldset>
				<legend class="packages-item-legend">Package Items</legend>
					<input type="hidden" name="id" value="<?php echo $package['package_id']; ?>">
				<ul>

				<?php $index = 0; ?>
				<?php foreach ($packages_content as $package_content) : ?>
						<?php if(isset($menus[$index]['package_content_id'])) : ?>
							<?php if($package_content['package_content_id'] == $menus[$index]['package_content_id']) : ?>

								<li>
									<label class="form-check-label">
									  <input type="checkbox" name="type_of_menu[]" class="form-check-input" value="<?php echo $package_content['package_content_id']; ?>" checked disabled><?php echo $package_content['type_of_menu']; ?>
									</label>

								</li>

								<?php $index++; ?>

							<?php else : ?>

								<li>
									<label class="form-check-label">
									  <input type="checkbox" name="type_of_menu[]" class="form-check-input" value="<?php echo $package_content['package_content_id']; ?>"><?php echo $package_content['type_of_menu']; ?>
									</label>
									<br>
								</li>

							<?php endif; ?>

						<?php else : ?>

							<li>
								<label class="form-check-label">
								  <input type="checkbox" name="type_of_menu[]" class="form-check-input" value="<?php echo $package_content['package_content_id']; ?>"><?php echo $package_content['type_of_menu']; ?>
								</label>
								<br>
							</li>

						<?php endif; ?>

					<?php endforeach; ?>
				</ul>
			</fieldset>
		</div>
		
	</div>
<?php endforeach; ?>

<div style="float: right; margin-top: 20px;">
	<button type="submit" class="btn btn-default btn-add">Submit</button>
</div>

<?php echo form_close(); ?>