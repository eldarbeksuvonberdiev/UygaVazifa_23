<?php

namespace App\Controllers;

use App\Models\Muallif;

class MuallifController
{

    public function index()
    {
        $models = Muallif::all();
        return view('Muallif/index', 'Students', $models);
    }

    public function createStudent()
    {
        return view('createStudent', 'Students');
    }

    public function create()
    {
        if (isset($_POST['ok'])) {
            $img = explode('.',$_FILES['img']['name']);
            $timg = ['jpg','png','svg'];
            $end = end($img);
            if(in_array($end,$timg)){
                $path = 'Images/'. date("Y-m-d_H-i-s.") . $end;
                echo $path;
            }else{
                header("location: /tocreate");
            }

            move_uploaded_file($_FILES['img']['tmp_name'],$path);
            
            $data = [
                'name' => htmlspecialchars(strip_tags($_POST['name'])),
                'password' => htmlspecialchars(strip_tags($_POST['password'])),
                'tel' => htmlspecialchars(strip_tags($_POST['tel'])),
                'manzil' => htmlspecialchars(strip_tags($_POST['manzil'])),
                'img' => $path
            ];
            //  dd($data);
            Muallif::create($data);
            header("location: /student");
        }
    }

    public function delete()
    {
        if (isset($_POST['ok'])) {
            $id = $_POST['id'];
            Muallif::delete($id);
            header("location: /student");
        }
    }

    public function show()
    {
        if (isset($_POST['ok'])) {
            $id = $_POST['id'];
            $models = Muallif::show($id);
            return view('showStudent', 'Show Student info', $models);
        }
    }

    public function edit()
    {
        if (isset($_POST['ok'])) {
            $id = $_POST['id'];
            $models = Muallif::show($id);
            return view('edit', 'Show', $models);
        }
    }

    public function update()
    {
        if (isset($_POST['ok'])) {
            $id = $_POST['id'];
            if($_FILES['img']['name']){
                $img = explode('.',$_FILES['img']['name']);
                $timg = ['jpg','png','svg'];
                $end = end($img);
                if(in_array($end,$timg)){
                    $path = 'Images/'. date("Y-m-d_H-i-s.") . $end;
                }else{
                    header("location: /sedit");
                }
            }else{
                $path = $_POST['rasm'];
            }            
            $data = [
                'name' => $_POST['name'],
                'password' => $_POST['password'],
                'tel' => $_POST['tel'],
                'manzil' => $_POST['manzil'],
                'img' => $path
            ];
            $models = Muallif::update($data, $id);
            header("location: /student");
        }
    }

    public function editStudent()
    {
        if(isset($_POST['ok'])){
            $id = $_POST['id'];
            $models = Muallif::show($id);
            return view('editStudent', 'Edit Students', $models);
        }
    }
}
