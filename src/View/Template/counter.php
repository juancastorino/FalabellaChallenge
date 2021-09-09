<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">


<title>Fallabella Numbers</title>

<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <img src="https://images.contentstack.io/v3/assets/blt928898215b35efe2/blt0daf5895f6b8b295/60e7235936954912f039847b/sis-fcom-logo.svg"
                alt="fallabella" width="200" height="auto">
                
            <a class="navbar-brand btn btn-light text-secondary" href="./index.php">Go back</a>
        </div>
    </nav>

 

    <div class="container mt-5 mb-5">
        <div class="h1">Numbers</div>
        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <th scope="col">Input number</th>
                    <th scope="col">After Replace</th>
                </tr>
            </thead>
            <tbody>
                {{ numbersData }}
            </tbody>
        </table>

    </div>
    <div class='container d-flex justify-content-center'>
            <a class="col-5 navbar-brand btn btn-success mb-5" href="./index.php">Go back</a>
            <a class="col-5 navbar-brand btn btn-danger mb-5" href="https://github.com/juancastorino/FalabellaChallenge">Go to Github</a>
        </div>
</body>

</html>
