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
            $report = $storeService->handle($request);

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
            $destroyService->handle($report);

            return response()->json([
			    'message' => __('messages.attribute_deleted', ['attribute' => __('attributes.skill')]),
            ], 201);

        } catch(ExceptionAlias $exception) {
             return response()->json([
                 'error' => $exception->getMessage()
             ], 403);
        }
    }
}
