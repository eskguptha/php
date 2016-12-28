<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Read data from csv using php</h1>
<table class="table table-striped table-hover journal_table">
		<thead>
			<th>SKU</th>
			<th>Name</th>
			<th>Category</th>
			<th>Price</th>
			<th>Qty</th>
		</thead>
      <tbody>
      <?php 

          $file = "products.csv";
          $handle = fopen($file, "r");
          $j = 0;
          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
          $j++;
        ?>
        <tr>
         
          <td><?php echo $data['0']; ?></td>
          <td><?php echo $data['1']; ?></td>
          <td><?php echo $data['2']; ?></td>
          <td><?php echo $data['3']; ?></td>
          <td><?php echo $data['4']; ?></td>
        </tr>
        <?php }?>
        
         </tbody>
    </table>



</body>
</html>