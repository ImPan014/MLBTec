@extends('layouts.app')



<!DOCTYPE html> 
<html>
	<head>
	<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" crossorigin="anonymous">
		<style>
			@media screen and (max-width: 400px){
			.sp{
				font-size:12px;
			}
			
			.logo{
				width:50px;
				height:50px;
			}
			
			}	
		</style>
	</head>       

  
  </div>
  <div class="card-body">
  @section('content')
  <div class="card text-center">
  <div class="card-header">
    EQUIPOS
  </div>
    @foreach ($partidos as $partido)
  	<div class="container">
		<div class="row">
			<div class="col-sm-12">	
				<div class="text-center">
                  	<span class="sp">{{ $partido->nombre }} </span>
					<img class="img-responsive logo" src="https://ssl.gstatic.com/onebox/media/sports/logos/z3JEQB3coEAGLCJBEUzQ2A_96x96.png" alt="">
					<span>VS</span>			
					<img class="img-responsive logo" src="https://ssl.gstatic.com/onebox/media/sports/logos/9toerdOg8xW4CRhDaZxsyw_96x96.png" alt="">
					<span class="sp">{{ $partido->nombre }} </span>
                </div>
				<div class="text-center">
					<span class="sp"> <input type="checkbox"> {{ $partido->fecha_nac }} - {{ $partido->hora }} 10:00AM </span> <br>
					<span class="sp">Estadio - Olimpico - El Higueral</span>
				</div>
				
	@endforeach			
        <div class="text-center">
				</div>   	
			</div>
		</div>
  	</div>
      <div class="card text-center">
  <div class="card-header"> 
    <a href="#" class="btn btn-primary">Ver detalles</a>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
@endsection
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
	</body>
</html>