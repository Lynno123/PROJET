@include('head')
@include('header')


<main>
   
      {{-- <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light" _msthash="1198730" _msttexthash="1839409">Bienvenue sur la page d'accueil</h1>
          <p class="lead text-muted" _msthash="1151670" _msttexthash="20527676"></p>
          <p>
            <a href="{{ route('users') }}" class="btn btn-primary my-2" _msthash="1360541" _msttexthash="2065557">Profil</a>
          </p>
        </div>
      </div> --}}



        <section class="py-5 text-center container">
          <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
        <canvas id="myChart" class="align-self-center" style="width:100%;max-width:700px"></canvas>

<script>
var xyValues = [
  {x:50, y:7},
  {x:60, y:8},
  {x:70, y:8},
  {x:80, y:9},
  {x:90, y:9},
  {x:100, y:9},
  {x:110, y:10},
  {x:120, y:11},
  {x:130, y:14},
  {x:140, y:14},
  {x:150, y:15}
];

new Chart("myChart", {
  type: "scatter",
  data: {
    datasets: [{
      pointRadius: 4,
      pointBackgroundColor: "rgb(1,2,255)",
      data: xyValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      xAxes: [{ticks: {min: 40, max:160}}],
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});
</script>
<br>
<h1><u> Chart graphique</u></h1>

     </div>
  </div>
</section>
  
  </main>