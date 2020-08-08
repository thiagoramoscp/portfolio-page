<!-- PHP FORM HANDLING --> 

<?php

$emailSent = false;

if (isset($_POST["submit"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

    $name = $_POST["nome"];
    $mailFrom = $_POST["email"];
    $message = $_POST["mensagem"];

    $email = "contato@thiagoramos.net";
    $headers = "From: ".$mailFrom;
    $txt = "You have received a message from: ".$name."\n\n".$message;

    mail($email, "Formulário de contato de thiagoramos.net", $txt, $headers);
    $emailSent = true;
    
    //used to relocate after form submit
    //header("Location: index.php?emailSent");
}
?>

<!-- MAIN PAGE CONTENT --> 

<section class="welcome-section" id="welcome-section">
    <div class="bg-blur">
        <h1>Thiago Ramos</h1>
        <span>Desenvolvedor web</span>
        <div class="icons"></div>
    </div>
</section>

<section class="projects-section" id="projects">
    <h2>Aqui estão alguns dos meus projetos:</h2>
    <div class="project-tile">
        <div class="odd-column">
            <div class="project">
                <a href="https://codepen.io/thiagoramoscp/pen/zYGqWyZ" id="profile-link" target="_blank">
                    <img src="https://lh3.googleusercontent.com/pYUe0-CWaBItLG25qWppfTrO9ix72y8UHpEZ-oFcEru94xu9_cfEGDnK5QkkZ1Fjz2EgBQc6_U6pthSiwEjYqZEP_692JAXJ4ZfP3U50VrTnnsmht6go_vEafKmlmGr0uBOPDEAnag=w2400" alt="landing page"></img>
                    <div class="middle">
                        <a href="https://cdpn.io/thiagoramoscp/debug/zYGqWyZ/XxkVwjnYeXBM" target="_blank"><button class="project-buttons button1">Ver página</button></a>
                        <a href="https://codepen.io/thiagoramoscp/pen/zYGqWyZ" target="_blank"><button class="project-buttons button2">Ver código</button></a>
                    </div>
                </a>
            </div>
            <div class="project">
                <a href="#" target="_blank">
                    <img src="./assets/projects-photos/scatter-plot.png" alt="scatter plot graph"></img>
                    <div class="middle">
                        <a href="https://codepen.io/thiagoramoscp/full/LYpMaLe" target="_blank"><button class="project-buttons button1">Ver página</button></a>
                        <a href="https://codepen.io/thiagoramoscp/pen/LYpMaLe" target="_blank"><button class="project-buttons button2">Ver código</button></a>
                    </div>
                </a>
            </div>
            <div class="project">
                <a href="#" target="_blank">
                    <img src="./assets/projects-photos/formula-calculator.png" alt="formula calculator"></img>
                    <div class="middle">
                        <a href="https://codepen.io/thiagoramoscp/full/pojWbzN" target="_blank"><button class="project-buttons button1">Ver página</button></a>
                        <a href="https://codepen.io/thiagoramoscp/pen/pojWbzN" target="_blank"><button class="project-buttons button2">Ver código</button></a>
                    </div>
                </a>
            </div>
            <div class="project">
                <a href="https://codepen.io/thiagoramoscp/pen/oNXXoBa" target="_blank">
                    <img src="https://lh3.googleusercontent.com/FhbZbx6NF_Jzpwif4GeU6rs5C1S1WAgven7PfSAcN9VQ9MAm4hu0xzPfUTEb6u90zRhvJ3sZe_sBsEro4d0fV3ZzHGvlXvlVo8P8Kyh3p3MFCGFONuM7_PyFvBMVJLgwBDKCF-Fmrw=w2400" alt="survey form"></img>
                    <div class="middle">
                        <a href="https://cdpn.io/thiagoramoscp/debug/oNXXoBa/jVApobdvWpgr" target="_blank"><button class="project-buttons button1">Ver página</button></a>
                        <a href="https://codepen.io/thiagoramoscp/pen/oNXXoBa" target="_blank"><button class="project-buttons button2">Ver código</button></a>
                    </div>
                </a>
            </div>
            <div class="project">
                <a href="#" target="_blank">
                    <img src="./assets/projects-photos/heat-map.png" alt="heatmap"></img>
                    <div class="middle">
                        <a href="https://codepen.io/thiagoramoscp/full/MWaLVKW" target="_blank"><button class="project-buttons button1">Ver página</button></a>
                        <a href="https://codepen.io/thiagoramoscp/pen/MWaLVKW" target="_blank"><button class="project-buttons button2">Ver código</button></a>
                    </div>
                </a>
            </div>
            <div class="project">
                <a href="#" target="_blank">
                    <img src="./assets/projects-photos/random-quote-machine.png" alt="random quote machine"></img>
                    <div class="middle">
                        <a href="https://codepen.io/thiagoramoscp/full/dyYvovx" target="_blank"><button class="project-buttons button1">Ver página</button></a>
                        <a href="https://codepen.io/thiagoramoscp/pen/dyYvovx" target="_blank"><button class="project-buttons button2">Ver código</button></a>
                    </div>
                </a>
            </div>
            <div class="project">
                <a href="#" target="_blank">
                    <img src="./assets/projects-photos/choropleth-map.png" alt="choropleth map"></img>
                    <div class="middle">
                        <a href="https://codepen.io/thiagoramoscp/full/VwvRQJm" target="_blank"><button class="project-buttons button1">Ver página</button></a>
                        <a href="https://codepen.io/thiagoramoscp/pen/VwvRQJm" target="_blank"><button class="project-buttons button2">Ver código</button></a>
                    </div>
                </a>
            </div>
            <div class="project">
                <a href="#" target="_blank">
                    <img src="./assets/projects-photos/drum-machine.png" alt="drum machine"></img>
                    <div class="middle">
                        <a href="https://codepen.io/thiagoramoscp/full/ZEbJyaR" target="_blank"><button class="project-buttons button1">Ver página</button></a>
                        <a href="https://codepen.io/thiagoramoscp/pen/ZEbJyaR" target="_blank"><button class="project-buttons button2">Ver código</button></a>
                    </div>
                </a>
            </div>
        </div>

        <div class="even-column">
            <div class="project">
                <a href="" target="_blank">
                    <img src="./assets/projects-photos/gdp-graph.png" alt="gdp graph"></img>
                    <div class="middle">
                        <a href="https://codepen.io/thiagoramoscp/full/eYpPVBp" target="_blank"><button class="project-buttons button1">Ver página</button></a>
                        <a href="https://codepen.io/thiagoramoscp/pen/eYpPVBp" target="_blank"><button class="project-buttons button2">Ver código</button></a>
                    </div>
                </a>
            </div>
            <div class="project">
                <a href="https://codepen.io/thiagoramoscp/pen/mdJMVdN" target="_blank">
                    <img src="https://lh3.googleusercontent.com/RDazKUFXtDiyv7FRCmYLu2DsJIe5fBZc-p7RwmIDSwaAg4SkWg5u9q39nUVVm4XPoM9AzbOLqaFZuvy7rcn4K0B5NTBXU9CTVZ5IdbK92_GLLh4nGStnvclbDeSQ5JMQPMVkbcaDcA=w2400" alt="technical documentation page"></img>
                    <div class="middle">
                        <a href="https://cdpn.io/thiagoramoscp/debug/mdJMVdN/yoAZEOaYXyOr" target="_blank"><button class="project-buttons button1">Ver página</button></a>
                        <a href="https://codepen.io/thiagoramoscp/pen/mdJMVdN" target="_blank"><button class="project-buttons button2">Ver código</button></a>
                    </div>
                </a>
            </div>
            <div class="project">
                <a href="#" target="_blank">
                    <img src="./assets/projects-photos/pomodoro-clock.png" alt="pomodoro clock"></img>
                    <div class="middle">
                        <a href="https://codepen.io/thiagoramoscp/full/PoPRNLO" target="_blank"><button class="project-buttons button1">Ver página</button></a>
                        <a href="https://codepen.io/thiagoramoscp/pen/PoPRNLO" target="_blank"><button class="project-buttons button2">Ver código</button></a>
                    </div>
                </a>
            </div>
            <div class="project">
                <a href="#" target="_blank">
                    <img src="./assets/projects-photos/portfolio-page.png" alt="portfolio page"></img>
                    <div class="middle">
                        <a href="#" target="_blank"><button class="project-buttons button1">Ver página</button></a>
                        <a href="https://github.com/thiagoramoscp/portfolio-page" target="_blank"><button class="project-buttons button2">Ver código</button></a>
                    </div>
                </a>
            </div>
            <div class="project">
                <a href="#" target="_blank">
                    <img src="./assets/projects-photos/tree-map.png" alt="treemap"></img>
                    <div class="middle">
                        <a href="https://codepen.io/thiagoramoscp/full/XWmQzxm" target="_blank"><button class="project-buttons button1">Ver página</button></a>
                        <a href="https://codepen.io/thiagoramoscp/pen/XWmQzxm" target="_blank"><button class="project-buttons button2">Ver código</button></a>
                    </div>
                </a>
            </div>
            <div class="project">
                <a href="#" target="_blank">
                    <img src="https://lh3.googleusercontent.com/EYMQrY4iRf73ayCODtFc_yewccLnNcUqZ-bnnGAjoAbbYGjlIIvqaCRAcQD898la6VBnSSVit8iluJOi_WQvA4rjfetrlchAk7nepSdPZP4nRra9P54wdb8HTt3Z0gaWnVNVG_mUuA=w2400" alt="markdown previewer"></img>
                    <div class="middle">
                        <a href="https://codepen.io/thiagoramoscp/full/qBOmZpg" target="_blank"><button class="project-buttons button1">Ver página</button></a>
                        <a href="https://codepen.io/thiagoramoscp/pen/qBOmZpg" target="_blank"><button class="project-buttons button2">Ver código</button></a>
                    </div>
                </a>
            </div>
        </div>
</section>

<section class="contact-section" id="contact">
    <h2>Contato</h2>
    <?php 
        if ($emailSent === true):
    ?>
    <h2 class="email-sent-msg">Obrigado! Sua mensagem foi enviada com sucesso.</h2>
    <?php 
        else:
    ?>
    <form class="contact-form" id="contect-form" action="#contact" method="post">
        <input type="text" id="name" name="nome" placeholder="Nome" required>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <textarea class="cxdetexto" name="mensagem" placeholder="Mensagem" cols="" rows="6" required></textarea>
        <button type="submit" name="submit" id="submit">Enviar</button>
    </form>
    <?php 
        endif;
    ?>
</section>