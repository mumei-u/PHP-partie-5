<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 9;
include '../header.php';
// tableau associatif avec les départements des Hauts de France et en valeur leur nom
$counties = [
  '02' => 'Aisne',
  '59' => 'Nord',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'somme'
];
foreach ($counties as $county) {
?>
<p><?= $county ?></p>
<?php
}
?>
<?php include '../footer.php'; ?>
