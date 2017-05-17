<?php include('header.php');?>
<section>
<h2>Blog</h2>
<?php
$blog = array_map('str_getcsv', file('url'));
array_walk($blog, function(&$a) use ($blog) {$a = array_combine($blog[0], $a);});
array_shift($blog);
?>
<h4>Gato de Cheshire</h4>
<h5>Un gato ficticio de la cultura popular inglesa, conocido principalmente a través de la conocida obra de Lewis Carroll, Las aventuras de Alicia en el país de las maravillas </h5>
<hr>
<figure><img src="images/alicia.gif"></figure>
<hr>
<p>En el cuento de Carroll, el Gato de Cheshire tiene la capacidad de aparecer y desaparecer a voluntad, entreteniendo a Alicia mediante conversaciones paradójicas de tintes filosóficos. Sin embargo, aparece para animar a Alicia cuando ésta se materializa en el campo de croquet de la Reina de Corazones y cuando es condenada a muerte y desconcierta a todos haciendo desaparecer su cuerpo pero haciendo visible su cabeza, mientras provoca una masiva discusión entre el Rey, la Reina y el verdugo acerca de si se puede decapitar a una criatura que no tiene, de hecho, cuerpo.
Otra de sus características más singulares es que el Gato de Cheshire puede desaparecer gradualmente hasta que no queda nada más que su amplia sonrisa, haciendo notar a Alicia que muchas veces habrá podido ver a un gato sin sonrisa, pero nunca una sonrisa sin gato.</p>

<hr>
</section>
<?php include('footer.php');?>
