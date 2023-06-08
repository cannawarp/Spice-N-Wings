<style>
  /* Style for the product details section */
  h3 {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  /* Style for the form elements */
  .form-label {
    display: block;
    font-weight: bold;
    margin-top: 15px;
  }
  
  .form-input {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  .form-select {
    width: 100%;
    padding: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }
  
  /* Style for the submit button */
  .form-submit {
    margin-top: 15px;
  }
  
  .form-submit input[type="submit"] {
    padding: 8px 15px; /* Adjusted padding for a smaller button */
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px; /* Adjusted font size for a smaller button */
  }
  
  .form-submit input[type="submit"]:hover {
    background-color: #45a049;
  }
</style>

<h3>Product Details</h3>
<br/>

<form method="POST" action="processes/process.product.php?action=updateproduct">
  <div id="form-block-half">
    <label for="fname" class="form-label">Product Name</label>
    <input type="text" id="pname" class="form-input" name="pname" value="<?php echo $product->get_prod_name($id);?>" placeholder="Product name..">

    <label for="lname" class="form-label">Price</label>
    <textarea id="desc" class="form-input" name="desc" placeholder="Price.."><?php echo $product->get_prod_price($id);?></textarea>
          
    <input type="hidden" id="prodid" name="prodid" value="<?php echo $id;?>"/>
    
    <label for="ptype" class="form-label">Type</label>
    <select id="ptype" name="ptype" class="form-select">
      <?php
      if($product->list_types() != false){
        foreach($product->list_types() as $value){
           extract($value);
      ?>
        <option value="<?php echo $type_id;?>" <?php if($product->get_prod_type($id) == $type_id){ echo "selected";};?>><?php echo $type_name;?></option>
      <?php
        }
      }
      ?>
    </select>
  </div>
  
  <div id="button-block" class="form-submit">
    <input type="submit" value="Save">
  </div>
</form>