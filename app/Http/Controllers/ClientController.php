<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use DB;

class ClientController extends Controller
{
    public function addClient(){
        return view('admin.client.add-client');
    }
    public function saveClientInfo(Request $request){
        $clientImage = $request->file('client_image');
        $imageName = $clientImage->getClientOriginalName();
        $directory = 'client_images/';
        $imageUrl = $directory.$imageName;
        $clientImage->move($directory, $imageName);
        $client = new Client();
        $client->client_name = $request->client_name;
        $client->client_designation = $request->client_designation;
        $client->client_message = $request->client_message;
        $client->client_image = $imageUrl;
        $client->publication_status = $request->publication_status;
        $client->save();
        return redirect('/client/add')->with('message','Content Info Save Successfully.');

    }
    public function manageClient(){
        $clients = Client::all();
        return view('admin.client.manage-client',['clients'=>$clients]);
    }
    public function viewClientDetailsInfo($id){
        $clientById = Client::find($id);
        return view('admin.client.view-client',['clientById'=>$clientById]);

    }
    public function unpublishedClientInfo($id){

        $clientById = Client::find($id);
        $clientById->publication_status = 0;
        $clientById->save();
        return redirect('/client/manage-client');

    }
    public function publishedClientInfo($id){
        $clientById = Client::find($id);
        $clientById->publication_status = 1;
        $clientById->save();
        return redirect('/client/manage-client');

    }
    public function editClientInfo($id){
        $clientById = Client::find($id);
        return view('admin.client.edit-client',['clientById'=>$clientById]);
    }
    public function updateClientInfo(Request $request){

        if($request->client_image){
            $client = Client::find($request->client_id);
            //unlink($client->client_image);
            $clientImage = $request->file('client_image');
            $imageName = $clientImage->getClientOriginalName();
            $directory = 'client_images/';
            $imageUrl = $directory.$imageName;
            $clientImage->move($directory, $imageName);
            $client->client_name = $request->client_name;
            $client->client_designation = $request->client_designation;
            $client->client_message = $request->client_message;
            $client->client_image = $imageUrl;
            $client->publication_status = $request->publication_status;
            $client->save();
            return redirect('/client/manage-client');

        }else{
            $client = Client::find($request->client_id);
            $client->client_name = $request->client_name;
            $client->client_designation = $request->client_designation;
            $client->client_message = $request->client_message;
            $client->publication_status = $request->publication_status;
            $client->save();
            return redirect('/client/manage-client');
        }
    }
    public function deleteClientInfo($id){
    $clientById = Client::find($id);
    $clientById->delete();
    return redirect('/client/manage-client');
}


}
