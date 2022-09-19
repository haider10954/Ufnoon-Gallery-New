@extends('Web-Frontend.Layout.layout3')

@section('title','Subscription History List')

@section('content')
<div class="row">
    <h1 class="text-center" style="margin-bottom: 15px;">All Subscriptions</h1>
    <div class="col-lg-12">
        <div style="overflow-x:auto;">
            <table>
                <tr>
                    <th>Subscription Plan</th>
                    <th>Transaction Id</th>
                    <th>Bill URL</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>Plan Name</td>
                    <td>T-ID</td>
                    <td>URL</td>
                    <td> 05/09/2022</td>
                    <td>Active</td>
                    <td>Action</td>

                </tr>
            </table>
        </div>
    </div>
</div>


@endsection