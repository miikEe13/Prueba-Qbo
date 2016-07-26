<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tarjeta extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_tarjeta');
    }

    public function index() {
        $data['titulo'] = 'eComerce';
        $data['query'] = $this->Model_tarjeta->getTarjetas();
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Tarjeta/Pago");
        $this->load->view("Plantilla/Footer");
    }
    public function detalle($id) {
         
        $data['titulo'] = 'Tarjeta Información';
        $row= $this->Model_tarjeta->getTarjeta($id);
        $data['r'] = $row;
        $this->load->view("Plantilla/Head", $data);
        $this->load->view("Plantilla/Menu");
        $this->load->view("Tarjeta/Detalle");
        $this->load->view("Plantilla/Footer");
    }

    function guardar() {

        //El metodo is_ajax_request() de la libreria input permite verificar
        //si se esta accediendo mediante el metodo AJAX 



        if ($this->input->is_ajax_request()) {
            $año = $this->input->post("year_vencimiento");
            $mes = $this->input->post("mes_vencimiento");
            $fecha_caducidad = $this->validarBiciesto($año, $mes);
            $fecha_expiracion = $this->validarFecha($fecha_caducidad);

            if ($fecha_expiracion == true) {
                $numero_tarjeta = $this->input->post("numero_tarjeta");
                $codigo_seguridad = $this->input->post("codigo_seguridad");
                $total = $this->input->post("total");
                $datos = array(
                    "numero_tarjeta" => $numero_tarjeta,
                    "fecha_expiracion" => $fecha_expiracion,
                    "codigo_seguridad" => $codigo_seguridad,
                    "total" => $total
                );
                $repetida = $this->Model_tarjeta->getTargeRepetida($numero_tarjeta);
                
                if ($repetida == 1) {
                    if ($this->Model_tarjeta->guardar($datos) == true) {
                        echo "Pago registrado exitosamente";
                    }
                   
                } else {
                    echo "Tarjeta duplicada utilice otra";
                }
            } elseif ($fecha_expiracion !== true) {
                echo ' ¡Su targeta ha expirado porfavor intente con otra!';
            }
        } else {
            show_404();
        }
        
    }

    public function validarBiciesto($año, $mes) {
        if ($año % 4 == 0 && $mes == 2) {
            $fecha_caducidad = $año . "-" . $mes . "-" . 29;
            return $fecha_caducidad;
        } else {
            return $this->asignarFecha($año, $mes);
        }
    }

    function asignarFecha($año, $mes) {

        switch ($mes):
            case 1:
                return $fecha_caducidad = $año . "-" . $mes . "-" . 31;
                break;
            case 2:
                return $fecha_caducidad = $año . "-" . $mes . "-" . 28;
               
                break;
            case 3:
                return $fecha_caducidad = $año . "-" . $mes . "-" . 31;
               
                break;
            case 4:
                return $fecha_caducidad = $año . "-" . $mes . "-" . 30;
             
                break;
            case 5:
                return $fecha_caducidad = $año . "-" . $mes . "-" . 31;
                break;
            case 6:
                return $fecha_caducidad = $año . "-" . $mes . "-" . 30;
                break;
            case 7:
                return $fecha_caducidad = $año . "-" . $mes . "-" . 31;
                break;
            case 8:
                return $fecha_caducidad = $año . "-" . $mes . "-" . 31;
                break;
            case 9:
                return $fecha_caducidad = $año . "-" . $mes . "-" . 30;
                break;
            case 10:
                return $fecha_caducidad = $año . "-" . $mes . "-" . 31;
                break;
            case 11:
                return $fecha_caducidad = $año . "-" . $mes . "-" . 30;
                break;
            case 12:
                return $fecha_caducidad = $año . "-" . $mes . "-" . 31;
                break;
            default:
                echo "Selecciona el mes";
        endswitch;
    }

    public function validarFecha($fecha_caducidad) {
        $fecha_actual = date(now());

        $fecha_entrada = strtotime("$fecha_caducidad");
        if ($fecha_actual <= $fecha_entrada) {
            $newformat = date('Y-m-d', $fecha_entrada);
            $newformat2 = date('Y-m-d', $fecha_actual);
            return $newformat;
        } else {
            $fecha_actual = strtotime(date("d-m-Y H:i:00", time()));
            $newformat2 = date('Y-m-d', $fecha_entrada);
            return false;
        }
    }

    function eliminarTarjeta($id) {

        $this->Model_tarjeta->eliminarTarjeta($id);
        redirect(base_url() . 'Tarjeta/index');
    }

}
