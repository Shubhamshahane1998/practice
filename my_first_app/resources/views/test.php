<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Aspire Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        /* form {
            margin: auto;
            height: 400px;
            width: 500px;
            margin-top: 50px;
            color: blue;
            /* background-color: silver;} */


        form h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color:yellow;">
        PHP Complete CRUD Application
    </nav>
    <div>
        <form>
            <h1>Enter Detail's here</h1>
            <hr>
            <table class="table table-striped">
                <tr>
                    <td>Company name:</td>
                    <td><input type="text" name="company_name"></td>
                </tr>
                <tr>
                    <td>Mobile Number:</td>
                    <td><input type="tel" name="mobile_no"></td>
                </tr>
                <tr>
                    <td>Type:</td>
                    <td><input type="text" name="type"></td>
                </tr>
                <tr>
                    <td>City:</td>
                    <td><input type="text" name="city"></td>
                </tr>
                <tr>
                    <td>State:</td>
                    <td><input type="text" name="state"></td>
                </tr>
                <tr>
                    <td>Mail Id:</td>
                    <td><input type="text" name="company_mail"></td>
                </tr>
                <tr>
                    <td>Active:</td>
                    <td><input type="text" name="active"></td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit">submit</button></td>
                    <td><a href="" class="btn btn-success">show Data</a></td>
                    <td><input type="reset" value="reset"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
