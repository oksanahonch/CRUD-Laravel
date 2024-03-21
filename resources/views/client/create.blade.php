<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
    <title>Create Clients</title>
</head>
<body>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card">
    
                        <div class="card-body">
                            <h4 class="m-0">
                                Создать нового клиента
                            </h4>
                        </div>
    
                        <div class="card-body">
                            <form method="post" action="{{ route('client.store') }}">
                                @csrf
    
                                <div class="mb-3">
                                    <label class="required mb-2">Фамилия</label>
                                    <input type="text" name="lastname" class="form-control" autofocus>
                                </div>

                                <div class="mb-3">
                                    <label class="required mb-2">Имя</label>
                                    <input type="text" name="firstname" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="required mb-2">Номер телефона</label>
                                    <input type="text" id="phone-input" placeholder="+38(050)400 00 00" name="telephone" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="required mb-2">Email</label>
                                    <input type="email" id="exampleInputEmail1" name="email" class="form-control">
                                </div>
    
                                <div class="d-flex justify-content-around">
                                    <button type="submit" class="btn btn-primary mr-3">
                                        Создать
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

    <script>
        $(document).ready(function() {
        $('#phone-input').inputmask({
        mask: '+38(999) 999 99 99',
        placeholder: ' '
        });
  });
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/inputmask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/bindings/inputmask.binding.js"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/js/bootstrap.min.js"></script>
    
</body>
</html>