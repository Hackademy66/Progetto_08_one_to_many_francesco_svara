<x-layout>
<div class="container-fluid px-0 home">
  
  <x-messages />

  <div class="row justify-content-center">
    <div class="container px-5">
      <div class="row no-gutters pt-5">
        <div class="col-12 col-lg-7 pt-5">
          <div class="hero-first">
            @auth
              <p class="m-0 mt-5 pt-5 me-3 text-white text-bold display-6">Welcome <a class="text-decoration-none text-white" href="{{route('profile')}}">{{Auth::user()->name}}</a></p>
            @endauth
            <h2 class="mt-5 pt-5 mb-5 text-white">The Journey To <span class="bold">Find Your Dream Home</span> Begins Here!</h2>
            <div class="col-12 btn-layer mb-5 d-none d-md-block">
              <a href="{{route('sell.index')}}" class="btn bg-white mx-5 mr-md-3 mt-2 text-bold">For Sale</a>
              <a href="{{route('trade.index')}}" class="btn bg-white mx-5 mr-md-3 mt-2 text-bold">For Rent</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 text-center pt-5 scrollArrow chevron">
      <a href="#explore-section pt-5">
          <i class="bi bi-chevron-down display-5 text-white"></i>
      </a>
  </div>
</div> 

<div class="container py-5">
  <div class="row mt-4 mb-md-5 py-5">
    <div class="col-md-5">
      <div class="text-left px-4 py-5 my-5 v-h-align">
        <h3 class="mt-4 text-bold">Explore Most Popular Areas</h3>
        <p class="font-p">Dubai is buzzing with world-class communities. From the ‘Center of Now’ - Downtown Dubai to a man-made island, Palm Jumeirah, Dubai has it all.</p>
        <a href=""><button class="btn btn-outline-dark my-2 text-center text-bold">Explore</button></a>
      </div>
    </div>
    <div class="col-md-7">
      <div class="row no-gutters">
        <div class="col-md-4 col px-0">
          <a class="text-decoration-none" href="#">
            <div class="heightimg text-center" style="background-image:url('https://elysian.com/uploads/communities/off_plan_1_palm_jumeirah.jpg');">
            <p class="text-white font-p pt-3">Palm Jumeirah</p>
            </div>
          </a>
        </div>
        <div class="col-md-4 col px-0">
          <a class="text-decoration-none" href="#">
            <div class="heightimg text-center" style="background-image:url('https://elysian.com/uploads/communities/down_town_new.jpg');">
            <p class="text-white font-p pt-3"> Downtown Dubai </p>
            </div>
          </a>
        </div>
        <div class="col-md-4 col px-0">
          <a class="text-decoration-none" href="#">
            <div class="heightimg text-center" style="background-image:url('https://elysian.com/uploads/communities/dubai-marina.jpg');">
            <p class="text-white font-p pt-3"> Dubai Marina </p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container py-5">
  <div class="row mt-4 mb-md-5">
    <div class="col-md-4 order-md-last">
      <div class="text-left px-4 py-5 my-5 v-h-align">
        <h3 class="mt-4 text-bold">Explore Recent Offplan Projects</h3>
        <p class="font-p">Discover a plethora of off-plan projects in Dubai with the best payment plan and waivers.</p>
        <a href=""><button class="btn btn-outline-dark mt-2 text-center text-bold">Explore</button></a>
      </div>
    </div>
    <div class="col-md-7">
      <div class="row no-gutters">
        <div class="col-md-4 col px-0">
          <a class="text-decoration-none" href="#">
            <div class="heightimg text-center" style="background-image:url('https://elysian.com/uploads/communities/north_43_invetsment.jpg');">
            <p class="text-white font-p pt-3"> North 43 </p>
            </div>
          </a>
        </div>
      <div class="col-md-4 col px-0">
          <a class="text-decoration-none" href="#">
            <div class="heightimg text-center" style="background-image:url('https://elysian.com/uploads/communities/bluewater_bays_1.jpg');">
            <p class="text-white font-p pt-3"> Bluewaters Bay </p>
            </div>
          </a>
        </div>
        <div class="col-md-4 col px-0">
          <a class="text-decoration-none" href="#">
            <div class="heightimg text-center" style="background-image:url('https://elysian.com/uploads/communities/liv_lux-1.jpg');">
            <p class="text-white font-p pt-3"> Liv Lux </p>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<x-prefooter />

</x-layout>