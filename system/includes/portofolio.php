<?php $projects = $db->ObjectBuilder()->get('projects') ?>
<?php $num = 1; $breaker = 2;  ?>
<?php foreach ($projects as $project): ?>

	  <?php if ($num == 1) echo "<div class='row'>"; ?>

			<div class="6u 12u(narrower)">
				<section>
					<a href="projeto?id=<?=$project->id?>" class="image featured">
					<?php if(file_exists('images/projects/'.$project->mainimage)): ?>
						<img src="images/projects/<?= $project->mainimage ?>" alt="<?= $project->title ?>"/></a>
					<?php else: ?>
						<img src="images/projects/noimg.png" alt="<?= $project->title ?>"/></a>
					<?php endif; ?>
					<header>
						<h3 style="text-align: center;"><?= $project->title ?></h3>
					</header>
					<p><?= $project->desc ?></p>
				</section>
			</div>
		<?php $num++; ?>
        <?php if ($num > $breaker) { echo '</div>'; $num = 1; }  ?>
	<?php endforeach; ?>