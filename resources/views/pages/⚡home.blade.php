<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new 
#[Layout('layouts.home',['title' => 'Login'])]
class extends Component
{
    public function logout()
    {

        auth()->logout();

        session()->invalidate();  
        session()->regenerateToken();

        return redirect()->route('user.login');
    }
};
?>

<div>
 <div class="app-container">
    <header class="top-navbar">
        <!-- Left: Menu Button -->
        <button class="sidebar-menu-button" id="topMenuBtn">
            <span class="material-symbols-rounded">menu</span>
        </button>

        <!-- Center: Search -->
        <div class="nav-search">
            <span class="material-symbols-rounded">search</span>
            <input type="text" placeholder="Search..." />
        </div>

        <!-- Right: Icons -->
        <div class="nav-actions">
            <button class="icon-btn">
            <span class="material-symbols-rounded">notifications</span>
            <span class="notif-dot"></span>
            </button>

            <div class="profile">
            <img src="profile.jpg" alt="Profile" />
            </div>
        </div>
         <div class="d-flex justify-content-center align-items-center">
        <button wire:click='logout'>Logout</button>
    </div>
    </header>


      <!-- Mobile Sidebar Menu Button -->
      <button class="sidebar-menu-button">
        <span class="material-symbols-rounded">menu</span>
      </button>
      <aside class="sidebar">
        <!-- Sidebar Header -->
        <header class="sidebar-header">
          <a href="#" class="header-logo">
            <img src="logo.ito" alt="Lab-Sys" />
          </a>
          <button class="sidebar-toggler">
            <span class="material-symbols-rounded"></span>
          </button>
        </header>
        <nav class="sidebar-nav">
          <!-- Primary Top Nav -->
          <ul class="nav-list primary-nav">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <span class="material-symbols-rounded">dashboard</span>
                <span class="nav-label">Dashboard</span>
              </a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a class="nav-link dropdown-title">Dashboard</a>
                </li>
              </ul>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown-container">
              <a href="#" class="nav-link dropdown-toggle">
                <span class="material-symbols-rounded">lab_profile</span>
                <span class="nav-label">Laboratories</span>
                <span class="dropdown-icon material-symbols-rounded"
                  >keyboard_arrow_down</span
                >
              </a>
              <!-- Dropdown Menu -->
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a class="nav-link dropdown-title">Laboratories</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-link">Physics Lab</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-link"
                    >Psychological Lab</a
                  >
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-link">IT Lab</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-link">HE Lab</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-link">Criminology lab</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <span class="material-symbols-rounded">notifications</span>
                <span class="nav-label">Notifications</span>
              </a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a class="nav-link dropdown-title">Notifications</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <span class="material-symbols-rounded">assignment_globe</span>
                <span class="nav-label">Schedule</span>
              </a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a class="nav-link dropdown-title">Schedule</a>
                </li>
              </ul>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown-container">
              <a href="#" class="nav-link dropdown-toggle">
                <span class="material-symbols-rounded">report</span>
                <span class="nav-label">Reports</span>
                <span class="dropdown-icon material-symbols-rounded"
                  >keyboard_arrow_down</span
                >
              </a>
              <!-- Dropdown Menu -->
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a class="nav-link dropdown-title">Reports</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-link">Inventory</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-link"
                    >Damaged Equipment</a
                  >
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-link"
                    >Laboratory Usage</a
                  >
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link dropdown-link"
                    >Monthly Schedule</a
                  >
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <span class="material-symbols-rounded">inventory</span>
                <span class="nav-label">Inventory</span>
              </a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a class="nav-link dropdown-title">Inventory</a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <span class="material-symbols-rounded">settings</span>
                <span class="nav-label">Settings</span>
              </a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a class="nav-link dropdown-title">Settings</a>
                </li>
              </ul>
            </li>
          </ul>

          <!-- Secondary Bottom Nav -->
          <ul class="nav-list secondary-nav">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <span class="material-symbols-rounded">help</span>
                <span class="nav-label">Support</span>
              </a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a class="nav-link dropdown-title">Support</a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <span class="material-symbols-rounded">logout</span>
                <span class="nav-label">Sign Out</span>
              </a>
              <ul class="dropdown-menu">
                <li class="nav-item">
                  <a class="nav-link dropdown-title">Sign Out</a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>
      </aside>

      <main class="main-content">
        <!-- DASHBOARD / LABORATORIES -->
        <section id="panel-labs" class="panel active">
          <div class="content-box">
            <h2>Laboratories</h2>

            <table class="data-table">
              <thead>
                <tr>
                  <th>Laboratory ID</th>
                  <th>Laboratory Name</th>
                  <th>Floor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Physics Laboratory</td>
                  <td>4th Floor</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Chemistry Laboratory</td>
                  <td>3rd Floor</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Psychological Laboratory</td>
                  <td>2nd Floor</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>IT Laboratory</td>
                  <td>2nd Floor</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Computer Lab 1</td>
                  <td>2nd Floor</td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Computer Lab 2</td>
                  <td>3rd Floor</td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Computer Lab 3</td>
                  <td>4th Floor</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- INVENTORY -->
        <section id="panel-inventory" class="panel">
          <div class="content-box">
            <h2>Inventory Management</h2>

            <table class="data-table">
              <thead>
                <tr>
                  <th>Item ID</th>
                  <th>Lab ID</th>
                  <th>Equipment</th>
                  <th>Quantity</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>101</td>
                  <td>1</td>
                  <td>Microscope</td>
                  <td>10</td>
                  <td>Available</td>
                </tr>
                <tr>
                  <td>102</td>
                  <td>2</td>
                  <td>Beaker Set</td>
                  <td>25</td>
                  <td>Available</td>
                </tr>
                <tr>
                  <td>103</td>
                  <td>4</td>
                  <td>Computer</td>
                  <td>40</td>
                  <td>In Use</td>
                </tr>
                <tr>
                  <td>104</td>
                  <td>5</td>
                  <td>Projector</td>
                  <td>1</td>
                  <td>Available</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- SCHEDULING -->
        <section id="panel-schedule" class="panel">
          <div class="content-box">
            <h2>Scheduling System</h2>

            <table class="data-table">
              <thead>
                <tr>
                  <th>Schedule ID</th>
                  <th>Lab</th>
                  <th>Teacher</th>
                  <th>Date</th>
                  <th>Time</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>5001</td>
                  <td>Computer Lab</td>
                  <td>Mr. Santos</td>
                  <td>2026-01-10</td>
                  <td>8:00–10:00</td>
                </tr>
                <tr>
                  <td>5002</td>
                  <td>Physics Lab</td>
                  <td>Ms. Cruz</td>
                  <td>2026-01-10</td>
                  <td>1:00–3:00</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>

        <!-- REPORTS -->
        <section id="panel-reports" class="panel">
          <div class="content-box">
            <h2>Reports</h2>
            <ul>
              <li>Inventory Report</li>
              <li>Damaged Equipment Report</li>
              <li>Laboratory Usage Report</li>
              <li>Monthly Schedule Report</li>
            </ul>
          </div>
        </section>
      </main>
    </div>

   
</div>

