@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="/emails">Emails</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create</li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header">
            Add a new email
        </div>
        <div class="card-body">
            <form method="POST" action="/emails">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Subject</label>
                    <input type="text" class="form-control {{ $errors->has('subject') ? 'is-invalid': '' }}"
                        name="subject" placeholder="Subject" value="{{ old('subject') }}" autofocus>
                    @error('subject')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Body</label>
                    <textarea name="body" class="form-control {{ $errors->has('body') ? 'is-invalid': '' }}"
                        placeholder="Body">{{ old('body') }}</textarea>
                    @error('body')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <a href="/emails" class="btn btn-secondary">Back to Emails</a>
                <button class="btn btn-primary type=" submit">Save</button>
            </form>
        </div>
    </div>
</div>

@endsection
