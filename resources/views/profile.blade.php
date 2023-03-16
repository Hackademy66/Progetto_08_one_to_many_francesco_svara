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
            <h1 class="ms-5">{{Auth::user()->name}}</h1>
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
            <div class="card">
                @if(!$trade->cover)
                <img src="https://picsum.photos/300/200" class="img-card" alt="...">
                @else
                <img src="{{Storage::url($trade->cover)}}" class="img-card" alt="...">
                @endif
                <div class="card-body p-2">
                    <h3>{{$trade->title}}</h3>
                    <h3>{{$trade->producer}}</h3>
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
            <h3>Your Rent Ads</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        @if(count(Auth::user()->sells))
        @foreach(Auth::user()->sells as $sell)
        <div class="col-12 col-md-4 pb-5">
            <div class="card">
                @if(!$sell->cover)
                <img src="https://picsum.photos/300/200" class="img-card" alt="...">
                @else
                <img src="{{Storage::url($sell->cover)}}" class="img-card" alt="...">
                @endif
                <div class="card-body p-2">
                    <h3>{{$sell->name}}</h3>
                    <h3>{{$sell->created_at}}</h3>
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
            <div class="card">
                @if(!$agent->cover)
                <img src="https://picsum.photos/300/200" class="img-card" alt="...">
                @else
                <img src="{{Storage::url($agent->cover)}}" class="img-card" alt="...">
                @endif
                <div class="card-body p-2">
                    <h3>{{$agent->name}}</h3>
                    <h3>{{$agent->email}}</h3>
                    <form action="{{route('agent.show', $agent)}}" method="GET" class="d-inline-block">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary">View</button>
                    </form>
                    @if(Auth::user() && Auth::id() == $agent->user_id)
                    <a href="{{ route('agent.edit', $agent) }}" class="btn btn-outline-dark">Edit</a>
                        <form action="{{ route('agent.destroy', $agent) }}" method="POST" class="d-inline-block">
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

</x-layout>