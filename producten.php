<!doctype html>
<html lang="nl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Level Up Hardware</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <?php require __DIR__ . '/includes/header.php'; ?>

    <main>
        <div class="hero">
            <h1 class="title">Producten</h1>
            <h3 class="subtitle">Voor de Serieuze Gamer</h3>
        </div>
        <div class="main-content">
            <section class="main-section">
                <div class="main-product">
                    <img src="/images/laptop.webp" alt="foto van een laptop" class="product-img">
                    <h2 class="product-title">Gaming Laptop XI</h2>
                    <p class="product-price"><data value="€1499">€1499</data></p>
                    <p class="product-txt">Krachtige laptop met de nieuwste GPLJ vaar ultieme
                        gaming prestaties.</p>
                </div>
                <div class="main-product">
                    <img src="/images/pc.png" alt="foto van een pc kast" class="product-img">
                    <h2 class="product-title">Custom Gaming PC</h2>
                    <p class="product-price"><data value="€1999">€1999</data></p>
                    <p class="product-txt">Op maat gemaakte desktop met topkwaliteit
                        componenten voor maximale snelheid.</p>
                </div>
                <div class="main-product">
                    <img src="/images/headset.webp" alt="foto van een headset" class="product-img">
                    <h2 class="product-title">Pro Gaming Headset</h2>
                    <p class="product-price"><data value="€199">€199</data></p>
                    <p class="product-txt">Comfortabele headset met surround sound voor een
                        meeslepende game-ervaring.</p>
                </div>
            </section>
        </div>
    </main>

    <?php require __DIR__ . '/includes/footer.php'; ?>
</body>

</html>