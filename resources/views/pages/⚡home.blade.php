<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new 
#[Layout('layouts.home',['title' => 'Laboratory'])]
class extends Component
{
  
};
?>

<div class="p-4">

    <div class="container-fluid p-4">

      <h3 class="mb-4">Dashboard</h3>

      <div class="row g-3 mb-4">

       <div class="col-md-3">
          <div class="card shadow-sm">
              <div class="card-body d-flex align-items-center justify-content-between ">
            <div>
                <h6 class="text-muted mb-1">Equipments</h6>
                <h3 class="mb-0">8</h3>
            </div>
            <div>
                <i class="bi bi-box-seam fs-1 text-dark"></i>
            </div>
              </div>
          </div>
      </div>

       <div class="col-md-3">
          <div class="card shadow-sm">
              <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h6 class="text-muted mb-1">Users</h6>
                <h3 class="mb-0">8</h3>
            </div>
            <div>
                <i class="bi bi-people-fill fs-1 text-dark"></i>
            </div>
              </div>
          </div>
      </div> 

       <div class="col-md-3">
          <div class="card shadow-sm">
              <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h6 class="text-muted mb-1">For Repair</h6>
                <h3 class="mb-0">0</h3>
            </div>
            <div>
                <i class="bi bi-wrench-adjustable fs-1 text-dark"></i>
            </div>
              </div>
          </div>
      </div> 


        <div class="col-md-3">
          <div class="card shadow-sm">
              <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h6 class="text-muted mb-1">Scheduled</h6>
                <h3 class="mb-0">0</h3>
            </div>
            <div>
                <i class="bi bi-alarm fs-1 text-dark"></i>
            </div>
              </div>
          </div>
      </div> 

       <div class="col-md-3">
          <div class="card shadow-sm">
              <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h6 class="text-muted mb-1">Requests</h6>
                <h3 class="mb-0">1</h3>
            </div>
            <div>
                <i class="bi bi-clipboard-check fs-1 text-dark"></i>
            </div>
              </div>
          </div>
      </div> 


      <div class="col-md-3">
          <div class="card shadow-sm">
              <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h6 class="text-muted mb-1">Overdue</h6>
                <h3 class="mb-0">0</h3>
            </div>
            <div>
                <i class="bi bi-hourglass-bottom fs-1 text-dark"></i>
            </div>
              </div>
          </div>
      </div> 

      <div class="col-md-3">
          <div class="card shadow-sm">
              <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h6 class="text-muted mb-1">Available</h6>
                 <h3 class="mb-0">0</h3>
            </div>
            <div>
                <i class="bi bi-check-circle fs-1 text-dark"></i>
            </div>
              </div>
          </div>
      </div> 

      <div class="col-md-3">
          <div class="card shadow-sm">
              <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h6 class="text-muted mb-1">In Use</h6>
                <h3 class="mb-0">0</h3>
            </div>
            <div>
                <i class="bi bi-arrow-left-right fs-1 text-dark"></i>
            </div>
              </div>
          </div>
      </div> 


 
      <div class="row g-4">
        
        <div class="col-md-6"> 
          <div class="card shadow-sm">
            <div class="card-body">
              <h6 class="text-muted mb-1">Charts</h6>
               <div>
                  <canvas id="myChart"></canvas>
                </div>
            </div>
          </div>
        </div>
        
     <div class="col-md-6">
       <div class="card shadow-sm">
        <div class="card-body">
          <h6 class="text-muted mb-4">Labs Capacity</h6>

          <div class="mb-3">
            <strong>Computer Lab</strong>
            <div class="progress mt-1" style="height: 6px;">
              <div class="progress-bar bg-success" role="progressbar" style="width: 70%"></div>
            </div>
            <small class="text-muted">70% capacity</small>
          </div>

          <div>
            <strong>Other Labs</strong>
            <div class="progress mt-1" style="height: 6px;">
              <div class="progress-bar bg-success" role="progressbar" style="width: 30%"></div>
            </div>
            <small class="text-muted">30% capacity</small>
          </div>

        </div>
      </div>
    </div>
        
    </div>


    


      </div>
      
    </div>

    </div>
    

    
  </div>


@script
<script>



  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
         borderColor: '#36A2EB',
          backgroundColor: '#10b981',
        label: 'sample',
        data: [12, 19, 3, 5, 2, 3],
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
@endscript

