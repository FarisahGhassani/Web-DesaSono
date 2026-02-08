<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Website Desa Wargasono</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0B1A0B 0%, #1e331e 100%);
        }

        .login-container {
            width: 100%;
            max-width: 420px;
            padding: 1rem;
        }

        .dev-notice {
            background: linear-gradient(135deg, #fef3c7, #fde68a);
            border: 1px solid #f59e0b;
            border-radius: 0.75rem;
            padding: 1rem;
            margin-bottom: 1rem;
        }

        .dev-notice-title {
            font-weight: 600;
            color: #92400e;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
        }

        .dev-notice-text {
            color: #78350f;
            font-size: 0.8rem;
            line-height: 1.5;
            margin: 0;
        }

        .dev-notice-features {
            margin-top: 0.75rem;
            padding-top: 0.75rem;
            border-top: 1px solid rgba(245, 158, 11, 0.3);
        }

        .dev-notice-feature {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #78350f;
            font-size: 0.8rem;
            margin-bottom: 0.25rem;
        }

        .dev-notice-feature svg {
            width: 14px;
            height: 14px;
            color: #16a34a;
        }

        .login-card {
            background: #fff;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .login-header {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .login-logo {
            width: 70px;
            height: 70px;
            margin: 0 auto 1rem;
            background: linear-gradient(135deg, #0B1A0B, #1e331e);
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-logo svg {
            width: 36px;
            height: 36px;
            color: white;
        }

        .login-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0B1A0B;
            margin: 0 0 0.25rem;
        }

        .login-subtitle {
            color: #6b7c5a;
            font-size: 0.875rem;
            margin: 0;
        }

        .form-grup {
            margin-bottom: 1rem;
        }

        .form-label {
            display: block;
            font-weight: 500;
            font-size: 0.875rem;
            color: #0B1A0B;
            margin-bottom: 0.5rem;
        }

        .form-input {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1.5px solid #e2e8f0;
            border-radius: 0.5rem;
            font-size: 0.9rem;
            transition: all 0.2s;
            background: #f8f8f8;
        }

        .form-input:focus {
            outline: none;
            border-color: #1e331e;
            background: white;
        }

        .tombol-login {
            width: 100%;
            padding: 0.875rem;
            background: linear-gradient(135deg, #0B1A0B, #1e331e);
            color: white;
            border: none;
            border-radius: 0.5rem;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.2s;
            margin-top: 0.5rem;
        }

        .tombol-login:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(11, 26, 11, 0.3);
        }

        .login-footer {
            text-align: center;
            margin-top: 1.5rem;
        }

        .login-footer a {
            color: #6b7c5a;
            font-size: 0.875rem;
            text-decoration: none;
        }

        .login-footer a:hover {
            color: #0B1A0B;
        }

        .alert-error {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #dc2626;
            padding: 0.75rem 1rem;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            font-size: 0.875rem;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <!-- Development Notice -->
        <div class="dev-notice">
            <div class="dev-notice-title">Dalam Tahap Pengembangan</div>
            <p class="dev-notice-text">
                Fitur panel admin sedang dalam pengembangan. Sementara ini, pengelolaan website dapat dilakukan melalui
                Google Drive untuk fitur berikut.
            </p>
            <div class="dev-notice-features">
                <div class="dev-notice-feature">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                    Dokumen APBDes
                </div>
                <div class="dev-notice-feature">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                    Peraturan Desa
                </div>
                <div class="dev-notice-feature">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <polyline points="20 6 9 17 4 12" />
                    </svg>
                    Dokumen Lainnya
                </div>
            </div>
        </div>

        <div class="login-card">
            <div class="login-header">
                <div class="login-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        <polyline points="9 22 9 12 15 12 15 22" />
                    </svg>
                </div>
                <h1 class="login-title">Admin Desa</h1>
                <p class="login-subtitle">Masuk ke panel administrasi</p>
            </div>

            @if($errors->any())
                <div class="alert-error">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('admin.login.proses') }}" method="POST">
                @csrf
                <div class="form-grup">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-input" value="{{ old('email') }}" required
                        autofocus>
                </div>

                <div class="form-grup">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-input" required>
                </div>

                <button type="submit" class="tombol-login">Masuk</button>
            </form>

            <div class="login-footer">
                <a href="{{ route('beranda') }}">← Kembali ke Website</a>
            </div>
        </div>
    </div>
</body>

</html>