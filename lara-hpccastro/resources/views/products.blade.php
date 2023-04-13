@extends('layout')

@section('content')
<div class ="row">
@section('name','content')
<h1>{{  $heading }} </h1>
<table class="table table-striped">

<tr>
<th>ID</th>
<th>NAME</th>
<th>UNIT</th>
<th>UNIT PRICE</th>
<th>CATEGORY</th>
</tr>

<?php
 foreach($products as $product): ?>
<tr>
<td><?php echo $product['id']?></td>
<td><?php echo $product['name']?></td>
<td><?php echo $product['unit']?></td>
<td><?php echo $product['unitPrice']?></td>
<td><?php echo $product['category']?></td>
</tr>



<?php endforeach; 
 

?>
</table>
</div>
@endsection