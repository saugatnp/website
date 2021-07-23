<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="../bootstrap.css">
    <title>Untitled Document</title>
</head>

<body>

    <div class="formdiv" style="margin-left:50px; margin-top:20px;">

        <form name="insertrecord" method="post" action="insertpro.php" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-4"><b>Product Name</b>
                    <input type="text" name="productname" class="form-control" required>
                </div><br>
                <div class="col-md-4"><b>Details</b>
                    <input type="text" name="details" class="form-control" required>
                </div><br>
            </div>
            <div class="row">
                <div class="col-md-4"style="margin-top:10px;"><b>Features</b>
                    <input type="text" name="features" class="form-control" required>
                </div><br>
                <div class="col-md-4" style="margin-top:10px;"><b>Price</b>
                    <input type="text" name="price" class="form-control" maxlength="10" required>
                </div><br>
            </div>
            <div class="row">
                <div class="col-md-8" style="margin-top:10px;"><b>Category</b>
                    <select name="category">
                        <option value="wired">Wired</option>
                        <option value="wireless">Wireless</option>
                        <option value="accessories">Accessories</option>
                    </select>
                </div><br>
                <div class="col-md-8" style="margin-top:10px;"><b>Image</b>
                    <input type="hidden" name="size" value="1000000">
                    <div>
                        <input type="file" name="image">
                    </div>
                </div>
            </div>
            <div class="row col-md-8" style="margin-top:1%">
                <input class="btn btn-success btn-xs" type="submit" name="insert" value="Submit">
            </div>


        </form>
        
    </div>

</body>

</html>