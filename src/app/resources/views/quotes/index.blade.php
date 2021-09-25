@extends('layouts.app')

@section('content')
    <div class="col-12">
        <div class="container mt-2">
            <div class="row">
                <div class="col-12"><h3>List of quotes</h3></div>
                <div class="col-12">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-center">Id</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Content</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($quotes as $quote)
                            <tr>
                                <td>{{ $quote->id }}</td>
                                <td>{{ $quote->title }}</td>
                                <td>{{ $quote->content }}</td>
                                <td>
                                    <a href="{{ route('quotes.show', $quote) }}" class="text-muted d-inline-block w-100">Detail</a>
                                    <a href="{{ route('quotes.edit', $quote) }}" class="text-primary d-inline-block w-100">Edit</a>
                                    <a href="{{ route('quotes.destroy', $quote) }}" class="text-danger d-inline-block w-100">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
