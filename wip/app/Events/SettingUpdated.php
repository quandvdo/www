<?php
/**
 * Created by PhpStorm.
 * User: Kudi
 * Date: 3/4/2019
 * Time: 11:14 PM
 */

namespace App\Events;


use App\Models\Setting;
use Illuminate\Queue\SerializesModels;

class SettingUpdated
{
    use SerializesModels;

    public $setting;

    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }
}