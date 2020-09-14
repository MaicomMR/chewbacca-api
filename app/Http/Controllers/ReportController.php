<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;
use App\Http\Resources\Report as ReportResource;
use App\Http\Requests\StoreReport;
use App\Http\Requests\UpdateReport;
use App\Services\Report\Store;
use App\Services\Report\Update;
use App\Services\Report\Destroy;


class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('viewAny', Report::class);
        return ReportResource::collection(Report::paginate(config('paginate.DEFAULT_PAGINATE')));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReport $request, Store $storeService)
    {
        try {
            $this->authorize('create', Report::class);

            $report = $storeService->handle($request, $request->violences);

			return (new ReportResource($report))
					->additional(['data' => [
                            'message' => __('messages.attribute_created', ['attribute' => __('attributes.report')]),      
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
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        $this->authorize('view', $report);
        return new ReportResource($report);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Report $report,  UpdateReport $request, Update $updateService)
    {
        try {
            $this->authorize('update', $report);

            $updateService->handle($request, $report);

			return (new ReportResource($report))
					->additional(['data' => [
							'message' => __('messages.attribute_updated', ['attribute' => __('attributes.report')]),
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
     * @param  \App\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report, Destroy $destroyService)
    {
        try {
            $this->authorize('delete', $report);

            $destroyService->handle($report);

            return response()->json([
			    'message' => __('messages.attribute_deleted', ['attribute' => __('attributes.report')]),
            ], 201);

        } catch(ExceptionAlias $exception) {
             return response()->json([
                 'error' => $exception->getMessage()
             ], 403);
        }
    }
}
