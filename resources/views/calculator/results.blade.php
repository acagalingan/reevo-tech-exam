<!DOCTYPE HTML>
<html>
<head>
    <title>Calculator</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-10">
                <div class="row">
                    <div class="col-10">
                        <div class="form-group">
                            <label for="results">Results:</label>
                            <textarea class="form-control" rows="5" id="results" readonly="">{{ $result }}</textarea>
                        </div>
                    </div>
                    <div class="col-2">
                        <a type="button" href="/calculator" class="btn btn-default">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
