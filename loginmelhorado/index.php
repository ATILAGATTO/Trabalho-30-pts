<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Entrar</title>
  <link href="teste.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  <header class="header">
    <nav class="navbar">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Services</a>
      <a href="#">Contact</a>
    </nav>

    
  </header>

  <div class="background"></div>
  <div class="container">
    <div class="content">
      <h2 class="logo"><i class='bx bxl-firebase textshadow'></i>SuperBarato</h2>

      <div class="text-sci">
        <h2 class="textshadow">Bem Vindo!<br><span>A compra mais barata da região</span></h2>

        <p></p>

        <div class="social-icons">
          <a href="#"><i class='bx bxl-linkedin'></i></a>
          <a href="#"><i class='bx bxl-facebook-circle'></i></a>
          <a href="#"><i class='bx bxl-instagram'></i></a>
          <a href="#"><i class='bx bxl-twitter'></i></a>
        </div>
      </div>
    </div>

    <div class="logreg-box">
      <div class="form-box login">
        <form action="#">
          <h2>Login</h2>

          <div class="input-box">
            <sapn class="icon"><i class='bx bxs-envelope'></i></sapn>
            <input type="text" required>
            <label>Nome</label>
          </div>

          <div class="input-box">
            <sapn class="icon"><i class='bx bxs-lock-alt'></i></sapn>
            <input type="password" required>
            <label>Senha</label>
          </div>

          <div class="remember-forgot">
            <label><input type="checkbox"> Salvar senha</label>
            <a href="#">Esqueceu a senha?</a>
          </div>
          <button type="submit" class="btn">Logar</button>

          <div class="login-register">
            <p>Cadastrar contato? <a href="#" class="register-link">Cadastre-se</a></p>
          </div>
        </form>
      </div>

      <div class="form-box register">
        <form action="#">
          <h2>Cadastro</h2>

          <div class="input-box">
            <sapn class="icon"><i class='bx bxs-envelope'></i></sapn>
            <input type="text" required>
            <label>Nome</label>
          </div>

          <div class="input-box">
            <sapn class="icon"><i class='bx bxs-phone'></i></sapn>
            <input type="text"  id="Contato" required>
            <label>Contato</label>
          </div>

          <div class="input-box">
            <sapn class="icon"><i class='bx bxs-lock-alt'></i></sapn>
            <input type="password" required>
            <label>Senha</label>
          </div>

          <div class="remember-forgot">
            <label><input type="checkbox"> Salvar senha</label>
          </div>
          <button type="submit" class="btn">Cadastrar</button>

          <div class="login-register">
            <p>É um administrador? <a href="#" class="login-link">Logar</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>



  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script>
   $('#Contato').mask('(00) 00000-0000');
</script>
</body>

</html>