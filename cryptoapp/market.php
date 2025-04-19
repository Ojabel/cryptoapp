<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Cryptocurrency Dashboard</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
     </head>
  <body>

   

    <!-- End Header -->

    <!-- Today's date -->
    <div class="container py-3">
      <div class="row">
        <div class="col-12">
          <div class="text-white mt-3 ms-2">
            <span class="text-secondary">Today:</span>
            <span id="date"></span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Today's date -->
    
    <!-- Main -->
    <main class="container py-3">

      <!-- End Statistics -->

      <!-- Table -->
      <div class="row">
        <div class="col-12">
          <div class="card bg-dark p-4 mb-4">
            <div class="card-body">
              <div id="crypto" class="table-responsive"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Table -->
    
    </main>
    <!-- End Main -->

    <!-- Scripts -->

    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.37.0/apexcharts.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="js/scripts.js"></script>

  </body>
</html>