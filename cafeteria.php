<?php
$produtosCafe = [
	[
    'nome' => "Café Cremoso",
    'descricao' => "Café cremoso irresistivelmente suave e que envolve seu paladar",
    'preco' => "5.00",
    'imagem' => "img/cafe-cremoso.jpg",
    'classificacao' => "5"
	],
	[
    'nome' => "Café com Leite",
    'descricao' => "A harmonia do café e do leite, uma experiência reconfortante",
    'preco' => "2.00",
    'imagem' => "img/cafe-com-leite.jpg",
    'classificacao' => "4"
	],
  [
    "nome" => "Cappuccino",
    "descricao" => "Café suave, leite cremoso e uma pitada de sabor adocicado",
    "preco" => "7.00",
    "imagem"=> "img/cappuccino.jpg",
    'classificacao' => "3"
  ],
  [
    "nome" => "Café Gelado",
    "descricao" => "Café gelado refrescante, adoçado e com notas sutis de baunilha ou caramelo.",
    "preco" => "3.00",
    "imagem"=> "img/cafe-gelado.jpg",
    'classificacao' => "2"
  ]
];
	
$produtosAlmoco = [
	[
    "nome" => "Bife",
    "descricao" => "Bife, arroz com feijão e uma deliciosa batata frita",
    "preco" => "27.90",
    "imagem" => "img/bife.jpg"
  ],
  [
    "nome" => "Filé de peixe",
    "descricao" => "Filé de peixe salmão assado, arroz, feijão verde e tomate.",
    "preco" => "24.99",
    "imagem" => "img/prato-peixe.jpg"
  ],
  [
    "nome" => "Frango",
    "descricao" => "Saboroso frango à milanesa com batatas fritas, salada de repolho e molho picante",
    "preco" => "23.00",
    "imagem" => "img/prato-frango.jpg"
  ],
  [
    "nome" => "Fettuccine",
    "descricao" => "Prato italiano autêntico da massa do fettuccine com peito de frango grelhado",
    "preco" => "22.50",
    "imagem" => "img/fettuccine.jpg"
  ]
];
?>

<div class="container-cafe-manha-produtos">
<?php foreach ($produtosCafe as $cafe): ?>
<div class="container-produto">
<div class="container-foto">
<img src="<?= $cafe['imagem'] ?>" class="img-fluid" width="150">
</div>


<p><?php echo $cafe['nome'] ?></p>
<p><?php echo  $cafe['descricao'] ?></p>
<p><?php echo "R$ " . $cafe['preco'] ?></p>

    <?php
         $xicara = $cafe["classificacao"];
            for ($i=0; $i < $xicara ; $i++) {
                echo "☕";
            } ?>
</div>




<?php endforeach;

?>
</div>



<div class="container-almoco-produtos">
<?php foreach ($produtosAlmoco as $almoco): ?>
<div class="container-produto">
<div class="container-foto">
<img src="<?= $almoco['imagem'] ?>" class="img-fluid" width="150">
</div>


<p><?php echo $almoco['nome'] ?></p>
<p><?php echo  $almoco['descricao'] ?></p>
<p><?php echo "R$ " . $almoco['preco'] ?></p>
</div>

<?php endforeach;

?>
</div>