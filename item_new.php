<?php
    require 'backendheader.php';
?>
<?php require 'db_connect.php'; 
?>

<?php 
    $sql = "SELECT * FROM brands ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $brands = $stmt->fetchAll();
    // var_dump($categories);


    $sql = "SELECT * FROM subcategories ORDER BY id DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $subcategories = $stmt->fetchAll();
    // var_dump($categories);

?>
 

<div class="app-title">
    <div>
        <h1> <i class="icofont-list"></i> Item Form </h1>
    </div>
    <ul class="app-breadcrumb breadcrumb side">
        <a href="item_list.php" class="btn btn-outline-primary">
            <i class="icofont-double-left"></i>
        </a>
    </ul>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-body">
                <form action="item_add.php" method="POST" enctype="multipart/form-data">
                    
                    <div class="form-group row">
                        <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name_id" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="codenoid" class="col-sm-2 col-form-label"> Code No </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="codenoid" name="codeno">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="priceid" class="col-sm-2 col-form-label"> Price </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="priceid" name="price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="discountid" class="col-sm-2 col-form-label"> Discount </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="discountid" name="discount">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="photo_id" class="col-sm-2 col-form-label"> Photo </label>
                        <div class="col-sm-10">
                            <input type="file" id="photo_id" name="photo">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="descriptionid" class="col-sm-2 col-form-label"> Description </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="descriptionid" name="description"> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="brand_id" class="col-sm-2 col-form-label"> Brand ID </label>
                        <div class="col-sm-10">
                            <select class="form-control" name="brand_id">
                                <?php foreach ($brands as $brand) {
                                   $id = $brand['id'];
                                   $name=$brand['name'];
                                ?>
                                <option value="<?= $id; ?>"><?= $name; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subcategory_id" class="col-sm-2 col-form-label"> Subcategory ID </label>
                        <div class="col-sm-10">
                            <select class="form-control" name="subcategory_id">
                                <?php foreach ($subcategories as $subcategory) {
                                   $id = $subcategory['id'];
                                   
                                ?>
                                <option value="<?= $id; ?>"><?= $subcategory['name']; ?></option>
                            <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">
                            <i class="icofont-save"></i>
                            Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
    require 'backendfooter.php';
?>