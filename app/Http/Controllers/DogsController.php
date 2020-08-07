<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class DogsController extends Controller
{
    public function DogsStore() {
        $collection = (new MongoDB\Client)->MiniProyecto->dogs;
        $dogCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $dogs = $collection->find([], ["limit" => 16, "skip" => ($page-1) * 16]);  
        return view('Dogs.Index', ['dogs' => $dogs, 'dogCount' => $dogCount]);
    }

    //User

    public function AddComment() {
        $collection = (new MongoDB\Client)->MiniProyecto->dogs;
        $comment = [
            "user_id" => request('userid'),
            "comment" => request('comment'),
            "date" => date("Y-m-d H:i:s")            ];
        $dog= $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId(request('dogid')) ]);
        $Comments = $dog->Comments;
        if (count($Comments) == 0 || $Comments == null || empty($Comments)) {
            $Comments = [$comment];
        } else {
            $Comments = [$comment, ...$Comments];
        }
        $updateOneResult = $collection->updateOne([
            "_id" => new MongoDB\BSON\ObjectId(request('dogid'))
        ],[
            '$set' => [ 'Comments' => $Comments ]
        ]);

        return redirect("/dogs/".request('dogid'));
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->MiniProyecto->dogs;
        $dog = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Dogs.Details', [ "dog" => $dog]);
    }

    //ADMIN

    public function Index() {
        $collection = (new MongoDB\Client)->MiniProyecto->dogs;
        $dogs = $collection->find();  
        return view('Admin.Dogs.Index', ['dogs' => $dogs]);
    }

    public function Create() {
        $collection = (new MongoDB\Client)->MiniProyecto->dogs;
        $dog = $collection->find();
        return view('Admin.Dogs.Create', [ "dogs" => $dog ]);
    }

    public function Store() {
        $dog = [
            "name" => request("name"),
            "sex" => request("sex"),
            "breed" => request("breed"),
            "color" => request("color"),
            "size" => request("size"),
            "Rating" => [],
            "Comments" => []
        ];
        $collection = (new MongoDB\Client)->MiniProyecto->dogs;
        $insertOneResult = $collection->insertOne($dog);
        return redirect("/admin/dogs");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->MiniProyecto->dogs;
        $dog = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Dogs.Edit', [ "dog" => $dog ]);
    }    
    
    public function Update(){
        $collection = (new MongoDB\Client)->MiniProyecto->dogs;
        $dog = [
            "name" => request("name"),
            "sex" => request("sex"),
            "breed" => request("breed"),
            "color" => request("color"),
            "size" => request("size"),
            "Rating" => [],
            "Comments" => []
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("dogid"))
        ], [
            '$set' => $dog
        ]);
        return redirect('/admin/dogs/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->MiniProyecto->dogs;
        $dog = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Dogs.Delete', [ "dog" => $dog ]);
    }
    
    public function Remove(){
        $collection = (new MongoDB\Client)->MiniProyecto->dogs;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("dogid"))
        ]);
        return redirect('/admin/dogs/');
    }

    public function Show($id) {
        $collection = (new MongoDB\Client)->MiniProyecto->dogs;
        $dog = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Dogs.Details', [ "dog" => $dog ]);
    }

}