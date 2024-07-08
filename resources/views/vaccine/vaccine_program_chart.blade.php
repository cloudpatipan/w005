@extends('layouts.app')

@section('title')
  Vaccine Record Year 2023
@endsection

@section('content')
<h1>Vaccine Record Year 2023</h1>
<canvas id="myChart" height="200px"></canvas>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">

var labels = {!! json_encode($VaccineCountsByProgram->keys()) !!};
var datas = {!! json_encode($VaccineCountsByProgram->values()) !!}; // Assuming vaccine_count is the value column

const data = {
  labels: labels,
  datasets: [{
    label: 'Vaccine Count by Program (2023)',
    backgroundColor: 'rgb(255, 99, 132)',
    borderColor: 'rgb(255, 99, 132)',
    data: datas,
  }]
};

const config = {
  type: 'bar',
  data: data,
  options: {}
};

const myChart = new Chart(
  document.getElementById('myChart'),
  config
);
</script>

@endsection