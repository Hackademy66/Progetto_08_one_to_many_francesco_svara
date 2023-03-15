<x-layout>

<div class="sale-create text-white">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 text-center">
            <h1>New Rent Annunce</h1>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-8 col-md-4">
                <form action="{{route('trade.index')}}">
                    <button type="submit" class="btn btn-outline-light">Back</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row justify-content-center pb-5">
        <div class="col-12 col-md-8">
            <form class="p-lg-5 shadow" method="POST" action="{{route('trade.store')}}" enctype="multipart/form-data">
                @if($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif
                @csrf
                <div class="form-group mb-3">
                    <label for="name">Title</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Title here...">
                </div>
                <div class="form-group mb-3">
                    <label for="price">Price</label>
                    <input type="double" name="price" class="form-control" id="price" placeholder="Price here...">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Upload Image</label>
                    <input class="form-control" name="cover" type="file" id="cover">
                </div>
                <button type="submit" class="btn btn-light mt-3">Send</button>
            </form>
        </div>
    </div>
</div>
</div>


</x-layout>