<div class="container">
  <?php
  if ($this->session->flashdata("success")) {
  ?>
    <div class="alert alert-success">sadi</div>
  <?php
  }
  ?>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3>insert data into database

            <a href="<?php echo base_url("employee/add") ?>" class="btn btn-primary">add employee</a>
          </h3>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>first name</th>
                <th>last name</th>
                <th>phone</th>
                <th>email</th>
                <th>edit</th>
                <th>delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($employees as $key => $employee) {
              ?>
                <tr>
                  <td><?= $key + 1; ?></td>
                  <td><?= $employee->first_name; ?></td>
                  <td><?= $employee->last_name; ?></td>
                  <td><?= $employee->phone; ?></td>
                  <td><?= $employee->email; ?></td>
                  <td>
                    <a href="<?= base_url("employee/edit/" . $employee->id) ?>" class="btn btn-success btn-sm">edit</a>
                  </td>
                  <td>
                    <a href="" class="btn btn-danger btn-sm">delete</a>
                  </td>
                </tr>
              <?php
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>