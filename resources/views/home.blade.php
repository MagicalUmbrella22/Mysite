@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Image Uploder') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('upload') }}" enctype="multipart/form-data">
                            @csrf




                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="Portrait"
                                    value="portrait" checked>
                                <label class="form-check-label" for="Portrait">
                                    Portrait
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="landscape" name="type"
                                    id="Landscape">
                                <label class="form-check-label" for="Landscape">
                                    Landscape
                                </label>
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label">Choose file</label>
                                <input type="file" accept="image/*" class="form-control" name="image" id="file"
                                    placeholder="" aria-describedby="fileHelpId">
                                <div id="fileHelpId" class="form-text">Help text</div>
                            </div>




                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Upload') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
