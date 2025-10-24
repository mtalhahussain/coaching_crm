<div class="login-header">
    <div class="logo-icon">
        <i class="fas fa-graduation-cap"></i>
    </div>
    <h1 class="login-title">{{ config('app.name', 'Coaching CRM') }}</h1>
    <p class="login-subtitle">Welcome back! Sign in to your account</p>
</div>

<div class="login-body">
    <!-- Session Status -->
    @if (session('status'))
        <div class="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="form-group">
            <label for="email" class="form-label">Email Address</label>
            <input id="email" 
                   type="email" 
                   class="form-control @error('email') is-invalid @enderror" 
                   name="email" 
                   value="{{ old('email') }}" 
                   required 
                   autofocus 
                   placeholder="Enter your email address">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
            <label for="password" class="form-label">Password</label>
            <input id="password" 
                   type="password" 
                   class="form-control @error('password') is-invalid @enderror" 
                   name="password" 
                   required 
                   placeholder="Enter your password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">
                Keep me signed in
            </label>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn-primary">
            <i class="fas fa-sign-in-alt" style="margin-right: 8px;"></i>
            Sign In
        </button>

        <!-- Forgot Password -->
        @if (Route::has('password.request'))
            <div class="forgot-link">
                <a href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            </div>
        @endif
    </form>

    <!-- Demo Accounts -->
    <div class="demo-section">
        <div class="demo-title">Try Demo Accounts</div>
        <div class="demo-buttons">
            <button type="button" class="demo-btn" data-email="admin@coaching.com" data-password="password">
                <i class="fas fa-user-shield"></i>
                <span>Admin</span>
            </button>
            <button type="button" class="demo-btn" data-email="teacher@coaching.com" data-password="password">
                <i class="fas fa-chalkboard-teacher"></i>
                <span>Teacher</span>
            </button>
            <button type="button" class="demo-btn" data-email="student@coaching.com" data-password="password">
                <i class="fas fa-user-graduate"></i>
                <span>Student</span>
            </button>
        </div>
        <div style="text-align: center; margin-top: 15px; font-size: 12px; color: #718096;">
            Password: <strong>password</strong>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Demo login functionality
    const demoButtons = document.querySelectorAll('.demo-btn');
    demoButtons.forEach(button => {
        button.addEventListener('click', function() {
            const email = this.getAttribute('data-email');
            const password = this.getAttribute('data-password');
            
            // Fill form
            document.getElementById('email').value = email;
            document.getElementById('password').value = password;
            
            // Add loading effect
            this.style.transform = 'scale(0.95)';
            this.style.opacity = '0.7';
            
            // Submit form after short delay
            setTimeout(() => {
                document.querySelector('form').submit();
            }, 300);
        });
    });
    
    // Add focus effects
    const inputs = document.querySelectorAll('.form-control');
    inputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.style.transform = 'translateY(-2px)';
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.style.transform = 'translateY(0)';
        });
    });
});
</script>
