<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>back to previous page

                        <a href="<?php echo base_url("employee") ?>" class="btn btn-danger">back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="<?= base_url("employee/update/" . $employee->id) ?>" method="POST">
                        <div class="form-group">
                            <label for="">first name</label>
                            <input type="text" name="first_name" value="<?= $employee->first_name?>" class="form-control">
                            <small class="text-danger"><?= form_error("first_name") ?></small>
                        </div>
                        <div class="form-group">
                            <label for="">last name</label>
                            <input type="text" name="last_name" value="<?= $employee->last_name?>"  class="form-control">
                            <small class="text-danger"><?= form_error("last_name") ?></small>
                        </div>
                        <div class="form-group">
                            <label for="">phone</label>
                            <input type="text" name="phone" value="<?= $employee->phone?>"  class="form-control">
                            <small class="text-danger"><?= form_error("phone") ?></small>
                        </div>
                        <div class="form-group">
                            <label for="">email</label>
                            <input type="text" name="email" value="<?= $employee->email?>"  class="form-control">
                            <small class="text-danger"><?= form_error("email") ?></small>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" type="submit">Update Employee</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>