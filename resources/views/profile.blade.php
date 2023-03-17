<x-layout>

<div class="sale-show py-5">
    <div class="container text-white py-5">
        <div class="row">
            <div class="col-md-10 d-flex align-items-center pt-4">
                <img class="avatar-image" src="{{ Storage::url(Auth::user()->avatar) }}" onclick="document.getElementById('avatar-input').click();" id="avatar-image">
                
                <form action="{{ route('changeAvatar', ['user' => Auth::user()]) }}" method="POST" enctype="multipart/form-data" id="avatar-form">
                    @csrf
                    @method('put')
                    <input type="file" name="avatar" id="avatar-input" style="display:none;" onchange="document.getElementById('avatar-form').submit();">
                </form>
                
                <div class="col-12 col-md-6">
                    <h1 class="ms-5">{{Auth::user()->name}}</h1>
                    <form method="POST" action="{{route('user.destroy')}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger ms-5 mt-3">Delete Account</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-4 fw-bold fs-5 py-5">
            <h3>Your Rent Ads</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        @if(count(Auth::user()->trades))
        @foreach(Auth::user()->trades as $trade)
        <div class="col-12 col-md-4 pb-5">
            <div class="card shadow">
                @if(!$trade->cover)
                <img src="https://picsum.photos/300/200" class="img-card object-fit-cover" alt="...">
                @else
                <img src="{{Storage::url($trade->cover)}}" class="img-fluid" alt="...">
                @endif
                <div class="card-body p-2">
                <h3>Name:</h3><p>{{$trade->name}}</p>
                    <h3>Price:</h3><p>{{$trade->price}} €</p>
                    <form action="{{route('trade.show', $trade)}}" method="GET" class="d-inline-block">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary">View</button>
                    </form>
                    @if(Auth::user() && Auth::id() == $trade->user_id)
                    <a href="{{ route('trade.edit', $trade) }}" class="btn btn-outline-dark">Edit</a>
                        <form action="{{ route('trade.destroy', $trade) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        @else
            <div class="col-12 ms-5 ps-5">
            You haven't posted any advertisement yet.
            </div>
        @endif
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col-12 col-md-4 fw-bold fs-5 py-5">
            <h3>Your Sale Ads</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        @if(count(Auth::user()->sells))
        @foreach(Auth::user()->sells as $sell)
        <div class="col-12 col-md-4 pb-5">
            <div class="card shadow">
                @if(!$sell->cover)
                <img src="https://picsum.photos/300/200" class="img-card object-fit-cover" alt="...">
                @else
                <img src="{{Storage::url($sell->cover)}}" class="img-fluid" alt="...">
                @endif
                <div class="card-body p-2">
                    <h3>Name:</h3><p>{{$sell->name}}</p>
                    <h3>Price:</h3><p>{{$sell->price}} €</p>
                    <form action="{{route('sell.show', $sell)}}" method="GET" class="d-inline-block">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary">View</button>
                    </form>
                    @if(Auth::user() && Auth::id() == $sell->user_id)
                    <a href="{{ route('sell.edit', $sell) }}" class="btn btn-outline-dark">Edit</a>
                        <form action="{{ route('sell.destroy', $sell) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
        @else
            <div class="col-12 ms-5 ps-5">
            You haven't posted any advertisement yet.
            </div>
        @endif
    </div>
</div>

@auth
    @if(auth()->user()->id == 1)
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-4 fw-bold fs-5 py-5">
                    <h3>Your Agents</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                @if(count(Auth::user()->agents))
                @foreach(Auth::user()->agents as $agent)
                <div class="col-12 col-md-4 pb-5">
                    <div class="card shadow">
                        @if(!$agent->cover)
                        <img src="https://picsum.photos/300/200" class="img-card object-fit-cover" alt="...">
                        @else
                        <img src="{{Storage::url($agent->cover)}}" class="img-card object-fit-cover" alt="...">
                        @endif
                        <div class="card-body p-2">
                            <h3>Name:</h3><p>{{$agent->name}}</p>
                            <h3>Email:</h3><p>{{$agent->email}}</p>
                            <div>

                                <!-- Many to Many Agent-Rent -->
                                <h2>Rent management</h2>
                                @foreach($agent->trades as $trade)
                                <div class="d-flex justify-content-between border-bottom">
                                    <p class="my-1">{{$trade->name}}</p>
                                    <form method="POST" action="{{route('trade.destroy', compact('trade'))}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn text-danger">Cancel</button>
                                    </form>
                                </div>
                                @endforeach
                                </div>

                                <!-- Many to Many Agent-Sale -->
                                <h2>Sale Management</h2>
                                @foreach($agent->sells as $sell)
                                <div class="d-flex justify-content-between border-bottom">
                                    <p class="my-1">{{$sell->name}}</p>
                                    <form method="POST" action="{{route('sell.destroy', compact('sell'))}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn text-danger">Cancel</button>
                                    </form>
                                </div>
                                @endforeach
                                
                                <!-- Buttons -->
                                <form action="{{route('agent.show', $agent)}}" method="GET" class="d-inline-block">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-primary mt-1">View</button>
                                </form>
                                @if(Auth::user() && Auth::id() == $agent->user_id)
                                <a href="{{ route('agent.edit', $agent) }}" class="btn btn-outline-dark mt-1">Edit</a>
                                <form action="{{ route('agent.destroy', $agent) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger mt-1">Delete</button>
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>
                @endforeach
                @else
                    <div class="col-12 ms-5 ps-5">
                    You haven't posted any agent yet.
                    </div>
                @endif
            </div>
        </div>
    @endif
@endauth

</x-layout>