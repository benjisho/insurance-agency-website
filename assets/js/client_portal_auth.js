(function (global) {
  function validateCredentials(username, password) {
    return username === 'client' && password === 'password';
  }

  function buildWelcomeMessage(username) {
    return `Welcome, ${username}!`;
  }

  var api = {
    validateCredentials: validateCredentials,
    buildWelcomeMessage: buildWelcomeMessage,
  };

  if (typeof module !== 'undefined' && module.exports) {
    module.exports = api;
  }

  global.clientPortalAuth = api;
})(typeof window !== 'undefined' ? window : globalThis);
