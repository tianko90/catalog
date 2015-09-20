<form id="add_movie" action="" method="post">
	<h1>Add Movie</h1>
	<p>
	<span style="color: red">*</span>
	<input type="text" id="title" name="title" placeholder="movie title">
	</p>
	<p>
	<span style="color: red">*</span>
	<input type="text" name="poster" id="poster" placeholder="movie poster">
	</p>
	<p>
		<div>
			 <span style="color: red">*</span>
			<label for="form-genre">Genre</label>
			<select name="genre[]" id="genre" multiple="multiple">
				<?php foreach($genres as $genre): ?>
					<option value="<?= $genre['id'] ?>"><?= $genre['genre'] ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</p>
	<p>
		<div>
		 <span style="color: red">*</span>
			<label for="">Restriction</label>
			<select name="restrictions" id="restriction">
				<option value="choice restrictions">choice restriction</option>
				<option value="12">12</option>
				<option value="14">14</option>
				<option value="16">16</option>
				<option value="18">18</option>
			</select>
		</div>
	</p>
	<p>
		<input type="submit" value="add">
	</p>
</form>
