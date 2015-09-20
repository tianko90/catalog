<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registration</title>

	<link rel="stylesheet" href="/catalog/assets/css/style.css">
</head>
<body>

<?php if(!empty($user)): ?>
	<div>Здравей, <?= $user['username'] ?>
		<a href="
		/catalog/user/logout">(изход)</a>
	</div>
<?php endif; ?>

<?= $content ?>

<?php foreach($js as $file): ?>
	<script src="/catalog/assets/js/<?= $file ?>.js"></script>
<?php endforeach; ?>

</body>
</html>