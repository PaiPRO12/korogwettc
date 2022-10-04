<?php  if (count($errors) > 0) : ?>
  <div style="
   margin-top: 20px 0 20px;
		width: 25%; 
    margin: 0px auto; 
    padding: 2px; 
	margin-bottom: 20px;
    border: 1px solid #a94442; 
    color: #a94442; 
    background: #f2dede; 
    border-radius: 5px; 
    text-align: left;" class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>