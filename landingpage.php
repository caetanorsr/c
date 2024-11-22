<?php require "functions.php";
<!DOCTYPE html>
<html>
<head>
    <title>Landing Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <header>
        <h1></h1>
    </header>
    
    <main>
        <section class="intro">
            <h2>Descubra Nossas Ofertas Exclusivas</h2>
            <p>Cadastre-se abaixo para receber as melhores ofertas diretamente no seu e-mail.</p>
        </section>
        
        <section class="cta">
            <form action="submit_form.php" method="post">
                <input type="text" name="name" placeholder="Seu Nome" required>
                <input type="email" name="email" placeholder="Seu Email" required>
                <button type="submit">Cadastre-se</button>
            </form>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2024 Sua Empresa. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
?>
