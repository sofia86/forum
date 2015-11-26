<?php include('libs/topics.php'); ?>
<?php include('includes/top.php'); ?>


<form action ="topics.add.php" method="post" id="contact-form"> 

<fieldset>
			<div class="">
				<label for="creator_id">User</label>
				<input type="text" id="creator_id" name="creator_id" value="" placeholder="" />
				<input type="submit"/>
			</div>

			<div class="">
				<label for="title">Title</label>
				<input type="text" id="title" name="title" value="" placeholder="" />
				<input type="submit"/>
			</div>
		
			<div class="">
				<label for="created">Date</label>
				<input type="date" id="created" name="created" value="<?= date("F j, Y, g:i a");?>" placeholder="" />
			</div>

</fieldset>
</form>


<table border="1">
	<thead>
		<tr>
			<th>id</th>
			<th>title</th>
		</tr>
	</thead>
	<tbody>
	<?= build_html_topics(include('data/topics.php')); ?>
	</tbody>
</table>
<?php include('includes/bottom.php'); ?>