<div class="login-header">
    <i class="fas fa-user-plus fa-2x mb-3"></i>
    <h3 class="mb-1">Create Account</h3>
    <p class="mb-0 opacity-75">Join {{ config('app.name', 'Coaching CRM') }} today</p>
</div>

<div class="login-body">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input id="name" 
                   type="text" 
                   class="form-control @error('name') is-invalid @enderror" 
                   name="name" 
                   value="{{ old('name') }}" 
                   required 
                   autofocus 
                   placeholder="Enter your full name">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input id="email" 
                   type="email" 
                   class="form-control @error('email') is-invalid @enderror" 
                   name="email" 
                   value="{{ old('email') }}" 
                   required 
                   placeholder="Enter your email address">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" 
                   type="password" 
                   class="form-control @error('password') is-invalid @enderror" 
                   name="password" 
                   required 
                   placeholder="Create a password">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input id="password_confirmation" 
                   type="password" 
                   class="form-control @error('password_confirmation') is-invalid @enderror" 
                   name="password_confirmation" 
                   required 
                   placeholder="Confirm your password">
            @error('password_confirmation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="d-grid">
            <button type="submit" class="btn btn-primary btn-lg">
                <i class="fas fa-user-plus me-2"></i>Create Account
            </button>
        </div>

        <!-- Login Link -->
        <div class="text-center mt-3">
            <span class="text-muted">Already have an account? </span>
            <a href="{{ route('login') }}" class="text-decoration-none">
                Login here
            </a>
        </div>
    </form>
</div>
