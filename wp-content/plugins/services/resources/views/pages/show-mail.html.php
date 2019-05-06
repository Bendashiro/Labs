<div class="contact-section spad fix">
	<h1><?= get_admin_page_title(); ?>: </h1>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="postbox">
					<div class="inside">
						<div>
							<strong><?= 'Nom: ' . $mail->names; ?></strong>
						</div>
						<div>
							<strong>E-mail: </strong> <?= $mail->email; ?>
						</div>
						<div>
							<strong>Sujet: </strong> <?= $mail->subjects; ?>
						</div>
						<div>
							<strong>Message: </strong><br><?= $mail->content; ?>
						</div>
					</div>
				</div>
				<a href="<?php menu_page_url('mail-client'); ?>" class="button button-primary">retour</a>
				<form action="<?php get_site_url(); ?>?action=mail-delete" method="post">
				<input type="hidden" name="id" value="<?= $mail->id ?>">
				<button type="submit" class="button">supprimer</button>
				</form>
			</div>
		</div>
	</div>
</div>