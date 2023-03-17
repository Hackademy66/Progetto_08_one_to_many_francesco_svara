<x-layout>

<div class="sale-create text-white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 text-center">
            <h1>New Agent</h1>
        </div>
    </div>
    <div class="row justify-content-center text-center py-5">
        <div class="col-8 col-md-4">
            <form action="{{route('agent.index')}}">
                <button type="submit" class="btn btn-outline-light">Back</button>
            </form>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form class="p-lg-5 shadow" method="POST" action="{{route('agent.store')}}" enctype="multipart/form-data">
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
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name here...">
                </div>
                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" class="form-control" id="phone" placeholder="phone here...">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email here...">
                </div>
                <div class="mb-3">
                    <label for="sell" class="form-label">Available Sale Homes</label>
                    <select name="sell[]" id="sell" class="form-control" multiple>
                        @foreach($sells as $sell)
                            <option value="{{$sell->id}}">
                            Name: {{$sell->name}} - Price: {{$sell->price}} €
                            </option>
                        @endforeach      
                    </select>         
                </div>
                <div class="mb-3">
                    <label for="trade" class="form-label">Available Rent Homes</label>
                    <select name="trade[]" id="trade" class="form-control" multiple>
                        @foreach($trades as $trade)
                            <option value="{{$trade->id}}">
                                Name: {{$trade->name}} - Price: {{$trade->price}} €
                            </option>
                        @endforeach      
                    </select>         
                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Upload Image</label>
                    <input class="form-control" name="cover" type="file" id="cover">
                </div>
                <button type="submit" class="btn btn-light mt-3">Send</button>
            </form>
        </div>
    </div>
</div>
</div>

</x-layout>