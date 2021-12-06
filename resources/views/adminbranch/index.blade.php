@extends('adminbranch.app')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.1/chart.min.js" integrity="sha512-O2fWHvFel3xjQSi9FyzKXWLTvnom+lOYR/AUEThL/fbP4hv1Lo5LCFCGuTXBRyKC4K4DJldg5kxptkgXAzUpvA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <div class="row mx-0 my-3">
        <h2 class="h2" style="font-family: 'Roboto Slab', serif;font-size: 35px;">Dashboard</h2>
    </div>
    <div class="row ms-2 me-4 my-3 px-2">
        <a href="#" id="card" class="col-md me-3 text-center border rounded-1" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0">
                <span>Customer</span>
                <h4>50</h4>
            </div>
        </a>
        <a href="#" class="col-md me-3 text-center border" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0">
                <span>Branch</span>
                <h4>50</h4>
            </div>  
        </a>
        <a href="#" class="col-md me-3 text-center border" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0">
                <span>Barber</span>
                <h4>50</h4>
            </div>
        </a>
        <a href="#" class="col-md me-3 text-center border" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0">
                <span>Produk</span>
                <h4>50</h4>
            </div>    
        </a>
    </div>
    <div class="row ms-4 me-2 p-0 px-2">
        <a href="#" class="col-md me-3 text-center border" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0">
                <span>Artikel</span>
                <h4>50</h4>
            </div>
        </a>
        <a href="#" class="col-md me-3 text-center border" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0">
                <span>Diskon</span>
                <h4>50</h4>
            </div>
        </a>
        <a href="#" class="col-md me-3 text-center border" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0">
                <span>Transaksi</span>
                <h4>50</h4>
            </div>
        </a>
        <a href="#" class="col-md me-3 text-center border" style="text-decoration:none;color:black;border-color:#DFE0EB !important;">
            <div class="py-3 my-0">
                <span>Order</span>
                <h4>50</h4>
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
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'Green', 'Purple', 'Orange'],
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
    });
    </script>
    </div>
@endsection