<div class="bg-dark border-end">
  <ul class="nav flex-column p-3">

    <li class="nav-item mb-2">
      <a class="nav-link sidebar-link {{ request()->is('dashboard') ? 'active-link' : '' }}"
         href="{{ route('dashboard') }}">
         <i class="fa-solid fa-gauge-high me-2"></i> Dashboard
      </a>
    </li>

    <li class="nav-item mb-2">
      <a class="nav-link sidebar-link {{ request()->is('students*') ? 'active-link' : '' }}"
         href="{{ route('students.index') }}">
         <i class="fa-solid fa-users me-2"></i> Students
      </a>
    </li>

    <li class="nav-item mb-2">
      <a class="nav-link sidebar-link {{ request()->is('dashboard/admin-names') ? 'active-link' : '' }}"
         href="{{ route('getAdminAccount') }}">
         <i class="fa-solid fa-user-shield me-2"></i> Admin Accounts
      </a>
    </li>

    <li class="nav-item mb-2">
      <a class="nav-link sidebar-link {{ request()->is('dashboard/register') ? 'active-link' : '' }}"
         href="{{ route('dashboard.register') }}">
         <i class="fa-solid fa-user-plus me-2"></i> Register Admin Account
      </a>
    </li>

  </ul>
</div>
