<div id="sidebar" class="d-flex flex-column p-4">
  <div class="sidebar-header pb-4 mb-4">
    <h5 class="text-white fw-bold m-0">
      <i class="bi bi-beaker-fill text-info me-2"></i>LABORATORY
    </h5>
  </div>
  
  <ul class="nav nav-pills flex-column gap-2">
    <li class="nav-item">
      <a class="nav-link active" href="#">
        <i class="bi bi-speedometer2 me-2"></i> Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="bi bi-people me-2"></i> Users
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="bi bi-folder2-open me-2"></i> Projects
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="bi bi-gear me-2"></i> Settings
      </a>
    </li>
  </ul>

  <div class="mt-auto pt-4 border-top border-secondary">
    <a class="nav-link" href="{{ route('logout') }}"><i class="bi bi-box-arrow-left me-2"></i> Logout</a>
  </div>
</div>