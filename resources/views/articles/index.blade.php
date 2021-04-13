@extends('layouts.app')

@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="{{ route('articles.create') }}" class="btn btn-success">Add New Article</a>
                    <a href="{{ route('articles.print') }}" class="btn btn-danger">Print to PDF</a>
                </div>
                <div class="col-12 mb-4">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0 card-title">Data Articles</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Feature Image</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($articles->isEmpty())
                                        <tr class="text-center">
                                            <th colspan="5">Data not found</th>
                                        </tr>
                                    @else
                                        @foreach ($articles as $article)
                                            <tr>
                                                <th>{{ $loop->iteration }}</th>
                                                <td>
                                                    <img src="{{ asset('storage/' . $article->feature_image . '') }}"
                                                        width="100" alt="">
                                                </td>
                                                <td>{{ $article->title }}</td>
                                                <td>{{ $article->content }}</td>
                                                <td>
                                                    <a href="{{ route('articles.edit', $article->id) }}"
                                                        class="btn btn-sm btn-info">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
