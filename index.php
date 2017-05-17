<?php include('header.php');?>
<section>
<h2>Ranking gatitos mas populares</h2>
<hr>
<p>Nuestro favorito <a href="post.php">aquí</a></p>

<?php
$blog = array_map('str_getcsv', file('data/gatos-famosos.csv'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
  array_shift($blog);

  for($a = 0; $a < $total = count($blog); $a++){?>
    <article class="row">
      <hr>
      <div class="col-xs-5 col-sm-3 col-md-2"><img src="<?php echo $blog[$a]['foto'];?>" class="img-responsive"></div>
      <div class="col-xs-7 col-sm-9 col-md-10">
        <h3><?php echo($a+1);?>. <?php echo $blog[$a]['nombre'];?></h3>
        <p><?php echo $blog[$a]['descripcion'];?></p>
      </div>
    </article>
  <?php };?>
<hr>
</section>
<?php include('footer.php');?>
