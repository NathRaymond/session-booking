@extends('layouts.admin-layouts.master')
@section('page_title', 'Hotel Pro')
@section('headlinks')
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
    .charts-wrapper {
        display: flex;
        flex-wrap: wrap;
        /* Allows wrapping on smaller screens */
        justify-content: space-between;
        gap: 20px;
    }

    .chart-container {
        position: relative;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        height: 300px;
        flex: 1 1 calc(50% - 20px);
        /* Two charts per row with gap */
        max-width: calc(100% - 20px);
        /* border: 2px solid #000; */
        background: repeating-linear-gradient(to top,
                #f1f1f1 0,
                #f1f1f1 20px,
                transparent 20px,
                transparent 40px);
        box-sizing: border-box;
    }

    @media (max-width: 768px) {
        .chart-container {
            flex: 1 1 100%;
            /* Full width for small screens */
            max-width: 100%;
        }
    }

    .bar {
        width: 30px;
        margin: 0 10px;
        background-color: #405189;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        color: white;
        font-weight: bold;
        transition: background-color 0.3s ease;
        border-radius: 6px;
    }

    .bar:hover {
        background-color: rgb(137, 148, 187);
    }

    .bar-label {
        text-align: center;
        margin-top: 10px;
    }

    .bar-wrapper {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        height: 100%;
    }

    .Roomsbar {
        width: 10px;
        margin: 0 10px;
        background-color: #405189;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        color: white;
        font-weight: bold;
        transition: background-color 0.3s ease;
        border-radius: 6px;
    }

    /* full chart */
    .fullcard-body {
        background-color: #f8f9fa;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .fullchart-container {
        display: flex;
        flex-direction: row;
        align-items: flex-end;
        height: 300px;
        /* Set a fixed height for the chart */
        width: 100%;
        justify-content: space-between;
    }

    .scale-numbers {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 100%;
        margin-right: 15px;
        font-family: Arial, sans-serif;
    }

    .scale-number {
        font-size: 11px;
        color: #333;
        text-align: right;
    }

    .fullbars-container {
        display: flex;
        flex-grow: 1;
        justify-content: space-between;
        align-items: flex-end;
        height: 100%;
        width: 100%;
    }

    .fullbar-wrapper {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .Roomsbar {
        width: 10px;
        color: white;
        text-align: center;
        font-size: 12px;
        padding: 5px 0;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    /* Different color classes */
    .red {
        background-color: #ff4d4d;
    }

    .green {
        background-color: rgb(99, 194, 121);
    }

    .Roomsbar:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .fullbar-label {
        font-size: 12px;
        color: #333;
        margin-top: 5px;
    }

    @media (max-width: 768px) {
        .fullchart-container {
            flex-direction: column;
            height: auto;
        }

        .scale-numbers {
            margin-right: 0;
            margin-bottom: 10px;
            align-items: center;
            flex-direction: row;
            justify-content: space-evenly;
        }

        .fullbars-container {
            flex-direction: column;
            justify-content: space-evenly;
            height: auto;
        }

        .fullbar-wrapper {
            margin-bottom: 10px;
        }

        .Roomsbar {
            width: 50px;
            padding: 10px 0;
        }

        .scale-number {
            font-size: 12px;
        }
    }

    @media (max-width: 576px) {
        .Roomsbar {
            width: 30px;
        }

        .fullbar-label {
            font-size: 10px;
        }
    }
</style>

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
                    <div class="col-xl-4 col-md-6">
                        <div class="card card-animate" style="background-color:rgb(58, 93, 88)">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-success text-truncate mb-0" style="color: white !important;"><b>Occupancy Rate</b></p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0" style="color: white !important;">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i> 40.00%
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-success"><span style="color: white !important;">40.00%</span> </h4>
                                        <a href="#" class="" style="color: white !important;">Current Occupancy Rate</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                            <i class="bx bx-calculator text-primary" style="color:rgb(58, 93, 88) !important;"></i>
                                            <!-- <i class="bx bx-dollar-circle text-success" style="color:rgb(58, 93, 88) !important;"></i> -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">

                        <div class="card card-animate" style="background-color:rgb(70, 61, 103)">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-success text-truncate mb-0" style="color: white !important;"><b>Rooms Occupied</b></p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0" style="color: white !important;">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i> 12
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-success"><span style="color: white !important;">12</span> </h4>
                                        <a href="#" class="" style="color: white !important;"> Number of Rooms Occupied</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                            <i class="bx bx-door-open text-info" style="color:rgb(70, 61, 103) !important;"></i>
                                            <!-- <i class="bx bx-dollar-circle text-success" style="color: rgb(70, 61, 103) !important;"></i> -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="card card-animate" style="background-color:rgb(131, 146, 63)">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-success text-truncate mb-0" style="color: white !important;"><b>F&B Sales
                                            </b></p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0" style="color: white !important;">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i> 0
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-success"><span style="color: white !important;">0</span> </h4>
                                        <a href="#" class="" style="color: white !important;"> Number of F&B Sales Today</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                            <i class="bx bxs-restaurant text-primary" style="color: rgb(131, 146, 63) !important;"></i>
                                            <i class="bx bx-chart text-success" style="color: rgb(131, 146, 63) !important;"></i>
                                            <!-- <i class="bx bx-dollar-circle text-success" style="color: rgb(131, 146, 63) !important;"></i> -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">

                        <div class="card card-animate" style="background-color:rgb(159, 112, 73)">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-success text-truncate mb-0" style="color: white !important;"><b>Reservations</b></p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0" style="color: white !important;">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i> 5

                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-success"><span style="color: white !important;">5</span> </h4>
                                        <a href="#" class="" style="color: white !important;"> Number of Reservations</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                            <i class="bx bx-home text-primary" style="color:#fd7e14 !important;"></i>
                                            <!-- <i class="bx bx-dollar-circle text-success" style="color: #fd7e14 !important;"></i> -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">

                        <div class="card card-animate">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-success text-truncate mb-0" style="color: brown !important;"><b>Restaurant Sales</b></p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0" style="color: brown !important;">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i>0
                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-success"><span style="color: brown !important;">0</span> </h4>
                                        <a href="#" class="" style="color: brown !important;"> Number of Restaurant Sales Today</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                            <i class="bx bx-restaurant text-primary" style="color:brown !important;"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">

                        <div class="card card-animate" style="background-color:rgb(28, 57, 118)">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <p class="text-uppercase fw-medium text-success text-truncate mb-0" style="color: white !important;"><b>Bar Sales</b></p>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <h5 class="text-success fs-14 mb-0" style="color: white !important;">
                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i> 0

                                        </h5>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h4 class="fs-22 fw-semibold ff-secondary mb-4 text-success"><span style="color: white !important;">0</span> </h4>
                                        <a href="#" class="" style="color: white !important;">Number of Bar Sales Today</a>
                                    </div>
                                    <div class="avatar-sm flex-shrink-0">
                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                            <i class="bx bx-wine text-warning" style="color:#002c8c !important;"></i>
                                            <!-- <i class="bx bx-dollar-circle text-success" style="color: #002c8c !important;"></i> -->
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection