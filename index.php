<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con AJAX consumiendo una API en PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>CRUD de Productos</h1>
            </div>

            <div class="col-12 col-md-4">
                <h2>Agregar Producto</h2>

                <!-- Formulario para crear/actualizar un producto -->
                <form id="form" method="POST">
                    <input type="hidden" name="_method" value="POST">

                    <div class="mb-3">
                        <label for="name">Nombre: </label>
                        <input type="text" class="form-control" id="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="price">Precio: </label>
                        <input type="number" class="form-control" id="price" required>
                    </div>

                    <div class="mb-3">
                        <label for="stock">Stock: </label>
                        <input type="number" class="form-control" id="stock" required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success me-1">Crear Producto</button>
                    </div>
                </form>
            </div>

            <div class="col-12 col-md-8">
                <!-- Lista de productos -->
                <h2>Lista de Productos</h2>

                <table id="product-table" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider"></tbody>
                </table>
            </div>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>
