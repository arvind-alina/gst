<!DOCTYPE html>
<html lang="en-us">
<head>
<?php $this->load->view('admin/layouts/meta'); ?>
</head>

<body class="layout layout-vertical layout-left-navigation layout-below-toolbar">
<main>
<div id="wrapper">
<aside id="aside" class="aside aside-left" data-fuse-bar="aside" data-fuse-bar-media-step="md" data-fuse-bar-position="left">
<?php $this->load->view('admin/layouts/site_bar'); 
?>
</aside>
<div class="content-wrapper">
<nav id="toolbar" class="bg-white">

<?php $this->load->view('admin/layouts/header'); ?>
</nav>
<div class="content custom-scrollbar">

<div id="project-dashboard" class="page-layout simple right-sidebar">

<div class="page-content-wrapper custom-scrollbar">

<!-- HEADER -->
<?php $this->load->view('admin/layouts/inside_header'); ?>
<!-- / HEADER -->
<!-- CONTENT -->
<div class="page-content p-6">
<div class="topTab" style="margin-top: 0px;">
    <form id="productForm" method="POST">
  
            
               <div class="row col-md-12">
               <div class="col-md-12 text text-danger">
                      <?php 
                      echo validation_errors('<div class="text text-danger">', '</div>'); 
                      echo validation_errors(); 
                      ?>
                      </div>
                <div class="col-md-3">
                <label class="control-label">Product Code</label>
                <input type="text" name="productCode" class="form-control" id="productCode">
                 <input type="text" name="id" class="form-control" id="id" hidden="hidden">

                </div>
              <div class="col-md-3">
                <label class="control-label">Product Group</label>
                <input type="text" name="productGroup" class="form-control" id="productGroup">
              </div>
              <div class="col-md-3">
                        <label class="control-label">Product Name</label>
                        <input type="text" name="productName" class="form-control" id="productName">
              </div>
              <div class="col-md-3">
                        <label class="control-label">Product Type</label>
               
                     <select type="text" class="form-control" value="" name="productType" id="productType">
                            
                            <option id="1" value="1">Type1</option>
                            <option id="2" value="2">Type2</option>
                            <option id="3" value="3">Type3</option>
                            </select>
              </div>
    </div>

<div class="row form-group col-md-12">              
    <div class="col-md-3">
    <label class="control-label">Product Description</label>
    <input type="text" name="productDescription" class="form-control" id="productDescription">
    </div>
    <div class="col-md-3">
    <label class="control-label">Selling Price</label>
    <input type="text" name="sellingPrice" class="form-control" id="sellingPrice">
    </div>
    <div class="col-md-3">
    <label class="control-label">Product Price</label>
    <input type="tex" name="productPrice" class="form-control" id="productPrice">
    </div>
    <div class="col-md-3">
    <label class="control-label">MRP Price</label>
    <input type="tex" name="mrpPrice" class="form-control" id="mrpPrice">
    </div>
</div>
<div class="row form-group col-md-12">
    <div class="col-md-3">
        <label class="control-label">Opening Stock    </label>
        <input type="text" name="openingStock" class="form-control" id="openingStock">
    </div> 
    <div class="col-md-3">
        <label class="control-label">Unit Type</label>
        <select type="text" class="form-control" value="" name="unitType" id="unitType">
            
            <option id="1" value="1">Unit Type1</option>
            <option id="2" value="2">Unit Type2</option>
            <option id="3" value="3">Unit Type3</option>
            <option id="4" value="4">Unit Type4</option>
    </select>
    </div>
                    
    <div class="col-md-3">
        <label class="control-label">Sales Tex Type</label>
        <select type="text" class="form-control" value="" name="salesType" id="salesType">
        <option id="1" value="1">sales type1</option>
        <option id="2" value="2">sales type2</option>
        <option id="3" value="3">sales type3</option>
        </select>
    </div>
                     
    <div class="col-md-3">
        <label class="control-label">Purchase Tex Type</label>
        <select type="text" class="form-control" value="" name="purchaseType" id="purchaseType">
        <option id="1" value="1">purchase type1</option>
        <option id="2" value="2">purchase type2</option>
        <option id="3" value="3">purchase type3</option>
        </select>
    </div>
</div>
<div class="row form-group col-md-12">
    <div class="col-md-3">
        <label class="control-label">Tex Calculation Type</label>
        <select type="text" class="form-control" value="calculation" name="calculation" id="calculation">
                
                <option id="1" value="1">calculation type1</option>
                <option id="2" value="2">calculation type2</option>
                <option id="3" value="3">calculation type3</option>
                
     </select>
    </div>
    <div class="col-md-3">
      <label class="control-label">Allow Negative Stock</label>
      <select type="text" class="form-control" value="negativeStock" name="negativeStock" id="negativeStock">
                
                <option id="1" value="1">stock1</option>
                <option id="2" value="2">stock1</option>
                <option id="3" value="3">stock1</option>
                
      </select>
    </div>

    <div class="col-md-3">
        <label class="control-label">HSN Code</label>
        <input type="text" name="hsnCode" id="hsnCode" class="form-control">
    </div>
    <div class="col-md-3">
       <label class="control-label">Min. Qty</label>
       <input type="text" name="minQty" id="minQty" class="form-control">
    </div>
</div>

               
<div class="row form-group col-md-12 ">            
<div class="col-md-3">
<label class="control-label">Sub Unit</label>             
<select type="text" class="form-control" value="" name="subUnit" id="subUnit">
        
        <option value="1">sub unit1</option>
        <option value="2">sub unit1</option>
        <option value="3">sub unit1</option>
        
        </select>
</div>
<div class="col-md-9">
      <input type="file" name="">
 <button name="" value="" class="btn btn-default">Select File</button> 
   <button name="" value="" class="btn btn-default">Download</button>
<button name="" value="" class="btn btn-default" style="margin: 10px 0px;">Upload</button> 
</div> 

</div>

               <div class="col-md-12">
                      
                     
                      <div class="col-md-6 " style="display: inline-flex;">
                        <button name="add" value="submit" id="productsubmit" class="btn  " style="width: 120px;margin: 10px 10px; margin-left: 10px; background-color: blue; color: white;" >Add</button> 
                        <button type="button" name="update" id="productUpdate" class="update btn  btn-primary   " style="width: 120px;margin: 10px 10px; color: white;" >Modify</button>
                        <button type="button" name="delete" value="delete" id="productDelete" class="btn  btn-secondery " style="width: 120px;margin: 10px 10px; background-color: red; color: white;" >Delete</button> 
                      </div>
                      
                  </div>
              </form>

              <div class="container">
    <table id="productResult" class="col-md-12 table table-responsive" >
    <thead>  
    <th>Product_Code</th>
    <th>Product_Group</th>
    <th>Product_Name</th>
    <th>Product_Type</th>
    <th>Product_Description</th>
    <th>Selling_Price</th>
    <th>Product_Price</th>
    <th>MRP_Price</th>
    <th>Opening_Stock</th>
    <th>Unit_Type</th>
    <th>Sales_Type</th>
    <th>Purchase_Type</th>
    <th>Calculation</th>
    <th>Nagative_Stock</th>
    <th>HSN_Code</th>
    <th>minQty</th>
    <th>Sub_Unit</th>
    <th>Action</th>
    </thead>
    </table>                                         


</div>

</div>

</div>


</div>


</div>
</div>

</div>


</body>
</html>
<?php $this->load->view('admin/layouts/footer'); ?>