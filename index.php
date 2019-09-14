<?php include("includes/header.php"); ?>

<?php $page = 'index'; ?>

  <div class="starter-template">
    <h1>Infomedia Projektni Zadatak</h1>
    <p class="lead">Tablica množenja</p>


  <table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <?php
                for ($i=1; $i < 11; $i++) {
                     echo '  <th scope="col">'.$i.'</th>';
                }
         ?>

      </tr>
    </thead>
    <tbody>
<?php

for ($i=1; $i <=10 ; $i++) {
echo "<tr><th scope='row'>" . $i . "</th>";
for ($j=1; $j <=10 ; $j++) {
  echo "<td>";

  echo $i . " x " . $j;
  echo "</td>";

}
echo "</tr>";
}
?>

    </tbody>
  </table>



  </div>

<?php include("includes/footer.php"); ?>
