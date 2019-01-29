<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
</head>
<body>
    <div class="card-header">
        Welcome, <?php $loginemail ?>!
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">Name</div>
                    <div class="col-md-6"><?php $rows["firstname"]. " " . $rows["lastname"]?></div>
                </div>
                <div class="row">
                    <div class="col-md-6">Gender</div>
                    <div class="col-md-6">Gender Value</div>
                </div>   
            </div>
        </div>
    </div>   
</body>
</html>