@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Business {{ $business->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/business') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/business/' . $business->id . '/edit') }}" title="Edit Business"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('business' . '/' . $business->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Business" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $business->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $business->name }} </td></tr><tr><th> Detail </th><td> {{ $business->detail }} </td></tr><tr><th> Photo </th><td> {{ $business->photo }} </td></tr><tr><th> Host </th><td> {{ $business->host }} </td></tr><tr><th> Member </th><td> {{ $business->member }} </td></tr><tr><th> Category </th><td> {{ $business->category }} </td></tr><tr><th> Sub Category </th><td> {{ $business->sub_category }} </td></tr><tr><th> Income </th><td> {{ $business->income }} </td></tr><tr><th> Expenses </th><td> {{ $business->expenses }} </td></tr><tr><th> Total Cost </th><td> {{ $business->total_cost }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
