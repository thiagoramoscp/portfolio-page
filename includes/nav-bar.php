<nav class="navbar">
    <ul>
        <li><a href="<?php if ($CURRENT_PAGE === "Index") {
            print "#projects";
        } else {
            print "./index.php#projects";
        } ?>">Projetos</a></li>
        
        <li><a href="<?php if ($CURRENT_PAGE === "Index") {
            print "#contact";
        } else {
            print "./index.php#contact";
        } ?>">Contato</a></li>
        
        <li><a href="./resume.php">Currículo</a></li>
    </ul>
</nav>