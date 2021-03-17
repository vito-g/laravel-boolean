@foreach ($cars as $key => $car)
  {{$car->model}}
  {{$car->typology}} <br>
@endforeach
