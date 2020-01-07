<?php
/* variable pour remplacer automatiquement la valeur 'ex=1,2,3...' dans header.php */
$exerciseNb = 6;
include '../header.php';
// tableau associatif avec les départements des Hauts de France et en valeur leur nom
$department = [
  '02' => 'Aisne',
  '59' => 'Nord',
  '60' => 'Oise',
  '62' => 'Pas-de-Calais',
  '80' => 'somme'
];
?>
<p><?= $department['59'] ?></p>
<?php include '../footer.php'; ?>
