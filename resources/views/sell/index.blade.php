<x-layout>
<div class="container-fluid py-5 sale-page">
    <div class="row py-5">
        <div class="col-8 text-center py-5 text-white mx-auto">
            <h1 class="display-1 text-bold py-5">Sale</h1>
            <p>Welcome to our platform for homes sales. Here, you will find a wide selection of properties available in your preferred location. From modern apartments to luxurious villas, we have got everything you need to make your dream home a reality. Browse through our listings and use our advanced search filters to narrow down your options based on price, size, location or any other preference that matters to you. Our team of expert real estate agents is always ready to assist you with any inquiry you might have. Don't hesitate to contact us today and start your journey towards owning your dream home!</p>
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
            <h3>Properties for sale in Dubai</h3>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
    <div class="row py-5">
        @if(count($sells))
            @foreach($sells as $sell)
            <div class="col-12 col-md-6 col-lg-4 mb-5">
                <a class="text-decoration-none" href="{{route('sell.show', $sell)}}">
                    <x-card
                        name="{{$sell->name}}"
                        price="{{$sell->price}}"
                        cover="{{$sell->cover}}"
                        description="{{ Str::limit($sell->description, 100) }}"
                        user="{{$sell->user->name}}"
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