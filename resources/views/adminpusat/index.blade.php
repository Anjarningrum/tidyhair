@extends('adminpusat.app')
@section('content')
<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4 border">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">   
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.1/chart.min.js" integrity="sha512-O2fWHvFel3xjQSi9FyzKXWLTvnom+lOYR/AUEThL/fbP4hv1Lo5LCFCGuTXBRyKC4K4DJldg5kxptkgXAzUpvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <input type="hidden" name="csrf-token" value="{{ csrf_token() }}">
    <div class="row mx-0 my-3">
        <h2 class="h2" style="font-family: 'Roboto Slab', serif;font-size: 35px;">Dashboard</h2>
    </div>
    <div class="row ms-2 me-4 my-3 px-2">
        <a href="#" id="card" class="col-md me-3 text-center border rounded-1" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0" onclick="customerchart()">
                <span>Customer</span>
            </div>
        </a>
        <a href="#" class="col-md me-3 text-center border" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0" onclick="branchchart()">
                <span>Branch</span>
            </div>  
        </a>
        <a href="#" class="col-md me-3 text-center border" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0" onclick="barberchart()">
                <span>Barber</span>
            </div>
        </a>
        <a href="#" class="col-md me-3 text-center border" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0" onclick="produkchart()">
                <span>Barang</span>
            </div>    
        </a>
    </div>
    <div class="row ms-4 me-2 p-0 px-2">
        <a href="#" class="col-md me-3 text-center border" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0" onclick="jasachart()">
                <span>Jasa</span>
            </div>
        </a>
        <a href="#" class="col-md me-3 text-center border" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0" onclick="artikelchart()">
                <span>Artikel</span>
            </div>
        </a>
        <a href="#" class="col-md me-3 text-center border" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0" onclick="transaksichart()">
                <span>Transaksi</span>
            </div>
        </a>
    </div>
    <div class="row ms-2 me-2 my-2 p-0 px-2">
    <canvas id="myChart"></canvas>
    <script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    '#5048E5',
                ],
                borderColor: [
                    '#5048E5',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: false
                }
            }
        },
    }   
    );
    async function produkchart(){
                      console.log('produk clicked');
                      var data = [];
                      const res = await fetch('/adminpusat/getproduk', {
                      method: 'GET', 
                      headers: {
                          'Content-Type': 'application/json',
                          'Accept': 'application/json',
                          "X-CSRF-Token": document.querySelector('input[name=csrf-token]').value
                      },
                      }).then((res) => {
                          return res.json();
                      }).then(res => {
                        console.log(res);
                        for (var i in res) {
                              data.push(res[i])
                          }
                          myChart.data.datasets[0].data = data;
                          myChart.update();
                      });
                      
                    }

    async function customerchart(){
                      console.log('produk clicked');
                      var data = [];
                      const res = await fetch('/adminpusat/getcustomer', {
                      method: 'GET', 
                      headers: {
                          'Content-Type': 'application/json',
                          'Accept': 'application/json',
                          "X-CSRF-Token": document.querySelector('input[name=csrf-token]').value
                      },
                      }).then((res) => {
                          return res.json();
                      }).then(res => {
                        console.log(res);
                        for (var i in res) {
                              data.push(res[i])
                          }
                          myChart.data.datasets[0].data = data;
                          myChart.update();
                      });
                      
              }

              async function branchchart(){
                      console.log('produk clicked');
                      var data = [];
                      const res = await fetch('/adminpusat/getbranch', {
                      method: 'GET', 
                      headers: {
                          'Content-Type': 'application/json',
                          'Accept': 'application/json',
                          "X-CSRF-Token": document.querySelector('input[name=csrf-token]').value
                      },
                      }).then((res) => {
                          return res.json();
                      }).then(res => {
                        console.log(res);
                        for (var i in res) {
                              data.push(res[i])
                          }
                          myChart.data.datasets[0].data = data;
                          myChart.update();
                      });
                      
              }

              async function barberchart(){
                      console.log('produk clicked');
                      var data = [];
                      const res = await fetch('/adminpusat/getbarber', {
                      method: 'GET', 
                      headers: {
                          'Content-Type': 'application/json',
                          'Accept': 'application/json',
                          "X-CSRF-Token": document.querySelector('input[name=csrf-token]').value
                      },
                      }).then((res) => {
                          return res.json();
                      }).then(res => {
                        console.log(res);
                        for (var i in res) {
                              data.push(res[i])
                          }
                          myChart.data.datasets[0].data = data;
                          myChart.update();
                      });
                      
              }

              async function jasachart(){
                      console.log('produk clicked');
                      var data = [];
                      const res = await fetch('/adminpusat/getjasa', {
                      method: 'GET', 
                      headers: {
                          'Content-Type': 'application/json',
                          'Accept': 'application/json',
                          "X-CSRF-Token": document.querySelector('input[name=csrf-token]').value
                      },
                      }).then((res) => {
                          return res.json();
                      }).then(res => {
                        console.log(res);
                        for (var i in res) {
                              data.push(res[i])
                          }
                          myChart.data.datasets[0].data = data;
                          myChart.update();
                      });
                      
              }
    </script>
    </div>
</div>

<div class="col-md-9 ms-sm-auto col-lg-9 px-md-4">

</div>
@endsection