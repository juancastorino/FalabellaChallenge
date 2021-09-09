<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <title>Fallabella Numbers Customizations</title>

    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <div class="container-fluid">

                <img src="https://images.contentstack.io/v3/assets/blt928898215b35efe2/blt0daf5895f6b8b295/60e7235936954912f039847b/sis-fcom-logo.svg"
                    alt="fallabella" width="200" height="auto">

                <a class="navbar-brand" href="https://github.com/juancastorino/FalabellaChallenge">by Juan Castorino</a>

            </div>
            </div>
        </nav>

        <form class="container" action='./index.php' method="post">
            <div class="h1 mt-5">Numbers</div>
            <div class="d-grid gap-2 col-6 mx-auto mb-2 mt-2">
                <label for="inputStartNumber" class="form-label">Start number</label>
                <input type="number" min="1" name="start" class="form-control" id="inputStartNumber" value="1">
            </div>
            <br />
            <div class="d-grid gap-2 col-6 mx-auto mb-5">
                <label for="inputEndtNumber" class="form-label">End number</label>
                <input type="number" min="2" max="2000" name="end" class="form-control" id="inputEndtNumber" value="100">
            </div>
            <div class="h1 mt-5 mb-5">Text Replace Customization</div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Number</th>
                        <th scope="col">Replace for</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <input type="number" required=required min="1" name="replaceNumber1" class="form-control"
                                id="inputEndtNumber" value="3">
                        </td>
                        <td>
                            <input type="string" required=required name="replaceText1" class="form-control"
                                id="inputEndtNumber" value="Falabella">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="number" required=required min="1" name="replaceNumber2" class="form-control"
                                id="inputEndtNumber" value="5">
                        </td>
                        <td>
                            <input type="string" required=required name="replaceText2" class="form-control" id="inputEndtNumber"
                                value="IT">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Common Multiple Text</label>
                        </td>
                        <td>
                            <input type="string" required=required name="commonMultipleText" class="form-control"
                                id="inputEndtNumber" value="Integraciones">
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="d-grid gap-2 col-8 mx-auto mt-5">
                <button class="btn btn-success" type="submit">Go for it!</button>
            </div>
        </form>
    </body>
</html>