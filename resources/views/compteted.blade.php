<!DOCTYPE html>
<html>
<head>
<title>Laravel 8 Ajax Multiple File Upload - Tutsmake.com</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<div class="container mt-5">

    @foreach ($allFiles as $allFile)

    @if($allFile->item_id == 2)
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('FileCompliant')}}/{{$allFile->filename}}" alt="Card image cap">
        <div class="card-body">
          <p class="card-text">{{$allFile->item->name}}</p>
        </div>
      </div>
    @endif

   

    
        
    @endforeach

    

</div>  

</body>
</html>

