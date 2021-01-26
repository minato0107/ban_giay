
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="table-responsive">
            <table class="table table-hover" border="1">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Kích cỡ</th>
                        <th>Màu sắc</th>
                        <th>Giá</th>
                        <th>Số Lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $value)
                    <tr>
                        <td>{{$value->order_pro->product_details->name}}</td>
                        <td>{{$value->size}}</td>
                        <td><i class="icon icon-user" style="color: {{$value->color}}"></i></td>
                        <td>{{number_format($value->price)}} đ</td>
                        <td>{{$value->quantity}}</td>
                        <td>{{number_format(($value->quantity)*($value->price))}} đ</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <h1>Bạn đã đặt hàng thành công </h1>
            <h2>Tổng số tiền phải trả của bạn là {{number_format($tt)}} VNĐ</h2>
            <p>Cảm ơn quý khách đã ủng hộ shop</p>
        </div>
        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
         <script src="Hello World"></script>
    </body>
</html>



