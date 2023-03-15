<x-layout>

<div class="sale-show img-index">
    <div class="container text-white">
        <h1>{{$trade->name}}</h1>
    </div>
</div>

<div class="container vh-cs">
    <div class="row">
        <div class="col-12 col-md-8">
            <img src="{{Storage::url($trade->cover)}}" class="card-img-top" alt="">
            <div class="card-body">
                <p class="card-text text-italic text-bold display-6 pt-5">{{$trade->price}} €</p>
                <p class="card-text py-5">{{$trade->description}}</p>
                <div class="col-6 d-flex justify-content-between my-5 py-5 text-bold">
                    <a href="{{(route('trade.index'))}}" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layout>