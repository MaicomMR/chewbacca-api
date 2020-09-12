<?php

namespace App\Http\Controllers;


use App\Report;
use App\User;
use Illuminate\Http\Request;

class DataForGraphs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //TODO: OK - ESCOLA COM MAIS INFRAÇÕES + PORCENTAGEM EM RELAÇÃO AO ÚLTIMO MÊS

        //TODO: BUSCA POR MAIOR INFRAÇÃO + PORCENTAGEM DO MÊS
        //TODO: TOTAL DE INFRAÇÃO + PORCENTAGEM DO ULTIMO MÊS
        //TODO: LIST DE ESCOLA - BAIRRO - INFRAÇEÕS

        $oneMonthDaysAgo = now()->subDay(30)->format('yy-m-d');
        $twoMonthDaysAgo = now()->subDay(60)->format('yy-m-d');

        //Escola que mais se repete nas ocorrências
        $schoolWithMoreReports = Report::select('user_id')
            ->groupBy('user_id')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(1)
            ->get();

        //Soma de ocorrências da escola que mais se repete nos ultimos 30 dias
        $maxOccurencesOfSchoolOnLast30Days = Report::all()->where('user_id','=', $schoolWithMoreReports[0]->user_id)
            ->where('date', '>', $oneMonthDaysAgo)->count();

        //Soma de ocorrências da escola que mais se repete no mês anterior
        $maxOccurencesOfSchoolOnLastMonth = Report::all()->where('user_id','=', $schoolWithMoreReports[0]->user_id)
            ->where('date', '<', $oneMonthDaysAgo)->where('date', '>', $twoMonthDaysAgo)->count();

        //porcentagem em relação ao Mês anterior
        $occurrenceIndex = $maxOccurencesOfSchoolOnLast30Days * 100 / $maxOccurencesOfSchoolOnLastMonth - 100;

        //Nome da escola com mais ocorrências:
        $schoolName = User::all()->where('id', '=', $schoolWithMoreReports[0]->user_id)->first();

        //30 dias atrás
        dump($oneMonthDaysAgo);
        //60 dias atrás
        dump($twoMonthDaysAgo);

        dump('nome da escola: '. $schoolName);
        dump('porcentagem: ' . $occurrenceIndex . '%');
        dump('este mes: '. $maxOccurencesOfSchoolOnLast30Days);
        dump('mes passado: '. $maxOccurencesOfSchoolOnLastMonth);

        dd($schoolWithMoreReports[0]->user_id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
