<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos personalizados -->
  <style>
    body {
      background-color: rgb(110, 168, 255);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 15px;
    }
    .card {
      background-color: rgb(184, 211, 250);
      width: 100%;
      max-width: 400px; /* Máximo tamaño en pantallas grandes */
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      overflow: hidden; /* Para que el header siga la forma redondeada */
    }
    .card-header {
      background-color: #007bff; /* Color primario de Bootstrap */
      color: white;
      text-align: center;
      padding: 15px;
      font-size: 1.25rem;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-md-6 col-lg-4">
        <div class="card">
          <div class="card-header">
            Iniciar sesión
          </div>
          <div class="card-body">
            <form action="validar.php" method="POST">
              <div class="form-group">
                <label for="username" class="font-weight-bold">Usuario</label>
                <input type="text" id="username" name="username" class="form-control" placeholder="Introduce tu usuario" required>
              </div>
              <div class="form-group">
                <label for="password" class="font-weight-bold">Contraseña</label>
                <input type="password" id="password" name="password" class="form-control" placeholder="Introduce tu contraseña" required>
              </div>
              <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS y dependencias opcionales -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
