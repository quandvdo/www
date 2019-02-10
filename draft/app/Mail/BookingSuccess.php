<?php

namespace App\Mail;

use App\Models\Booking\Basket;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookingSuccess extends Mailable
{
    use Queueable, SerializesModels;
    public $basket;

    /**
     * Create a new message instance.
     *
     * @param Basket $basket
     */
    public function __construct(Basket $basket)
    {
        return $this->basket = $basket;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(['address' => 'handle@compasstravel.vn', 'name' => 'Compass Travel'])
            ->markdown('frontend.mail.booking-success')
            ->with([
                'booking' => $this->basket,

            ]);
    }
}
