<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<div class="container">
<div class="row">
<div class="col-md-6 mx-auto">
    <form method="post" action="{{url('/request')}}" enctype="multipart/form-data">
        @csrf
<div class="mb-3">
    <label for="" class="form-label">File</label>
    <input type="file" name="image" class="form-control" id="exampleInputPassword1">
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>