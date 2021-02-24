<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            return view('person');
        
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
        $this->validate($request,[

            'name'=>'required|min:1', 

            'age'=>'required|min:1', 

            'email' => 'required|min:1',
            
            'address' => 'required|min:1',
            
            'phone' => 'required|min:11',
             ]);


             if($request->hasfile('photo'))
             {
                 $file = $request->file('photo');
                 $name=time().$file->getClientOriginalName();
                 $file->move(public_path().'/public/images/', $name);
             }

             

        $person=new Person;
        $person->name=$request->get('name');
        $person->age=$request->get('age');
        $person->email=$request->get('email');
       
        $person->phone=$request->get('phone');

        $person->address=$request->get('address');

        $person->filename=$name;

        $person->save();

        return redirect('person_list')->with('success', true);
        

    
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $person =Person::find($id);
        return view('person_edit',compact('person','id'));
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
        $form_data = array(
            'name'       =>   $request->name,
            'email'        =>  $request->email,
            'address'  =>   $request->address,
            'age'=>$request->age,
            'phone'     =>  $request->phone
        );

        Person::whereId($id)->update($form_data);

        ///echo "updated";

        return redirect('person_list')->with('success', true);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = \App\Models\Person::find($id);
        $person->delete();
        return redirect('/person_list')->with('success', true);
    }
}
