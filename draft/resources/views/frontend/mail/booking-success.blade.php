@component('mail::message')
Hi {{$booking->user->name}},

<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td><h2>Booking Info</h2></td>
<td>#{{$booking->id}}</td>
</tr>
<tr>
<td style="text-align: right;">Booking Status:</td>
<td>{!! \App\Models\Utility\Helper::bookingStatus($booking->status)!!}</td>
</tr>
<tr>
<td style="text-align: right;">Payment status:</td>
<td>
@if(!$booking->payment)
<span class="badge badge-success">Payment received</span>
@else
<span class="badge badge-warning">No Payment</span>
@endif
</td>
</tr>
    <tr>
        <td>Booking Time:</td>
        <td>{{$booking->created_at->format('d M,Y h:i A')}}</td>
    </tr>
</table>
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

@component('mail::button', ['url' => route('booking.show', ['id' => $booking->id])])
View Booking
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent



