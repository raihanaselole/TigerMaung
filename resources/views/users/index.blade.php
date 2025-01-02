<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title> Dashboard Admin</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/images/4.svg')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin/css/bootstrap.min.css')}}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('admin/css/file-upload.css')}}">
    <!-- file upload -->
    <link rel="stylesheet" href="{{ asset('admin/css/plyr.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <!-- full calendar -->
    <link rel="stylesheet" href="{{ asset('admin/css/full-calendar.css')}}">
    <!-- jquery Ui -->
    <link rel="stylesheet" href="{{ asset('admin/css/jquery-ui.css')}}">
    <!-- editor quill Ui -->
    <link rel="stylesheet" href="{{ asset('admin/css/editor-quill.css')}}">
    <!-- apex charts Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/apexcharts.css')}}">
    <!-- calendar Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/calendar.css')}}">
    <!-- jvector map Css -->
    <link rel="stylesheet" href="{{ asset('admin/css/jquery-jvectormap-2.0.5.css')}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('admin/css/main.css')}}">
    <link rel="stylesheet" href="{{ asset('admin/css/alertadmin.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
</head> 
<body>
    
<!--==================== Preloader Start ====================-->
  <div class="preloader">
    <div class="loader"></div>
  </div>
<!--==================== Preloader End ====================-->

<!--==================== Sidebar Overlay End ====================-->
<div class="side-overlay"></div>
<!--==================== Sidebar Overlay End ====================-->

    <!-- ============================ Sidebar Start ============================ -->

    <aside class="sidebar">
        <!-- sidebar close btn -->
         <button type="button" class="sidebar-close-btn text-gray-500 hover-text-white hover-bg-main-600 text-md w-24 h-24 border border-gray-100 hover-border-main-600 d-xl-none d-flex flex-center rounded-circle position-absolute"><i class="ph ph-x"></i></button>
        <!-- sidebar close btn -->
        
        <a href="index.html" class="sidebar__logo text-center p-20 position-sticky inset-block-start-0 bg-white w-35 px z-1 pb-10">
            <img src="{{ asset('admin/images/6.svg')}}" alt="Logo">
        </a>
      
        <div class="sidebar-menu-wrapper overflow-y-auto scroll-sm">
            <div class="p-20 pt-10">
                <ul class="sidebar-menu">
                    <li class="sidebar-menu__item">
                        <a href="{{ url('/users') }}" class="sidebar-menu__link">
                            <span class="icon"><i class="ph ph-squares-four"></i></span>
                            <span class="text">Daftar Pengguna</span>
                        </a>
                    </li>
                    <li class="sidebar-menu__item">
                      <form action="{{ url('logout') }}" method="POST" class="sidebar-menu__link" 
                            style="display: flex; align-items: center; gap: 10px; color: #dc3545; background-color: transparent; border: none; width: 100%; text-align: start; padding: 8px 12px; border-radius: 4px; transition: color 0.3s, background-color 0.3s; cursor: pointer;" 
                            onsubmit="return confirmLogout();">
                          @csrf
                          <button type="submit" style="display: flex; align-items: center; gap: 10px; color: inherit; background-color: inherit; border: none; width: 100%; text-align: start; padding: 0;">
                              <span class="icon"><i class="ph ph-sign-out"></i></span>
                              <span class="text">Logout</span>
                          </button>
                      </form>
                  </li>
                               
                        <!-- Submenu End --> 
                </ul>
            </div>
            <div class="p-20 pt-80">
                <div class="bg-main-50 p-20 pt-0 rounded-16 text-center mt-74">
                    <span class="border border-5 bg-white mx-auto border-primary-50 w-114 h-114 rounded-circle flex-center text-success-600 text-2xl translate-n74">
                        <img src="assets/images/icons/certificate.png" alt="" class="centerised-img">
                    </span>
                    <div class="mt-n74">
                        <h5 class="mb-4 mt-22">Get Pro Certificate</h5>
                        <p class="">Explore 400+ courses with lifetime members</p>
                        <a href="pricing-plan.html" class="btn btn-main mt-16 rounded-pill">Get Access</a>
                    </div>
                </div>
            </div>
        </div>
      
      </aside>
<!-- ============================ Sidebar End  ============================ -->

    <div class="dashboard-main-wrapper">
        <div class="top-navbar flex-between gap-16">

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
                            <div class="p-24 max-h-270 overflow-y-auto scroll-sm">
                                <div class="d-flex align-items-start gap-12">
                                    <img src="assets/images/thumbs/notification-img1.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                                    <div class="border-bottom border-gray-100 mb-24 pb-24">
                                        <div class="flex-align gap-4">
                                            <a href="#" class="fw-medium text-15 mb-0 text-gray-300 hover-text-main-600 text-line-2">Ashwin Bose is requesting access to Design File - Final Project. </a>
                                            <!-- Three Dot Dropdown Start -->
                                            <div class="dropdown flex-shrink-0">
                                                <button class="text-gray-200 rounded-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ph-fill ph-dots-three-outline"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu--md border-0 bg-transparent p-0">
                                                    <div class="card border border-gray-100 rounded-12 box-shadow-custom">
                                                        <div class="card-body p-12">
                                                            <div class="max-h-200 overflow-y-auto scroll-sm pe-8">
                                                                <ul>
                                                                    <li class="mb-0">
                                                                        <a href="#" class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                            <span class="text">Mark as read</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="mb-0">
                                                                        <a href="#" class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                            <span class="text">Delete Notification</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="mb-0">
                                                                        <a href="#" class="py-6 text-15 px-8 hover-bg-gray-50 text-gray-300 rounded-8 fw-normal text-xs d-block">
                                                                            <span class="text">Report</span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Three Dot Dropdown End -->
                                        </div>
                                        <div class="flex-align gap-6 mt-8">
                                            <img src="assets/images/icons/google-drive.png" alt="">
                                            <div class="flex-align gap-4">
                                                <p class="text-gray-900 text-sm text-line-1">Design brief and ideas.txt</p>
                                                <span class="text-xs text-gray-200 flex-shrink-0">2.2 MB</span>
                                            </div>
                                        </div>
                                        <div class="mt-16 flex-align gap-8">
                                            <button type="button" class="btn btn-main py-8 text-15 fw-normal px-16">Accept</button>
                                            <button type="button" class="btn btn-outline-gray py-8 text-15 fw-normal px-16">Decline</button>
                                        </div>
                                        <span class="text-gray-200 text-13 mt-8">2 mins ago</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start gap-12">
                                    <img src="assets/images/thumbs/notification-img2.png" alt="" class="w-48 h-48 rounded-circle object-fit-cover">
                                    <div class="">
                                        <a href="#" class="fw-medium text-15 mb-0 text-gray-300 hover-text-main-600 text-line-2">Patrick added a comment on Design Assets - Smart Tags file:</a>
                                        <span class="text-gray-200 text-13">2 mins ago</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="py-13 px-24 fw-bold text-center d-block text-primary-600 border-top border-gray-100 hover-text-decoration-underline"> View All </a>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Notification Start -->

            <!-- Language Start -->
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
                            <li class="pt-8 border-top border-gray-100">
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
</div>

<div class="dashboard-body">
    <table id="studentTable" class="table table-striped">
        <thead>
            <tr>
                <th class="fixed-width"></th>
                <th class="h6 text-gray-300">Nama Pengguna</th>
                <th class="h6 text-gray-300" style="text-align: center;">Email</th>
                <th class="h6 text-gray-300" style="text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="fixed-width"></td>
                    <td style="text-align: center; vertical-align: middle;">
                        <div class="flex-align gap-8">
                            <img src="{{ asset('admin/images/6.svg')}}" alt="" class="w-40 h-40 rounded-circle">
                            <span class="h6 mb-0 fw-medium text-gray-300">{{ $user->name }}</span>
                        </div>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <span class="h6 mb-0 fw-medium text-gray-300">{{ $user->email }}</span>
                    </td>
                    <td style="text-align: center; vertical-align: middle;">
                        <a href="{{ url('users/show', $user->id) }}" class="btn btn-primary"><i class="far fa-eye"></i> Lihat</a> |
                        <form action="{{ url('users/destroy', $user->id) }}" method="POST" class="d-inline delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-delete">
                                <i class="far fa-trash-alt"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

        
        <div class="dashboard-footer">
    <div class="flex-between flex-wrap gap-16">
        <p class="text-gray-300 text-13 fw-normal"> &copy; Copyright Edmate 2024, All Right Reserverd</p>
        <div class="flex-align flex-wrap gap-16">
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">License</a>
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">More Themes</a>
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">Documentation</a>
            <a href="#" class="text-gray-300 text-13 fw-normal hover-text-main-600 hover-text-decoration-underline">Support</a>
        </div>
    </div>
</div>
    </div>
    
          <!-- Jquery js -->
    <script src="{{ asset('admin/js/jquery-3.7.1.min.js')}}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('admin/js/boostrap.bundle.min.js')}}"></script>
    <!-- Phosphor Js -->
    <script src="{{ asset('admin/js/phosphor-icon.js')}}"></script>
    <!-- file upload -->
    <script src="{{ asset('admin/js/file-upload.js')}}"></script>
    <!-- file upload -->
    <script src="{{ asset('admin/js/plyr.js')}}"></script>
    <!-- dataTables -->
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <!-- full calendar -->
    <script src="{{ asset('admin/js/full-calendar.js')}}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('admin/js/jquery-ui.js')}}"></script>
    <!-- jQuery UI -->
    <script src="{{ asset('admin/js/editor-quill.js')}}"></script>
    <!-- apex charts -->
    <script src="{{ asset('admin/js/apexcharts.min.js')}}"></script>
    <!-- Calendar Js -->
    <script src="{{ asset('admin/js/calendar.js')}}"></script>
    <!-- jvectormap Js -->
    <script src="{{ asset('admin/js/jquery-jvectormap-2.0.5.min.js')}}"></script>
    <!-- jvectormap world Js -->
    <script src="{{ asset('admin/js/jquery-jvectormap-world-mill-en.js')}}"></script>
    
    <!-- main js -->
    <script src="{{ asset('admin/js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admin/js/alertadmin.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        function confirmLogout() {
            return confirm("Apakah Anda yakin ingin keluar?");
        }
    </script> 




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
    
    
    </body>
</html>