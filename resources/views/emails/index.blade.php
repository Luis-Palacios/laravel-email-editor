@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            My emails
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Body</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($emails as $email)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $email->subject }}</td>
                        <td>{{ $email->body }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <a href="/emails/create" class="btn btn-primary">Add Email</a>
        </div>
    </div>

</div>
@endsection
