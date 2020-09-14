<?php

namespace App\Http\Controllers;

use App\Violence;
use Illuminate\Http\Request;
use App\Http\Resources\Violence as ViolenceResource;
use App\Http\Requests\StoreViolence;
use App\Http\Requests\UpdateViolence;
use App\Services\Violence\Store;
use App\Services\Violence\Update;
use App\Services\Violence\Destroy;


class ViolenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Violence::class);
        return ViolenceResource::collection(Violence::paginate(config('paginate.DEFAULT_PAGINATE')));
    }

    public function all()
    {
        $this->authorize('viewAny', Violence::class);
        return ViolenceResource::collection(Violence::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreViolence $request, Store $storeService)
    {
        try {
            $this->authorize('create', Violence::class);

            $violence = $storeService->handle($request);

			return (new ViolenceResource($violence))
					->additional(['data' => [
                            'message' => __('messages.attribute_created', ['attribute' => __('attributes.violence')]),
						
                            
					]]);

        } catch(ExceptionAlias $exception) {
             return response()->json([
                 'error' => $exception->getMessage()
             ], 403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Violence  $violence
     * @return \Illuminate\Http\Response
     */
    public function show(Violence $violence)
    {
        $this->authorize('view', $violence);

        return new ViolenceResource($violence);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Violence  $violence
     * @return \Illuminate\Http\Response
     */
    public function update(Violence $violence,  UpdateViolence $request, Update $updateService)
    {
        try {
            $this->authorize('update', $violence);

            $updateService->handle($request, $violence);

			return (new ViolenceResource($violence))
					->additional(['data' => [
							'message' => __('messages.attribute_updated', ['attribute' => __('attributes.violence')]),
					]]);

        } catch(ExceptionAlias $exception) {
             return response()->json([
                 'error' => $exception->getMessage()
             ], 403);
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Violence  $violence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Violence $violence, Destroy $destroyService)
    {
        try {
            $this->authorize('delete', $violence);

            $destroyService->handle($violence);

            return response()->json([
			    'message' => __('messages.attribute_deleted', ['attribute' => __('attributes.violence')]),
            ], 201);

        } catch(ExceptionAlias $exception) {
             return response()->json([
                 'error' => $exception->getMessage()
             ], 403);
        }
    }
}
