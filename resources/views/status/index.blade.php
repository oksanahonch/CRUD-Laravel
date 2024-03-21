<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statuses</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
    <style>
        .container { max-width: 720px; }
    </style>
</head>
<body>

    <div class="d-flex flex-column justify-content-start min-vh-100">
        
        <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container">

                <a  href="{{ route ('home') }}" class="navbar-brand mr-3 text-danger">
                    <img src="{{ asset('images/icon.png') }}" alt="">
                </a>

                <div class="collapse navbar-collapse" id="navbar-collapse">

                    <ul class="navbar-nav me-auto mb-2 mb-md-0">

                        <li class="nav-item">
                          <a href="{{ route ('home') }}" class="nav-link" aria-current="page">
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
                            <a href="{{ route ('status.index') }}" class="nav-link active" aria-current="page">
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

                </div>
            </div>
        
        </nav>


    
  
  
      <div class="container-md py-3 content">

        <a class="btn btn-outline-primary m-3" href="{{ route('status.create') }}" role="button">Создать новый</a>
      
        <div class="container-l">
          <table class="table table-hover text-center">
                  <thead class="text-center">
                    <tr>
                      <th scope="col">№</th>
                      <th scope="col">Наименование</th>
                      <th scope="col">Редактирование</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($statuses as $status)
                    <tr>
                      
                      <th>{{ $status->id }}</th>
  
                      <td>{{ $status->name }}</td>  

                      <td>
                        <div class="container>">
                           <div class="d-flex flex-row justify-content-evenly">
                           
                               <a href="{{ route('status.edit', $status) }}" type="button" class="btn btn-outline-success">
                                Редактировать
                              </a>
                              <form role="form" method="post" action="{{ route('status.delete', $status) }}">
                                 @method('DELETE')
                                 @csrf
                                 <div>
                                    <button type="submit" class="btn btn-outline-danger">
                                       Удалить
                                    </button>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </td>
                      
  
                    </tr>
                    @endforeach
                  </tbody>
                </table>
          </div>
      </div>

    <footer class="fixed-bottom bg-light text-center p-3">

        <div>{{ config('app.name') }} 2023</div>
    
    </footer>
    
    
</div>

  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js"></script>
    
</body>
</html>