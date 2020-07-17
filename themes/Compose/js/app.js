const signupBtn = document.getElementById('signUp');
const signInBtn = document.getElementById('signIn');
const container = document.getElementById('container');

if (signInBtn) {
    signupBtn.addEventListener('click', () =>
        container.classList.add('right-panel-active'));

    signInBtn.addEventListener('click', () =>
        container.classList.remove('right-panel-active'));
}

//Login form
const inputs_login_form = document.querySelectorAll('.login-form-wrapper .input');

if (inputs_login_form) {
    function focusFunction() {
        let parent = this.parentNode.parentNode;
        parent.classList.add('focus');
    }
    function blurFunction() {
        let parent = this.parentNode.parentNode;
        if (this.value == "") {
            parent.classList.remove('focus');
        }
    }

    inputs_login_form.forEach(input => {
        input.addEventListener('focus', focusFunction);
        input.addEventListener('blur', blurFunction);
    })
}

