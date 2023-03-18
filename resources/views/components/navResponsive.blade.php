<nav id="sidebar" class="navigation">         
    <div class="close__btn__container">
        <img class="navigation__close__btn" src="../TESLA Clone/media/cancel-button.png" alt="" >
    </div>
    <ul>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('trade.index')}}">Rent</a>
        </li>
        @auth
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('trade.create')}}">Create Rent</a>
            </li>
        @endauth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('sell.index')}}">Sale</a>
        </li>
        @auth
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('sell.create')}}">Create Sale</a>
            </li>
        @endauth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('agent.index')}}">Agents</a>
        </li>
        @auth
            @if(auth()->user()->id == 1)
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('agent.create')}}">Create Agent</a>
            </li>
            @endif
        @endauth
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('contact')}}">Contact Us</a>
        </li>
        <div class="d-flex align-items-center">
            @auth
            <a id="myButton1" class="me-3 btn-log" href="{{route('profile')}}">Profile</a>
            <form id="form-logout" method="POST" action="{{route('logout')}}" class="d-none">@Csrf</form>
            <button id="myButton2" class="me-3 btn-log" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</button>
            @else
            <a id="myButton3" class="me-3 btn-log" href="{{route('register')}}">Register</a>
            <a id="myButton4" class="btn-log" href="{{route('login')}}"><i class="bi bi-person-fill"></i>Login</a>
            @endAuth
        </div>
    </ul>
</nav>