<?php

session_start();

if (!isset($_SESSION["shop"])) {
    $_SESSION["shop"] = [];
};

if(!isset($_GET['qtd'])){
    $qtd = 1;
}else{
    $qtd = $_GET['qtd'];
};

$prod = array(
    ['nome' => 'Caderno Tilibra - Hello Kitty','img' => 'Products/hellokitty.jpg', 'qtd' => $qtd, 'price' => 119.99],
);

if (isset($_GET['add'])) {

    foreach ($prod as $produto){
        $_SESSION['shop'][] = $produto;
    };
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prod1</title>
    <link rel="stylesheet" href="prod.css">
    <script src="script.js"></script>
</head>
<body>

<header>
        <img src="logo" alt="">

        <div class="pesq">
            <img src="imgs/search.png" alt="" class="search">
            <input type="text" class="inpPesq">
        </div>
        
    <div class="functions">
        <a href="#"><img src="imgs/account_circle.png" alt="" class="profile"></a>
        <a href="#"><img src="imgs/Shopping bag.png" alt="" class="shop"></a>
        <a href="#"><img src="imgs/Menu.png" alt="" class="menu"></a>
    </div>
</header>

<main>
    <div class="product">

        <div class="background">
            <div class="imgprod">
                <img class="prodimg" src="<?php echo $prod[0]['img']; ?>" alt="">
            </div>
        </div>

        <div class="info">

            <div class="prices">
                <p class="name"><?php echo $prod[0]['nome']; ?></p>
                <p class="oldprice">R$ <?php echo $prod[0]['price'] + 50; ?></p>
                <p class="pix">No PIX:</p>
                <p class="price">R$ <?php echo $prod[0]['price']; ?></p>
                <p class="bol">Pode ser pago em até 12x sem juros no boleto</p>
            </div>

<form action="" method="get">

            <div class="shop">                

                    <div class="qtd">

                        <div class="qtdItem"><b>Quantidade:</b></div>

                        <div class="inputs">
                            <button type="button" class="btDw"><img src="imgs/Arrow left.png" alt="" class="arrow" id="btMinus" onclick="Mnn()"></button>
                            <input class="inpQtd" type="text" name="qtd" value="1" id="inpQtd" >
                            <button type="button" class="btUp"><img src="imgs/Arrow right.png" alt="" class="arrow" id="btMore" onclick="Add()"></button>
                        </div>

                    </div>

                    <div class="buy">
                        <input type="submit" value="Adicionar ao Carrinho" name="add" class="car">
                    </div>
                    
            </div>
        
</form>

        </div>

    </div>
</main>

</body>
</html>