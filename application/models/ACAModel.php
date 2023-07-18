<?
defined('BASEPATH') or exit('No direct script access allowed');

class ACAModel extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }




    function find($params)
    {
        $this->db->select('*');
        $this->db->where($params);
        $query = $this->db->get('client_api_secret');

        if ($query->num_rows() > 0) {
            return $query;
        } else {
            return false;
        }
    }

    function getApiSecret($params)
    {
        $this->db->select('*');
        $this->db->where($params);
        $query = $this->db->get('client_api_secret');

        if ($query->num_rows() > 0) {
            return $query->row()->api_key_secret;
        } else {
            return false;
        }
    }

    function insertMe($param, $tbl)
    {
        $insert = $this->db->insert($tbl, $param);
        if ($insert) {
            return true;
        } else {
            return false;
        }
    }
}