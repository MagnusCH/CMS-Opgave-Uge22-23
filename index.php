<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css"> </head>

<body>
    <div class="container">
        <!-- Header -->
        <header>
            <div class="row">
                <div class="twelev columns banner">
                    <h1>Nap all day <br> Sleep all night <br> Party never.</h1> </div>
            </div>
        </header>
        <!-- Header end -->
        <div class="clear"></div>
        <div class="row">
            <!-- Snail icon -->
            <div class="icon">
                <div class="one columns">
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"><img src="img/Animals-Snail-icon-32.png" alt="Snail logo"></a>
                </div>
            </div>
            <!-- Navigation -->
            <div class="eleven columns">
                <nav>
                    <ul>
                        <li><a href="#">Forside</a></li>
                        <li><a href="#">EPIC</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">LEGENDARY </a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <hr>
        <div class="row">
            <!-- Main -->
            <div class="eight columns">
                <main>
                    <!-- Article start -->
                    <article>
                        <!-- Form -->
                        <form action="insert.php" method="get">
                            <!-- FormGroup-class /heading -->
                            <div class="formGroup">
                                <!-- Label-->
                                <label for="heading"> Artiklens overskrift her: </label>
                                <!-- Lable end -->
                                <!-- Input -->
                                <input type="text" id="heading" name="heading" placeholder="Overskrift her...">
                                <!-- Imput end -->
                            </div>
                            <!-- FormGroup-class /heading end -->
                            <!-- -->
                            <!-- FormGroup-class /imgSrc -->
                            <div class="formGroup">
                                <!-- Label -->
                                <label for="imgSrc">Billednavn:</label>
                                <!-- Lable end -->
                                <!-- Input -->
                                <input type="text" id="imgSrc" name="imgSrc" placeholder="Sti til billede uden .jpg">
                                <!-- Imput end -->
                            </div>
                            <!-- FormGroup-class /imgSrc end -->
                            <!-- -->
                            <!-- FormGroup-class /imgAlt -->
                            <div class="formGroup">
                                <!-- Label -->
                                <label for="imgAlt">Alt tekst til billede:</label>
                                <!-- Lable end -->
                                <!-- Input -->
                                <input type="text" id="imgAlt" name="imgAlt" placeholder="Alt tekst til billede">
                                <!-- Imput end -->
                            </div>
                            <!-- FormGroup-class /imgAlt end -->
                            <!-- -->
                            <!-- FormGroup-class /articleText -->
                            <div class="formGroup">
                                <!-- Label -->
                                <label for="articleText">Artiklens tekst her</label>
                                <!-- Lable end -->
                                <!-- Input -->
                                <input type="text" id="articleText" name="articleText" placeholder="Tekst her...">
                                <!-- Imput end -->
                            </div>
                            <!-- FormGroup-class /imgSrc end -->
                            <!-- -->
                            <!-- Indsæt -->
                            <input class="button-primary" type="submit" value="insæt">
                            <!-- Indsæt end -->
                        </form>
                        <!-- Form end -->
                        <hr> </article>
                    <!-- Article end -->
                    <!-- Article start -->
                    <article>
                        <?php
                        include "fetchDb.php";
                        ?>
                            <!-- <img src="img/sloth1Edit.jpg" alt="DollaSloth">
                        <h2>Dolla dolla bill y'all.</h2>
                        <!-- Dato 
                        
                           <p class="date">Dolla dolla bill y'all</p>
                        
                        <!-- Dato end 
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit ratione placeat, natus delectus unde amet, inventore temporibus tempora maxime autem accusamus aperiam ducimus, reprehenderit, omnis culpa quod harum reiciendis dolore!</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos aliquam rerum impedit temporibus officia consectetur, nisi, nihil officiis perferendis veritatis dolorum vel eaque, praesentium qui dolores provident alias sapiente eveniet!</p>
                        <h3>Lorem Ipsum</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit tenetur nulla beatae, possimus in repellat placeat doloremque ipsum rem sit! Quibusdam at iste pariatur voluptas eligendi excepturi necessitatibus nisi quas.</p> --></article>
                    <hr> <img src="img/sloth5Edit.jpg" alt="derpSloth">
                    <h2>Idk hvad det her er? &uArr;</h2>
                    <!-- Dato -->
                    <p class="date">Dolla dolla bill y'all</p>
                    <!-- Dato end -->
                </main>
                <!-- Main end -->
                <!-- Footer -->
                <footer> Footer: info info info info info info </footer>
                <hr> </div>
            <!-- Aside -->
            <div class="four columns">
                <aside>
                    <div class="box">
                        <div class="headBox">
                            <p>Log ind</p>
                        </div>
                        <div class="loginBox">
                            <label for="brugernavn">
                                <div class="textFrame">Brugernavn:</div>
                            </label>
                            <input type="text" id="brugernavn" name="brugernavn">
                            <label for="password">
                                <div class="textFrame">Password:</div>
                            </label>
                            <input type="password" id="password" name="password">
                            <button class="button-primary">Log ind</button>
                        </div>
                    </div>
                    <h3>EPIC LEGENDARY SLOTHS</h3>
                    <div class="box">
                        <div class="headBox">
                            <p>What is this?!?!</p>
                        </div>
                        <div class="infoBox">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates sunt fuga laborum consectetur fugit recusandae minima asperiores eveniet dolore impedit quod earum ea debitis inventore, quas corrupti, molestias ipsam similique?</p>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- Aside end -->
        </div>
    </div>
    <script>
        document.getElementById("demo").innerHTML = Date();
    </script>
</body>

</html>