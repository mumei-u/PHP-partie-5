<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 8;
include '../header.php';
// tableau simple avec les mois de l'année
$months = [
  'janvier',
  'février',
  'mars',
  'avril',
  'mai',
  'juin',
  'juillet',
  'aout',
  'septembre',
  'octobre',
  'novembre',
  'décembre'
];
  foreach ($months as $month) {
?>
<p><?= $month ?></p>
<?php
  }
?>
<?php include '../footer.php'; ?>
