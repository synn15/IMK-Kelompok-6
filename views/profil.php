<!DOCTYPE html>
<html lang="en">

<?php include '../php/header.php'; ?>
<head>
<link rel="stylesheet" href="/imk-kelomok-6/css/profil.css">
    <style> 
    h1.profil {
        font-size: 36px;
        margin-left: 80px;
        margin-top: 70px;
    }

    div.box1 {
        width: 340px;
        height: 450px;
        padding: 10px;
        margin-left: 80px;
        margin-top: 30px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 10px;
        
    }

    div.box2 {
        width: 1000px;
        height: 792px;
        padding: 10px;
        margin-top: 30px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        border-radius: 10px;
        display: inline-block;
    }

    ul {
        padding: 0;
        list-style-type: none;
        columns: 4;
    }

    button {
        
    }

    </style>
</head>

<body>
    <?php include '../php/navbar.php'; ?>
    <h1 class="profil">Profil Saya</h1>
    <ul>
        <li>
            <div class="box1">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eaque ut minus sunt pariatur eos, id, laboriosam, consequatur aliquam blanditiis necessitatibus impedit laudantium aut placeat explicabo hic adipisci ad voluptatibus!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum veniam id consequatur accusantium consectetur cum cumque odit, voluptates ullam est sed harum, totam commodi eum ipsa, magni ducimus cupiditate adipisci!
                <br>
                <button type="button" class="btn btn-primary btn-lg btn-block">Pilih Foto</button>
            </div>
        </li>
        <li>
            <div class="box2">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus eaque ut minus sunt pariatur eos, id, laboriosam, consequatur aliquam blanditiis necessitatibus impedit laudantium aut placeat explicabo hic adipisci ad voluptatibus!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum veniam id consequatur accusantium consectetur cum cumque odit, voluptates ullam est sed harum, totam commodi eum ipsa, magni ducimus cupiditate adipisci!
            </div>

        </li>
    </ul>
</body>