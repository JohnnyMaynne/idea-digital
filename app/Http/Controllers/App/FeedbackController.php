<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Mail\FeedbackMessage;
use Mail;

class FeedbackController extends Controller
{
    public function __invoke()
    {
        Mail::to(config('ideadigital.emails'))
            ->send(new FeedbackMessage(request()->all()));
    }
}
