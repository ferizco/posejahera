<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Getkod_model extends CI_Model {

     function get_kodjad(){
            $q = $this->db->query("SELECT MAX(RIGHT(kd_jadwal,3)) AS kd_max FROM jadwal");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%04s", $tmp);
                }
            }else{
                $kd = "001";
            }
            return "J".$kd;
        }

        function get_kodkir(){
            $q = $this->db->query("SELECT MAX(RIGHT(kd_kirim,3)) AS kd_max FROM kirim");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%03s", $tmp);
                }
            }else{
                $kd = "001";
            }
            return "KB".$kd;
        }

    function get_kodtuj(){
            $q = $this->db->query("SELECT MAX(RIGHT(kd_tujuan,3)) AS kd_max FROM tujuan");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%03s", $tmp);
                }
            }else{
                $kd = "001";
            }
            return "TJ".$kd;
        }

        // buat kode mobil
    function get_kodmobil(){
            $q = $this->db->query("SELECT MAX(RIGHT(kd_mobil,3)) AS kd_max FROM mobil");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%03s", $tmp);
                }
            }else{
                $kd = "001";
            }
            return "M".$kd;
        }
    function get_kodtmporder(){
            $q = $this->db->query("SELECT MAX(RIGHT(kd_order,3)) AS kd_max FROM order_tiket");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%05s", $tmp);
                }
            }else{
                $kd = "001";
            }
            return "ORD".$kd;
        }
    function get_kodpel(){
            $q = $this->db->query("SELECT MAX(RIGHT(kd_pelanggan,3)) AS kd_max FROM pelanggan");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%04s", $tmp);
                }
            }else{
                $kd = "00001";
            }
            return "PL".$kd;
        }
    function get_kodkon(){
            $q = $this->db->query("SELECT MAX(RIGHT(kd_konfirmasi,3)) AS kd_max FROM konfirmasi");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%04s", $tmp);
                }
            }else{
                $kd = "00001";
            }
            return "KF".$kd;
        } 
    function get_kodadm(){
            $q = $this->db->query("SELECT MAX(RIGHT(kd_user,3)) AS kd_max FROM user");
            $kd = "";
            if($q->num_rows()>0){
                foreach($q->result() as $k){
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%04s", $tmp);
                }
            }else{
                $kd = "00001";
            }
            return "ADM".$kd;
        }

    function get_kodinf(){
        $q = $this->db->query("SELECT MAX(RIGHT(kd_info,3)) AS kd_max FROM informasi");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp =((int)$k->kd_max)+1;
                $kd = sprintf("%03s", $tmp);
            }
        } else {
            $kd = "001";
        }
        return "INF".$kd;
    }

}
