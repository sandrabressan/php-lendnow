<!DOCTYPE html>
<html>
  <head>
    <title>LendNow - Empréstimos de forma rápida e segura</title>
    <link href="estilo.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
      <div class="banner">
        <h1 class="banner">LendNow</h1>
        <h2 class="banner">Empréstimos de forma rápida e segura</h2>
      </div>
      <div class="login">
        <form action="Itens.php" method="post" name="login">
          <h3 class="login">Login</h3>
          <p class="login">
            <input class="login"
              type="email"
              name="usuario"
              id="usuario"
              placeholder="usuário"
            />
          </p>
          <p class="login">
            <input class="login"
              type="password"
              name="senha"
              id="senha"
              placeholder="senha"
            />
          </p>
          <p class="login">
            <input class="login" type="submit" value="Entrar" />
          </p>
        </form>

        <h4 class="login">Ainda não tem cadastro?</h4>
        <a class="login" href="cadUsuario.php" class="login">Clique aqui</a>
      </div>
    </div>
    <footer>
      <p>Todos os direitos reservados</p>
    </footer>
  </body>
</html>