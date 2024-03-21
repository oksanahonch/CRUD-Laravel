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
                                Редактировать заказ
                            </h4>
                        </div>
    
                        <div class="card-body">
                            <form method="post" action="{{ route('order.update', $order) }}">
                                @method('PATCH')
                                @csrf
    
                                <div class="mb-3">
                                    <label class="required">Получатель</label>
                                    <select class="form-select mb-4 mt-1" aria-label="Получатель" name="client_id">

                                        <option selected value="{{ $order->client->id }}">{{ $order->client->lastname." ".$order->client->firstname }}</option>
        
                                        @foreach ($clients as $client) : 
                                            
                                            <option value="{{ $client->id }}">{{ $client->lastname." ".$client->firstname }}</option>
    
                                        @endforeach
                                    </select>

                                </div>

                                <div class="mb-3">
                                    <label class="required">Роль получателя</label>
                                    <select class="form-select mb-4 mt-1" aria-label="Получатель" name="role_id">

                                        <option selected value="{{ $order->role->id }}">{{ $order->role->name }}</option>
        
                                        @foreach ($roles as $role) : 
                                            
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
    
                                        @endforeach
                                    </select>

                                </div>

                                <div class="mb-3">
                                    <label class="required">Город</label>
                                    <select class="form-select mb-4 mt-1" aria-label="Получатель" name="city_id">

                                        <option selected value="{{ $order->city->id }}">{{ $order->city->name }}</option>
        
                                        @foreach ($cities as $city) : 
                                            
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
    
                                        @endforeach
                                    </select>

                                </div>

                                <div class="mb-3">
                                    <label class="required">Номер отделения</label>
                                    <select class="form-select mb-4 mt-1" aria-label="Получатель" name="department_id">

                                        <option selected value="{{ $order->department->id }}">{{ $order->department->name }}</option>
        
                                        @foreach ($departments as $department) : 
                                            
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
    
                                        @endforeach
                                    </select>

                                </div>

                                <div class="mb-3">
                                    <label class="required">Статус заказа</label>
                                    <select class="form-select mb-4 mt-1" aria-label="Получатель" name="status_id">

                                        <option selected value="{{ $order->status->id }}">{{ $order->status->name }}</option>
        
                                        @foreach ($statuses as $status) : 
                                            
                                            <option value="{{ $status->id }}">{{ $status->name }}</option>
    
                                        @endforeach
                                    </select>

                                </div>

                                <div class="mb-3">
                                    <label class="required">Информация об оплате</label>
                                    <select class="form-select mb-4 mt-1" aria-label="Получатель" name="payment_id">

                                        <option selected value="{{ $order->payment->id }}">{{ $order->payment->name }}</option>
        
                                        @foreach ($payments as $payment) : 
                                            
                                            <option value="{{ $payment->id }}">{{ $payment->name }}</option>
    
                                        @endforeach
                                    </select>

                                </div>

                                    
                                <div class="d-flex justify-content-around">
                                    <button type="submit" class="btn btn-primary mr-3">
                                        Изменить
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