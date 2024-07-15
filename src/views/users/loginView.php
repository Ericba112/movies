<?php get_header('Se connecter', 'login') ?>

etienne@mail.com
	mdp

<form action="" method="post">
	<div class="form-floating">
		<?php $error = checkField('login', 'Votre email est vide.'); ?>
		<input type="email" class="form-control<?= $error['class']; ?>" id="email" placeholder="Adresse email" name="login" value="<?= valueField('login'); ?>">
		<label for="email">Adresse email</label>
		<?= $error['message']; ?>
	</div>
	<div class="form-floating">
		<?php $error = checkField('password', 'Votre mot de passe est vide.'); ?>
		<input type="password" class="form-control<?= $error['class']; ?>" id="password" placeholder="Mot de passe" name="password">
		<label for="password">Mot de passe</label>
		<?= $error['message']; ?>
	</div>
	<div class="form-floating username-login">
		<input type="username" class="form-control" id="username" placeholder="Utilisateur" name="username">
		<label for="username">Utilisateur</label>
	</div>
	<button class="w-100 btn btn-lg btn-primary" type="submit">Se connecter</button>
</form>

<?php get_footer('login') ?>
