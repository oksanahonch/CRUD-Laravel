<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css">
    <title>Create Order</title>
</head>
<body>

    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card">
    
                        <div class="card-body">
                            <h4 class="m-0">
                                Создать новый заказ
                            </h4>
                        </div>
    
                        <div class="card-body">
                            <form method="post" action="{{ route('order.store') }}">
                                @csrf
    
                                <select class="form-select mt-4 mb-4" aria-label="Получатель" name="client_id">
                                    <option selected>Получатель</option>
    
                                    @foreach ($clients as $client) : 

                                        <option value="{{ $client->id }}">{{ $client->lastname." ".$client->firstname }}</option>

                                    @endforeach
                                </select>

                                <select class="form-select mt-4 mb-4" aria-label="Получатель" name="role_id">
                                    <option selected>Роль получателя</option>
    
                                    @foreach ($roles as $role) : 

                                        <option value="{{ $role->id }}">{{ $role->name }}</option>

                                    @endforeach
                                </select>

                                <select class="form-select mt-4 mb-4" aria-label="Город" name="city_id">
                                    <option selected>Город</option>
    
                                    @foreach ($cities as $city) : 

                                        <option value="{{ $city->id }}">{{ $city->name }}</option>

                                    @endforeach
                                </select>

                                <select class="form-select mt-4 mb-4" aria-label="Номер отделения" name="department_id">
                                    <option selected>Номер отделения</option>
    
                                    @foreach ($departments as $department) : 

                                        <option value="{{ $department->id }}">{{ $department->name }}</option>

                                    @endforeach
                                </select>

                                <select class="form-select mt-4 mb-4" aria-label="Статус заказа" name="status_id">
                                    <option selected>Статус заказа</option>
    
                                    @foreach ($statuses as $status) : 

                                        <option value="{{ $status->id }}">{{ $status->name }}</option>

                                    @endforeach
                                </select>

                                <select class="form-select mt-4 mb-4" aria-label="Информация об оплате" name="payment_id">
                                    <option selected>Информация об оплате</option>
    
                                    @foreach ($payments as $payment) : 

                                        <option value="{{ $payment->id }}">{{ $payment->name }}</option>

                                    @endforeach
                                </select>
    
                                <div class="d-flex justify-content-around">
                                    <button type="submit" class="btn btn-primary mr-3">
                                        Создать
                                    </button>
    
                                    <a href="{{ route('order.index') }}" role="button" type="" class="btn btn-danger mr-3">
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