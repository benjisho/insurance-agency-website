const test = require('node:test');
const assert = require('node:assert/strict');

const {
  validateCredentials,
  buildWelcomeMessage,
} = require('../../assets/js/client_portal_auth');

test('validateCredentials returns true for valid static credentials', () => {
  assert.equal(validateCredentials('client', 'password'), true);
});

test('validateCredentials returns false for invalid credentials', () => {
  assert.equal(validateCredentials('client', 'wrong'), false);
  assert.equal(validateCredentials('wrong', 'password'), false);
});

test('buildWelcomeMessage formats dashboard greeting', () => {
  assert.equal(buildWelcomeMessage('client'), 'Welcome, client!');
});
