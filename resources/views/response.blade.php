<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Havanao Test</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
<form action="{{ route('home') }}" method="POST">
<div class="form-group">
{{ csrf_field() }}
<label for="exampleInputEmail1">Amount</label>
<input type="text" class="form-control" id="amount"  name="amount" placeholder="Enter Amount">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Customer</label>
<input type="text" class="form-control" name="customer" placeholder="Customer">
</div>
<div class="form-group">
<label for="exampleInputPassword1">transactionid</label>
<input type="text" class="form-control"  name="transactionid" placeholder="Transaction Id">
</div>
<div class="form-group">
<label for="exampleTextarea">Comment</label>
<textarea class="form-control"  name="comment" rows="5"></textarea>
</div>
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

@if(isset($res))
<div class="row">
<div class="col-md-8">
{{ $res}}
</div>
</div>
@endif

</div>
</div>
</body>
</html>