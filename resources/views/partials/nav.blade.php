<div class="navbar bg-base-100 border-b border-gray-700">
    <div class="navbar-start">
        <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                <li>
                    <a href="{{ route('posts.index') }}">Posts</a>
                </li>
            </ul>
        </div>
        <a class="btn btn-ghost text-xl" href="{{ route('home') }}">daisyUI</a>
    </div>
    <div class="navbar-center hidden lg:flex">
        <a class="btn btn-link" href="{{ route('posts.index') }}">Posts</a>
    </div>
    @if (Auth::check())
        <div class="navbar-end flex pe-2">
            <ul class="menu menu-horizontal px-1">
                <li>
                    <details class="z-10">
                        <summary>{{ Auth::user()->name }}</summary>
                        <ul class="p-2">
                            <li>
                                <button>
                                    <a href="{{ route('profile.edit') }}">Profile</a>
                                </button>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </details>
                </li>
            </ul>

        </div>
    @else
        <div class="navbar-end gap-2">
            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
            <a href="{{ route('login') }}" class="btn btn-secondary">Login</a>
        </div>
    @endif
</div>
