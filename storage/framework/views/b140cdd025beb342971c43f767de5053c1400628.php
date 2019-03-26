<?php $__env->startSection('content'); ?>
<html>
  <head>
   <style>

.center {
text-align: center;
}

.pagination {
justify-content: center;
}

.pagination a {
display: flex;
}


.pagination a:hover:not(.active) {
background-color: #ddd;
}

</style>
</head>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            
                <div class="card-header"><h1>User Management</h1>
                <div class="col-md-12">
                                    
                <div align="right">
                    <a href="<?php echo e(route('export_excel.excel')); ?>" class="btn btn-success">Export to Excel</a>
                    <a href="/users/create" class="btn btn-success">Add Users</a>
             </div>
             </div>  
             </div> 
             </div>

                

<div class="my-4">
<form action="/search" method="GET">
<div class="input-group">
<input class="form-control mr-sm-2" type="search" placeholder="Search by User Name,Email" name="search" aria-label="Search">
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</div>
</form>
</div>


<script type="text/javascript" src="<?php echo e(URL::asset('assets/userTable.js')); ?>"></script>

<div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    You are logged in!

  <table class="table" id="myTable">
  <thead class="thead-light">
    <tr>
      
      <th scope="col">User Name</th>
      <th scope="col"><a href="/home">First Name</a></th>
      <th scope="col"><a href="/home">Last Name</th>
      <th scope="col"><a href="/home">Email</th>
      <th scope="col">Created At</th>
      <th scope="col">Last logIn At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

   
  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
       
      <td><?php echo e($user->user_name); ?></td>
      <td><?php echo e($user->first_name); ?></td>
      <td><?php echo e($user->last_name); ?></td>
      <td><?php echo e($user->email); ?></td>
      <td><?php echo e($user->created_at); ?></td>
      <td><a class="nav-link active" href="/users/<?php echo e($user->id); ?>/edit"><button type="button" class="btn btn-primary">Edit</button></a></td>
      <td><a class="nav-link active" href="/users/<?php echo e($user->id); ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<div class="pagination-wrapper">
<a><?php echo e($users); ?></a>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
</html>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/richasharma/floro/resources/views//home.blade.php */ ?>