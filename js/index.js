// script para AgregarUsuarios.php

document.addEventListener("DOMContentLoaded", () => {
  cargarPlanes();

  const btnEnviar = document.getElementById("btnEnviar");
  if (!btnEnviar) return;

  btnEnviar.addEventListener("click", async () => {
    const nombre = document.getElementById("nombre").value.trim();
    const apellido = document.getElementById("apellido").value.trim();
    const plan_id = document.getElementById("planes_id").value;
    const dni = document.getElementById("dni").value.trim();
    const codigo = document.getElementById("codigo").value.trim();
    const metodo_de_pagos_id = document.querySelector('input[name="metodo_de_pagos_id"]:checked')?.value;
    const fecha_de_vencimiento = document.getElementById("fecha_de_vencimiento").value;

    if (!nombre || !apellido || !plan_id || !dni || !codigo || !metodo_de_pagos_id) {
      alert("⚠️ Por favor completa todos los campos obligatorios.");
      return;
    }

    const data = {
      admin_id: 1,
      nombre,
      apellido,
      dni,
      codigo,
      plan_id,
      metodo_de_pagos_id,
      fecha_de_vencimiento
    };

    try {
      const response = await fetch("/proyecto-socios/backend/api/miembros.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(data)
      });

      const result = await response.json();
      console.log("Respuesta del servidor:", result);

      if (result.success) {
        alert("✅ Miembro guardado correctamente");
        document.getElementById("formularioUsuario").reset();
      } else {
        alert("❌ Error al guardar: " + (result.error || "Desconocido"));
      }
    } catch (error) {
      console.error("Error al enviar datos:", error);
      alert("❌ Error al conectar con el servidor");
    }
  });
});




 
// carga de planes en AgregarUsuarios.php

async function cargarPlanes() {
  try {
    const response = await fetch("/proyecto-socios/backend/api/planes.php");
    const planes = await response.json();
    const select = document.getElementById("planes_id");
    select.innerHTML = '<option value="">Seleccione un plan</option>';
    planes.forEach(plan => {
      const option = document.createElement("option");
      option.value = plan.id;
      option.textContent = `${plan.nombre} - $${plan.precio.toLocaleString("es-AR")}`;
      select.appendChild(option);
    });
  } catch (error) {
    console.error("Error al cargar planes:", error);
  }
}





// script para listas-de-miembros.php
document.addEventListener("DOMContentLoaded", async () => {
  await cargarMiembros();
});

async function cargarMiembros() {
  const tbody = document.getElementById("tablaMiembros");
  tbody.innerHTML = `<tr><td colspan="8" class="text-center">Cargando...</td></tr>`;

  try {
    // 🔹 Cargamos los datos desde todas las APIs
    const [resMiembros, resPlanes, resMetodos, resSituacion] = await Promise.all([
      fetch("/proyecto-socios/backend/api/miembros.php"),
      fetch("/proyecto-socios/backend/api/planes.php"),
      fetch("/proyecto-socios/backend/api/metodos_de_pago.php"),
      fetch("/proyecto-socios/backend/api/situacion.php"),
    ]);

    const miembros = await resMiembros.json();
    const planes = await resPlanes.json();
    const metodos = await resMetodos.json();
    const situaciones = await resSituacion.json();

    if (!Array.isArray(miembros) || miembros.length === 0) {
      tbody.innerHTML = `<tr><td colspan="8" class="text-center">No hay miembros registrados.</td></tr>`;
      return;
    }

    tbody.innerHTML = ""; // limpiar contenido

    miembros.forEach((miembro) => {
      // 🔹 Asociar datos por ID (desde los otros endpoints)
      const plan = planes.find((p) => p.id == miembro.plan_id);
      const metodo = metodos.find((m) => m.id == miembro.metodo_de_pagos_id);
      const situacion = situaciones.find((s) => s.id == miembro.situacion_id);

      const avatar = "assets/images/users/avatar-2.jpg";
      const fecha = miembro.fecha_registro
        ? new Date(miembro.fecha_registro).toLocaleDateString("es-AR")
        : "-";
      const estado = miembro.estado == 1 ? "Activo" : "Inactivo";

      // 🔹 Colores según situación y estado
      const badgeSituacion =
        {
          "Al día": "bg-success-subtle text-success",
          "Debe cuota": "bg-warning-subtle text-warning",
          "No pago cuota": "bg-danger-subtle text-danger",
        }[situacion?.nombre] || "bg-secondary-subtle text-secondary";

      const badgeEstado =
        estado === "Activo"
          ? "bg-success-subtle text-success"
          : "bg-danger-subtle text-danger";

      // 🔹 Renderizar fila completa con la misma estética que ya tenías
      const fila = `
        <tr>
          <td>#${miembro.id}</td>
          <td>
            <img src="${avatar}" class="avatar-sm rounded-circle me-2" alt="...">
            ${miembro.nombre} ${miembro.apellido}
          </td>
          <td>${fecha}</td>
          <td>${plan ? plan.nombre : "Sin plan"}</td>
          <td>${metodo ? metodo.nombre : "N/A"}</td>
          <td><span class="badge ${badgeSituacion} py-1 px-2">${situacion ? situacion.nombre : "Sin situación"}</span></td>
          <td><span class="badge ${badgeEstado} py-1 px-2">${estado}</span></td>
          <td>
            <div class="d-flex gap-2">
              <button type="button" class="btn btn-light btn-sm" title="Ver">
                <iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon>
              </button>
              <button type="button" class="btn btn-soft-primary btn-sm" title="Editar" onclick="editarMiembro(${miembro.id})">
                <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon>
              </button>
              <button type="button" class="btn btn-soft-danger btn-sm" title="Eliminar" onclick="eliminarMiembro(${miembro.id})">
                <iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon>
              </button>
            </div>
          </td>
        </tr>
      `;

      tbody.insertAdjacentHTML("beforeend", fila);
    });
  } catch (error) {
    console.error("Error al cargar miembros:", error);
    tbody.innerHTML = `<tr><td colspan="8" class="text-center text-danger">Error al conectar con el servidor.</td></tr>`;
  }
}



// panel.php

async function validarCodigo(codigo) {
  if (!codigo) return;

  try {
    const respuesta = await fetch(`/proyecto-socios/backend/api/miembros.php?codigo=${encodeURIComponent(codigo)}`);
    const datos = await respuesta.json();

    if (datos.status === "ok") {
      mostrarMensaje(datos.mensaje, datos.datos.estado == 1 ? "ok" : "warn");
      mostrarDetalle(datos.datos);

      if (datos.datos.estado == 1) {
        mostrarBotonesAdelanto(datos.datos);
      } else {
        mostrarBotonesRenovacion(datos.datos);
      }
    } else {
      mostrarMensaje(datos.mensaje || "Miembro no encontrado.", "error");
      mostrarDetalle(null);
    }
  } catch (error) {
    console.error("Error lector:", error);
    mostrarMensaje("❌ Error de conexión con el servidor.", "error");
    mostrarDetalle(null);
  }
}


document.addEventListener("DOMContentLoaded", () => {
  const inputBuscar = document.getElementById("buscar-usuario");
  const resultadoDiv = document.getElementById("resultado-lector");
  const detalleDiv = document.getElementById("detalle-miembro");
  const avatarImg = document.getElementById("avatar-miembro");
  const nombreH4 = document.getElementById("nombre-miembro");
  const planBadge = document.getElementById("plan-miembro");
  const metodoBadge = document.getElementById("metodo-miembro");
  const cuotaSpan = document.getElementById("cuota-miembro");
  const vtoSmall = document.getElementById("vto-miembro");

  if (inputBuscar) inputBuscar.focus();

  function mostrarMensaje(texto, tipo = "info") {
    if (!resultadoDiv) return;
    resultadoDiv.textContent = texto;
    resultadoDiv.classList.remove("alert-success", "alert-danger", "alert-info", "alert-warning");
    switch (tipo) {
      case "ok": resultadoDiv.classList.add("alert-success"); break;
      case "error": resultadoDiv.classList.add("alert-danger"); break;
      case "warn": resultadoDiv.classList.add("alert-warning"); break;
      default: resultadoDiv.classList.add("alert-info"); break;
    }
  }

  function mostrarDetalle(datos) {
    if (!detalleDiv) return;
    if (!datos) {
      detalleDiv.style.display = "none";
      return;
    }

    if (avatarImg) avatarImg.src = datos.avatar || "assets/images/users/avatar-2.jpg";
    if (nombreH4) nombreH4.textContent = `${datos.nombre} ${datos.apellido}`;
    if (planBadge) planBadge.textContent = `Plan: ${datos.plan_nombre || "Sin plan"}`;
    if (metodoBadge) metodoBadge.textContent = `Método: ${datos.metodo_pago || "N/A"}`;

    if (cuotaSpan) {
      cuotaSpan.classList.remove("text-success", "text-danger");
      if (datos.nombre_situacion === "Debe cuota") {
        cuotaSpan.classList.add("text-danger");
        cuotaSpan.textContent = "Debe cuota";
      } else {
        cuotaSpan.classList.add("text-success");
        cuotaSpan.textContent = datos.nombre_situacion || "Al día";
      }
    }

    if (vtoSmall) {
      const fecha = datos.fecha_de_vencimiento ? `Vence: ${datos.fecha_de_vencimiento}` : "";
      vtoSmall.textContent = fecha;
    }

    detalleDiv.style.display = "block";
  }

  async function validarCodigo(codigo) {
    if (!codigo) return;
    try {
      const respuesta = await fetch(`/proyecto-socios/backend/api/miembros.php?codigo=${encodeURIComponent(codigo)}`);
      const datos = await respuesta.json();

      if (datos.status === "ok") {
        mostrarMensaje(datos.mensaje, datos.datos.estado == 1 ? "ok" : "error");
        mostrarDetalle(datos.datos);

        if (datos.datos.estado == 1) {
          mostrarBotonesAdelanto(datos.datos);
        } else {
          mostrarBotonesRenovacion(datos.datos);
        }
      } else {
        mostrarMensaje(datos.mensaje || "Miembro no encontrado.", "error");
        mostrarDetalle(null);
      }
    } catch (error) {
      console.error("Error lector:", error);
      mostrarMensaje("❌ Error de conexión con el servidor.", "error");
      mostrarDetalle(null);
    }
  }

  if (inputBuscar) {
    inputBuscar.addEventListener("keydown", (e) => {
      if (e.key === "Enter") {
        e.preventDefault();
        const valor = inputBuscar.value.trim();
        if (!valor) {
          mostrarMensaje("Ingrese un DNI o código", "warn");
          return;
        }
        validarCodigo(valor);
        inputBuscar.value = "";
      }
    });
  }

  // Botones de acción
  function mostrarBotonesRenovacion(datos) {
    const contenedor = document.getElementById("botones-renovacion");
    if (!contenedor) return;
    contenedor.innerHTML = "";
    const btn = document.createElement("button");
    btn.className = "btn btn-primary";
    btn.textContent = `Renovar desde ${datos.fecha_de_vencimiento || ""}`;
    btn.onclick = () => {
      const url = new URL("admin-gym/renovacion.php", window.location.origin);
      url.searchParams.set("codigo", datos.codigo);
      url.searchParams.set("accion", "renovacion");
      window.location.href = url.toString();
    };
    contenedor.appendChild(btn);
  }

  function mostrarBotonesAdelanto(datos) {
    const contenedor = document.getElementById("botones-renovacion");
    if (!contenedor) return;
    contenedor.innerHTML = "";
    const btn = document.createElement("button");
    btn.className = "btn btn-outline-primary px-4 py-2";
    btn.textContent = `Adelantar cuota desde ${datos.fecha_de_vencimiento || ""}`;
    btn.onclick = () => {
      const url = new URL("admin-gym/renovacion.php", window.location.origin);
      url.searchParams.set("codigo", datos.codigo);
      url.searchParams.set("accion", "adelanto");
      window.location.href = url.toString();
    };
    contenedor.appendChild(btn);
  }
});
