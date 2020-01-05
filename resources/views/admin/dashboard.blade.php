@extends('layouts.app')

@push('css')

@endpush

@section('content')
    @include('inc.navbar')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md col-md-offset02">
                <div class="panel panel-default">
                    <div class="panel-deading"><h3>Dashboard</h3></div>
                    <div class="panel-body">
                            <a href="property/create" class="btn btn-primary">Create New Property</a>
                        <hr>
                        @if(count($properties) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th></th>
                                    <th>Address</th>
                                    <th></th>
                                    <th></th>
                                    <th>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                    </th>
                                </tr>
                                @foreach($properties as $property)

                                    <tr>
                                        <td></td>
                                        <td><a href="/property/{{ $property->id }}">{{$property->address}}</a></td>
                                        <td><a href="/property/{{$property->id}}/edit" class="btn btn-default">Edit</a></td>
                                        <td>
                                            <form action="{{ route('property.destroy', $property->id) }}", method="POST", class="pull-right">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <input type="submit" class="btn btn-danger" value="DELETE">
                                            </form>
                                        </td>
                                        <td></td>
                                    </tr>
                                @endforeach
                                {{$properties->links()}}
                            </table>
                        @else
                            <p>You have no posts</p>
                        @endif
                    </div>
                    {{$properties->links()}}
                </div>
            </div>
        </div>
    </div>
    @include('inc.footer')
@endsection
