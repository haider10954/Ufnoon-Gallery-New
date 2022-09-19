@extends('Web-Frontend.Layout.layout3')

@section('title','Orders List')

@section('content')
<div class="row">
    <h1 class="text-center" style="margin-bottom: 15px;">Orders List</h1>
    <div class="col-lg-12">
        <div style="overflow-x:auto;">
            <table>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Artwork Type</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>Image of ArtWork</td>
                    <td>XYZ</td>
                    <td>Address</td>
                    <td> 05/09/2022</td>
                    <td>Active</td>
                    <td>50</td>

                </tr>
            </table>
        </div>
    </div>
</div>


@endsection