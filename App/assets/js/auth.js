function togglePasswordVisibility(formType) {
    const passwordInput = document.getElementById(`${formType}Password`);
    const togglePasswordIcon = document.getElementById(`toggle${formType.charAt(0).toUpperCase() + formType.slice(1)}Password`);
    const type = passwordInput.type === 'password' ? 'text' : 'password';
    passwordInput.type = type;
    togglePasswordIcon.classList.toggle('fa-eye-slash');
}

function showSignUp() {
    document.getElementById('loginForm').classList.add('hidden');
    document.getElementById('signUpForm').classList.remove('hidden');
}

function showLogin() {
    document.getElementById('signUpForm').classList.add('hidden');
    document.getElementById('loginForm').classList.remove('hidden');
}

function checkPasswordStrength() {
    const password = document.getElementById('signUpPassword').value;
    const strengthIndicator = document.getElementById('passwordStrength');

    const lengthCriteria = password.length >= 8;
    const uppercaseCriteria = /[A-Z]/.test(password);
    const numberCriteria = /[0-9]/.test(password);

    let strength = 'Weak';
    if (lengthCriteria && uppercaseCriteria && numberCriteria) {
        strength = 'Strong';
        strengthIndicator.className = 'password-strength strength-strong';
    } else if (lengthCriteria && (uppercaseCriteria || numberCriteria)) {
        strength = 'Medium';
        strengthIndicator.className = 'password-strength strength-medium';
    } else {
        strengthIndicator.className = 'password-strength strength-weak';
    }

    strengthIndicator.textContent = `Password Strength: ${strength}`;
}

 // Ball Animation
 const balls = [];
 const ballCount = 10; 

 function createBall() {
     const ball = document.createElement('div');
     ball.classList.add('ball');
     ball.style.width = '100px';
     ball.style.height = '100px';
     ball.style.background = `radial-gradient(circle, #34d399, #16a34a)`;
     ball.style.top = `${Math.random() * 100}%`;
     ball.style.left = `${Math.random() * 100}%`;

     document.getElementById('backgroundContainer').appendChild(ball);
     balls.push({
         element: ball,
         x: Math.random() * 4 - 2, // for x
         y: Math.random() * 4 - 2, // for y
     });
 }

 function animateBalls() {
     balls.forEach(ball => {
         const rect = ball.element.getBoundingClientRect();
         const ballStyle = window.getComputedStyle(ball.element);

         if (rect.top + parseFloat(ballStyle.height) > window.innerHeight || rect.top < 0) {
             ball.y *= -1;
         }

         if (rect.left + parseFloat(ballStyle.width) > window.innerWidth || rect.left < 0) {
             ball.x *= -1; 
         }

         ball.element.style.top = `${rect.top + ball.y}px`;
         ball.element.style.left = `${rect.left + ball.x}px`;
     });

     requestAnimationFrame(animateBalls);
 }

 for (let i = 0; i < ballCount; i++) {
     createBall();
 }

 animateBalls();