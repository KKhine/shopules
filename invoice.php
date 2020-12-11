<?php 
require 'backendheader.php';
require 'db_connect.php';

$sql = "SELECT items.*, brands.id as brand_id, brands.name as bname, subcategories.id as subcategory_id, subcategories. name as sname 
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
          <h1><i class="fa fa-file-text-o"></i> Invoice</h1>
          <p>A Printable Invoice Format</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Invoice</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <section class="invoice">
              <div class="row mb-4">
                <div class="col-6">
                  <h2 class="page-header"><i class="fa fa-globe"></i> Vali Inc</h2>
                </div>
                <div class="col-6">
                  <h5 class="text-right">Date: 01/01/2016</h5>
                </div>
              </div>
              <div class="row invoice-info">
                <div class="col-4">From
                  <address><strong>Vali Inc.</strong><br>518 Akshar Avenue<br>Gandhi Marg<br>New Delhi<br>Email: hello@vali.com</address>
                </div>
                <div class="col-4">To
                  <address><strong>John Doe</strong><br>795 Folsom Ave, Suite 600<br>San Francisco, CA 94107<br>Phone: (555) 539-1037<br>Email: john.doe@example.com</address>
                </div>
                <div class="col-4"><b>Invoice #007612</b><br><br><b>Order ID:</b> 4F3S8J<br><b>Payment Due:</b> 2/22/2014<br><b>Account:</b> 968-34567</div>
              </div>
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>Qty</th>
                        <th>Product</th>
                        <th>Serial #</th>
                        <th>Description</th>
                        <th>Subtotal</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>The Hunger Games</td>
                        <td>455-981-221</td>
                        <td>El snort testosterone trophy driving gloves handsome</td>
                        <td>$41.32</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>City of Bones</td>
                        <td>247-925-726</td>
                        <td>Wes Anderson umami biodiesel</td>
                        <td>$75.52</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>The Maze Runner</td>
                        <td>545-457-47</td>
                        <td>Terry Richardson helvetica tousled street art master</td>
                        <td>$15.25</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>The Fault in Our Stars</td>
                        <td>757-855-857</td>
                        <td>Tousled lomo letterpress</td>
                        <td>$03.44</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="row d-print-none mt-2">
                <div class="col-12 text-right"><a class="btn btn-primary" href="javascript:window.print();" target="_blank"><i class="fa fa-print"></i> Print</a></div>
              </div>
            </section>
          </div>
        </div>
      </div>
    
<?php
require 'backendfooter.php';
?>