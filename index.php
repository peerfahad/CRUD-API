<!DOCTYPE html>
<html>
<head>
  <title>PHP Jquery Ajax CRUD Example</title>
  <link rel="stylesheet" type="text/css" href="./bower_components/bootstrap/dist/css/bootstrap.min.css">
  <script type="text/javascript" src="./bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript"
          src="./bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript"
          src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.3.1/jquery.twbsPagination.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

  <script type="text/javascript">
    var url = "http://apicrud.dev/"; // "<?php echo "http://" . $_SERVER['SERVER_NAME'];?>";
  </script>

  <script src="/js/item-ajax.js"></script>
</head>
<body>

<div class="container">
  <div class="row">
    <div class="col-lg-12 margin-tb">
      <div class="pull-left">
        <h2>PHP Jquery Ajax CRUD Example</h2>
      </div>
      <div class="pull-right">
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
          Create Item
        </button>
      </div>
    </div>
  </div>

  <table class="table table-bordered">
    <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Father Name</th>
      <th>Email</th>
      <th>Phone</th>

    </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

  <ul id="pagination" class="pagination-sm"></ul>

  <!-- Create Item Modal -->
  <div class="modal-body" id="create-item">
    <form data-toggle="validator" action="api/update.php" method="put">
      <input type="hidden" name="id" class="edit-id">

      <div class="form-group">
        <label class="control-label" for="title">Name:</label>
        <input type="text" name="Name" class="form-control" data-error="Please enter title." required/>
        <div class="help-block with-errors"></div>
      </div>

      <div class="form-group">
        <label class="control-label" for="title">father name:</label>
        <textarea name="father_name" class="form-control" data-error="Please enter description." required></textarea>
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group">
        <label class="control-label" for="title">email:</label>
        <input type="text" name="email" class="form-control" data-error="Please enter title." required/>
        <div class="help-block with-errors"></div>
      </div>
      <div class="form-group">
        <label class="control-label" for="title">phone:</label>
        <input type="text" name="phone" class="form-control" data-error="Please enter title." required/>
        <div class="help-block with-errors"></div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
      </div>

    </form>

  </div>
</div>
<!-- Edit Item Modal -->
<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
      </div>

      <div class="modal-body">
        <form data-toggle="validator" action="api/update.php" method="put">
          <input type="hidden" name="id" class="edit-id">

          <div class="form-group">
            <label class="control-label" for="title">Title:</label>
            <input type="text" name="title" class="form-control" data-error="Please enter title." required/>
            <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
            <label class="control-label" for="title">Description:</label>
            <textarea name="description" class="form-control" data-error="Please enter description."
                      required></textarea>
            <div class="help-block with-errors"></div>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
          </div>

        </form>

      </div>
    </div>
  </div>
</div>

</div>
</body>
</html>
