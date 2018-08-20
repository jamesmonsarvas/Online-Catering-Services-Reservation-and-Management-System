<h2><?=$title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('services/create'); ?>

	<div class="form-group">
		<label for="services-title">Services Title</label>
		<input type="text" class="form-control" name="services-title" placeholder="Title">
	</div>
	<div class="form-group">
		<label for="services-desc">Services Desc</label>
		<textarea name="services-desc" class="form-control" placeholder="Description"></textarea>
	</div>

	<button type="submit" class="btn btn-default">Submit</button>
</form>