@extends('layouts.admin')

@section('content')
<style>
    .graph{
        width: 50%;
        height: 300px;
        display: inline-block;
    }
    .messages{
        border: 2px solid;
       border-radius: 12px;
        width: 500px;;
        display: inline-block;
        float: right;
        margin-top: 50px;
    }
 
    
 </style>

<div class="container">
  <div class="graph">
    <canvas id="myChart"></canvas>
  </div>
  <div class="messages">
      <h2 style="text-align: center;">Inbox</h2>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">S.N</th>
            <th scope="col">Name</th>
            <th scope="col">Subject</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contact as $item)
                
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->subject}}</td>
                
            </tr>
            @endforeach
          
        </tbody>
      </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>

@endsection
