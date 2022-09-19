@extends('Web-Frontend.Layout.layout3')

@section('title','ArtWork List')

@section('content')
<div class="row">
    <h1 class="text-center" style="margin-bottom: 15px;">Art Work List</h1>
    <div class="col-lg-12 ">
        <div class="text-right" style="margin: 10px 10px;">
            <a href="{{ route('add_artist_artworks') }}" class="button button1">
                <i class="fa fa-plus"></i><span style="margin-left: 10px;">Add Artwork</span>
            </a>
        </div>
    </div>
    <div class="col-lg-12">
        <div style="overflow-x:auto;">
            <table>
                <tr>
                    <th>Image</th>
                    <th>Title Name</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Change</th>
                </tr>
                <tr>
                    <td>Image of ArtWork</td>
                    <td>Art Work Name</td>
                    <td> 05/09/2022</td>
                    <td>Active</td>
                    <td>50</td>

                </tr>
            </table>
        </div>
    </div>
</div>


@endsection