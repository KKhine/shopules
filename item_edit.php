<?php 
	require 'db_connect.php';
	require 'backendheader.php';

	// $sql = "SELECT * FROM items ORDER BY id DESC";
 //    $stmt = $conn->prepare($sql);
 //    $stmt->execute();

 //    $item = $stmt->fetchAll();

    $id = $_GET['id'];
    $sql1 = "SELECT * FROM items WHERE id =:value1";
    $stmt = $conn->prepare($sql1);
    $stmt->bindParam(':value1', $id);
    $stmt->execute();
    $item = $stmt->FETCH(PDO::FETCH_ASSOC); 

?>

<div class="app-title">
    <div>
        <h1> <i class="icofont-list"></i> Item Edit Form </h1>
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
                <form action="item_update.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $item['id']; ?>">
                    <div class="form-group row">
                        <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name_id" name="name" value="<?= $item['name'] ?>">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $item['codeno']; ?>">
                    <div class="form-group row">
                        <label for="codenoid" class="col-sm-2 col-form-label"> Code No </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="codenoid" name="codeno" value="<?= $item['codeno'] ?>">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $item['price']; ?>">
                    <div class="form-group row">
                        <label for="priceid" class="col-sm-2 col-form-label"> Price </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="priceid" name="price" value="<?= $item['price'] ?>">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $item['discount']; ?>">
                    <div class="form-group row">
                        <label for="discountid" class="col-sm-2 col-form-label"> Discount </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="discountid" name="discount" value="<?= $item['discount'] ?>">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="photo_id" class="col-sm-2 col-form-label"> Photo </label>
                        <div class="col-sm-10">
                           <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Photo</a>
                                        <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Photo</a>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        
                                        <img src="<?= $item['photo'] ?>" class="img-fluid">

                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <input type="file" id="photo_id" name="photo" value="<?= $item['photo'] ?>">
                                    </div>
                                    
                                </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $item['description']; ?>">
                    <div class="form-group row">
                        <label for="descriptionid" class="col-sm-2 col-form-label"> Description </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="descriptionid" name="description" value="<?= $item['description'] ?>">
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $item['bran_id']; ?>">
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
                    <input type="hidden" name="id" value="<?= $item['subcategory_id']; ?>">
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