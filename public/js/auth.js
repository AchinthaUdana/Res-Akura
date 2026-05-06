/**
 * Auth Flow JavaScript
 * Handles validation, loading states, and redirection for Akura LMS.
 */

document.addEventListener('DOMContentLoaded', () => {

    /* =========================================
       1. HELPER FUNCTIONS
    ========================================= */
    
    // Show error on input group
    const showError = (groupId, message) => {
        const group = document.getElementById(groupId);
        if (!group) return;
        group.classList.add('has-error');
        if (message) {
            const errorEl = group.querySelector('.error-message');
            if (errorEl) errorEl.innerText = message;
        }
    };

    // Clear error from input group
    const clearError = (groupId) => {
        const group = document.getElementById(groupId);
        if (group) group.classList.remove('has-error');
    };

    // Show top alert box
    const showAlert = (alertId, message, type = 'error') => {
        const alertEl = document.getElementById(alertId);
        const textEl = document.getElementById(alertId + 'Text');
        if (!alertEl || !textEl) return;
        
        // Remove existing classes
        alertEl.classList.remove('alert-error', 'alert-success');
        
        // Add new type and message
        alertEl.classList.add('alert-' + type);
        textEl.innerText = message;
        alertEl.classList.add('show');
    };

    // Hide top alert box
    const hideAlert = (alertId) => {
        const alertEl = document.getElementById(alertId);
        if (alertEl) alertEl.classList.remove('show');
    };

    // Set button loading state
    const setLoading = (btnId, isLoading) => {
        const btn = document.getElementById(btnId);
        if (!btn) return;
        if (isLoading) {
            btn.classList.add('loading');
            btn.disabled = true;
        } else {
            btn.classList.remove('loading');
            btn.disabled = false;
        }
    };

    // Basic email validation regex
    const isValidEmail = (email) => {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    };

    // Clear all errors on input change
    const inputs = document.querySelectorAll('.auth-input');
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            const group = this.closest('.input-group');
            if (group) group.classList.remove('has-error');
        });
    });


    /* =========================================
       2. LOGIN PAGE LOGIC
    ========================================= */
    const loginForm = document.getElementById('loginForm');
    
    if (loginForm) {
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            hideAlert('loginAlert');
            
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            let isValid = true;

            // Validate Email
            if (!email) {
                showError('emailGroup', 'Email or Username is required');
                isValid = false;
            }

            // Validate Password
            if (!password) {
                showError('passwordGroup', 'Password is required');
                isValid = false;
            }

            if (!isValid) return;

            // Simulate API Call
            setLoading('loginBtn', true);
            
            setTimeout(() => {
                // Mock validation (Accept any non-empty for demo)
                if (email === "wrong@email.com") {
                    setLoading('loginBtn', false);
                    showAlert('loginAlert', 'Invalid credentials. Please try again.');
                } else {
                    // Success -> Redirect to Select Stream
                    sessionStorage.setItem('isLoggedIn', 'true');
                    sessionStorage.setItem('userEmail', email);
                    window.location.href = 'select-stream.html';
                }
            }, 1500);
        });
    }

    /* =========================================
       3. REGISTER PAGE LOGIC
    ========================================= */
    const registerForm = document.getElementById('registerForm');
    
    if (registerForm) {
        registerForm.addEventListener('submit', (e) => {
            e.preventDefault();
            hideAlert('registerAlert');
            
            const fullname = document.getElementById('fullname').value.trim();
            const email = document.getElementById('regEmail').value.trim();
            const grade = document.getElementById('grade').value;
            const password = document.getElementById('regPassword').value;
            const confirmPass = document.getElementById('confirmPassword').value;
            const terms = document.getElementById('terms').checked;
            
            let isValid = true;

            if (!fullname) {
                showError('nameGroup', 'Full Name is required');
                isValid = false;
            }

            if (!email || !isValidEmail(email)) {
                showError('regEmailGroup', 'Please enter a valid email address');
                isValid = false;
            }

            if (!grade) {
                showError('gradeGroup', 'Please select your grade');
                isValid = false;
            }

            if (!password || password.length < 6) {
                showError('regPasswordGroup', 'Password must be at least 6 characters');
                isValid = false;
            }

            if (password !== confirmPass) {
                showError('confirmPasswordGroup', 'Passwords do not match');
                isValid = false;
            }

            if (!terms) {
                showAlert('registerAlert', 'You must agree to the Terms & Conditions.');
                isValid = false;
            }

            if (!isValid) {
                if(terms) showAlert('registerAlert', 'Please fix the errors below.');
                return;
            }

            // Simulate API Call
            setLoading('registerBtn', true);
            
            setTimeout(() => {
                // Success -> Redirect to Login
                setLoading('registerBtn', false);
                // In a real app, you might auto-login or show a success message.
                // We will redirect to login page for this flow.
                window.location.href = 'login.html';
            }, 2000);
        });
    }

    /* =========================================
       4. SELECT STREAM PAGE LOGIC
    ========================================= */
    const continueBtn = document.getElementById('continueBtn');
    
    // Expose selectStream to global scope since we use inline onclick
    window.selectStream = function(streamType) {
        // Clear previous selections
        document.getElementById('cardOL').classList.remove('selected');
        document.getElementById('cardAL').classList.remove('selected');
        
        // Reset buttons
        document.getElementById('btnOL').className = 'btn btn-outline w-100';
        document.getElementById('btnAL').className = 'btn btn-outline w-100';
        document.getElementById('btnOL').innerText = 'Select O/L';
        document.getElementById('btnAL').innerText = 'Select A/L';
        
        hideAlert('streamAlert');

        // Apply new selection
        const selectedCard = document.getElementById('card' + streamType);
        const selectedBtn = document.getElementById('btn' + streamType);
        
        selectedCard.classList.add('selected');
        selectedBtn.className = 'btn btn-primary w-100';
        selectedBtn.innerHTML = '<i class="fa-solid fa-check"></i> Selected';
        
        // Save to session
        sessionStorage.setItem('selectedStream', streamType);
        
        // Show continue button
        continueBtn.style.display = 'inline-flex';
        // Add subtle animation
        continueBtn.style.animation = 'slideInDown 0.3s ease';
    };

    if (continueBtn) {
        continueBtn.addEventListener('click', () => {
            const selected = sessionStorage.getItem('selectedStream');
            if (!selected) {
                showAlert('streamAlert', 'Please select a stream to continue.');
                return;
            }
            
            // Simulate saving and redirecting to Dashboard
            setLoading('continueBtn', true);
            
            setTimeout(() => {
                // Redirect to dashboard (mock path)
                window.location.href = 'dashboard.html'; // Or wherever your dashboard is
            }, 1000);
        });
    }
});
