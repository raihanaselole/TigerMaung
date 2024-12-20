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

<script>
    function confirmLogout() {
        return confirm("Apakah Anda yakin ingin keluar?");
    }
</script>