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
                  <a href="{{ url('dashboard') }}" class="sidebar-menu__link">
                      <span class="icon"><i class="ph ph-squares-four"></i></span>
                      <span class="text">Dashboard</span>
                  </a>
              </li>
              <li class="sidebar-menu__item">
                <a href="{{ url('dashboard/progres') }}" class="sidebar-menu__link">
                    <span class="icon"><i class="ph ph-graduation-cap"></i></span>
                    <span class="text">Progres</span>
                </a>
              </li>
              <li class="sidebar-menu__item">
                  <a href="{{ url('dashboard/reminders') }}" class="sidebar-menu__link">
                      <span class="icon"><i class="ph ph-users-three"></i></span>
                      <span class="text">Reminder Bimbingan</span>
                  </a>
              </li>
              <li class="sidebar-menu__item">
                  <a href="{{ url('dashboard/statistik') }}" class="sidebar-menu__link">
                      <span class="icon"><i class="ph ph-chart-bar"></i></span>
                      <span class="text">Statistik</span>
                  </a>
              </li>
              <li class="sidebar-menu__item">
                  <span class="text-gray-300 text-sm px-20 pt-20 fw-semibold border-top border-gray-100 d-block text-uppercase">Settings</span>
              </li>
              <li class="sidebar-menu__item">
                  <a href="setting.html" class="sidebar-menu__link">
                      <span class="icon"><i class="ph ph-gear"></i></span>
                      <span class="text">Account Settings</span>
                  </a>
              </li>

              <li class="sidebar-menu__item has-dropdown">
                  <a href="javascript:void(0)" class="sidebar-menu__link">
                      <span class="icon"><i class="ph ph-shield-check"></i></span>
                      <span class="text">Authetication</span>
                  </a>
                  <!-- Submenu start -->
                  <ul class="sidebar-submenu">
                      <li class="sidebar-submenu__item">
                          <a href="sign-in.html" class="sidebar-submenu__link">Sign In</a>
                      </li>
                      <li class="sidebar-submenu__item">
                          <a href="sign-up.html" class="sidebar-submenu__link">Sign Up</a>
                      </li>
                      <li class="sidebar-submenu__item">
                          <a href="forgot-password.html" class="sidebar-submenu__link">Forgot Password</a>
                      </li>
                      <li class="sidebar-submenu__item">
                          <a href="reset-password.html" class="sidebar-submenu__link">Reset Password</a>
                      </li>
                      <li class="sidebar-submenu__item">
                          <a href="verify-email.html" class="sidebar-submenu__link">Verify Email</a>
                      </li>
                      <li class="sidebar-submenu__item">
                          <a href="two-step-verification.html" class="sidebar-submenu__link">Two Step Verification</a>
                      </li>
                  </ul>
                  <!-- Submenu End -->
              </li>
              
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