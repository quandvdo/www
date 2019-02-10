@extends('frontend._layout.main')

@push('css')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush


@section('content')

    @component('frontend.components.subheader',
        ['title' => 'Booking Confirmation',
        'img' => 'search.jpg'])
    @endcomponent

    <section id="section3" class="tour-list-sidebar tour-list-sidebar-2-col">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    @include('frontend.components.alert')
                </div>
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="d-sm-flex mb-5" data-view="print">

                        <a href="{{route('landing')}}" class="btn btn-primary">Back to Homepage</a>
                        <span class="m-auto"></span>
                        <button class="btn btn-primary mb-sm-0 mb-3 print-invoice">Print Booking</button>
                    </div>
                    <!---===== Print Area =======-->
                    <div id="print-area">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="font-weight-bold">Booking Info</h4>
                                <p>#{{$booking->id}}</p>
                            </div>
                            <div class="col-md-6 text-sm-right">
                                <p>
                                    <strong>Booking status: </strong>
                                    {!!  \App\Models\Utility\Helper::bookingStatus($booking->status)!!}
                                </p>
                                <p>
                                    <strong>Payment status: </strong>
                                    @if(!$booking->payment)
                                        <span class="badge badge-success">Payment received</span>
                                    @else
                                        <span class="badge badge-warning">No Payment</span>
                                    @endif
                                </p>
                                <p><strong>Booking date: </strong>{{$booking->created_at->format('d M,Y h:i A')}}</p>
                            </div>
                        </div>
                        <div class="mt-3 mb-4 border-top"></div>
                        <div class="row mb-5">
                            <div class="col-md-6 mb-3 mb-sm-0">
                                <h5 class="font-weight-bold">Bill From</h5>
                                <p>CompassTravel</p>
                                <span style="white-space: pre-line">
                                                25 Yen Ninh, Hoan Kiem, Ha Noi
                                                (+84) 933 450 123
                                            </span>
                            </div>
                            <div class="col-md-6 text-sm-right">
                                <h5 class="font-weight-bold">Bill To</h5>
                                <p>{{$booking->user->name}}</p>
                                <span style="white-space: pre-line">
                                                {{$booking->user->email}}
                                        </span>
                            </div>
                        </div>
                        <div class="mt-3 mb-4 border-top"></div>
                        <div class="row">
                            <div class="col-md-12 table-responsive">
                                <h5 class="font-weight-bold">Guest Info</h5>
                                <table class="table table-hover table-bordered mb-4">
                                    <thead class="bg-gray-300">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Guest Name</th>
                                        <th scope="col">Guest Email</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($booking->items as $key=>$guest)
                                        <tr>
                                            <th scope="row">{{$key +1}}</th>
                                            <td>{{$guest->name}}</td>
                                            <td>{{$guest->email}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-3 mb-4 border-top"></div>
                            <div class="col-md-12 table-responsive">
                                <h5 class="font-weight-bold">Items Info</h5>
                                <table class="table table-hover table-bordered mb-4">
                                    <thead class="bg-gray-300">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Guest Name</th>
                                        <th scope="col">Item Name</th>
                                        <th scope="col">Activity Date</th>
                                        <th scope="col">Unit Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Notes</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($booking->items as $key=>$item)
                                        <tr>
                                            <th scope="row">{{$key+1}}</th>
                                            <td>{{$item->name}}</td>
                                            <td>
                                                <a href="{{route('tour.detail', ['slug' => $item->activity->slug])}}">{{$item->activity->title}}</a>
                                            </td>
                                            <td>{{$item->activity_date}}</td>
                                            <td>${{$item->price}}</td>
                                            <td>1</td>
                                            <td>{{$item->notes}}</td>
                                        </tr>
                                    @endforeach

                                    @foreach($booking->items[0]->activity->addons->where('type', 2) as $addon)
                                        <tr>
                                            <th scope="row" colspan="2"></th>
                                            <td>Free: {{$addon->name}}</td>
                                            <td>({{$addon->price}})</td>
                                            <td>1</td>
                                            <td>{{$addon->description}}</td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-3 mb-4 border-top"></div>
                            <div class="col-md-12 table-responsive">
                                <h5 class="font-weight-bold">Payment Info</h5>
                                <table class="table table-hover table-bordered mb-4">
                                    <thead class="bg-gray-300">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">References No</th>
                                        <th scope="col">Payment Date</th>
                                        <th scope="col">Value</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Comment</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!$booking->payment)
                                        @foreach($booking->payment as $key=>$payment)
                                            <tr>
                                                <th scope="row">{{$key+1}}</th>
                                                <td>{{$payment->type}}</td>
                                                <td>{{$payment->reference}}</td>
                                                <td>{{$payment->created_at->format('d M,Y h:i A')}}</td>
                                                <td>${{$payment->value}}</td>
                                                <td>{{$payment->isActive}}</td>
                                                <td>${{$payment->comment}}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <th scope="row" colspan="7" class="text-center">
                                                There no payment for this booking
                                            </th>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <p>Our Hotline : (+84) 933 450 123.</p>
                                <p>You travel, We handle</p>
                            </div>
                            <div class="col-md-6">
                                <div class="invoice-summary">
                                    <p>Free Item Value: (${{$booking->items[0]->activity->addons->where('type', 2)->sum('price')}}) </p>
                                    <p>Sub total: <span>${{($booking->basket_total)}}</span></p>
                                    <p>Vat: Included</p>
                                    <h5 class="font-weight-bold">Grand Total:
                                        <span> ${{$booking->basket_total}}</span>
                                    </h5>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--==== / Print Area =====-->
                </div>
            </div>
        </div>
    </section>

@endsection
