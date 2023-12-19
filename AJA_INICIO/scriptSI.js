function signIn() {
  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;
  const errorMessage = document.getElementById('error-message');

  $.ajax({
      type: 'POST',
      url: 'server.php',
      data: { username: username, password: password },
      success: function (response) {
          // Parsear la respuesta JSON
          const result = JSON.parse(response);

          if (result.Mensaje === 'ok') {
              window.location.href = 'welcome.html';
              showWelcomeMessage();
          } else if (result.Mensaje === 'ko') {
              errorMessage.textContent = 'El usuario o la contraseña son incorrectas';
              document.getElementById('password').value = '';
          }
      },
      error: function (error) {
          console.error('Error en la solicitud AJAX:', error);
      }
  });
}

function showWelcomeMessage() {
  const username = document.getElementById('username').value;
  const welcomeMessage = document.getElementById('welcome-message');

  welcomeMessage.textContent = '¡Bienvenido, ' + username + '!';
}

  