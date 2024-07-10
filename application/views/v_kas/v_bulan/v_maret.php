<div class="main-content">
        <section class="section">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-stats">
                  <div class="card-stats-title">Statistik 
                    <div class="dropdown d-inline">
                      <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">Maret</a>
                      <?php $this->load->view('v_kas/list_kotak'); ?>
                    </div>
                  </div>
                  <div class="card-stats-items">
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"><?php foreach($maret_jumlahkm as $djkm){if($djkm == NULL){echo "-";}else{echo $djkm->total;}} ?></div>
                      <div class="card-stats-item-label">Kas Masuk</div>
                    </div>
                    <div class="card-stats-item"></div>
                    <div class="card-stats-item">
                      <div class="card-stats-item-count"><?php foreach($maret_jumlahkk as $djkk){if($djkk == NULL){echo "-";}else{echo $djkk->total;}} ?></div>
                      <div class="card-stats-item-label">Kas Keluar</div>
                    </div>
                  </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-archive"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total</h4>
                  </div>
                  <div class="card-body">
                   <?php foreach($maret_total as $dt){echo $dt->total; } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="balance-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Kas Masuk</h4>
                  </div>
                  <div class="card-body">
                    <h5>Rp. <?php foreach($maret_totalkm as $d_tkm){if($d_tkm->nominal == NULL){echo '- Tidak ada Kas Masuk';}else{echo number_format($d_tkm->nominal, 0, ".", ".");}} ?></h5>
                    <!-- <h5><?php echo $sikat = "SELECT SUM(nominal) AS nominal, created FROM tb_kas WHERE DATE_FORMAT(created, '%m') = 12 AND jenis_kas = 'km'"; ?></h5> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <div class="card card-statistic-2">
                <div class="card-chart">
                  <canvas id="sales-chart" height="80"></canvas>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                  <i class="fas fa-shopping-bag"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Kas Keluar</h4>
                  </div>
                  <div class="card-body">
                    <h5>Rp. <?php foreach($maret_totalkk as $d_tkk){if($d_tkk->nominal == NULL){echo '- Tidak ada Kas Keluar';}else{echo number_format($d_tkk->nominal, 0, ".", "."); }} ?></h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Grafik Kas Masuk dan Keluar</h4>
                </div>
                <div class="card-body">
                  <canvas id="myChart_mar" height="158"></canvas>
                </div>
              </div>
            </div>
            
            <!-- <div class="col-lg-4">
              <div class="card gradient-bottom">
                <div class="card-header">
                  <h4>Kas Masuk & Keluar</h4>
                </div>
                <div class="card-body" id="top-5-scroll">
                  <ul class="list-unstyled list-unstyled-border">
                    <li class="media">
                      <img class="mr-3 rounded" width="55" src="<?php echo base_url(); ?>assets/img/products/product-3-50.png" alt="product">
                      <div class="media-body">
                        <div class="media-title">oPhone S9 Limited</div>
                        <div class="mt-1">
                          <div class="budget-price">
                            <div class="budget-price-square bg-primary" data-width="64%"></div>
                            <div class="budget-price-label">$68,714</div>
                          </div>
                          <div class="budget-price">
                            <div class="budget-price-square bg-danger" data-width="43%"></div>
                            <div class="budget-price-label">$38,700</div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="card-footer pt-3 d-flex justify-content-center">
                  <div class="budget-price justify-content-center">
                    <div class="budget-price-square bg-primary" data-width="20"></div>
                    <div class="budget-price-label">Kas Masuk</div>
                  </div>
                  <div class="budget-price justify-content-center">
                    <div class="budget-price-square bg-danger" data-width="20"></div>
                    <div class="budget-price-label">Kas Keluar</div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          
       </section>

       <script>
        var ctx = document.getElementById("myChart_mar").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Maret"],
                datasets: [{
                        label: 'Kas Masuk',
                        data:[ <?php foreach($maret_km as $dm){ echo $dm->total; } ?> ],
                        borderWidth: 2,
                        backgroundColor: 'rgba(63,82,227,.8)',
                        borderWidth: 0,
                        borderColor: 'transparent',
                        pointBorderWidth: 0,
                        pointRadius: 3.5,
                        pointBackgroundColor: 'transparent',
                        pointHoverBackgroundColor: 'rgba(63,82,227,.8)',
                    },
                    {
                        label: 'Kas Keluar',
                        data: [<?php foreach($maret_kk as $dk){ echo $dk->total; } ?>],
                        borderWidth: 2,
                        backgroundColor: 'rgba(254,86,83,.7)',
                        borderWidth: 0,
                        borderColor: 'transparent',
                        pointBorderWidth: 0,
                        pointRadius: 3.5,
                        pointBackgroundColor: 'transparent',
                        pointHoverBackgroundColor: 'rgba(254,86,83,.8)',
                    }
                ]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            // display: false,
                            drawBorder: false,
                            color: '#f2f2f2',
                        },
                        ticks: {
                            beginAtZero: true,
                            stepSize: 0,
                            callback: function(value, index, values) {
                                return 'Rp.' + value;
                            }
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            display: false,
                            tickMarkLength: 15,
                        }
                    }]
                },
            }
        });

        var balance_chart = document.getElementById("balance-chart").getContext('2d');

        var balance_chart_bg_color = balance_chart.createLinearGradient(0, 0, 0, 70);
        balance_chart_bg_color.addColorStop(0, 'rgba(63,82,227,.2)');
        balance_chart_bg_color.addColorStop(1, 'rgba(63,82,227,0)');

        var myChart = new Chart(balance_chart, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Balance',
                    data: [70, 62, 44, 40, 21, 63, 82, 52, 50, 31, 70, 50, 91, 63, 51, 60],
                    backgroundColor: balance_chart_bg_color,
                    borderWidth: 3,
                    borderColor: 'rgba(63,82,227,1)',
                    pointBorderWidth: 0,
                    pointBorderColor: 'transparent',
                    pointRadius: 3,
                    pointBackgroundColor: 'transparent',
                    pointHoverBackgroundColor: 'rgba(63,82,227,1)',
                }]
            },
            options: {
                layout: {
                    padding: {
                        bottom: -1,
                        left: -1
                    }
                },
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            beginAtZero: true,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display: false,
                        },
                        ticks: {
                            display: false
                        }
                    }]
                },
            }
        });

        var sales_chart = document.getElementById("sales-chart").getContext('2d');

        var sales_chart_bg_color = sales_chart.createLinearGradient(0, 0, 0, 80);
        balance_chart_bg_color.addColorStop(0, 'rgba(63,82,227,.2)');
        balance_chart_bg_color.addColorStop(1, 'rgba(63,82,227,0)');

        var myChart = new Chart(sales_chart, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Sales',
                    data: [70, 62, 44, 40, 21, 63, 82, 52, 50, 31, 70, 50, 91, 63, 51, 60],
                    borderWidth: 2,
                    backgroundColor: balance_chart_bg_color,
                    borderWidth: 3,
                    borderColor: 'rgba(63,82,227,1)',
                    pointBorderWidth: 0,
                    pointBorderColor: 'transparent',
                    pointRadius: 3,
                    pointBackgroundColor: 'transparent',
                    pointHoverBackgroundColor: 'rgba(63,82,227,1)',
                }]
            },
            options: {
                layout: {
                    padding: {
                        bottom: -1,
                        left: -1
                    }
                },
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            beginAtZero: true,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display: false,
                        },
                        ticks: {
                            display: false
                        }
                    }]
                },
            }
        });

        $("#products-carousel").owlCarousel({
            items: 3,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 5000,
            loop: true,
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
       </script>