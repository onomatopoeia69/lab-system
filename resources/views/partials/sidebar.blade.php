<div id="sidebar" class="d-flex flex-column p-4">
  <div class="sidebar-header pb-4 mb-4">
    <h5 class="text-white fw-bold m-0">
      <i class="bi bi-beaker-fill text-info me-2"></i>LABORATORY
    </h5>
  </div>
  
  <ul class="nav nav-pills flex-column gap-2">
    <li class="nav-item">
      <a class="nav-link " wire:current='active' href="{{ route('user.home') }}">
        <i class="bi bi-speedometer2 me-2"></i> Dashboard
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" wire:current='active' href="{{ route('user.users') }}">
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
        <i class="bi bi-book me-2"></i> Schedule
      </a>
    </li>

    {{-- <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="bi bi-hospital me-2"></i> Laboratories
      </a>
    </li> --}}

    <li class="nav-item">
      <a
        class="nav-link d-flex justify-content-between align-items-center"
        data-bs-toggle="collapse"
        href="#laboratoriesMenu"
        role="button"
        aria-expanded="false"
        aria-controls="laboratoriesMenu"
      >
        <span>
          <i class="bi bi-hospital me-2"></i>
          Laboratories
        </span>
        <i class="bi bi-chevron-down small"></i>
      </a>

      <ul class="collapse nav flex-column ms-4" id="laboratoriesMenu">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            Criminology Laboratory
          </a>

          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="#">Finger Print Lab</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Crime Scene Lab</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Ballistic Lab</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Questiones Document Lab</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Chemistry Lab</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Defense and Tactics Lab</a>
            </li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
            IT Laboratory
          </a>

          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="#">Computer Lab 1</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Computer Lab 2</a>
            </li>
            <li>
              <a class="dropdown-item" href="#">Computer Lab 3</a>
            </li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            Physics Laboratory
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            Psychological Laboratory
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">
            H.E Laboratory
          </a>
        </li>
      </ul>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#">
        <i class="bi bi-exclamation-octagon me-2"></i> Reports
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