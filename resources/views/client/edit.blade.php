<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
    <title>Edit Client</title>
</head>
<body>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card">
    
                        <div class="card-body">
                            <h4 class="m-0">
                                Редактировать
                            </h4>
                        </div>
    
                        <div class="card-body">
                            <form method="post" action="{{ route('client.update', $client) }}">
                                @method('PATCH')
                                @csrf
    
                                <div class="mb-3">
                                    <label class="required mb-2">Фамилия</label>
                                    <input type="text" name="lastname" class="form-control" value="{{ $client->lastname }}" autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="required mb-2">Имя</label>
                                    <input type="text" name="firstname" class="form-control" value="{{ $client->firstname }}">
                                </div>

                                <div class="mb-3">
                                    <label class="required mb-2">Номер телефона</label>
                                    <input type="text" name="telephone" class="form-control" value="{{ $client->telephone }}">
                                </div>

                                <div class="mb-3">
                                    <label class="required mb-2">Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ $client->email }}">
                                </div>
    
                                <div class="d-flex justify-content-around">
                                    <button type="submit" class="btn btn-primary mr-3">
                                        Изменить
                                    </button>
    
                                    <a href="{{ route('client.index') }}" role="button" type="" class="btn btn-danger mr-3">
                                        Отменить
                                    </a>
                                </div>
    
                                
                            </form>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js"></script>
    
</body>
</html>