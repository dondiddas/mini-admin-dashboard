<div class="bg-dark border-end">
  <ul class="nav flex-column p-3">

    <li class="nav-item mb-2">
      <a class="nav-link sidebar-link {{ request()->is('dashboard') ? 'active-link' : '' }}"
         href="{{ route('dashboard') }}">
         Dashboard
      </a>
    </li>

    <li class="nav-item mb-2">
      <a class="nav-link sidebar-link {{ request()->is('students*') ? 'active-link' : '' }}"
         href="{{ route('students.index') }}">
         Students
      </a>
    </li>

    <li class="nav-item mb-2">
      <a class="nav-link sidebar-link {{ request()->is('dashboard/register') ? 'active-link' : '' }}"
         href="{{ route('dashboard.register') }}">
         Register Admin Account
      </a>
    </li>

  </ul>
</div>
