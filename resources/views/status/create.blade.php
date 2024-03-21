<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
    <title>Create Status</title>
</head>
<body>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card">
    
                        <div class="card-body">
                            <h4 class="m-0">
                                Создать новый
                            </h4>
                        </div>
    
                        <div class="card-body">
                            <form method="post" action="{{ route('status.store') }}">
                                @csrf
    
                                <div class="mb-3">
                                    <label class="required mb-2">Наименование</label>
                                    <input type="text" name="name" class="form-control" autofocus>
                                </div>

                                <div class="d-flex justify-content-around">
                                    <button type="submit" class="btn btn-primary mr-3">
                                        Создать
                                    </button>
    
                                    <a href="{{ route('status.index') }}" role="button" type="" class="btn btn-danger mr-3">
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