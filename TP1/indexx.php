
<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Sistema biblioteca</title>
            <link rel="stylesheet" href="stylee.css">

        </head>
        <body>
            <header>
                <h1>Sistema biblioteca</h1>
            </header>
            <br>
            <div class="container">
                <section class="centered-section">
                    <article>
                        <form action="valid_signup.php" method="POST">
                            <label for="nombre">Nombre completo: </label>
                            <input type="text" name="nombre" placeholder="Nombre" id="" VALUES>
                            <br>
                            <label for="dni">N. DNI: </label>
                            <input type="number" name="dni" placeholder="Numero de DNI" id="" VALUES>
                            <br>
                            <label for="email">Email: </label>
                            <input type="email" name="email" placeholder="Correo electronico" id="" VALUES>
                            <br>
                            <label for="celular">Celular:</label>
                            <input type="number" name="celular" placeholder="Numero de celular" id="" VALUES>
                            <br>
                            <label for="usuario">N. usuario:</label>
                            <input type="text" name="usuario" placeholder="Nombre de usuario" id="" VALUES>
                            <br>
                            <label for="contrasenia">Contraseña: </label>
                            <input type="password" name="contrasenia" placeholder="Contraseña" id="" VALUES>
                            <br>
                            <input type="submit">
                            <!-- <button type="submit">Sign up</button> -->
                            <p>Ya tiene cuenta? <a href="index.html">Ingresa aquí</a> </p>
                        </form>
                    </article>
                </section>
                
            </div>
            <footer>
                
                <div class="contact-links">
                    <a href="mailto:tuemail@example.com">Correo electrónico</a>
                    <p>Copyright 2024</p>
                    <a href="https://wa.me/542241565705?text=Hola%20buenas," target="_blank">WhatsApp</a>
                </div>

            </footer>
        </body>
</html>