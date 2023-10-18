<!DOCTYPE html>
<html lang="en">

<!-- head -->

<head>
    <meta charset="UTF-8">
    <base href="<?php echo BASE_URL ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>PRADO</title>
</head>

<body>

    {include 'header.tpl'}

    <!-- inicio main container -->
    <main class="container mt-3">

        <!-- Mostrar el formulario de edición -->
        <div class="mt-5 w-25 mx-auto">
            <form method="POST" action="verify">       
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                {if $error}
                <div class="alert alert-danger">
                    {$error}
                </div>
                {/if}
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </form>
        </div>

    </main>
    <!-- fin main container -->

</body>

</html>