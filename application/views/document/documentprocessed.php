<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title?></h1>

    <!-- <?php echo var_dump($documentprocessed)?> -->

    <?php foreach($documentprocessed as $row):?>
    <div class="card" style="width: 100%; margin-top: 2%; padding: 1%">
      <div class="card-body">
        <h5 class="card-title"><?php echo "a.n. " .$row->name_document?></h5>
        <span class="card-text" style="margin-left: 1%"><?php echo "user by: ".$row->name?></span><br>
        <span class="card-text" style="margin-left: 1%"><?php echo "date created : ".$row->date_created_document?></span><br>
        <span class="card-text" style="margin-left: 1%"><?php echo "status : ".$row->name_status?></span><br>
        <a style="margin-left: 1%; margin-top: 1%" href="<?php echo site_url('submission/details/'). $row->id_document?>" class="btn btn-primary">Details</a>
      </div>
    </div>
    <?php endforeach;?>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 