<?php defined('BASEPATH') OR exit('No direct script access allowed');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" >
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>

</head>
<body>
    <div class="container">
    
        <div class="row">
            <div class="col-6">
            <h1>Add item :</h1>
            <form>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" >
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" step="0.02" id="price" name="price" >
                </div>


                
                <div class="form-group">
                    <label for="image">Example file input</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>


                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea  cols="30" rows="10"  class="form-control" id="description" name="description"></textarea>
                </div>
              
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
</body>
</html>