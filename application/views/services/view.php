
<div id="our-services">

<h2><?php echo $services['services_title']; ?></h2>
<p><?php echo $services['services_desc']; ?></p>

<hr>
<a href="<?php echo base_url(); ?>services/edit/<?php echo $services['slug']; ?>" class="btn btn-info float-left">Edit</a>
<?php echo form_open('/services/delete/' . $services['id']); ?>
	<input type="submit" class="btn btn-danger" value="Delete">
</form>

</div>