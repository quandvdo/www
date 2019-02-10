<?php

namespace App\Http\Controllers\Booking;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBasket;
use App\Mail\BookingSuccess;
use App\Models\Booking\Basket;
use App\Models\Booking\Item;
use App\Repository\Activity\ActivityRepositoryInterface;
use App\Repository\Booking\BasketRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class BasketController extends Controller
{
    protected $activity, $basket;

    public function __construct(ActivityRepositoryInterface $activityRepository, BasketRepositoryInterface $basketRepository)
    {
        $this->middleware('auth');
        $this->activity = $activityRepository;
        $this->basket = $basketRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreBasket $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBasket $request)
    {
        $validated = $request->validated();
        $activity = $this->activity->show($request['tour_id']);
        $data = [
            'basket_total' => $activity->price->price * $request['quantity'],
            'quantity' => $request['quantity'],
            'user_id' => $request->user()->id,
            'agent_id' => 1

        ];

        $sequence = 0;
        $notes = explode(',', $request['notes']);
        $names = explode(',', $request['name']);
        $emails = explode(',', $request['email']);
        $basket = $this->basket->create($data);
        for ($i = 0; $i < $request['quantity']; $i++) {
            $item = new Item;
            $item->activity_id = $activity->id;
            $item->type = $activity->isPackage ? 'package' : 'tour';
            $item->activity_date = Carbon::parse($request['activity_date'])->format('Y-m-d');
            $item->price = $activity->price->price;
            $item->sequence = $i + 1;
            if (isset($names[$i])) {
                $item->name = trim($names[$i]);
            } else {
                $item->name = trim($names[0]);
            }
            if (isset($emails[$i])) {
                $item->email = trim($emails[$i]);
            } else {
                $item->email = trim($emails[0]);
            }
            if (isset($notes[$i])) {
                $item->notes = trim($notes[$i]);
            } else {
                $item->notes = trim($notes[0]);
            }
            $basket->items()->save($item);
        }


        /*   } catch (\Exception $e) {
            Log::debug($e);
            Session::flash('message', 'ERROR!' . $e);
            Session::flash('alert-class', 'alert-danger');
            return back()->withErrors('Error');
        }*/
        Session::flash('message', 'SUCCESS! Your booking has been accepted! Please hang on a bit, our staff will contact you shortly!');
        Session::flash('alert-class', 'alert-success');

        Mail::to($request->user())->send(new BookingSuccess($basket));
        return redirect()->route('booking.show', ['id' => $basket->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $booking = $this->basket->show($id);
            if (Auth::user()->id != $booking->user_id) {
                Session::flash('message', 'INFO! Insufficient right to view this content.');
                Session::flash('alert-class', 'alert-info');
                return route('landing');
            }
        } catch (ModelNotFoundException $e) {
            Session::flash('message', 'Warning! There are no such booking.');
            Session::flash('alert-class', 'alert-warning');
            return route('landing');
        }
        return view('frontend.pages.booking-detail')->with('booking', $booking);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking\Basket $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Booking\Basket $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking\Basket $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket $basket)
    {
        //
    }
}
