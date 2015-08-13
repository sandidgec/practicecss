<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once(dirname(__DIR__) . "/practicecss/php/head-utils.php"); ?>
	</head>
	<body class="site">
		<div class="site-content">
			<header>
				<?php require_once(dirname(__DIR__) . "/practicecss/php/header.php"); ?>
			</header>

			<div class="row">
				<section class="col-md-2 right-divider">
					<?php require_once(dirname(__DIR__) . "/practicecss/php/side-panel.php") ?>
				</section>

				<main class="col-md-8">

					<h1>Bootcamp Sample Template Page</h1>

					<form class="form-horizontal col-sm-6">
						<?php require_once(dirname(__DIR__) . "/practicecss/php/form.php"); ?>
					</form>

				</main>
			</div>
		</div>

		<footer>
			<?php require_once(dirname(__DIR__) . "/practicecss/php/footer.php"); ?>
		</footer>
	</body>
</html>
