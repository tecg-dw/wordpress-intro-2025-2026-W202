<?php
  $type = get_field('stage_type');
?>

<?php if ($type === 'big'): ?>
  <?php include('parts/stage-big.php'); ?>
<?php else: ?>
  <?php include('parts/stage-small.php'); ?>
<?php endif; ?>

