<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\User as UserResource;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;
use App\Services\User\Store;
use App\Services\User\Update;
use App\Services\User\Destroy;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', User::class);
        $queryFilters = User::neighborhood(request()->neighborhood)
                            ->name(request()->name);

        return UserResource::collection(
            $queryFilters->paginate(config('paginate.DEFAULT_PAGINATE'))
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request, Store $storeService)
    {
        try {
            $this->authorize('create', User::class);

            $user = $storeService->handle($request);

			return (new UserResource($user))
					->additional(['data' => [
                            'message' => __('messages.attribute_created', ['attribute' => __('attributes.user')]),
						
                            
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user,  UpdateUser $request, Update $updateService)
    {
        try {
            $this->authorize('update', $user);

            $updateService->handle($request, $user);

			return (new UserResource($user))
					->additional(['data' => [
							'message' => __('messages.attribute_updated', ['attribute' => __('attributes.user')]),
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Destroy $destroyService)
    {
        try {
            $this->authorize('delete', $user);

            $destroyService->handle($user);

            return response()->json([
			    'message' => __('messages.attribute_deleted', ['attribute' => __('attributes.user')]),
            ], 201);

        } catch(ExceptionAlias $exception) {
             return response()->json([
                 'error' => $exception->getMessage()
             ], 403);
        }
    }
}
