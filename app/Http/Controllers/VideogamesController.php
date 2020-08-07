<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB;

class VideogamesController extends Controller
{
    public function VideogamesStore() {
        $collection = (new MongoDB\Client)->MiniProyecto->videogames;
        $videogamesCount = $collection->count();
        $page = request("pg") == 0 ? 1 : request("pg");
        $videogames = $collection->find([], ["limit" => 12, "skip" => ($page-1) * 12]);  
        return view('Videogames.Index', ['videogames' => $videogames, 'videogamesCount' => $videogamesCount]);
    }

    //USER

    public function AddComment() {
        $collection = (new MongoDB\Client)->MiniProyecto->videogames;
        $comment = [
            "user_id" => request('userid'),
            "comment" => request('comment'),
            "date" => date("Y-m-d H:i:s")            ];
        $videogame = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectId(request('videogameid')) ]);
        $Comments = $videogame->Comments;
        if (count($Comments) == 0 || $Comments == null || empty($Comments)) {
            $Comments = [$comment];
        } else {
            $Comments = [$comment, ...$Comments];
        }
        $updateOneResult = $collection->updateOne([
            "_id" => new MongoDB\BSON\ObjectId(request('videogameid'))
        ],[
            '$set' => [ 'Comments' => $Comments ]
        ]);

        return redirect("/videogames/".request('videogameid'));
    }

    public function Details($id) {
        $collection = (new MongoDB\Client)->MiniProyecto->videogames;
        $videogame = $collection->findOne(["_id" => new MongoDB\BSON\ObjectId($id)]);
        return view('Videogames.Details', [ "videogame" => $videogame]);
    }

    //ADMIN

    public function Index() {
        $collection = (new MongoDB\Client)->MiniProyecto->videogames;
        $videogames = $collection->find();  
        return view('Admin.Videogames.Index', ['videogames' => $videogames]);
    }

    public function Create() {
        $collection = (new MongoDB\Client)->MiniProyecto->videogames;
        $videogame = $collection->find();
        return view('admin.Videogames.Create', [ "videogames" => $videogame ]);
    }

    public function Store() {
        $videogame = [
            "game" => request("Game"),
            "platform" => request("platform"),
            "developer" => request("developer"),
            "genre" => request("genre"),
            "release_date" => request("release_date"),
            "metascore" => request("metascore"),
            "Rating" => [],
            "Comments" => []
        ];
        $collection = (new MongoDB\Client)->MiniProyecto->videogames;
        $insertOneResult = $collection->insertOne($videogame);
        return redirect("/admin/videogames");
    }

    public function Edit($id) {
        $collection = (new MongoDB\Client)->MiniProyecto->videogames;
        $videogame = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Videogames.Edit', [ "videogame" => $videogame ]);
    }    
    
    public function Update(){
        $collection = (new MongoDB\Client)->MiniProyecto->videogames;
        $videogame = [
            "game" => request("Game"),
            "platform" => request("platform"),
            "developer" => request("developer"),
            "genre" => request("genre"),
            "release_date" => request("release_date"),
            "metascore" => request("metascore"),
            "Rating" => [],
            "Comments" => []
        ];
        $updateOneResult = $collection->updateOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("videogameid"))
        ], [
            '$set' => $videogame
        ]);
        return redirect('/admin/videogames/');
    }

    public function Delete($id) {
        $collection = (new MongoDB\Client)->MiniProyecto->videogames;
        $videogame = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Videogames.Delete', [ "videogame" => $videogame ]);
    }
    
    public function Remove(){
        $collection = (new MongoDB\Client)->MiniProyecto->videogames;
        $deleteOneResult = $collection->deleteOne([
            "_id" => new \MongoDB\BSON\ObjectId(request("videogameid"))
        ]);
        return redirect('/admin/videogames/');
    }

    public function Show($id) {
        $collection = (new MongoDB\Client)->MiniProyecto->videogames;
        $videogame = $collection->findOne([ "_id" => new MongoDB\BSON\ObjectID($id) ]);
        return view('Admin.Videogames.Details', [ "videogame" => $videogame ]);
    }

}