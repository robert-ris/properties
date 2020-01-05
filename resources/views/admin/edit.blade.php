@extends('layouts.app')

@push('css')

@endpush

@section('content')
    @include('inc.navbar')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-0"></div>
            <div class="col-lg-8 col-md-12">
                <div class="post-wrapper">
                    <h2>Edit Property</h2>
                    <hr>
                    <div class="body">
                        <form action="{{ route('property.update', $property->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="address" class="form-control" name="address" value="{{ $property->address }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" id="city" class="form-control" name="city" value="{{ $property->city }}">
                                        </div>
                                        <div class="col">
                                            <input type="text" id="country" class="form-control" name="country" value="{{ $property->country }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <input type="number" id="area" class="form-control" name="area" value="{{ $property->area }}">
                                        </div>
                                        <div class="col">
                                            <input type="number" id="beds" class="form-control" name="beds" value="{{ $property->beds }}">
                                        </div>
                                        <div class="col">
                                            <input type="number" id="baths" class="form-control" name="baths" value="{{ $property->baths }}">
                                        </div>
                                        <div class="col">
                                            <input type="number" id="garages" class="form-control" name="garages" value="{{ $property->garages }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" id="price" class="form-control" name="price" step="any" value="{{ $property->price }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea id="description" class="form-control" name="description" >{{ $property->description }}</textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <input type="file" name="cover_image">
                                </div>
                                <hr>
                                <a class="btn btn-danger" href="/dashboard">BACK TO DASHBOARD</a>
                                <button type="submit" class="btn btn-primary">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush
