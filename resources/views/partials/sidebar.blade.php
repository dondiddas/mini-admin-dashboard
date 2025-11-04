<div class="bg-white border-end" style="width:220px;">
  <ul class="nav flex-column p-3">

    <li class="nav-item">
      <a class="nav-link {{ request()->is('dashboard') ? 'fw-bold text-primary' : '' }}"
         href="{{ route('dashboard') }}">
         Dashboard
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link {{ request()->is('students*') ? 'fw-bold text-primary' : '' }}"
         href="{{ route('students.index') }}">
         Students
      </a>
    </li>

  </ul>
</div>
