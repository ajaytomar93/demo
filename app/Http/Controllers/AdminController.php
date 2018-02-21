<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AppInitialize; 
use Validator;
use Session;
use App\Event;
use Eventagenda;
use Illuminate\Http\Request; 
use DB;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $events = DB::table('events')->get();
        //dd($events);
        return view('event.event', compact('events'));
          
    }




    public function createEvent()
    {
          // $events = event::All();
          return view('event.event',compact(''));
    
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

         $data=$request->input(); 


        $id=DB::table('events')->insert([
            ['eventName' => $data['ename'],'discription' => $data['comment'],'organiser' => $data['oname'],'startDate' => $data['start_date'],'endDate' => $data['end_date']],      
        ]); 

        $events = DB::table('events')->get(); 

        return view('event.event',compact('events'));
        
    }   
      //$Ids = Event::select('events.id')->first();
      //$eventData = DB::table('events')->where('id','101')->first();
      //dd($eventData);

        
      //dd($eventData);
     

        
        
        
            // $data = new Event;
            // $data->eventName = $request->ename;
            //  $data->discription = $request->comment;
            //   $data->organiser = $request->oname;
            //    $data->startDate = $request->start_date;
            //     $data->endDate = $request->end_date;
            //     dd($data);
            //     $data->save(); 
            
      
        
    // $eventData = DB::table('events')->orderBy('created_at','DESC')->first();
    //    $ids=$eventData->id;
           
        
    //     DB::table('eventagendas')->insert([ 
    //         ['eventId'=>$ids,'agendaName'=>$data['agenda'],'startTime'=>$data['start_time'],'endTime'=>$data['end_time']],
    //     ]);

     

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
          $data =Event::where('id','=',$id)->first();
          
          return view('event.event_edit',compact('data'));

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
