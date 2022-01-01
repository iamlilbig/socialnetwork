@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Button trigger modal -->
    <button type="button" class="d-grid gap-2 col-10 mx-auto btn btn-success shadow btn-lg justify-content-center " data-bs-toggle="modal" data-bs-target="#exampleModal">
        create new feed
    </button>

    <!-- Modal -->
    <form action="{{route('submit.feed')}}" method="post" enctype="multipart/form-data">@csrf
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">new feed</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-4">
                            <div class="mb-3">
                                <img src="" alt="">
                            </div>
                            <div class="mb-3">
                                <label for="image">image :</label><br>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" id="image">
                                @error('image')
                                    <span class="text-danger">*{{$message}}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description">description :</label><br>
                                <textarea type="file" class="form-control @error('description') is-invalid @enderror" rows="10" name="description" id="description"></textarea>
                                @error('description')
                                    <span class="text-danger">*{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


    <div class="row justify-content-center">
        @for($i =1 ;$i<=10;$i++)
            <div class="col-md-5 mx-lg-2 my-3 mg-3">
                <div class="card shadow-sm">
                    <img src="{{ asset('/image/num1.jpg') }}" alt="image" class="img-thumbnail">
                    <div class="card-body">
                        <p class="fw-bolder">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, culpa cupiditate deserunt eligendi facere libero
                            molestias obcaecati officia sunt voluptate. Atque consequuntur cupiditate ex excepturi id iste quasi repudiandae tempore.
                        </p>
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <span class="float-start">
                                    published by lilbig
                                </span>
                            </div>
                            <div class="col-md-6">
                                <div class="float-end">
                                    <span>
                                         200
                                        <i class="fas fa-eye"></i>
                                    </span>
                                    <button class="bg-transparent border-0">
                                        <i class="fas fa-heart fa-2x text-danger"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
</div>
@endsection
