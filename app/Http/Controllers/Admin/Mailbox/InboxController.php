<?php

namespace App\Http\Controllers\Admin\Mailbox;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Admin\Mailbox;

class InboxController extends Controller
{
    public function index()
    {

    	$mailbox = Mailbox::where('map','INBOX')->paginate(10);

        return view('admin.mailbox.inbox', ['mailbox' => $mailbox]);

    }
}
