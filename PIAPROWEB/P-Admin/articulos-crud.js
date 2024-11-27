$(document).ready(function() {
    // Evento para el botón de editar
    $(document).on("click", ".edit", function() {
        var tr = $(this).closest("tr"); // Obtener la fila más cercana
        var articuloId = tr.data("id"); // Obtener el ID del artículo
        var nombre = tr.find(".nombre").text(); // Obtener el nombre
        var stock = tr.find(".stock").text(); // Obtener el stock
        var precio = tr.find(".precio").text(); // Obtener el precio
        var categoria = tr.find(".categoria").text(); // Obtener la categoría

        console.log("Editando artículo ID: " + articuloId);

        // Crear el formulario de edición
        var formularioEdicion = `
            <form id="formEditArticulo" data-id="${articuloId}">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" value="${nombre}" required><br>
                <label for="stock">Stock:</label>
                <input type="number" id="stock" value="${stock}" required><br>
                <label for="precio">Precio:</label>
                <input type="number" id="precio" value="${precio}" required><br>
                <label for="categoria">Categoría:</label>
                <input type="text" id="categoria" value="${categoria}" required><br>
                <button type="submit">Guardar cambios</button>
            </form>
        `;

        // Reemplazar la fila por el formulario
        tr.html(formularioEdicion);
    });

    // Enviar el formulario de edición con AJAX
    $(document).on('submit', '#formEditArticulo', function(event) {
        event.preventDefault();

        var articuloId = $(this).data("id");
        var nombre = $("#nombre").val();
        var stock = $("#stock").val();
        var precio = $("#precio").val();
        var categoria = $("#categoria").val();

        console.log("Enviando datos para actualizar: ", articuloId, nombre, stock, precio, categoria);

        // Enviar la solicitud AJAX para actualizar el artículo
        $.ajax({
            url: "actualizar_articulo.php", // PHP que actualiza el artículo
            method: "POST",
            data: {
                id: articuloId,
                nombre: nombre,
                stock: stock,
                precio: precio,
                categoria: categoria
            },
            success: function(response) {
                // Verificar que la respuesta sea exitosa
                console.log("Respuesta del servidor: ", response);
                var result = JSON.parse(response);
                if (result.success) {
                    // Si la actualización es exitosa, actualizar la tabla
                    var tr = $('tr[data-id="'+ articuloId +'"]');
                    tr.html(`
                        <td class='articulo_id'>${articuloId}</td>
                        <td class='nombre'>${nombre}</td>
                        <td class='stock'>${stock}</td>
                        <td class='precio'>${precio}</td>
                        <td class='categoria'>${categoria}</td>
                        <td><button class='edit'>Editar</button></td>
                    `);
                } else {
                    alert("Error al actualizar el artículo.");
                }
            },
            error: function() {
                alert("Hubo un error en la solicitud.");
            }
        });
    });
});
