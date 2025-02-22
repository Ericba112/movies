<?php get_header('Liste des films', 'admin'); ?>

<div class="row mb-5 align-items-center">
	<h1 class="col-9">Liste des films</h1>
	<div class="col-3 text-end">
		<a href="<?= $router->generate('addMovie'); ?>" class="btn btn-success">Ajouter un film</a>
	</div>
</div>

<?php if (!empty($movies)) { ?>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Titre</th>
				<th>Date de sortie</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($movies as $movie) { ?>
				<tr class="align-middle">
					<td><?= $movie->title; ?></td>
					<td><?= dateFormat($movie->released); ?></td>
					<td class="text-end">
						<a href="<?= $router->generate('updateMovie', ['id' => $movie->id]); ?>" title="Modifier" class="btn btn-warning p-2 me-2">
							<svg class="d-block" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
								<path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
							</svg>
						</a>
						<a href="<?= $router->generate('deleteMovie', ['id' => $movie->id]); ?>" title="Supprimer" class="btn btn-danger p-2">
							<svg class="d-block" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
								<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
							</svg>
						</a>
					</td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
<?php } else { ?>
	<p class="text-center">Aucun film de renseigné.</p>
<?php } ?>

<?php get_footer('admin'); ?>
