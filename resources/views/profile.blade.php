<x-layout>

<div class="sale-show img-index pb-5">
    <div class="container text-white py-5">
        <div class="row-justify-content-between.my-5">
            <div class="col-md-10">
                <div class="row justify-content-between my-5">
                    <h2>Inserisci Avatar</h2>
                </div>
            </div>
        </div>
        <h1>Your Profile</h1>
    </div>
</div>
<form action="{{route('changeAvatar', ['user'=> Auth::user()])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    
                    <input type="file" name="avatar" class="form-control">
                    <button type="submit" class="btn btn-dark">Inserisci avatar</button>
                </form>

<div class="container py-5">
    <div class="row">
        <img style="width: 50px; border-radius: 50%;" src="{{Storage::url(Auth::user()->avatar)}}" class="mx-3" alt="">
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
                    <h3>{{$sell->title}}</h3>
                    <h3>{{$sell->producer}}</h3>
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

</x-layout>