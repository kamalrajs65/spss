<?php  $role=$this->session->userdata('user_role'); ?>
<div class="container-fluid page-body-wrapper">
      <div class="main-panel">
        <div class="content-wrapper">

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page"><span>Modules</span></li>
            </ol>
          </nav>
          <div class="row">

            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Modules</h4>

                  <form class="forms-sample" id="form_create" method="post" action="<?php echo base_url(); ?>adminmodule/create_modules" enctype="multipart/form-data">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleFormControlSelect3">Type</label>
                          <select class="form-control form-control-sm" id="tbl_master_id" name="tbl_master_id">
                            <?php foreach($res as $rows){ ?>
                                <option value="<?php echo $rows->id; ?>"><?php echo $rows->module_name; ?></option>
                          <?php   } ?>

                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="username"> Title</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="city_ta_name">File Upload</label>
                          <input type="file" class="form-control" id="file_upload" name="file_upload" placeholder="" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleFormControlSelect3">Status</label>
                          <select class="form-control form-control-sm" id="status" name="status">
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Create</button>
                  </form>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    <script>
      $('#form_create').validate({
      rules: {

          title:{required:true},
          tbl_master_id:{required:true},
          file_upload: {required:true },
          status: { required: true}
      },
      messages: {
          title:{required:"enter the title"},
          file_upload: {required: "select file to upload." },
          status: {required: "select status." },

      }
      });

    </script>
