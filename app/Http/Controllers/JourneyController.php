<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListJourneysRequest;
use App\Journey;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class JourneyController extends Controller
{
    use SoftDeletes;

    public function list(ListJourneysRequest $request)
    {
        $page = $request->get('page');
        $limit = $request->get('limit');
        $journeys = Journey::take($limit)->with('ideas');
        if ($page > 1)
        {
            $journeys->skip($page*$limit);
        }

        if ($request->get('order_by') && $request->get('order_dir'))
        {
            $journeys->orderBy($request->get('order_by'), $request->get('order_dir'));
        }
        return new JsonResponse($journeys->get(), 200);
    }
}
