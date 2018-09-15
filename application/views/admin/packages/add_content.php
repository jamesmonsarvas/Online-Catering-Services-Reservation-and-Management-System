<?php echo form_open('admin/packages/insert_content'); ?>
		<?php foreach ($packages as $package) : ?>

			Package No. : <input type="text" name="package-no" value="<?= $package['package_no']; ?>"></input>
			<br>
			Price : <input type="text" name="price" value="<?php echo $package['price']; ?>"></input>
			<br>
			
			<input type="hidden" name="id" value="<?php echo $menus[0]['package_id']; ?>">
			<ul>

			<?php $index = 0; ?>

			<?php foreach ($packages_content as $package_content) : ?>
					<?php if(isset($menus[$index]['package_content_id'])) : ?>
						<?php if($package_content['package_content_id'] == $menus[$index]['package_content_id']) : ?>

							<li>
								<label class="form-check-label">
								  <input type="checkbox" name="type_of_menu[]" class="form-check-input" value="<?php echo $package_content['package_content_id']; ?>" checked disabled><?php echo $package_content['type_of_menu']; ?>
								</label>
								<br>
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

		<?php endforeach; ?>

	<button type="submit" class="btn btn-default">Submit</button>

<?php echo form_close(); ?>