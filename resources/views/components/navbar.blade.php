
<div class="flex-align gap-16">
  <!-- Toggle Button Start -->
   <button type="button" class="toggle-btn d-xl-none d-flex text-26 text-gray-500"><i class="ph ph-list"></i></button>
  <!-- Toggle Button End -->
  
  <form action="#" class="w-350 d-sm-block d-none">
      <div class="position-relative">
          <button type="submit" class="input-icon text-xl d-flex text-gray-100 pointer-event-none"><i class="ph ph-magnifying-glass"></i></button> 
          <input type="text" class="form-control ps-40 h-40 border-transparent focus-border-main-600 bg-main-50 rounded-pill placeholder-15" placeholder="Search...">
      </div>
  </form>
</div>

<div class="flex-align gap-16">
  <div class="flex-align gap-8">
      <!-- Notification Start -->
      <div class="dropdown">
          <button class="dropdown-btn shaking-animation text-gray-500 w-40 h-40 bg-main-50 hover-bg-main-100 transition-2 rounded-circle text-xl flex-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="position-relative">
                  <i class="ph ph-bell"></i>
                  <span class="alarm-notify position-absolute end-0"></span>
              </span>
          </button>
          <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
              <div class="card border border-gray-100 rounded-12 box-shadow-custom p-0 overflow-hidden">
                  <div class="card-body p-0">
                      <div class="py-8 px-24 bg-main-600">
                          <div class="flex-between">
                              <h5 class="text-xl fw-semibold text-white mb-0">Notifications</h5>
                              <div class="flex-align gap-12">
                                  <button type="button" class="bg-white rounded-6 text-sm px-8 py-2 hover-text-primary-600"> New </button>
                                  <button type="button" class="close-dropdown hover-scale-1 text-xl text-white"><i class="ph ph-x"></i></button>
                              </div>
                          </div>
                      </div>
                      @php
                      $notifications = Cache::get('notifications', []);
                  @endphp
  
                  @if ($notifications)
                      <div class="p-24">
                          @foreach ($notifications as $notification)
                              <div class="d-flex align-items-start gap-12 mb-24">
                                  <img src="{{ asset('admin/images/6.svg')}}" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                                  <div class="border-bottom border-gray-100 pb-24">
                                      <div class="flex-align gap-4">
                                          <a href="#" class="fw-medium text-15 mb-0 text-gray-300 hover-text-main-600 text-line-2">
                                              {{ $notification['message'] }}
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                  @else
                      <div class="p-24">
                          <p class="text-center text-gray-500">No new notifications</p>
                      </div>
                  @endif
                      <a href="#" class="py-13 px-24 fw-bold text-center d-block text-primary-600 border-top border-gray-100 hover-text-decoration-underline"> View All </a>

                  </div>
              </div>
          </div>
      </div>
      <!-- Notification Start -->
      
  </div>


  <!-- User Profile Start -->
  <div class="dropdown">
      <button class="users arrow-down-icon border border-gray-200 rounded-pill p-4 d-inline-block pe-40 position-relative" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="position-relative">
              <img src="{{ asset('admin/images/6.svg')}}" alt="Image" class="h-32 w-32 rounded-circle">
              <span class="activation-badge w-8 h-8 position-absolute inset-block-end-0 inset-inline-end-0"></span>
          </span>
      </button>
      <div class="dropdown-menu dropdown-menu--lg border-0 bg-transparent p-0">
          <div class="card border border-gray-100 rounded-12 box-shadow-custom">
              <div class="card-body">
                  <div class="flex-align gap-8 mb-20 pb-20 border-bottom border-gray-100">
                      <img src="{{ asset('admin/images/6.svg')}}" alt="" class="w-54 h-54 rounded-circle">
                      <div class="">
                          <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                          <p class="fw-medium text-13 text-gray-200">Role: {{ Auth::user()->role }}</p>
                      </div>
                  </div>
                  <ul class="max-h-270 overflow-y-auto scroll-sm pe-4">
                      <li class="mb-4">
                          <a href="{{ url('dashboard/progres') }}" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                              <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-chart-bar"></i></span>
                              <span class="text">Upgrade Progres</span>
                          </a>
                      </li>
                      <li class="mb-4">
                          <a href="{{ url('dashboard/statistik') }}" class="py-12 text-15 px-20 hover-bg-gray-50 text-gray-300 rounded-8 flex-align gap-8 fw-medium text-15">
                              <span class="text-2xl text-primary-600 d-flex"><i class="ph ph-chart-line-up"></i></span>
                              <span class="text">Total Statistic</span>
                          </a>
                      </li>
                      <li class="pt-8 border-top border-gray-100">
                        <a href="sign-in.html" class="py-12 text-15 px-20 hover-bg-danger-50 text-gray-300 hover-text-danger-600 rounded-8 flex-align gap-8 fw-medium text-15">
                              <span class="text-2xl text-danger-600 d-flex"><a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                        </a></span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                            
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </div>
  <!-- User Profile Start -->

</div>

<script>
    function createChart(chartId, chartColor) {

        let currentYear = new Date().getFullYear();

        var options = {
        series: [
            {
                name: 'series1',
                data: [18, 25, 22, 40, 34, 55, 50, 60, 55, 65],
            },
        ],
        chart: {
            type: 'area',
            width: 80,
            height: 42,
            sparkline: {
                enabled: true // Remove whitespace
            },

            toolbar: {
                show: false
            },
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        dataLabels: {
            enabled: false
        },
        stroke: {
            curve: 'smooth',
            width: 1,
            colors: [chartColor],
            lineCap: 'round'
        },
        grid: {
            show: true,
            borderColor: 'transparent',
            strokeDashArray: 0,
            position: 'back',
            xaxis: {
                lines: {
                    show: false
                }
            },   
            yaxis: {
                lines: {
                    show: false
                }
            },  
            row: {
                colors: undefined,
                opacity: 0.5
            },  
            column: {
                colors: undefined,
                opacity: 0.5
            },  
            padding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: 0
            },  
        },
        fill: {
            type: 'gradient',
            colors: [chartColor], // Set the starting color (top color) here
            gradient: {
                shade: 'light', // Gradient shading type
                type: 'vertical',  // Gradient direction (vertical)
                shadeIntensity: 0.5, // Intensity of the gradient shading
                gradientToColors: [`${chartColor}00`], // Bottom gradient color (with transparency)
                inverseColors: false, // Do not invert colors
                opacityFrom: .5, // Starting opacity
                opacityTo: 0.3,  // Ending opacity
                stops: [0, 100],
            },
        },
        // Customize the circle marker color on hover
        markers: {
            colors: [chartColor],
            strokeWidth: 2,
            size: 0,
            hover: {
                size: 8
            }
        },
        xaxis: {
            labels: {
                show: false
            },
            categories: [`Jan ${currentYear}`, `Feb ${currentYear}`, `Mar ${currentYear}`, `Apr ${currentYear}`, `May ${currentYear}`, `Jun ${currentYear}`, `Jul ${currentYear}`, `Aug ${currentYear}`, `Sep ${currentYear}`, `Oct ${currentYear}`, `Nov ${currentYear}`, `Dec ${currentYear}`],
            tooltip: {
                enabled: false,
            },
        },
        yaxis: {
            labels: {
                show: false
            }
        },
        tooltip: {
            x: {
                format: 'dd/MM/yy HH:mm'
            },
        },
        };

        var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
        chart.render();
    }

    // Call the function for each chart with the desired ID and color
    createChart('complete-course', '#2FB2AB');
    createChart('earned-certificate', '#27CFA7');
    createChart('course-progress', '#6142FF');
    createChart('community-support', '#FA902F');


    // =========================== Double Line Chart Start ===============================
    function createLineChart(chartId, chartColor) {
        var options = {
        series: [
            {
                name: 'Study',
                data: [8, 15, 9, 20, 10, 33, 13, 22, 8, 17, 10, 15],
            },
            {
                name: 'Test',
                data: [8, 24, 18, 40, 18, 48, 22, 38, 18, 30, 20, 28],
            },
        ],
        chart: {
            type: 'area',
            width: '100%',
            height: 300,
            sparkline: {
                enabled: false // Remove whitespace
            },
            toolbar: {
                show: false
            },
            padding: {
                left: 0,
                right: 0,
                top: 0,
                bottom: 0
            }
        },
        colors: ['#3D7FF9', chartColor],  // Set the color of the series
        dataLabels: {
            enabled: false,
        },
        stroke: {
            curve: 'smooth',
            width: 1,
            colors: ["#3D7FF9", chartColor],
            lineCap: 'round',
        },
        fill: {
            type: 'gradient',
            gradient: {
                shadeIntensity: 1,
                opacityFrom: 0.9,  // Decrease this value to reduce opacity
                opacityTo: 0.2,    // Decrease this value to reduce opacity
                stops: [0, 100]
            }
        },
        grid: {
            show: true,
            borderColor: '#E6E6E6',
            strokeDashArray: 3,
            position: 'back',
            xaxis: {
                lines: {
                    show: false
                }
            },   
            yaxis: {
                lines: {
                    show: true
                }
            },  
            row: {
                colors: undefined,
                opacity: 0.5
            },  
            column: {
                colors: undefined,
                opacity: 0.5
            },  
            padding: {
                top: 0,
                right: 0,
                bottom: 0,
                left: 0
            },  
        },
        // Customize the circle marker color on hover
        markers: {
            colors: ["#3D7FF9", chartColor],
            strokeWidth: 3,
            size: 0,
            hover: {
                size: 8
            }
        },
            xaxis: {
                labels: {
                    show: false
                },
                categories: [`Jan`, `Feb`, `Mar`, `Apr`, `May`, `Jun`, `Jul`, `Aug`, `Sep`, `Oct`, `Nov`, `Dec`],
                tooltip: {
                    enabled: false,        
                },
                labels: {
                    formatter: function (value) {
                        return value;
                    },
                    style: {
                        fontSize: "14px"
                    }
                },
            },
            yaxis: {
                    labels: {
                        formatter: function (value) {
                            return "$" + value + "Hr";
                        },
                        style: {
                            fontSize: "14px"
                        }
                    },
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            },
            legend: {
                show: false,
                position: 'top',
                horizontalAlign: 'right',
                offsetX: -10,
                offsetY: -0
            }
        };

        var chart = new ApexCharts(document.querySelector(`#${chartId}`), options);
        chart.render();
    }
    createLineChart('doubleLineChart', '#27CFA7');
    // =========================== Double Line Chart End ===============================

    // ================================= Multiple Radial Bar Chart Start =============================
    var options = {
        series: [100, 60, 25],
        chart: {
            height: 172,
            type: 'radialBar',
        },
        colors: ['#3D7FF9', '#27CFA7', '#020203'], 
        stroke: {
            lineCap: 'round',
        },
        plotOptions: {
            radialBar: {
                hollow: {
                    size: '30%',  // Adjust this value to control the bar width
                },
                dataLabels: {
                    name: {
                        fontSize: '16px',
                    },
                    value: {
                        fontSize: '16px',
                    },
                    total: {
                        show: true,
                        formatter: function (w) {
                            return '82%'
                        }
                    }
                }
            }
        },
        labels: ['Completed', 'In Progress', 'Not Started'],
    };

    var chart = new ApexCharts(document.querySelector("#radialMultipleBar"), options);
    chart.render();
    // ================================= Multiple Radial Bar Chart End =============================

    // ========================== Export Js Start ==============================
    document.getElementById('exportOptions').addEventListener('change', function() {
        const format = this.value;
        const table = document.getElementById('studentTable');
        let data = [];
        const headers = [];
        
        // Get the table headers
        table.querySelectorAll('thead th').forEach(th => {
            headers.push(th.innerText.trim());
        });

        // Get the table rows
        table.querySelectorAll('tbody tr').forEach(tr => {
            const row = {};
            tr.querySelectorAll('td').forEach((td, index) => {
                row[headers[index]] = td.innerText.trim();
            });
            data.push(row);
        });

        if (format === 'csv') {
            downloadCSV(data);
        } else if (format === 'json') {
            downloadJSON(data);
        }
    });

    function downloadCSV(data) {
        const csv = data.map(row => Object.values(row).join(',')).join('\n');
        const blob = new Blob([csv], { type: 'text/csv' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'students.csv';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }

    function downloadJSON(data) {
        const json = JSON.stringify(data, null, 2);
        const blob = new Blob([json], { type: 'application/json' });
        const url = URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.href = url;
        a.download = 'students.json';
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }
    // ========================== Export Js End ==============================
    
</script>