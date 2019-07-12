
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class factura extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();        
        $this->load->model('cliente_model','',true);
        $this->load->model('producto_model','',true);
        $this->load->model('factura_model','',true);
        
        
    }
    
    public function index()
    {
        $resultado=$this->factura_model->ultimoregistro();
        $dataFactura=array(
            "Clientes" => $this->cliente_model->getCliente(),
            'idFactura'=>$resultado
        );
        $this->load->view('factura/vista/encabezado');
        $this->load->view('factura/factura_view', $dataFactura);
        $this->load->view('factura/vista/pie');
        
    }

    public function getproducto(){
        $valor=$this->input->post('producto');
        $productos= $this->producto_model->listproducto($valor);
        echo json_encode($productos);
    }
    //facturar
public function facturar(){
    $datosfactura= array(
    'id_factura'=>$this->input->post('id_factura'),
    'fecha'=> $this->input->post('fecha'),
    'subtotal'=>$this->input->post('subtotal'),
    'itbs' => $this->input->post('ITBS'),
    'total'=>$this->input->post('Total'),
    'id_cliente'=>$this->input->post('idcliente')
    );
    $idproducto= $this->input->post('id_art');
    $cantidad=$this->input->post('cantidad_art');
    $importe = $this->input->post('import_art');
    
   if($this->factura_model->guardarFactura){
    $idventa= $this->factura_model->ultimoregistro();
    guardardetalle($idventa,$idproducto,$cantidad,$importe);
    
   
   //redirect(base_url('factura?idfactura='.$idventa));
   }else{
       
     //  redirect(base_url('factura'),'refresh');
       
   }
}

public function mostrarfactura(){
    $idfactura= $this->input->get('idfactura');
    $datos= array(
        'venta'=>$this->factura_model->getfactura($idfactura),
        'detalles'=>$this->factura_model->getdetalle($idfactura),
    );
    $this->load->view('factura/mostrar_factura', $datos);
    $this->load->view('factura/vista/pie');
    
}
//funciones de facturar
protected function guardardetalle($idventa,$idproducto,$cantidad,$importe){
    for ($i=0; $i < count($idproducto); $i++) { 
        $datos= array(
            'id_factura'=>$idventa,
            'id_producto'=>$idproducto[$i],
            'Cantidad'=>$cantidad[$i],
            'total'=>$importe[$i]
        );
        $this->factura_model->guardarDetalleFactura($datos);
        $this->actualizarstock($idproducto,$cantidad);
    }
}
protected function actualizarstock($idproducto,$cantidad){
    $productoActualizar= $this->producto_model->ActualizarStock($cantidad,$idproducto);
}
}

/* End of file factura.php */


?>