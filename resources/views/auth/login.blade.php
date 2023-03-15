<x-layout>

<div class="sale-create text-white">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1>LOGIN</h1>
            </div>
    </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-lg-5 shadow" method="POST" action="{{route('login')}}">
                    @if($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                        </div>
                    @endif
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group py-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-check pb-2">
                        <input class="form-check-input" type="checkbox" value="" name="remember" id="remember" checked>
                        <label class="form-check-label" for="remember">
                            Remember me
                        </label>
                    </div>
                    <button type="submit" class="btn btn-light mt-5">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>


</x-layout>