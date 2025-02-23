@extends('layouts.admin-layouts.master')
@section('page_title', 'Session Booking')
@section('headlinks')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('contents')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="h-100">
                <div class="row mb-3 pb-1">
                    <div class="col-12">
                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                            <div class="flex-grow-1">
                                <h4 class="fs-16 mb-1">{{ $greeting }}, {{Auth::user()->name ?? ''}}</h4>
                            </div>
                        </div><!-- end card header -->
                    </div>
                    <!--end col-->
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-bottom d-flex">
                                <h5 class="card-title mb-0"><b>Session Type (List)</b></h5>
                                <button type="button" class="btn btn-info add-btn ms-auto" data-bs-toggle="modal"
                                    data-bs-target="#showsessionModal" id="create-btn" style="background-color: #405189 !important;"><i
                                        class="ri-add-line align-bottom me-1"></i> Add Session</button>
                            </div>
                            <div class="card-body">
                                <table id="example"
                                    class="table table-bordered dt-responsive nowrap table-striped align-middle"
                                    style="width:100%">
                                    <thead style="background-color: #405189 !important; color:white">
                                        <tr>
                                            <th data-ordering="false">S/N</th>
                                            <th data-ordering="false">Session Name</th>
                                            <th data-ordering="false">Session Duration</th>
                                            <th data-ordering="false">Session Price</th>
                                            <th>CreatedAt</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sessiontypes as $sessiontype)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$sessiontype->session_name ?? ""}}</td>
                                            <td>{{$sessiontype->session_time ?? ""}}</td>
                                            <td>{{$sessiontype->session_price ?? ""}}</td>
                                            <td>{{$sessiontype->created_at ?? ""}}</td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    <div class="edit">
                                                        <button class="btn btn-sm btn-info edit-item-btn"
                                                            data-bs-toggle="modal" id="edit-user"
                                                            data-id="{{ $sessiontype->id }}"
                                                            data-bs-target="#showeditModal">Edit</button>
                                                    </div>
                                                    <div class="remove">
                                                        <button class="btn btn-sm btn-danger remove-item-btn"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteRecordModal"
                                                            id="deleteRecord"
                                                            data-id="{{ $sessiontype->id }}">Delete</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--end col-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@include('layouts/modal')
@include('admin-components.magic-submit')
@endsection