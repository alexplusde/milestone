<?php
$milestones = \Alexplusde\Milestone\Entry::query()->where('status', 1)->find();
?>
<section class="modul modul-milestones py-5">
	<div class="container">
		<h2><?= $this->getVar('title'); ?></h2>
		<?php
                if($this->getVar('subtitle')) { ?>
		<h3><?= $this->getVar('subtitle'); ?>
		</h3>
		<?php } ?>
		<?= $this->getVar('text'); ?>
		<?php
        foreach($milestones as $milestone) {
            ?>
		<div class="row mb-5">
			<div class="col-6 col-md-3">
				<img src="/media/milestone/<?= $milestone->getImage(); ?>"
					alt="<?= $milestone->getTitle(); ?>">
			</div>
			<div class="col-6 col-md-3 text-center">
				<?= rex_formatter::date($milestone->getDate(), 'YYYY'); ?>
			</div>
			<div class="col-6 col-md-6 ps-5 description">
				<?= $milestone->getTitle(); ?>
			</div>
		</div>
		<?php
        }
?>
	</div>
</section>
