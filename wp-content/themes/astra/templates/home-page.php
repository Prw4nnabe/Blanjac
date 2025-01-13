<?php

/**
 * Template name: Front Page
 */
?>
<?php get_header(); ?>

<main class="front-page">
    <section class="hero-section">
        <div class="logo">
            <img class="logo" src="https://blanjac.pl/wp-content/uploads/2025/01/blanjaclogo_inverted.png">
        </div>
        <div class="brand">
            <h1 data-text="Blanjac">
                Blanjac
            </h1>
        </div>
        <div class="slogan">
            <p>
                Twój brakujący element w firmie
            </p>
        </div>
    </section>
    <section class="about-section">
        <h2>Kim jesteśmy?</h2>
        <div class="description">
            <p>Każdy sukces to układanka, a my jesteśmy tym elementem, którego szukasz, by ją dopełnić. W Blanjac wierzymy, że każda firma ma inne potrzeby i wyzwania, dlatego dobieramy strategie indywidualnie, dopasowując je do Twoich celów i specyfiki branży. Nasze podejście oparte na growth marketingu to połączenie analityki, kreatywności i niestandardowych rozwiązań, które wykraczają poza schematy tradycyjnego marketingu internetowego. Pomagamy firmom rosnąć szybciej, efektywniej i mądrzej.</p>
        </div>
    </section>

    <section class="offer-section">
        <div class="overflow-hidden">
            <h2>SEO</h2>
        </div>
        <div class="overflow-hidden">
            <h2>PPC</h2>
        </div>
        <div class="overflow-hidden">
            <h2>Mailing</h2>
        </div>
        <div class="overflow-hidden">
            <h2>Automatyzacje</h2>
        </div>
        <div class="overflow-hidden">
            <h2>I nie tylko...</h2>
        </div>

    </section>

    <section class="reasons-section space">
        <h2>Dlaczego my?</h2>
    </section>
    <section class="contact-section">
        <h3>Masz pytania?</h3>
        <div class="contact-form">
            <?php echo do_shortcode('[wpforms id="12"]'); ?>
        </div>


</main>
<?php get_footer(); ?>