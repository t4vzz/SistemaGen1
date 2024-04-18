<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de Vendas</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./view/gui.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <!-- CSS media query -->
    <link rel="stylesheet" media="(max-width: 650px)" href="./view/mediasqueries/mobile.css" />

</head>
<body>
    <header>
        <div id="btnDrawer">
            <button><i class='bx bxs-grid-alt'></i></button>
        </div>
        <h1>Sistema de Gestão de Vendas</h1>
    </header>
    <nav id="Drawer">
        <button class="btnNav" data-target="registro-vendas">
            <p>Registo de Vendas</p>
            <i class='bx bx-cart-add'></i>
        </button>
        <button class="btnNav" data-target="controle-estoque">
            <p>Controle de Estoque</p>
            <i class='bx bxs-store-alt' ></i>
        </button>
        <button class="btnNav" data-target="gerenciamento-clientes">
            <p>Gerenciamento de Clientes</p>
            <i class='bx bxs-id-card'></i>
        </button>
        <button class="btnNav" data-target="analise-desempenho">
            <p>Analise de Desempenho</p>
            <i class='bx bx-bar-chart-square'></i>
        </button>
    </nav>
    <div class="container">
        <section id="registro-vendas" class="tela">
            <div>
                <h2>Registro de Vendas</h2>
                <select id="produto"></select>
                <input type="number" id="quantidade" placeholder="Quantidade">
                <button id="btnVendas">Registrar Venda</button>
            </div>
        </section>
        <section id="controle-estoque" class="tela">
            <h2>Controle de Estoque</h2>
            <table>
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                    </tr>
                </thead>
                <tbody id="estoque-list">
                </tbody>
            </table>
        </section>
        <section id="gerenciamento-clientes" class="tela">
            <div>
                <h2>Gerenciamento de Clientes</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Idade</th>
                        </tr>
                    </thead>
                    <tbody id="clientes-list">
                    
                    </tbody>
                </table>
            </div>
        </section>
        <section id="analise-desempenho" class="tela">
            <div>
                <h2>Análise de Desempenho de Vendas</h2>
                <p>Total de Vendas: <span id="total-vendas">0</span></p>
                <p>Produto mais Vendido: <span id="produto-mais-vendido">Nenhum</span></p>
            </div>
        </section>
    </div>
    <script type="module" src="./controller/guiControlles.js"></script>
    <script type="module" src="./controller/telasController.js" async></script>
</body>
</html>