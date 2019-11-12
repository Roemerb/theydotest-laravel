<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateIdeaRequest;
use App\Idea;
use App\Journey;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class IdeaController extends Controller
{
    use SoftDeletes;

    public function create(CreateIdeaRequest $request)
    {
        $data = $request->all();
        $idea = new Idea();
        $idea->fill([
            'author_id'     => $data['author_id'],
            'title'         => $data['title'],
            'description'   => $data['description'] ?? null,
            'solution'      => $data['solution'],
        ])->save();

        $journey = Journey::find($data['journey_id']);
        $journey->ideas()->save($idea);

        $idea->journeys = $idea->journeys()->get();
        return new JsonResponse($idea, 201);
    }
}
