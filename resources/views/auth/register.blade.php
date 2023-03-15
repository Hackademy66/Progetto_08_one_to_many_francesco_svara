<x-layout>

<div class="sale-create text-white">
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1>REGISTRATION</h1>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="p-lg-5 shadow" method="POST" action="{{route('register')}}">
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
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group mb-3">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-light mt-5">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>

</x-layout>