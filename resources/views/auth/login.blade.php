<x-guest-layout>
    <div class="card login-card">
        <!-- Card Header -->
        <div class="card-header">
            <div class="brand-icon">
                <i class="fas fa-graduation-cap"></i>
            </div>
            <h1 class="brand-title">{{ config('app.name', 'Coaching CRM') }}</h1>
            <p class="brand-subtitle">Welcome back! Please sign in to your account</p>
        </div>

        <!-- Card Body -->
        <div class="card-body">
            <!-- Session Status -->
            @if (session('status'))
                <div class="alert alert-info">
                    <i class="fas fa-info-circle me-2"></i>
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-floating">
                    <input id="email" 
                           type="email" 
                           class="form-control @error('email') is-invalid @enderror" 
                           name="email" 
                           value="{{ old('email') }}" 
                           required 
                           autofocus 
                           placeholder="name@example.com">
                    <label for="email">
                        <i class="fas fa-envelope me-2"></i>Email Address
                    </label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="form-floating">
                    <input id="password" 
                           type="password" 
                           class="form-control @error('password') is-invalid @enderror" 
                           name="password" 
                           required 
                           placeholder="Password">
                    <label for="password">
                        <i class="fas fa-lock me-2"></i>Password
                    </label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Remember Me -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember" name="remember">
                    <label class="form-check-label" for="remember">
                        Remember me on this device
                    </label>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-login">
                    <i class="fas fa-sign-in-alt me-2"></i>
                    Sign In to Dashboard
                </button>

                <!-- Forgot Password -->
                @if (Route::has('password.request'))
                    <div class="forgot-link">
                        <a href="{{ route('password.request') }}">
                            <i class="fas fa-key me-1"></i>
                            Forgot your password?
                        </a>
                    </div>
                @endif
            </form>

            <!-- Demo Accounts Section -->
            <div class="demo-section">
                <div class="demo-title">
                    <i class="fas fa-play-circle me-1"></i>
                    Try Demo Accounts
                </div>
                <div class="demo-buttons">
                    <button type="button" class="demo-btn" data-email="admin@coaching.com" data-password="password">
                        <i class="fas fa-user-shield"></i>
                        <span>Admin Demo</span>
                    </button>
                    <button type="button" class="demo-btn" data-email="teacher@coaching.com" data-password="password">
                        <i class="fas fa-chalkboard-teacher"></i>
                        <span>Teacher Demo</span>
                    </button>
                    <button type="button" class="demo-btn" data-email="student@coaching.com" data-password="password">
                        <i class="fas fa-user-graduate"></i>
                        <span>Student Demo</span>
                    </button>
                </div>
                <div class="text-center mt-3">
                    <small class="text-muted">
                        <i class="fas fa-info-circle me-1"></i>
                        All demo accounts use password: <strong>password</strong>
                    </small>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Demo login functionality
            const demoButtons = document.querySelectorAll('.demo-btn');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            const loginForm = document.querySelector('form');

            demoButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const email = this.getAttribute('data-email');
                    const password = this.getAttribute('data-password');
                    
                    // Fill form inputs
                    emailInput.value = email;
                    passwordInput.value = password;
                    
                    // Add visual feedback
                    this.style.transform = 'scale(0.95)';
                    this.style.opacity = '0.7';
                    
                    // Add loading text
                    const originalText = this.innerHTML;
                    this.innerHTML = '<i class="fas fa-spinner fa-spin"></i><span>Signing in...</span>';
                    
                    // Submit form after delay
                    setTimeout(() => {
                        loginForm.submit();
                    }, 800);
                });
            });

            // Enhanced form interactions
            const formControls = document.querySelectorAll('.form-control');
            formControls.forEach(input => {
                input.addEventListener('focus', function() {
                    this.closest('.form-floating').style.transform = 'translateY(-2px)';
                });
                
                input.addEventListener('blur', function() {
                    this.closest('.form-floating').style.transform = 'translateY(0)';
                });
            });

            // Login button loading state
            const loginBtn = document.querySelector('.btn-login');
            loginForm.addEventListener('submit', function() {
                loginBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Signing In...';
                loginBtn.disabled = true;
            });
        });
    </script>
</x-guest-layout>
