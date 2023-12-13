<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Fugaz_Retro/css/dashboard.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/dashboard-scripts.js"></script>
    <title>Dashboard - FUGAZ-RETRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
<div class="sidebar">
        <div class="search-bar">
        <div class="logo">
                <h2>FUGAZ RETRO</h2>
            </div>
            <div class="search">
    <input type="text" placeholder="Buscar..." id="searchInput">
    <span class="search-icon"><i class="bi bi-search"></i></span>
</div>
        </div>
        <ul class="menu">
            <li>
                <a href="/Fugaz_Retro/php/dashboard.php">
                <i class="bi bi-gear"></i>Configuración</a>
                <ul class="submenu">
                    <li><a href="/Fugaz_Retro/php/roles.php">Roles</a></li>
                </ul>
            </li>
            <li><a href="/Fugaz_Retro/php/usuario.php">
            <i class="bi bi-people"></i> Usuarios</a></li>
            <li>
                <a href="#">
                <i class="bi bi-cart4"></i>Compras</a>
                <ul class="submenu">
                    <li><a href="categoria.php">Categoría insumo</a></li>
                    <li><a href="insumo.php">Insumo</a></li>
                    <li><a href="proveedor.php">Proveedores</a></li>
                    <li><a href="compras.php">Compras</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                <i class="bi bi-cash-coin"></i>Ventas</a>
                <ul class="submenu">
                    <li><a href="clientes.php">Clientes</a></li>
                    <li><a href="pedido.php">Pedido</a></li>
                    <li><a href="producto.php">Producto</a></li>
                    <li><a href="perdida_insumo.php">Perdida insumo</a></li>
                    <li><a href="venta.php">Ventas</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="topbar">
        <div class="navigation">
        <a href="dashboard.php" class="dashboard-link">
            <h2>Dashboard</h2>
        </div>
        <div class="profile">
    <!-- Utilizando Bootstrap para un círculo -->
    <div class="dropdown">
        <div class="rounded-circle bg-secondary d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;" id="dropdownMenuButton" onclick="toggleDropdown()" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-person-fill text-white"></i>
        </div>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" id="profileDropdown" style="display: none;">
            <a class="dropdown-item" href="#">Carolina Mazo</a>
            <a class="dropdown-item" href="index.php">Cerrar sesión</a>
        </div>
    </div>
</div>
    </div>
 
    <div class="content1" style="margin-top:10px";>
    <div class="search-box">
        <h1>Gestión de Ventas</h1>
        <div class="search">
            <input type="text" id="search_Input" placeholder="Buscar...">
            <span class="search-icon"><i class="bi bi-search"></i></span>
        </div>
    </div>
</div>
    <style>
        .tab {
            margin-top: -50px;
            margin-left: 320px;
        }

        .modal {
            display: none;
            position: fixed;
            margin-top: 60px;
            margin-left: 400px;
            width: 50%;
            height: 85%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>
    <div class="tab">
        <div id="modal" class="modal">
            <div class="modal-content">
                <button class="close btn btn-secondary" onclick="closeModal()">cerrar</button>
                <h5>Agregar venta</h5>
    
                    <div class="mb-3">
                        <label for="Subtotal" class="form-label">Subtotal:</label>
                        <input type="Number" class="form-control" id="Subtotal" name="Subtotal" required>
                    </div>

                    <div class="mb-3">
                        <label for="Iva" class="form-label">Iva:</label>
                        <input type="Number" class="form-control" id="Iva" name="Iva" required>
                    </div>

                    <div class="mb-3">
                        <label for="Descuento" class="form-label">Descuento:</label>
                        <input type="text" class="form-control" id="Descuento" name="Descuento" required>
                    </div>

                    <div class="mb-3">
                        <label for="Tatal_venta" class="form-label">Total  de la venta:</label>
                        <input type="text" class="form-control" id="Tatal_venta" name="Tatal_venta" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Agregar Venta</button>
                </form>
            </div>
        </div>

        <button class="btn btn-primary agregar" onclick="openModal()">Agregar Venta</button>

        <!-- Tabla para mostrar las categorías -->
        <table id="Table">
            <thead>
                <tr>
                    <th>Subtotal</th>
                    <th>Iva</th>
                    <th>Descuento</th>
                    <th>Total venta</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>90.000</td>
                    <td>19%</td>
                    <td>Ninguno</td>
                    <td>90.000</td>
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                </tr>
                <tr>
                    <td>110.000</td>
                    <td>19%</td>
                    <td>Nunguno</td>
                    <td>110.000</td>
                    <td>
                        <button class="editar" onclick="openModal()">Editar</button>
                    </td>
                </tr>
             
            </tbody>
        </table>
    </div>
  
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            closeModal();

            const form = document.getElementById('clienteForm');
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                showAlert('Venta agregada con éxito!');
                closeModal();
            });
        });

        function openModal() {
            document.getElementById('modal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }

        function showAlert(message) {
            alert(message);
            // Puedes personalizar el tipo de alerta (puede ser una alerta de Bootstrap, SweetAlert, etc.)
        }

    </script>

</body>

</html>