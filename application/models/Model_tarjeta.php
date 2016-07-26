<?php

class Model_tarjeta extends CI_Model {

    function guardar($data) {
        $this->db->insert("tarjeta", $data);

        if ($this->db->affected_rows() == 1) {
            return true;
        } else {
            return false;
        }
    }

    public function getTarjetas() {
        $this->db->order_by('id', 'asc');
        $tarjeta = $this->db->get('tarjeta');

        if ($tarjeta->num_rows() > 0) {
            return $tarjeta->result();
        }
    }

    public function getTarjeta($id) {
        $this->db->order_by('id', 'asc');
        $this->db->where('id', $id);
        $query = $this->db->get('tarjeta');
       
             return $query->row();
      
    }

    public function getTargeRepetida($numero_tarjeta) {
        $tarjeta = $this->db->query("SELECT * FROM tarjeta WHERE `numero_tarjeta`='$numero_tarjeta'");
        if ($tarjeta->num_rows() > 0) {
            return null;
        } else {
            return 1;
        }
    }

    function eliminarTarjeta($id) {
        $this->db->where('id', $id);
        $this->db->delete('tarjeta');
    }

}

?>