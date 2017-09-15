<?php
$billet = $bdd->query('SELECT * FROM billets');
?>
<section>
	<?php 
	while($donnees = $billet -> fetch())
	{
	// $com = $bdd->query('SELECT COUNT(*) AS nb_com FROM commentaires WHERE id_billet =\'' . $donnees['id'] . '\' ')->fetch();
	?>
		<article>
			<h3><?php echo $donnees['titre']; ?></h3>
			<p><?php echo $donnees['contenu']; ?></p>
			<div>
				<p>Le <?php echo $donnees['date_creation']; ?></p>
				<p><a href="">Commentaires<!-- (<?php // echo $com['nb_com'] ?>) --></a></p>
			</div>
		</article>
	<?php
	}
	// $com->closeCursor();
	$billet->closeCursor();
	?>
</section>
