<!-- FORM EDIT -->
<div class="row pt-5 mt-5 justify-content-center">
  <div class="col-md-4 mt-5">
    <h3>EDIT</h3><hr>
    <?php 
    foreach($get_data as $data):
    echo form_open('Home/edit');
    ?>
    <div class="form-group">
      <select name="id_cashier" class="form-control">
       <?php $ambil = $this->db->query("SELECT * FROM `cashier` "); ?>
       <?php foreach($ambil->result_array() as $pecah) : ?>
        <option value="<?= $pecah['id'] ?>"><?= $pecah['cashier_name'] ?></option>
      <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <input name="product_name" type="text" class="form-control" value="<?= $data['name'] ?>">
    </div>
    <div class="form-group">
      <select name="id_category" class="form-control">
       <?php $ambil = $this->db->query("SELECT * FROM `category` "); ?>
       <?php foreach($ambil->result_array() as $pecah) : ?>
        <option value="<?= $pecah['id'] ?>"><?= $pecah['category_name'] ?></option>
      <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group">
      <input name="price" type="number" class="form-control" value="<?= $data['price'] ?>" >
    </div>
    <input type="hidden" name="id_product" value="<?= $data['id'] ?>">
    <button type="submit" class="btn text-white pr-5 pl-5" style="background-color: #FADC9C;">EDIT</button>
  </div>  
  <?php 
  form_close(); 
  endforeach;
  ?>
  </div>
</div>