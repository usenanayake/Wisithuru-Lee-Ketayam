<!DOCTYPE html>
<html>
<head>
  <title>Shopping Cart</title>
</head>
<body>
<?php

$this->load->library('table');
$this->table->set_heading('Id','Name','Price','Qty','Buy');
foreach($listProduct as $p)
  $this->table->add_row($p->id,$p->name,$p->price,$p->quantity,'Order now');
$this->table->set_template(array('table_open'=>''))
echo $this->table->generate();

?>

</body>
</html>