<?php
class Producto
{
    private $id;
    private $nombre;
    private $precio;

    public function __construct($id = null, $nombre = null, $precio = null)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getPrecio()
    {
        return $this->precio;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }

    public function save()
    {
        // Aquí iría la lógica para guardar el producto en la base de datos
    }

    public function delete()
    {
        // Aquí iría la lógica para eliminar el producto de la base de datos
    }

    public static function find($id)
    {
        // Aquí iría la lógica para buscar un producto por su ID en la base de datos
        // Ejemplo simulado:
        $productos = self::all();
        foreach ($productos as $producto) {
            if (isset($producto['id']) && $producto['id'] == $id) {
                return new self($producto['id'], $producto['nombre'], $producto['precio']);
            }
        }
        return null;
    }

    public static function all()
    {
        // Simulación de productos (puedes reemplazar por consulta a BD)
        return [
            ['id' => 1, 'nombre' => 'Café Latte', 'precio' => 4.68],
            ['id' => 2, 'nombre' => 'Café Helado', 'precio' => 5.20],
        ];
    }
}
