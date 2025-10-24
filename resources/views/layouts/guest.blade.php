<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Coaching CRM') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><g fill="rgba(255,255,255,0.1)" fill-opacity="0.1"><circle cx="30" cy="30" r="1.5"/></g></g></svg>') repeat;
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        .login-container {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 450px;
            padding: 20px;
        }
        
        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(15px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .login-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
        }
        
        .card-header {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            text-align: center;
            padding: 2rem 1.5rem;
            border: none;
            position: relative;
        }
        
        .card-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #f093fb, #f5576c, #4facfe, #00f2fe);
            background-size: 300% 100%;
            animation: gradient-shift 4s ease infinite;
        }
        
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .brand-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 2.5rem;
            color: white;
            transition: transform 0.3s ease;
        }
        
        .brand-icon:hover {
            transform: scale(1.1) rotate(10deg);
        }
        
        .brand-title {
            font-size: 1.75rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .brand-subtitle {
            font-size: 0.95rem;
            opacity: 0.9;
            font-weight: 300;
        }
        
        .card-body {
            padding: 2rem 1.5rem;
        }
        
        .form-floating {
            margin-bottom: 1.5rem;
        }
        
        .form-control {
            border: 2px solid #e3e6f0;
            border-radius: 12px;
            padding: 0.75rem 1rem;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
        }
        
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
            background: white;
            transform: translateY(-2px);
        }
        
        .btn-login {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 12px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            font-size: 1rem;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s ease;
        }
        
        .btn-login:hover::before {
            left: 100%;
        }
        
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }
        
        .demo-section {
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid #e3e6f0;
        }
        
        .demo-title {
            text-align: center;
            font-size: 0.9rem;
            color: #6c757d;
            margin-bottom: 1rem;
            font-weight: 500;
        }
        
        .demo-buttons {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }
        
        .demo-btn {
            flex: 1;
            min-width: 100px;
            background: rgba(102, 126, 234, 0.1);
            border: 1px solid rgba(102, 126, 234, 0.2);
            border-radius: 8px;
            padding: 0.5rem;
            color: #667eea;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .demo-btn:hover {
            background: rgba(102, 126, 234, 0.2);
            transform: translateY(-2px);
        }
        
        .demo-btn i {
            display: block;
            font-size: 1.2rem;
            margin-bottom: 0.25rem;
        }
        
        .form-check {
            margin: 1.5rem 0;
        }
        
        .form-check-input:checked {
            background-color: #667eea;
            border-color: #667eea;
        }
        
        .form-check-label {
            color: #6c757d;
            font-size: 0.9rem;
        }
        
        .forgot-link {
            text-align: center;
            margin-top: 1rem;
        }
        
        .forgot-link a {
            color: #667eea;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .forgot-link a:hover {
            color: #5a67d8;
            text-decoration: underline;
        }
        
        .alert {
            border-radius: 10px;
            border: none;
            margin-bottom: 1.5rem;
        }
        
        .is-invalid {
            border-color: #dc3545 !important;
        }
        
        .invalid-feedback {
            font-size: 0.85rem;
        }
        
        @media (max-width: 576px) {
            .login-container {
                padding: 10px;
            }
            
            .card-header {
                padding: 1.5rem 1rem;
            }
            
            .card-body {
                padding: 1.5rem 1rem;
            }
            
            .brand-icon {
                width: 60px;
                height: 60px;
                font-size: 2rem;
            }
            
            .brand-title {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        {{ $slot }}
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.3);
        }
        
        .logo-icon i {
            font-size: 36px;
            color: white;
        }
        
        .login-title {
            font-size: 28px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 8px;
        }
        
        .login-subtitle {
            color: #718096;
            font-size: 16px;
            font-weight: 400;
        }
        
        .login-body {
            padding: 0 40px 40px;
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-label {
            display: block;
            font-size: 14px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
        }
        
        .form-control {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #f8fafc;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }
        
        .form-control.is-invalid {
            border-color: #e53e3e;
        }
        
        .invalid-feedback {
            color: #e53e3e;
            font-size: 14px;
            margin-top: 6px;
        }
        
        .form-check {
            display: flex;
            align-items: center;
            margin-bottom: 24px;
        }
        
        .form-check-input {
            margin-right: 12px;
            width: 18px;
            height: 18px;
        }
        
        .btn-primary {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.3);
        }
        
        .btn-primary:active {
            transform: translateY(0);
        }
        
        .forgot-link {
            text-align: center;
            margin-top: 20px;
        }
        
        .forgot-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .forgot-link a:hover {
            color: #764ba2;
        }
        
        .demo-section {
            background: #f8fafc;
            margin: 20px -40px -40px;
            padding: 30px 40px;
            border-top: 1px solid #e2e8f0;
        }
        
        .demo-title {
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            color: #718096;
            margin-bottom: 20px;
        }
        
        .demo-buttons {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
        }
        
        .demo-btn {
            padding: 12px 8px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            background: white;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            color: #374151;
        }
        
        .demo-btn:hover {
            border-color: #667eea;
            background: #f7fafc;
            transform: translateY(-2px);
        }
        
        .demo-btn i {
            display: block;
            font-size: 20px;
            margin-bottom: 6px;
            color: #667eea;
        }
        
        .demo-btn span {
            font-size: 12px;
            font-weight: 600;
        }
        
        .alert {
            padding: 12px 16px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px solid #d1fae5;
            background-color: #ecfdf5;
            color: #065f46;
        }
        
        @media (max-width: 480px) {
            .login-container {
                padding: 15px;
            }
            
            .login-header, .login-body {
                padding-left: 30px;
                padding-right: 30px;
            }
            
            .demo-section {
                margin-left: -30px;
                margin-right: -30px;
                padding-left: 30px;
                padding-right: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            {{ $slot }}
        </div>
    </div>
</body>
</html>
