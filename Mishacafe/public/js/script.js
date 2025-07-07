document.addEventListener("DOMContentLoaded", () => {
  const menuIcon = document.querySelector(".fa-bars");
  const navList = document.querySelector(".nav_container .lista");

  menuIcon.addEventListener("click", () => {
    navList.classList.toggle("active");
  });

  const formBusqueda = document.querySelector(".search_form");
  const inputBusqueda = document.getElementById("busqueda");

  formBusqueda.addEventListener("submit", function (event) {
    event.preventDefault();

    const termino = inputBusqueda.value.trim().toLowerCase();
    const productos = document.querySelectorAll(".card-product");

    let encontrado = false;

    productos.forEach((producto) => {
      const nombre = producto.querySelector("h3").textContent.toLowerCase();

      if (!encontrado && nombre.includes(termino)) {
        producto.scrollIntoView({ behavior: "smooth", block: "center" });
        producto.classList.add("resaltado");

        setTimeout(() => {
          producto.classList.remove("resaltado");
        }, 2000);

        encontrado = true;
      }
    });

    if (!encontrado) {
      alert("No se encontraron coincidencias.");
    }
  });
});

// Abrir modal al hacer clic en el ícono de ojo
document.addEventListener("click", function (e) {
  // Si se hace clic en el ícono de ojo o en su contenedor
  if (e.target.classList.contains("fa-eye") || e.target.closest(".fa-eye")) {
    const card = e.target.closest(".card-product");
    if (card) {
      const img = card.querySelector("img");
      const modal = document.getElementById("modal-img");
      const modalImg = document.getElementById("img-ampliada");
      modalImg.src = img.src;
      modal.style.display = "block";
    }
  }

  // Cerrar modal al hacer clic en la X
  if (e.target.classList.contains("close-modal")) {
    document.getElementById("modal-img").style.display = "none";
  }

  // Cerrar modal al hacer clic fuera de la imagen
  if (e.target.id === "modal-img") {
    document.getElementById("modal-img").style.display = "none";
  }
});
