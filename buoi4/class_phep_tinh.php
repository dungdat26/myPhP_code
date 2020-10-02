<?php 
include "./tinh_toan.php";

if(isset($_POST['so_thu_nhat']) && isset($_POST['so_thu_hai'])){
	$tinh=new pheptinh($_POST['so_thu_nhat'],$_POST['so_thu_hai']);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    <div class="container">
		
        <form action="" method="POST" role="form">
            <legend>Form title</legend>
        
            <div class="form-group">
                <label for="">label</label>
                <input type="text" class="form-control" id="" placeholder="Input field">
            </div>
        
            <div class="form-group">
                <label for="">label</label>
                <input type="text" class="form-control" id="" placeholder="Input field">
            </div>
        <mat-radio-group>
            <mat-radio-button name="cong" value="value1">Cộng</mat-radio-button>
            <mat-radio-button name="tru" value="value2">Trừ</mat-radio-button>
            <mat-radio-button name="nhan" value="value2">Nhân</mat-radio-button>
            <mat-radio-button name="chia" value="value2">Chia</mat-radio-button>

        </mat-radio-group>
            
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
</body>
</html>