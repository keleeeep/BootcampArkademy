<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkademy</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/style.css">
    <script src="https://kit.fontawesome.com/7291d3ddea.js" crossorigin="anonymous"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="./asset/image/logo.png" width="auto" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search..." aria-label="Search" style="width:866px;margin-left:30px;background-color: #cecece !important; border-radius: 10px !important;">
        </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <button class="btn btn-pink my-2 my-sm-0" type="button" data-toggle="modal" data-target="#AddModal" style="margin-left:80px; width:100px">ADD</button>
        </div>
    </nav>

    <div class="container">
        <table class="table table-borderless mt-5 shadow">
            <thead class="text-center">
                <tr class="header-bg border-radius-table">
                    <th scope="col">No</th>
                    <th scope="col">Cashier</th>
                    <th scope="col">Product</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            //menampilkan data mysqli
            include "koneksi.php";
            $no = 0;
            $arkademy = mysqli_query($koneksi, "SELECT chsr.name as Cashier, prd.name as Product, ctgr.name as Category, prd.price as Price, prd.id_cashier as id_cashier, prd.id_category as id_category
            from product as prd 
            inner join Category as ctgr on prd.id_category = ctgr.id inner join Cashier as chsr on prd.id_cashier = chsr.id");
            while ($r = mysqli_fetch_array($arkademy)) {
                $no++;

            ?>
                <tbody class="text-center">
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo  $r['Cashier']; ?></td>
                        <td><?php echo  $r['Product']; ?></td>
                        <td><?php echo  $r['Category']; ?></td>
                        <td><?php echo  $r['Price']; ?></td>
                        <td>
                            <button type="button" class="btn p-0 btn-edit" data-toggle="modal" data-target="#EditModal">
                                <i class="fas fa-edit"></i>
                            </button>

                            <button type="button" class="btn p-0 btn-delete" data-toggle="modal" data-target="#DeleteModal">
                                <i class="fas fa-trash-alt"></i>
                            </button>

                        </td>
                    </tr>
                <?php } ?>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="proses_add.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01" name="cashier">
                                <option selected>Cashier</option>
                                <option value="1">Pevita Pearce</option>
                                <option value="2">Raisa Andriana</option>
                                <option value="3">Ricky Alvin</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect01" name="category">
                                <option selected>Category</option>
                                <option value="1">Food</option>
                                <option value="2">Drink</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="product" placeholder="Product">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="price" placeholder="Price">
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-pink">ADD</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    
        <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="proses_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect01" name="cashier">
                                    <option selected>Cashier</option>
                                    <option value="1">Pevita Pearce</option>
                                    <option value="2">Raisa Andriana</option>
                                    <option value="3">Ricky Alvin</option>
                                </select>
                            </div>
                            <div class="input-group mb-3">
                                <select class="custom-select" id="inputGroupSelect01" name="category">
                                    <option selected>Category</option>
                                    <option value="1">Food</option>
                                    <option value="2">Drink</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="product" name="product">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="price" name="price">
                            </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-pink">Edit</button>
                    </div>
                    </form>
                
                </div>
            </div>
        </div>

        <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <h3>Data Raisa Andriana ID <span class="pink">#1</span></h3>
                            <img src="./asset/image/Success.png" alt="Success" class="mt-4 mb-4">
                            <h3>Berhasil Dihapus</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

        
</body>

</html>