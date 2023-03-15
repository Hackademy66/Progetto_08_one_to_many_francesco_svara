<x-layout>

<div class="sale-show img-index">
    <div class="container text-white">
        <h1>{{$sell->name}}</h1>
    </div>
</div>

<div class="container vh-cs">
    <div class="row">
        <div class="col-12 col-md-8">
            <img src="{{Storage::url($sell->cover)}}" class="card-img-top" alt="">
            <div class="card-body">
                <p class="card-text text-italic text-bold display-6 pt-5">{{$sell->price}} €</p>
                <p class="card-text py-5">{{$sell->description}}</p>
                <div class="my-5 py-5">
                <a href="{{(route('sell.index'))}}" class="btn btn-outline-primary">Back</a>
            </div>
            </div>
        </div>
    </div>
</div>

</x-layout>