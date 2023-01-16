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
                <form class="form-inline" id="calculatorForm" action="{{url('calculator/calculate')}}" method="post">
                    <div class="form-group">
                        <label for="inputA">Input A:</label>
                        <input type="number" class="form-control" id="inputA" name="inputA" step=".01" required />
                    </div>
                    <div class="form-group">
                        <label for="operation">Operation:</label>
                        <select class="form-control" id="operation" name="operation" required>
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="x">x</option>
                            <option value="/">÷</option>
                            <option value="sqrt">√</option>
                        </select>
                    </div>
                     <div id="divInputB" class="form-group">
                        <label for="inputB">Input B:</label>
                        <input type="number" class="form-control" step=".01" id="inputB" name="inputB" step=".01" required />
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                 </form>
            </div>
        </div>
    </div>
</body>
</html>

<script type="text/javascript">
    function checkOperation(selected_operation) {
        if(selected_operation == "sqrt") {
            $("#inputB").val('0');
            $("#divInputB").hide();
        } else {
            $("#divInputB").show();
        }
    }
    $(document).ready(function(){
        let selected_value = $("#operation").val();;
        checkOperation(selected_value);      

        $("#operation").click(function(){
            selected_value = this.value;
            checkOperation(selected_value);
        });
    });
</script>