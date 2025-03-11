<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="http://localhost:8000/foo/user/create" method="POST" enctype="multipart/form-data">
  <div class="container">
    <h1>Nuevo usuario</h1>
    <hr>

    <label for="email"><b>Nombre y apellidos:</b></label>
    <input type="text" placeholder="Nombre y apellidos" name="name" id="name" required>

    <label for="email"><b>Correo electrónico:</b></label>
    <input type="text" placeholder="Correo electrónico" name="email" id="email" required>

    <label for="password"><b>Contraseña:</b></label>
    <input type="password" name="password" id="password">


    <label for="phone"><b>Teléfono:</b></label>
    <input type="tel" placeholder="123456789" id="phone" name="phone" pattern="[0-9]{9}" required>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
</form>

</body>
</html>
