@foreach ($cars as $key => $car)
  <b>{{$car->model}}: </b>
  {{$car->typology}}<br>
@endforeach
