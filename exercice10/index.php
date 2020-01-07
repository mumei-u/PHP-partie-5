<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 10;
include '../header.php';
// tableau associatif avec les départements des Hauts de France et en valeur leur nom
$counties = [
  'Aisne' => '02',
  'Nord' => '59',
  'Oise' => '60',
  'Pas-de-Calais' => '62',
  'somme' => '80'
];
foreach ($counties as $countyNum => $county){
  $result = 'Le département '.$countyNum.' a le numéro '.$county;
?>
<!-- ici on splsit le php -->
<p><?= $result ?></p>
<?php
}
?>
<?php include '../footer.php'; ?>
