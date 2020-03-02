<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>



<form name="insertrecord" method="post" action="insertpro.php" enctype="multipart/form-data">
<div class="row">
<div class="col-md-4"><b>Product Name</b>
<input type="text" name="productname" class="form-control" required>
</div>
<div class="col-md-4"><b>Details</b>
<input type="text" name="details" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Features</b>
<input type="text" name="features" class="form-control" required>
</div>
<div class="col-md-4"><b>Price</b>
<input type="text" name="price" class="form-control" maxlength="10" required>
</div>
</div>
<div class="row">
    <div class="col-md-8"><b>Category</b>
    <select name="category">
                        <option value="wired">Wired</option>
                        <option value="wireless">Wireless</option>
                        <option value="accessories">Accessories</option>
                </select>
    </div>
    <div class="col-md-8"><b>Image</b>
        <input type="hidden" name="size" value="1000000">
        <div>
            <input type="file" name="image" >
        </div>
    </div>
</div>
<div class="row col-md-8" style="margin-top:1%">
            <input type="submit" name="insert" value="Submit">
        </div>

</form>


</body>
</html>