<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="animsition">
    <div id="content-wrapper">

            <div class="container-fluid">

                <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php endif; ?>

                <!-- Card  -->
                <div class="card mb-3">
                    <div class="card-header">

                        <a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i>
                            Back</a>
                    </div>
                    <div class="card-body">

                        <form action="<?php base_url(" admin/product/edit") ?>" method="post"
                            enctype="multipart/form-data" >

                            <input type="hidden" name="id" value="<?php echo $product->product_id?>" />

                            <div class="form-group">
                                <label for="name">Name*</label>
                                <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
                                 type="text" name="name" placeholder="Product name" value="<?php echo $product->name ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('name') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="price">Price</label>
                                <input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
                                 type="number" name="price" min="0" placeholder="Product price" value="<?php echo $product->price ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('price') ?>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="name">Photo</label>
                                <input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
                                 type="file" name="image" />
                                <input type="hidden" name="old_image" value="<?php echo $product->image ?>" />
                                <div class="invalid-feedback">
                                    <?php echo form_error('image') ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Description*</label>
                                <textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
                                 name="description" placeholder="Product description..."><?php echo $product->description ?></textarea>
                                <div class="invalid-feedback">
                                    <?php echo form_error('description') ?>
                                </div>
                            </div>

                            <input class="btn btn-success" type="submit" name="btn" value="Save" />
                        </form>

                    </div>

                    <div class="card-footer small text-muted">
                        * required fields
                    </div>


                </div>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php $this->load->view("admin/_partials/navbar.php") ?>

            <!-- MAIN CONTENT-->

            <div class="card mb-3">
                    <div class="card-header">
                        <a href="<?php echo site_url('admin/spp/add') ?>"><i class="fas fa-plus"></i> Add New</a>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Tahun</th>
                                        <th>Nominal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($spp as $spp): ?>
                                    <tr>
                                        <td width="150">
                                            <?php echo $spp->tahun ?>
                                        </td>
                                        <td>
                                            <?php echo $spp->nominal ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
            <?php $this->load->view("admin/_partials/footer.php") ?>
                        
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
	<?php $this->load->view("admin/_partials/js.php") ?>
	<!-- <?php //$this->load->view("admin/_partials/scrolltop.php") ?>
	 --><?php $this->load->view("admin/_partials/modal.php") ?>
	<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
<!-- end document-->
