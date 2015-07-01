<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Bis;
use App\Map;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user = Bis::all();
        $map = [];
        foreach ($user as $key) {
            if (count($key->maps) >0)
                $map[] = $key->maps->sortByDesc('date')->first();    
        }
        // foreach ($map as $key) {
        //     echo $key->id.'<br>';
        // }
        // // // //var_dump($map->date);
        //  die();
        return view('map')->with('map', $map)->with('user', $user);

    }

    public function bis($id){
        return Bis::find($id);
    }

    public function lat($id){
        //die("LOL");
        $user = Bis::find($id);
        $map = $user->maps->sortByDesc('date')->first();
        // echo $map->latitude;
        // die();
        return $map;
    }

    public function stat($id){
        //die("LOL");
        $user = Bis::find($id);
        //die($user->status);
        return $user->status;
    }

    public function otw(){
        $user = Bis::all();
        $i = 1;
        $sung = "";
        foreach ($user as $key) {
            if($key->status == "On the way"){
                $sung .= "<tr>
                        <td>". $key->ID ."</td>
                        <td>". $key->jalur ."</td>
                        <td>". $key->keterangan ."</td>
                        <td>". $key->isi ."</td>
                        <td>". $key->keterangan2 ."</td>
                        <td> 
                            <div class=\"pull-right\">
                                <a onclick=\"myFunction('". $key->ID ."')\" title=\"Search\"><i class=\"icon-search3\"></i></a> &nbsp
                                <a onclick=\"myModal('". $key->ID ."')\" title=\"Detail\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"icon-vcard\"></i></a>       
                            </div>
                        </td>
                    </tr>";
                $i++;
                            
            }
        }
        return $sung;
    }

    public function op(){
        $user = Bis::all();
        $i = 1;
        $sung = "";
        foreach ($user as $key) {
            if($key->status == "On problem"){
                $sung .= "<tr>
                        <td>". $key->ID ."</td>
                        <td>". $key->jalur ."</td>
                        <td>". $key->keterangan ."</td>
                        <td>". $key->isi ."</td>
                        <td>". $key->keterangan2 ."</td>
                        <td> 
                            <div class=\"pull-right\">
                                <a onclick=\"myFunction('". $key->ID ."')\" title=\"Search\"><i class=\"icon-search3\"></i></a> &nbsp
                                <a onclick=\"myModal('". $key->ID ."')\" title=\"Detail\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"icon-vcard\"></i></a>       
                            </div>
                        </td>
                    </tr>";
                $i++;
                            
            }
        }
        return $sung;
    }

    public function oa(){
        $user = Bis::all();
        $i = 1;
        $sung = "";
        foreach ($user as $key) {
            if($key->status == "On arrive"){
                $sung .= "<tr>
                        <td>". $key->ID ."</td>
                        <td>". $key->jalur ."</td>
                        <td>". $key->keterangan ."</td>
                        <td>". $key->isi ."</td>
                        <td>". $key->keterangan2 ."</td>
                        <td> 
                            <div class=\"pull-right\">
                                <a onclick=\"myFunction('". $key->ID ."')\" title=\"Search\"><i class=\"icon-search3\"></i></a> &nbsp
                                <a onclick=\"myModal('". $key->ID ."')\" title=\"Detail\" data-toggle=\"modal\" data-target=\"#myModal\"><i class=\"icon-vcard\"></i></a>       
                            </div>
                        </td>
                    </tr>";
                $i++;
                            
            }
        }
        return $sung;
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
