<html>
<head>
<title>My Movie</title>
</head>
<body>

<?php echo validation_errors(); ?>

<?php echo form_open('movie'); ?>

<h5>Movie</h5>
<input type="text" name="movie" value="" size="50" />

<h5>Genre</h5>
<input type="text" name="genre" value="" size="50" />


<h5>Actors</h5>
<input type="text" name="actors" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>