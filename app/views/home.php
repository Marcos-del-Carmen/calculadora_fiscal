<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../public/css/estilos.css">
</head>
<body>
    <div class="cont_home">
        <div class="cont_title">
            <h3 class="title">Bienvenidos</h3>
        </div>
        <div class="cont_icons">
            <i class="fa-solid fa-money-bill-trend-up"></i>
            <i class="fa-solid fa-chart-column"></i>
            <i class="fa-solid fa-chart-line"></i>
            <i class="fa-regular fa-building"></i>
            <i class="fa-solid fa-file-excel"></i>
        </div>
    </div>

    <div class="cont_menu">
        <div class="logo">
            <i class="fa-solid fa-calculator"></i>
            <h2>Calculadora fiscal</h2>
        </div>    
        <div class="cont_btns">

            <a href="#" class="btn">
                <button>
                    <i class="fa-regular fa-user"></i>
                </button>
            </a>
            <a href="#" class="btn">
                <button>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </a>
        </div>
    </div>

    <div class="container__slider">

        <div class="container">
            <input type="radio" name="slider" id="item-1" checked>
            <input type="radio" name="slider" id="item-2">
            <input type="radio" name="slider" id="item-3">

            <div class="cards">
                <label class="card" for="item-1" id="selector-1">
                    <img src="../../public/img/img.png" alt="error de imagen">
                    <a href="../views/calculadoraIVA.php">IVA</a>
                </label>
                <label class="card" for="item-2" id="selector-2">
                    <img src="../../public/img/img.png" alt="error de imagen">
                    <a href="../views/calculadoraISR.php">ISR</a>
                </label>
                <label class="card" for="item-3" id="selector-3">
                    <img src="../../public/img/img.png" alt="error de imagen">
                    <a href="../views/contribuyentes.php">CONTRIBUYENTES</a>
                </label>

            </div>
        </div>

    </div>
    
    <h2 class="title-h2">CONTRIBUYENTES RESIENTES</h2>
    <div class="cont_cards">
        <!-- ESTA ES UNA TARJETA PARA LOS CONTRIBUYENTES -->
        
        <div class="card_c">
            <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
            </div>
            <div class="info">
                <p><b>Nombre completo</b></p>
                <p>Panfilo Perez García</p>
                <p><b>CURP</b></p>
                <p>PEGA9812983H</p>
                <p><b>RFC</b></p>
                <p>GAPE983H</p>
                <div class="cont_btns_card_c">
                    <button class="btn_primario btn_card_c">IVA</button>
                    <button class="btn_primario btn_card_c">ISR</button>
                </div>
            </div>
        </div>
        <div class="card_c">
            <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
            </div>
            <div class="info">
                <p><b>Nombre completo</b></p>
                <p>Panfilo Perez García</p>
                <p><b>CURP</b></p>
                <p>PEGA9812983H</p>
                <p><b>RFC</b></p>
                <p>GAPE983H</p>
                <div class="cont_btns_card_c">
                    <button class="btn_primario btn_card_c">IVA</button>
                    <button class="btn_primario btn_card_c">ISR</button>
                </div>
            </div>
        </div>
        <div class="card_c">
            <div class="icon">
                <i class="fa-solid fa-user-tie"></i>
            </div>
            <div class="info">
                <p><b>Nombre completo</b></p>
                <p>Panfilo Perez García</p>
                <p><b>CURP</b></p>
                <p>PEGA9812983H</p>
                <p><b>RFC</b></p>
                <p>GAPE983H</p>
                <div class="cont_btns_card_c">
                    <button class="btn_primario btn_card_c">IVA</button>
                    <button class="btn_primario btn_card_c">ISR</button>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>