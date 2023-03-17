<x-layout>
<div class="container-fluid py-5 sale-page">
    <div class="row py-5">
        <div class="col-8 text-center py-5 text-white mx-auto">
            <h1 class="display-1 text-bold py-5">Agents</h1>
            <p></p>
        </div>
        <div class="col-12 text-center pt-5 scrollArrow chevron">
            <a href="#explore-section pt-5">
                <i class="bi bi-chevron-down display-5 text-white"></i>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid mx-0 pt-5">
    <div class="row justify-content-center pt-5">
        <div class="col-12 ms-5 ps-5 text-bold">
            <h3>Our Agents</h3>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="row py-5">
        @if(count($agents))
            @foreach($agents as $agent)
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <a class="text-decoration-none" href="{{route('agent.show', $agent)}}">
                    <x-card-agent
                        name="{{$agent->name}}"
                        phone="{{$agent->phone}}"
                        cover="{{$agent->cover}}"
                        email="{{$agent->email}}"
                    />   
                </a> 
            </div>                 
            @endforeach
        @else
            <div class="col-12 ms-5 ps-5">
            Sorry to inform you that there are no houses available for sale at the moment.
            </div>
        @endif
    </div>
</div>

</x-layout>