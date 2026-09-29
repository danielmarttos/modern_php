
<?php

//Defina as variaveis!
//não quer definir nada em especfico para a pagina em questão? use apenas ''

$page_title = 'Home.';
$page_favicon = 'imgs/earth.ico';

include('inc/head.inc.php');

?>

<body>

    <header>
        <h1>Welcome to the MDCompany!</h1>
        <?php include('inc/nav.inc.php'); ?>
    </header>

    <main>
        <article>
            <h2>Test.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, quas voluptate quibusdam nisi facere repudiandae sequi non saepe in quidem? Soluta possimus unde eos vel odit ad optio, culpa minus!</p>
            <img src="imgs/anonicon.jpg" alt="anon icon">
        </article>
        
        <article>
            <h2>Test.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, quas voluptate quibusdam nisi facere repudiandae sequi non saepe in quidem? Soluta possimus unde eos vel odit ad optio, culpa minus!</p>
            <img src="imgs/anonicon.jpg" alt="anon icon">
        </article>

        <article>
            <h2>Test.</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, quas voluptate quibusdam nisi facere repudiandae sequi non saepe in quidem? Soluta possimus unde eos vel odit ad optio, culpa minus!</p>
            <img src="imgs/anonicon.jpg" alt="anon icon">
        </article>

    </main>

    <?php include("inc/footer.inc.php"); ?>