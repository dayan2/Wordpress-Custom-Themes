const signupBtn = document.getElementById('signUp');
const signInBtn = document.getElementById('signIn');
const container = document.getElementById('container');

signupBtn.addEventListener('click', () =>
    container.classList.add('right-panel-active'));

signInBtn.addEventListener('click', () =>
    container.classList.remove('right-panel-active'));