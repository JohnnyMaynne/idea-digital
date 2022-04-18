<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Mail\BlogMessage;
use Illuminate\Http\Request;
use Mail;

class BlogFormController extends Controller
{
    public function __invoke()
    {
        Mail::to(config('ideadigital.emails'))
            ->send(new BlogMessage(request()->all()));
    }
}
