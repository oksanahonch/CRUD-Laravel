<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
    <style>
        .container { max-width: 720px; }
        .required:after { content:'*'; color: red; margin-left: 3px; }

    </style>
</head>
<body>

    <div class="d-flex flex-column justify-content-between min-vh-100">
        
        <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container">

                <a  href="{{ route ('home') }}" class="navbar-brand mr-3 text-danger">
                    <img src="{{ asset('images/icon.png') }}" alt="">
                </a>

                <div class="collapse navbar-collapse" id="navbar-collapse">

                    <ul class="navbar-nav me-auto mb-2 mb-md-0">

                        <li class="nav-item">
                          <a href="{{ route ('home') }}" class="nav-link active" aria-current="page">
                              {{ __('Главная') }}
                          </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route ('order.index') }}" class="nav-link" aria-current="page">
                                {{ __('Order') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route ('client.index') }}" class="nav-link" aria-current="page">
                                {{ __('Client') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route ('role.index') }}" class="nav-link" aria-current="page">
                                {{ __('Role') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route ('status.index') }}" class="nav-link" aria-current="page">
                                {{ __('Status') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route ('payment.index') }}" class="nav-link" aria-current="page">
                                {{ __('Payment') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route ('city.index') }}" class="nav-link" aria-current="page">
                                {{ __('City') }}
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route ('department.index') }}" class="nav-link" aria-current="page">
                                {{ __('Department') }}
                            </a>
                        </li>

                    </ul>

                    <ul class="navbar-nav ms-auto mb-2 mb-md-0">

                        <li class="nav-item">
                            {{-- <a href="{{ route ('login') }}" class="nav-link" aria-current="page">
                                {{ __('Вход') }}
                            </a> --}}
                        </li>

                    </ul>

                </div>
            </div>
        
        </nav>
    

        <main class="d-flex justify-content-center">
            {{-- <h1 class="text-danger">Нова Пошта</h1> --}}
            <img src="{{ asset('images/nova-poshta.jpg') }}" alt="">
        </main>

        <footer class="py-3 border-top text-center">

            <div>{{ config('app.name') }} 2023</div>
        
        </footer>
        
        
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js"></script>
</body>
</html>