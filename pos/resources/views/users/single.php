<div class="">
    

    <div class="card m-auto col-xl-6 col-md-7 col-sm-12 col-xs-12 box p-2 pe-3 pb-5" >
    
        <img class="card-img-top profile-image" src="./resources/image/<?=$data->user->image?>" alt="Card image cap" width="50%">
        <div class="card-body">
            <h3 class="card-title table-title text-center"><?= $data->user->display_name ?></h3>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item item_description"><strong>username:</strong><?=$data->user->username?></li>
            <li class="list-group-item item_description"><strong>E-mail:</strong><?=$data->user->email?></li>
            <li class="list-group-item item_description"><strong>Role:</strong><?=$data->user->role?></li>
        </ul>

        <a href="/users/edit?id=<?= $data->user->id ?>" class="btn btn-warning mb-2">Edit</a>
        <a href="/users/delete?id=<?= $data->user->id ?>" class="btn btn-danger mb-2">Delete</a>
        <a href="/users" class="btn btn-success">Back</a>

    </div>




</div>