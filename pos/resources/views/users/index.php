<div class="row d-flex box p-1 transaction-container">




    <?php if (!empty($_SESSION) && isset($_SESSION['error']) && !empty($_SESSION['error'])) : ?>

    <div class='alert alert-danger container w-50 text-center' role='alert'>
        <?= $_SESSION['error'] ?>
    </div>
    <?php

    $_SESSION['error'] = null;

    endif; ?>



    <div id="dataTableContainer">
        <h2 class="text-center m-auto m-5">Users</h2>
        <hr>
        <div class=" container d-flex justify-content-around my-5">
            <button class="btn btn-outline-success" id="create-user">create user</button>
            <button class="btn btn-outline-success" id="create-subject">create subject</button>
            <button class="btn btn-outline-success" id="assign-subject">Assign subject to student</button>
            <button class="btn btn-outline-success" id="set-mark">set mark</button>
        </div>

        <form id="create-user-form" class="w-50 m-auto ">
            <h3 class="text-center m-auto m-5">Create User</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">username</label>
                <input type="text" class="form-control" name="username" id="create_username"
                    aria-describedby="emailHelp" placeholder="Enter username">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">email</label>
                <input type="email" class="form-control" name="email" id="create_email" aria-describedby="emailHelp"
                    placeholder="Enter username">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="create_password" placeholder="Password" name="password">
            </div>
            <ul id="password-requirements1"></ul>

            <div class="form-group">
                <label for="exampleInputPassword1">Repeat Password</label>
                <input type="password" class="form-control" id="create_repeat" name="repeat"
                    placeholder="repeat password" />

            </div>
            <div id="password-match1"></div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
                <button class="btn btn-danger mt-2 "id="can">cancel</button>
            </div>
        </form>



        <form id="create-subject-form" class="w-50 m-auto ">
            <h3 class="text-center m-auto m-5">Create subject</h3>
            <div class="form-group">
                <label for="exampleInputEmail1">subject name</label>
                <input type="text" class="form-control" name="name" id="subject_name"
                    aria-describedby="emailHelp" placeholder="Enter subject name">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">pass mark</label>
                <input type="number" class="form-control" name="email" id="pass_mark" aria-describedby="emailHelp"
                    placeholder="Enter username">

            </div>
            

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary mt-2 ">Submit</button>
                <button class="btn btn-danger mt-2 "id="canc">cancel</button>
            </div>
        </form>

        <table class="table w-75 m-auto" id="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="text-center tranaction-id">Username</th>
                    <th scope="col" class="text-center item-id"> E-mail</th>
                    <th scope="col" class="text-center item-id"> status</th>
                    <th scope="col" class="text-center unit-price"> Edit</th>
                    <th scope="col" class="text-center unit-price"> Delete</th>
                </tr>
            </thead>
            <tbody id="transaction">

            </tbody>
        </table>

    </div>
</div>