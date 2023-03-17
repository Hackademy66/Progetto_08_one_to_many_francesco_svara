<!-- Sell Created -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
        @if (session()->has('sellCreated'))
            <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
            {{session('sellCreated')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
  </div>
</div>
<!-- Trade Created -->
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
        @if (session()->has('tradeCreated'))
            <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
            {{ session('tradeCreated') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    </div>
</div>
<!-- Agent Created -->
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
        @if (session()->has('agentCreated'))
            <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
            {{ session('agentCreated') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    </div>
</div>
<!-- Sell Updated -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
        @if (session()->has('sellUpdated'))
            <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
            {{session('sellUpdated')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
  </div>
</div>
<!-- Trade Updated -->
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
        @if (session()->has('tradeUpdated'))
            <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
            {{ session('tradeUpdated') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    </div>
</div>
<!-- Agent Updated -->
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
        @if (session()->has('agentUpdated'))
            <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
            {{ session('agentUpdated') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    </div>
</div>
<!-- Sell Deleted -->
<div class="container">
  <div class="row justify-content-center">
    <div class="col-12">
        @if (session()->has('sellDeleted'))
            <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
            {{session('sellDeleted')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
  </div>
</div>
<!-- Trade Deleted -->
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
        @if (session()->has('tradeDeleted'))
            <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
            {{ session('tradeDeleted') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    </div>
</div>
<!-- Agent Deleted -->
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
        @if (session()->has('agentDeleted'))
            <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
            {{ session('agentDeleted') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    </div>
</div>
<!-- Access Denied -->
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
        @if (session()->has('accessDenied'))
        <div class="alert alert-danger alert-dismissible fade show border-start border-end" role="alert">
            {{session('accessDenied')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
    </div>
</div>
<!-- Account Deleted -->
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-12">
        @if (session()->has('userDeleted'))
        <div class="alert alert-danger alert-dismissible fade show border-start border-end" role="alert">
            {{session('userDeleted')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>
    </div>
</div>