@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('admin.posts.store') }}" method="POST">
                @csrf

                <div class="form-group">
                  <label for="titile">Titolo</label>
                  <input type="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{ old('title') }}" placeholder="Inserisci titolo" name="title">
                  @error('title')
                    <div id="title" class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="content">Contenuto</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="20" placeholder="Contenuto del post">{{ old('content') }}</textarea>
                    @error('content')
                    <div id="content" class="invalid-feedback">
                        {{ $message }}
                    </div>
                  @enderror
                </div>

                <button type="submit" class="btn btn-primary">Invia</button>
              </form>
        </div>
    </div>
</div>
    
@endsection