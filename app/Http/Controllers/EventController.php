<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    public function fetch(Request $request)
    {
        try {
            // Add your existing code here
            $start = Carbon::parse($request->start);
            $end = Carbon::parse($request->end);

            $events = Event::whereBetween('start', [$start, $end])->get();

            return response()->json($events);
        } catch (\Exception $e) {
            Log::error('Error in fetch: ' . $e->getMessage() . ' at ' . $e->getFile() . ':' . $e->getLine());
            return response()->json(['error' => 'An error occurred while fetching events.'], 500);
        }
    }


    public function process(Request $request)
    {
        $start = Carbon::parse($request['start'])->format('Y-m-d H:i:s');
        $end = Carbon::parse($request['end'])->format('Y-m-d H:i:s');

        if (!empty($request['id'])) {
            $event = Event::find($request['id']);

            $event->update([
                'group_id' => $request['group_id'],
                'title' => $request['title'],
                'start' => $start,
                'end' => $end,
                'all_day' => $request['all_day'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Event Updated',
            ]);
        } else {
            $event = Event::create([
                'group_id' => $request['group_id'],
                'title' => $request['title'],
                'start' => $start,
                'end' => $end,
                'all_day' => $request['all_day'],
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Event Created. ID: ' . $event->id,
            ]);
        }
    }

    public function delete(Request $request)
    {
        if (!empty($request['id'])) {
            $event = Event::find($request['id']);

            if ($event) {
                $event->delete();

                return response()->json([
                    'success' => true,
                    'message' => 'Event: '. $event->id .' Deleted',
                ]);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Event Not Found',
                ], 404);
            }
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Event ID Not Provided',
            ], 400);
        }
    }

    public function seed()
    {
        $currentMonth = Carbon::now()->month;
        $currentYear = Carbon::now()->year;

        for ($i = 1; $i <= 6; $i++) {
            $eventDate = Carbon::create($currentYear, $currentMonth, mt_rand(1, 28), 0, 0, 0);
            Event::create([
                'title' => 'Event ' . $i,
                'start' => $eventDate,
                'end' => $eventDate->copy()->addHours(2),
                'all_day' => false,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => '6 Events Created',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}
