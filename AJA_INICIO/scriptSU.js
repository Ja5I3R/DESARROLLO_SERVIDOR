function signUp() {
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirm-password').value;
  const errorMessage = document.getElementById('error-message');

  // Verificar que las contraseñas coincidan
  if (password !== confirmPassword) {
      errorMessage.textContent = 'Las contraseñas no coinciden';
      return;
  }

  // Enviar datos al servidor usando AJAX
  $.ajax({
      type: 'POST',
      url: 'signup.php',
      data: { username: username, password: password }, // Convertir el objeto a una cadena JSON
      success: function (response) {
          // Parsear la respuesta JSON
          const result = JSON.parse(response);

          if (result.Mensaje === 'ok') {
              // Redirigir a la página de bienvenida (o a la página de inicio de sesión)
              window.location.href = 'welcome.html'; // Reemplaza 'welcome.html' con la URL deseada
          } else if (result.Mensaje === 'ko') {
              // Mostrar mensaje de error
              errorMessage.textContent = 'Error al crear el usuario. Inténtalo de nuevo.';
          }
      },
      error: function (error) {
          console.error('Error en la solicitud AJAX:', error);
      }
  });
}
