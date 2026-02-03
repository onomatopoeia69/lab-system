
  <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom py-2 px-4 sticky-top">
  <div class="container-fluid p-0">
    
    <div class="d-flex align-items-center">
      <button id="toggleSidebar" class="btn btn-light border-0 rounded-circle me-3">
        <i class="bi bi-list fs-5"></i>
      </button>
      
      <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
        <ol class="breadcrumb m-0">
          <li class="breadcrumb-item text-muted small">Laboratory</li>
          <li class="breadcrumb-item active small fw-bold" aria-current="page text-dark">Dashboard</li>
        </ol>
      </nav>
    </div>

    <div class="ms-auto d-flex align-items-center gap-3">    

      <div class="vr mx-2 text-secondary opacity-25" style="height: 24px;"></div>

      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle gap-2" data-bs-toggle="dropdown">
          <div class="text-end d-none d-sm-block">
            <p class="mb-0 small fw-bold text-dark lh-1">{{ Auth::user()->name }}</p>
            <small class="text-muted" style="font-size: 0.75rem;">Administrator</small>
          </div>

          <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=0D8ABC&color=fff" 
               class="rounded-circle border" width="36" height="36" alt="Avatar">
          </a>
        <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 mt-2">
          <li><h6 class="dropdown-header">Manage Account</h6></li>
          <li><a class="dropdown-item py-2" href="#"><i class="bi bi-person me-2"></i>My Profile</a></li>
          <li><a class="dropdown-item py-2" href="#"><i class="bi bi-shield-check me-2"></i>Security</a></li>
        </ul>
      </div>
      
    </div>
  </div>
</nav>