<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://meyerweb.com/eric/tools/css/reset/reset.css">
    <title>Document</title>
</head>

<body>
    <main>
        <header>
            <img src="./imgs/unibra_logo.png" alt="logotipo da unibra">
            <div class="header-content">
                <h6>Nome</h6>
                <p>Bruno Sued Cavalcanti Machado</p>
            </div>
            <div class="header-content">
                <h6>Motivação</h6>
                <p>Aprimorar meus conhecimentos como desenvolvedor.</p>
            </div>
        </header>

        <div class="main-content">
            <h6>Loops</h6>
            <section>
                <div class="card">
                    <header>FOR</header>
                    <ul class="card-body vertical">
                        <?php
                        for ($x = 1; $x <= 10; $x++) {
                            $lineValue = sprintf("%02d", $x);
                            if ($x == 10) {
                                echo "<li class=card-body-item><p>Linha</p><p>-</p></li>";
                            } else {
                                echo "<li class=card-body-item><p>Linha</p><p>$lineValue</p></li>";
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="card">
                    <header>FOREACH</header>
                    <ul class="card-body vertical">
                        <?php
                        $itens = array_fill(0, 10, "_");
                        foreach ($itens as $idx => $value) {
                            $lineValue = sprintf("%02d", $idx + 1);
                            if ($idx == 4) {
                                echo "<li class=card-body-item><p>Linha</p><p>-</p></li>";
                            } else {
                                echo "<li class=card-body-item><p>Linha</p><p>$lineValue</p></li>";
                            }
                        }
                        ?>
                    </ul>
                </div>
                <div class="card">
                    <header>WHILE </header>
                    <ul class="card-body vertical">
                        <?php
                        $count = 1;
                        while ($count <= 10) {
                            $lineValue = sprintf("%02d", $count);
                            if ($count == 2) {
                                echo "<li class=card-body-item><p>Linha</p><p>-</p></li>";
                            } else {
                                echo "<li class=card-body-item><p>Linha</p><p>$lineValue</p></li>";
                            }
                            $count++;
                        }
                        ?>
                    </ul>
                </div>
            </section>
            <section>
                <div class="card">
                    <header>Imagens</header>
                    <div class="card-body">
                        <div class="img-container">
                            <img src="./imgs/lol.jpeg" alt="logotipo do lol">
                        </div>
                        <div class="img-container">
                            <img src="./imgs/vavaz.webp" alt="logotipo do valorant">
                        </div>
                        <div class="img-container">
                            <img src="./imgs/sport.jpg" alt="Escudo do Sport">
                        </div>
                        <div class="img-container">
                            <img src="./imgs/yuki.jpg" alt="Imagem de Anime">
                        </div>
                        <div class="img-container">
                            <img src="./imgs/rock.jpeg" alt="Imagem de Rock">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

</body>

</html>