<x-layout>

<div class="sale-show img-index">
    <div class="container text-white">
        <h1>{{$agent->name}}</h1>
    </div>
</div>

<div class="container vh-cs">
    <div class="row">
        <div class="col-12 col-md-6">
            <img src="{{Storage::url($agent->cover)}}" class="img-agent" alt="">
        </div>
            <div class="col-12 col-md-6 card-body pt-5 mt-5">
                <p class="card-text text-italic text-bold display-6 pt-5">Phone: {{$agent->phone}}</p>
                <p class="card-text py-5">Email: {{$agent->email}}</p>
            </div>
        </div>
        <div class="my-5 py-5">
            <a href="{{(route('agent.index'))}}" class="btn btn-dark px-5">Back</a>
        </div>
    </div>
</div>

</x-layout>