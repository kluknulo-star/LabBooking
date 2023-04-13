<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecordRequest;
use App\Http\Resources\RecordResource;
use App\Models\Record;

class RecordController extends Controller
{
    public function index()
    {
        $records = Record::all();

        return RecordResource::collection($records)->resolve();
    }

    public function store(StoreRecordRequest $request)
    {
        $storeData = $request->validated();

        $record = Record::create($storeData);

        return RecordResource::make($record)->resolve();
    }


}
