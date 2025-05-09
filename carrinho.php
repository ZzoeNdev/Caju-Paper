<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho | Caju Paper</title>
    <link rel="stylesheet" href="carrinhoo.css">
</head>
<body>
    
<header>

        <div class="car">
            <img src="imgs/Shopping bag.png" alt="">
            <p>Carrinho</p>
        </div>
        
    <div class="functions">
        <a href="index.html"><img src="imgs/Home.png" alt=""></a>
        <a href="#"><img src="imgs/account_circle.png" alt="" class="profile"></a>
        <a href="#"><img src="imgs/Menu.png" alt="" class="menu"></a>
    </div>

</header>

<main>
    <div class="general">

    <div class="header-prods">
    <p class="prods">PRODUTOS</p>

    <form action="" method="POST">
        <button class="clear" name="clear"><img class="del" src="imgs/delete.svg" alt=""></button>
    </form>
    </div>

    <div class="division"></div>

    <?php

        session_start();

        $total = 0;
        
        if(!isset($_SESSION['shop'])){
            $_SESSION['shop'] = [];
        };
        
        foreach ($_SESSION['shop'] as $prod){
            $total += $prod['price']*$prod['qtd'];

    ?>

        <div class="product">

        <div class="infoGeral">

            <div class="imgprod">
                <img src="<?php echo $prod['img'] ?>" alt="" class="img">
            </div>

            <div class="info">
                <p class="name"><?php echo $prod['nome'] ?></p>
                <p class="pix">No PIX:</p>
                <p class="price">R$ <?php echo $prod['price'] ?></p>
                <div class="qtd"><p>Quantidade: <?php echo $prod['qtd'] ?></p></div>
            </div>

        </div>

            <div class="subtotal">
                <p class="subt">Subtotal:</p>
                <p class="value">R$ <?php echo $prod['price']*$prod['qtd'] ?></p>
            </div>

        </div>

    <?php

        };
        
        $p = $total*0.9;

        $sub = $total*0.01;
        $frete = number_format($sub, 2, ',', '.');

        $total = number_format($total, 2, ',', '.');

        if(!$total){
            $total = '00,00';
        }else{}

    ?>

    </div>


    <div class="container-general">
        <p class="values">VALORES</p>
        <div class="division"></div>
        <p class="avalue">Valor total: R$ <?php echo $total ?></p>
        <div class="division"></div>
        <p class="frete">Frete: GRÁTIS</p>
        <div class="division"></div>

        <div class="fpix">
            <p>Valor no PIX:</p>
        <p class="fvalue">R$ <?php echo $p ?></p>
        </div>

        <button class="buy">COMPRAR</button>
    </div>
</main>

<footer></footer>

</body>
</html>

<?php

    if (isset($_POST['clear'])){
        $_SESSION['shop'] = [];

?>

        <meta http-equiv="refresh" content="0.1">

<?php

    }
