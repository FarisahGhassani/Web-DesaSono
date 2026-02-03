<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Website Desa</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--warna-primer-dark) 0%, var(--warna-sekunder) 100%);
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            padding: var(--spacing-4);
        }

        .login-card {
            background: var(--warna-putih);
            border-radius: var(--radius-2xl);
            padding: var(--spacing-10);
            box-shadow: var(--shadow-2xl);
        }

        .login-header {
            text-align: center;
            margin-bottom: var(--spacing-8);
        }

        .login-logo {
            width: 80px;
            height: 80px;
            margin: 0 auto var(--spacing-4);
            background: linear-gradient(135deg, var(--warna-primer), var(--warna-sekunder));
            border-radius: var(--radius-xl);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-logo svg {
            width: 40px;
            height: 40px;
            color: white;
        }

        .login-title {
            font-size: var(--font-size-2xl);
            font-weight: 700;
            color: var(--warna-abu-900);
            margin-bottom: var(--spacing-2);
        }

        .login-subtitle {
            color: var(--warna-abu-500);
            font-size: var(--font-size-sm);
        }

        .login-footer {
            text-align: center;
            margin-top: var(--spacing-6);
        }

        .login-footer a {
            color: var(--warna-abu-500);
            font-size: var(--font-size-sm);
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="login-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                </div>
                <h1 class="login-title">Login Admin</h1>
                <p class="login-subtitle">Masuk untuk mengelola website desa</p>
            </div>

            @if($errors->any())
                <div class="alert alert-bahaya" style="margin-bottom: var(--spacing-6);">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="15" y1="9" x2="9" y2="15" />
                        <line x1="9" y1="9" x2="15" y2="15" />
                    </svg>
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.login.proses') }}" method="POST">
                @csrf

                <div class="form-grup">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="admin@desa.id"
                        value="{{ old('email') }}" required autofocus>
                </div>

                <div class="form-grup">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-input" placeholder="••••••••"
                        required>
                </div>

                <button type="submit" class="tombol tombol-primer" style="width: 100%; margin-top: var(--spacing-4);">
                    Masuk
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2">
                        <path d="M15 3h4a2 2 0 012 2v14a2 2 0 01-2 2h-4" />
                        <polyline points="10 17 15 12 10 7" />
                        <line x1="15" y1="12" x2="3" y2="12" />
                    </svg>
                </button>
            </form>

            <div class="login-footer">
                <a href="{{ route('beranda') }}">← Kembali ke Website</a>
            </div>
        </div>
    </div>
</body>

</html>