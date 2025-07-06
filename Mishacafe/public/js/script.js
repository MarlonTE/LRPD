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
