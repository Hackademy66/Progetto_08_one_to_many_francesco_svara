<x-layout>

<div class="container py-5">
    <div class="row">

    </div>
</div>

<div class="container-fluid p-5 bg-light negative-margin-top">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="lc-block mb-5">
                <div>
                    <h2 class="display-6 tect-uppercase d-inline yellow-border-bottom">Grazie per esserti iscritto!</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 text-center">
            <p>Prima di cominciare, verifica il tuo indirizzo email cliccando sul link che ti abbiamo appena inviato!</p>
            @if(session('status') == 'verification-link-sent')
            <div class="alert alert-success alert-dismissible fade show border-start border-end" role="alert">
              Ti abbiamo inviato una nuova mail di registrazione.
            </div>
            @endif
            <form method="POST" action="{{route('verification.send')}}">
                @csrf
                <button class="btn btn-outline-dark border border-3 btn-lg btn-block" type="submit">Invia una nuova email di verifica</button>
            </form>
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <p>Stai riscontrando dei problemi?</p>
                <button class="btn btn-dark btn-lg btn-block">Logout</button>
            </form>
        </div>
    </div>
</div>

</x-layout>