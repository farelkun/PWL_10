@extends('layouts.app')

@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 mb-4">
                    <a href="{{ route('articles.index') }}" class="btn btn-dark">Back</a>
                </div>
                <div class="col-md-6 offset-md-3">
                    <form action="{{ route('articles.update', $article->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title"
                                value="{{ $article->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="3" placeholder="Enter content"
                                required>{{ $article->content }}</textarea>
                        </div>
                        <div class="d-flex align-items-start mb-3">
                            <img src="{{ asset('storage/' . $article->feature_image . '') }}" alt="" width="100"
                                class="img-responsive">
                            <div class="form-group ml-3 ">
                                <label for="image">Feature Image</label>
                                <input type="file" class="form-control-file" id="image" name="image">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
