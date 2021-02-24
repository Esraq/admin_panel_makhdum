<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Crud;



class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud');
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

            'email' => 'required|min:1',
            
            'address' => 'required|min:1',
            
            'phone' => 'required|min:11',
           
          

             ]);

        $crud=new Crud;
        $crud->name=$request->get('name');
        $crud->email=$request->get('email');
       
        $crud->phone=$request->get('phone');

        $crud->address=$request->get('address');

        $crud->save();

        return redirect('crud_list')->with('success', true);
         





        
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
        $cruds =Crud::find($id);
        return view('crud_edit',compact('cruds','id'));
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

            'phone'     =>  $request->phone
        );

        Crud::whereId($id)->update($form_data);

        ///echo "updated";

        return redirect('crud_list')->with('success', true);
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $crud = \App\Models\Crud::find($id);
        $crud->delete();
        return redirect('crud_list')->with('success', true);
    }
}
