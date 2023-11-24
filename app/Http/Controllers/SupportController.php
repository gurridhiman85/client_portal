<?php

namespace App\Http\Controllers;
use \SupportPal\ApiClient\Config\ApiContext;
use \SupportPal\ApiClient\SupportPal;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public $hostname;
    public $apiToken;

    public function __construct()
    {
        $this->hostname = config('constant.HOST_NAME');
        $this->apiToken = config('constant.SUPPORT_PAL_ApiToken');
    }

    public function index(){

        $context = new ApiContext($this->hostname, $this->apiToken);
        $context->setPath('support');
        $api = new SupportPal($context);
        $tickets =  $api->getTicketApi()->getTickets();

        $count = $tickets->getCount();
        $models = $tickets->getModels();

        return view('support.index', ['count' => $count, 'models' => $models]);
    }

    public function create(Request $request){
        return view('support.create', [
            'user' => $request->user(),
        ]);

        /*$createTicket = (new \SupportPal\ApiClient\Model\Ticket\Request\CreateTicket)->fill([
            'user' => 1,
            'department' => 1,
            'status' => 1,
            'priority' => 1,
            'subject' => 'new test',
            'text' => 'testing'
        ]);
        $ticket = $api->getTicketApi()->postTicket($createTicket);*/
    }
}
