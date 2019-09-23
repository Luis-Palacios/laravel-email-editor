@extends('layouts.app')

@section('content')

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Emails</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header">
            My emails
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Body</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($emails as $email)
                    <tr>
                        <td scope="row">
                            <a href="/emails/{{ $email->id }}" class="btn btn-dark">
                                Edit
                            </a>

                        </td>
                        <td>{{ $email->subject }}</td>
                        <td>{{ $email->body['blocks'][0]['text'] }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">
                            You don't have any emails yet, begin your awesome adventure here <a href="/emails/create">Create your first email!</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            {{ $emails->links() }}

            <a href="/emails/create" class="btn btn-primary">Add Email</a>
        </div>
    </div>

</div>
@endsection
