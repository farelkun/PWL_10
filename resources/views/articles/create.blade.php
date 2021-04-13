@extends('layouts.app')

@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 mb-4">
                    <a href="{{ route('articles.index') }}" class="btn btn-dark">Back</a>
                </div>
                <div class="col-md-6 offset-md-3">
                    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea class="form-control" id="content" name="content" rows="3" placeholder="Enter content"
                                required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Feature Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
