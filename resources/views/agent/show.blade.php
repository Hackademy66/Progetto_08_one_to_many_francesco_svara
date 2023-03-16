<x-layout>

<div class="sale-show img-index">
    <div class="container text-white">
        <h1>{{$agent->name}}</h1>
    </div>
</div>

<div class="container vh-cs">
    <div class="row">
        <div class="col-12 col-md-8">
            <img src="{{Storage::url($agent->cover)}}" class="card-img-top" alt="">
            <div class="card-body">
                <p class="card-text text-italic text-bold display-6 pt-5">{{$agent->phone}} €</p>
                <p class="card-text py-5">{{$agent->emailb}}</p>
                <div class="my-5 py-5">
                <a href="{{(route('agent.index'))}}" class="btn btn-outline-primary">Back</a>
            </div>
            </div>
        </div>
    </div>
</div>

</x-layout>