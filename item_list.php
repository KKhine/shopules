<?php
require 'db_connect.php';
require 'backendheader.php';
$sql = "SELECT items.*, brands.id as brand_id, brands.name as bname, subcategories.id as subcategory_id, subcategories.name as sname 
            FROM items
            LEFT JOIN brands
            ON items.brand_id = brands.id 
            LEFT JOIN subcategories
            ON items.subcategory_id = subcategories.id
            ORDER BY id DESC";

$stmt = $conn->prepare($sql);
$stmt->execute();
$items = $stmt->fetchAll();
?>
<div class="app-title">
    <div>
        <h1> <i class="icofont-list"></i> Item List </h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
        <a href="item_new.php" class="btn btn-outline-primary">
            <i class="icofont-plus"></i>
        </a>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Code No</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Photo</th>
                                <th>Description</th>
                                <th>Brand_Id</th>
                                <th>Subcategory_Id</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach($items as $item){
                            $id = $item['id'];
                            $name = $item['name'];
                            $codeno = $item['codeno'];
                            $price = $item['price'];
                            $photo = $item['photo'];
                            $discount = $item['discount'];
                            $description = $item['description'];
                            $brand_name = $item['bname'];
                            $subcategory_name = $item['sname'];
                            ?>
                            <tr>
                                <td> <?= $i++; ?>. </td>
                                <td> <?= $name; ?> </td>
                                <td> <?= $codeno; ?> </td>
                                <td> <?= $price; ?> </td>
                                <td> <?= $discount; ?> </td>
                                <td> <img src="<?= $photo; ?>" width="80" height="80"> </td>
                                <td> <?= $description; ?> </td>
                                <td> <?= $brand_name; ?> </td>
                                <td> <?= $subcategory_name; ?> </td>
                                <td>
                                    <a href="item_edit.php?id=<?= $id ?>" class="btn btn-warning">
                                        <i class="icofont-ui-settings"></i>
                                    </a>
                                    <form action="item_delete.php" onsubmit="return confirm('Are you sure want to delete')" method="POST" class="d-inline-block">
                                            <input type="hidden" name="id" value="<?= $id ?>">
                                            <button class="btn btn-outline-danger"><i class="icofont-close"></i></button>
                                        </form>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
require ('backendfooter.php');
?>