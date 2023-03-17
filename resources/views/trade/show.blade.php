<x-layout>

<div class="sale-show img-index">
    <div class="container text-white">
        <h1>{{$trade->name}}</h1>
    </div>
</div>

<div class="container vh-cs">
    <div class="row">
        <div class="col-12 col-md-8">
            <img src="{{Storage::url($trade->cover)}}" class="card-img-top shadow" alt="">
            <div class="card-body">
                <p class="card-text text-italic text-bold display-6 pt-5">{{$trade->price}} €</p>
                <p class="card-text py-5">{{$trade->description}}</p>
                <div class="my-5 py-5">
                  @foreach($trade->agents as $agent)
                    <div class="card shadow mb-3">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="{{Storage::url($agent->cover)}}" class="img-fluid rounded-start" alt="Agent Image">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body ms-5">
                            <h5 class="card-title mt-5">{{$agent->name}}</h5>
                            <p class="card-text mt-5">Phone: {{$agent->phone}}</p>
                            <p class="card-text mt-5">Email: {{$agent->email}}</p>
                            <a href="{{route('agent.show', $agent)}}" class="btn btn-dark mt-5">View Profile</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endforeach
                </div>
                <div class="my-5 py-5">
                    <a href="{{(route('sell.index'))}}" class="btn btn-dark px-5">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

</x-layout>