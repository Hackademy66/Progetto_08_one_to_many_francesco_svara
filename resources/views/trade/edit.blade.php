<x-layout>

<div class="sale-create text-white">
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-12 col-md-8">
            <h1>Edit Annunce</h1>
            <div class="text-center mt-3">
                <form method="" action="{{route('trade.index')}}">
                    <button type="submit" class="btn btn-light my-2 mr-2">Back</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <form class="p-lg-5 shadow" method="POST" action="{{route('trade.update', compact('trade'))}}" enctype="multipart/form-data">
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
                @method('put')
                <div class="form-group mb-3">
                    <label for="name" >Titolo inserzione</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Inserire titolo" value="{{$trade->name}}">
                </div>
                <div class="form-group mb-3">
                    <label for="price">Prezzo</label>
                    <input type="double" name="price" class="form-control" id="price" placeholder="Inserire prezzo" value="{{$trade->price}}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" value="">{{$trade->description}}</textarea>
                </div>
                <div class="mb-3">
                            <label for="existingCover" class="form-label fontor fs-3">Image</label>
                            <img src="{{Storage::url($trade->cover)}}" width="100%" alt="">
                        </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Upload Image</label>
                    <input class="form-control" name="cover" type="file" id="cover">
                </div>
                <button type="submit" class="btn btn-light my-2 ml-2">Edit</button>
            </form>
        </div>
    </div>
</div>
</div>

</x-layout>