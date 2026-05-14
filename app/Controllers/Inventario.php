<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class Inventario extends BaseController {
    protected $helpers = ['url']; //carga el helper url para usar la funcion base_url en las vistas
    public function index() { //metodo que muestra la tabla
        $productoModel= new ProductoModel (); //instancia del modelo para usar el metodo findAll
        $datos['productos']= $productoModel->findAll();  //array asociativo con los datos que se van a mostrar en la vista
        return view('Inventario/lista_productos', $datos);
    }

    public function crear() { //metodo para mostrar formulario: crear nuevo producto
        return view('Inventario/formulario_producto');
    }

    public function guardar() { //metodo que recibe los datos y los guarda
        $productoModel= new ProductoModel (); //instancia del modelo para usar el metodo insert
        $datos= [  //array asociativo con los datos que se van a guardar
            'codigo_productos'=> $this->request->getPost('codigo_productos'),
            'nombre_productos'=> $this->request->getPost('nombre_productos'),
            'precio_productos'=> $this->request->getPost('precio_productos'),
            'stock_actual'=> $this->request->getPost('stock_actual'),
            'estado'=> 1
        
        
        ];

        if ($productoModel->insert($datos)){ // si se guarda correctamente, redirige a la lista de productos
            return redirect()->to(base_url('productos'));
        }else {
            return "Error al guardar el producto"; //si no se guarda, muestra un mensaje de error
        }
    }

    public function borrar($id){
        $productoModel = new ProductoModel();
        if ($productoModel->find($id)) {
            $productoModel->delete($id);
            return redirect()->to(base_url('productos'))->with('mensaje', 'Producto eliminado');
        } else {
        return "El producto que intentas eliminar no existe.";
        }
    }
    
    public function comprar($id){
        $productoModel = new ProductoModel();
        $producto = $productoModel->find($id);

        if ($producto){
            if($producto['stock_actual']> 0){
                $nuevoStock = $producto['stock_actual'] - 1;
                $productoModel->update($id, ['stock_actual' => $nuevoStock]);
                return redirect()->to(base_url('productos'))->with('mensaje', 'Compra realizada');
                 } else {
                return "No hay suficiente stock para el producto: " . $producto['nombre_productos'];
                }
        } else {
        return "El producto que intentas comprar no existe.";
        }
        return redirect()->to(base_url('productos'));
    }
            
        
    
        
}