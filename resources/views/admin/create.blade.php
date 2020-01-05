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
                <h2>New Property</h2>
                <hr>
                <div class="body">
                    <form action="{{ route('property.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" id="address" class="form-control" name="address" placeholder="Address">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" id="city" class="form-control" name="city" placeholder="City">
                                    </div>
                                    <div class="col">
                                        <input type="text" id="country" class="form-control" name="country" placeholder="Country">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <input type="number" id="area" class="form-control" name="area" placeholder="Area">
                                    </div>
                                    <div class="col">
                                        <input type="number" id="beds" class="form-control" name="beds" placeholder="Beds">
                                    </div>
                                    <div class="col">
                                        <input type="number" id="baths" class="form-control" name="baths" placeholder="Baths">
                                    </div>
                                    <div class="col">
                                        <input type="number" id="garages" class="form-control" name="garages" placeholder="Garages">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-line">
                                    <input type="number" id="price" class="form-control" name="price" step="any" placeholder="Price">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-line">
                                    <textarea id="description" class="form-control" name="description" placeholder="About Property"></textarea>
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
