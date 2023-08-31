<div class="navbar bg-base-100 sticky top-0">
    <div class="flex-1">
      <a class="btn btn-ghost normal-case text-xl">daisyUI</a>
    </div>
    <div class="flex-none">
        @guest
        <ul class="menu menu-horizontal px-1 bg-base-100">
            <li>
                <a href="{{ route('registration') }}">Register</a>
            </li>
            <li>
                <a href="{{ route('login') }}">Login</a>
            </li>
        </ul>
        @else
        <div class="form-control">
          <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto">
        </div>
        <ul class="menu menu-horizontal px-5  bg-base-100">
            <li>
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li>
                <a>Roles</a>
            </li>
            <li>
                <a>Users</a>
            </li>
            <li>
                <details>
                    <summary>Parent</summary>
                    <ul class="p-2 bg-base-100"><li>
                        <a>Link 1</a></li>
                        <li><a>Link 2</a></li>
                    </ul>
                </details>
            </li>
        </ul>
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle">
              <div class="indicator">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                <span class="badge badge-sm indicator-item">8</span>
              </div>
            </label>
            <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
              <div class="card-body">
                <span class="font-bold text-lg">8 Items</span>
                <span class="text-info">Subtotal: $999</span>
                <div class="card-actions">
                  <button class="btn btn-primary btn-block">View cart</button>
                </div>
              </div>
            </div>
          </div>
          <div class="dropdown dropdown-end">
            <label tabindex="0" class="btn btn-ghost btn-circle avatar">
              <div class="w-10 rounded-full">
                <img src="/images/stock/photo-1534528741775-53994a69daeb.jpg" />
              </div>
            </label>
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
              <li>
                <a class="justify-between hover:font-bold uppercase" href="{{ route('profile') }}">
                  Profile
                  <span class="badge"></span>
                </a>
              </li>
              <li><a>Settings</a></li>
              <li>
                <a href="#" onclick="document.getElementById('logoutfrm').submit();return false;">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
                      </svg>
                      &nbsp;Logout</a>
                <form method="POST" action="{{ route('logout') }}" id="logoutfrm">
                    @csrf
                </form>
                </li>
            </ul>
          </div>
        @endguest



    </div>

</div>
