<?php 
  //  print_r($data);
?>

 <div>
     <a class="btn btn-primary" href="<?php echo $base_url?>/school/create">Create</a>
 </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    
     foreach ($data as $key => $schools){
        $key++;
       echo "
           <tr>
            <th scope='col'>$key</th>
            <th scope='col'>$schools->name</th>
            <th scope='col'>$schools->email</th>
            <th scope='col'>$schools->phone</th>
            <th scope='col'>$schools->address</th>
            <th scope='col' class='btn-group'>
              <a class='btn btn-secondary' href='$base_url/school/update/$schools->id'>Edit</a>
              <a class='btn btn-danger' href='$base_url/school/delete/$schools->id'>Delete</a>
            </th>
          </tr>
       ";
     }

    ?>
  </tbody>
</table>