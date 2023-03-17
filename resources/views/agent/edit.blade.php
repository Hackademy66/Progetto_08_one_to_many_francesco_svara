<x-layout>

<div class="sale-create text-white">
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-12 col-md-8">
            <h1>Edit Agent</h1>
            <div class="text-center mt-3">
                <form method="" action="{{route('agent.index')}}">
                    <button type="submit" class="btn btn-light my-2 mr-2">Back</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form class="p-lg-5 shadow" method="POST" action="{{route('agent.update', compact('agent')['agent'])}}" enctype="multipart/form-data">
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
                @method('put')
                <div class="form-group mb-3">
                    <label for="name" >Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Inserire titolo" value="{{$agent->name}}">
                </div>
                <div class="form-group mb-3">
                    <label for="phone">Phone</label>
                    <input type="number" name="phone" class="form-control" id="phone" placeholder="Inserire prezzo" value="{{$agent->phone}}">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Inserire prezzo" value="{{$agent->email}}">
                </div>
                <div class="mb-3">
                    <label for="trade" class="form-label">Available Rent Homes</label>
                    <select name="trade" id="trade" class="form-control" multiple>
                        @foreach($trades as $trade)
                        <option value="{{$trade->id}}">
                            Name: {{$trade->name}} - Price: {{$trade->price}} €
                        </option>
                        @endforeach      
                    </select>         
                </div>
                <div class="mb-3">
                    <label for="sell" class="form-label">Available Sale Homes</label>
                    <select name="sell" id="sell" class="form-control" multiple>
                        @foreach($sells as $sell)
                            <option value="{{$sell->id}}">
                            Name: {{$sell->name}} - Price: {{$sell->price}} €
                            </option>
                        @endforeach      
                    </select>         
                </div>
                <div class="mb-3">
                            <label for="existingCover" class="form-label fontor fs-3"> Image</label>
                            <img src="{{Storage::url($agent->cover)}}" width="100%" alt="">
                        </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Upload image</label>
                    <input class="form-control" name="cover" type="file" id="cover">
                </div>
                <button type="submit" class="btn btn-light my-2 ml-2">Edit</button>
            </form>
        </div>
    </div>
</div>
</div>

</x-layout>