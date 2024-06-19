<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-dark">
  <div class="offcanvas-md offcanvas-end bg-dark vh-100" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title text-white" id="sidebarMenuLabel">My Dashboard</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-white d-flex justify-content-between align-items-center" href="#dashboardSubmenu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="dashboardSubmenu">
            <span class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
              </svg>
              Dashboard
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
          </a>
          <div class="collapse" id="dashboardSubmenu">
            <ul class="nav flex-column ms-3 bg-secondary">
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Roadmap</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Event</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/user/index">Status</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>

      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white text-uppercase">
        <span>Vidio Tutorial</span>
      </h6>

      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link text-white d-flex justify-content-between align-items-center" href="#postCategorySubmenu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="postCategorySubmenu">
            <span class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4"/>
              </svg>
              Desain Grafis
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
          </a>
          <div class="collapse" id="postCategorySubmenu">
            <ul class="nav flex-column ms-3 bg-secondary">

              <li class="nav-item">
                <a class="nav-link text-white" href="#">Vidio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">Referensi</a>
              </li>

            </ul>
          </div>
        </li>
      </ul>

      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link text-white d-flex justify-content-between align-items-center" href="#tutorSubmenu" data-bs-toggle="collapse" aria-expanded="false" aria-controls="tutorSubmenu">
            <span class="d-flex align-items-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4"/>
              </svg>
              Tutor
            </span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
            </svg>
          </a>
          <div class="collapse" id="tutorSubmenu">
            <ul class="nav flex-column ms-3 bg-secondary">
              <li class="nav-item">
                <a class="nav-link text-white" href="/dashboard/categories/create">Create Category</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="/dashboard/categories/manage">Manage Categories</a>
              </li>
            </ul>
          </div>
        </li>
      </ul>

      @endcan

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-white text-uppercase">
        <span>DAFTAR KEGIATAN</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <svg class="bi"><use xlink:href="#plus-circle"/></svg>
        </a>
      </h6>
      <ul class="nav flex-column mb-auto">
        <!-- Additional menu items here -->
      </ul>

      <hr class="my-3">

      <ul class="nav flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link text-white {{ Request::is('dashboard/register') ? 'active' : '' }}" href="/dashboard/register">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
              <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
              <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
            </svg>
            Tambah User
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>

<style>
.sidebar .nav-link {
  color: white;
  background-color: transparent;
  transition: background-color 0.3s, color 0.3s;
}

.sidebar .nav-link.active {
  background-color: #007bff;
  border-radius: 0 0px 0px 0;
  color: white;
}

.sidebar .nav-link:hover {
  background-color: #33649897;
  border-radius: 0 0px 0px 0;
  color: white;
}

.sidebar .sidebar-heading {
  color: white;
}

.sidebar .btn-close {
  filter: invert(1);
}

.vh-100 {
  height: 100vh;
}

.sidebar {
  border: none;
  box-shadow: 0px 2px 6px rgb(2, 225, 254);
}

.bg-dark {
  background: linear-gradient(135deg, #0265a7, #0093b1, #06a787, #76cebc);
            background-size: 400% 400%;
            animation: gradientAnimation 15s ease infinite;
}

.bg-secondary {
  background-color: #61adb6 !important;
}

.nav-item .bi-chevron-down {
  transition: transform 0.3s;
}

.nav-item .collapse.show ~ a .bi-chevron-down {
  transform: rotate(180deg);
}
.sidebar {
    border: none;
    position: fixed;
}
.collapse {
    transition: height 0.3s ease;
}

@media (max-width: 991.98px) {
    .sidebar {
        position: relative;
        width: 100%;
        height: auto;
    }
}

.collapse {
    transition: height 0.3s ease;
}

</style>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js">

</script> --}}
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.querySelector('.sidebar');

    sidebar.addEventListener('click', function(event) {
      if (event.target.classList.contains('nav-link') && event.target.hasAttribute('data-bs-toggle')) {
        const targetId = event.target.getAttribute('href');
        const submenu = document.querySelector(targetId);

        if (submenu.classList.contains('show')) {
          bootstrap.Collapse.getOrCreateInstance(submenu).hide();
        } else {
          document.querySelectorAll('.collapse.show').forEach(openSubmenu => {
            bootstrap.Collapse.getOrCreateInstance(openSubmenu).hide();
          });
          bootstrap.Collapse.getOrCreateInstance(submenu).show();
        }
      }
    });
  });
</script>