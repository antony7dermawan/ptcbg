<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_lap_flow_barang_per_item extends CI_Model {
    




public function select_range_date($from_date,$to_date,$barang_id,$kategori_id)
  {

    $this->db->select('T_M_D_BARANG.KODE_BARANG');
    $this->db->select('T_M_D_BARANG.BARANG');
    $this->db->select('T_M_D_BARANG.PART_NUMBER');
    $this->db->select('T_M_D_BARANG.MERK_BARANG');



    $this->db->select("T_T_T_PEMBELIAN.ID");
    $this->db->select("T_T_T_PEMBELIAN.INV");
    $this->db->select("T_T_T_PEMBELIAN.DATE");
    $this->db->select("T_T_T_PEMBELIAN.TIME");
    $this->db->select("T_T_T_PEMBELIAN.KET");
    $this->db->select("T_T_T_PEMBELIAN.TABLE_CODE");


    $this->db->select("T_T_T_PEMBELIAN_RINCIAN.QTY");
    $this->db->select("T_T_T_PEMBELIAN_RINCIAN.HARGA");
    $this->db->select("T_T_T_PEMBELIAN_RINCIAN.SUB_TOTAL");
    $this->db->select("T_T_T_PEMBELIAN_RINCIAN.CREATED_BY");
    $this->db->select("T_T_T_PEMBELIAN_RINCIAN.UPDATED_BY");

   


    $this->db->from('T_M_D_BARANG');


    $this->db->join('T_T_T_PEMBELIAN_RINCIAN', 'T_M_D_BARANG.BARANG_ID = T_T_T_PEMBELIAN_RINCIAN.BARANG_ID', 'left');

    $this->db->join('T_T_T_PEMBELIAN', 'T_T_T_PEMBELIAN_RINCIAN.PEMBELIAN_ID = T_T_T_PEMBELIAN.ID', 'left');


    $this->db->where("(T_T_T_PEMBELIAN.T_STATUS=0 or T_T_T_PEMBELIAN.T_STATUS=1 or T_T_T_PEMBELIAN.T_STATUS=2)");


    $this->db->where("T_T_T_PEMBELIAN.DATE<='{$to_date}' and T_T_T_PEMBELIAN.DATE>='{$from_date}'");

    $this->db->where("T_M_D_BARANG.BARANG_ID='{$barang_id}'");

    if($kategori_id!=0)
    {
        $this->db->where("T_M_D_BARANG.KATEGORI_ID='{$kategori_id}'");
    }

    $this->db->where("T_T_T_PEMBELIAN.COMPANY_ID={$this->session->userdata('company_id')}");
    $this->db->where('T_T_T_PEMBELIAN_RINCIAN.MARK_FOR_DELETE',FALSE);

    $query1 = $this->db->get_compiled_select();







    $this->db->select('T_M_D_BARANG.KODE_BARANG');
    $this->db->select('T_M_D_BARANG.BARANG');
    $this->db->select('T_M_D_BARANG.PART_NUMBER');
    $this->db->select('T_M_D_BARANG.MERK_BARANG');



    $this->db->select("T_T_T_RETUR_PEMBELIAN.ID");
    $this->db->select("T_T_T_RETUR_PEMBELIAN.INV");
    $this->db->select("T_T_T_RETUR_PEMBELIAN.DATE");
    $this->db->select("T_T_T_RETUR_PEMBELIAN.TIME");
    $this->db->select("T_T_T_RETUR_PEMBELIAN.KET");
    $this->db->select("T_T_T_RETUR_PEMBELIAN.TABLE_CODE");


    $this->db->select("T_T_T_RETUR_PEMBELIAN_RINCIAN.QTY");
    $this->db->select("T_T_T_RETUR_PEMBELIAN_RINCIAN.HARGA");
    $this->db->select("T_T_T_RETUR_PEMBELIAN_RINCIAN.SUB_TOTAL");
    $this->db->select("T_T_T_RETUR_PEMBELIAN_RINCIAN.CREATED_BY");
    $this->db->select("T_T_T_RETUR_PEMBELIAN_RINCIAN.UPDATED_BY");

   


    $this->db->from('T_M_D_BARANG');


    $this->db->join('T_T_T_RETUR_PEMBELIAN_RINCIAN', 'T_M_D_BARANG.BARANG_ID = T_T_T_RETUR_PEMBELIAN_RINCIAN.BARANG_ID', 'left');

    $this->db->join('T_T_T_RETUR_PEMBELIAN', 'T_T_T_RETUR_PEMBELIAN_RINCIAN.RETUR_PEMBELIAN_ID = T_T_T_RETUR_PEMBELIAN.ID', 'left');



    $this->db->where("T_T_T_RETUR_PEMBELIAN.DATE<='{$to_date}' and T_T_T_RETUR_PEMBELIAN.DATE>='{$from_date}'");

    $this->db->where("T_M_D_BARANG.BARANG_ID='{$barang_id}'");

    if($kategori_id!=0)
    {
        $this->db->where("T_M_D_BARANG.KATEGORI_ID='{$kategori_id}'");
    }

    $this->db->where("T_T_T_RETUR_PEMBELIAN.COMPANY_ID={$this->session->userdata('company_id')}");
    $this->db->where('T_T_T_RETUR_PEMBELIAN_RINCIAN.MARK_FOR_DELETE',FALSE);

    $query2 = $this->db->get_compiled_select();

















    $this->db->select('T_M_D_BARANG.KODE_BARANG');
    $this->db->select('T_M_D_BARANG.BARANG');
    $this->db->select('T_M_D_BARANG.PART_NUMBER');
    $this->db->select('T_M_D_BARANG.MERK_BARANG');



    $this->db->select("T_T_T_PENJUALAN.ID");
    $this->db->select("T_T_T_PENJUALAN.INV");
    $this->db->select("T_T_T_PENJUALAN.DATE");
    $this->db->select("T_T_T_PENJUALAN.TIME");
    $this->db->select("T_T_T_PENJUALAN.KET");
    $this->db->select("T_T_T_PENJUALAN.TABLE_CODE");


    $this->db->select("T_T_T_PENJUALAN_RINCIAN.QTY");
    $this->db->select("T_T_T_PENJUALAN_RINCIAN.HARGA");
    $this->db->select("T_T_T_PENJUALAN_RINCIAN.SUB_TOTAL");
    $this->db->select("T_T_T_PENJUALAN_RINCIAN.CREATED_BY");
    $this->db->select("T_T_T_PENJUALAN_RINCIAN.UPDATED_BY");

   


    $this->db->from('T_M_D_BARANG');


    $this->db->join('T_T_T_PENJUALAN_RINCIAN', 'T_M_D_BARANG.BARANG_ID = T_T_T_PENJUALAN_RINCIAN.BARANG_ID', 'left');

    $this->db->join('T_T_T_PENJUALAN', 'T_T_T_PENJUALAN_RINCIAN.PENJUALAN_ID = T_T_T_PENJUALAN.ID', 'left');



    $this->db->where("T_T_T_PENJUALAN.DATE<='{$to_date}' and T_T_T_PENJUALAN.DATE>='{$from_date}'");

    $this->db->where("T_M_D_BARANG.BARANG_ID='{$barang_id}'");

    if($kategori_id!=0)
    {
        $this->db->where("T_M_D_BARANG.KATEGORI_ID='{$kategori_id}'");
    }

    $this->db->where("T_T_T_PENJUALAN.COMPANY_ID={$this->session->userdata('company_id')}");
    $this->db->where('T_T_T_PENJUALAN_RINCIAN.MARK_FOR_DELETE',FALSE);

    $query3 = $this->db->get_compiled_select();














    $this->db->select('T_M_D_BARANG.KODE_BARANG');
    $this->db->select('T_M_D_BARANG.BARANG');
    $this->db->select('T_M_D_BARANG.PART_NUMBER');
    $this->db->select('T_M_D_BARANG.MERK_BARANG');



    $this->db->select("T_T_T_RETUR_PENJUALAN.ID");
    $this->db->select("T_T_T_RETUR_PENJUALAN.INV");
    $this->db->select("T_T_T_RETUR_PENJUALAN.DATE");
    $this->db->select("T_T_T_RETUR_PENJUALAN.TIME");
    $this->db->select("T_T_T_RETUR_PENJUALAN.KET");
    $this->db->select("T_T_T_RETUR_PENJUALAN.TABLE_CODE");


    $this->db->select("T_T_T_RETUR_PENJUALAN_RINCIAN.QTY");
    $this->db->select("T_T_T_RETUR_PENJUALAN_RINCIAN.HARGA");
    $this->db->select("T_T_T_RETUR_PENJUALAN_RINCIAN.SUB_TOTAL");
    $this->db->select("T_T_T_RETUR_PENJUALAN_RINCIAN.CREATED_BY");
    $this->db->select("T_T_T_RETUR_PENJUALAN_RINCIAN.UPDATED_BY");

   


    $this->db->from('T_M_D_BARANG');


    $this->db->join('T_T_T_RETUR_PENJUALAN_RINCIAN', 'T_M_D_BARANG.BARANG_ID = T_T_T_RETUR_PENJUALAN_RINCIAN.BARANG_ID', 'left');

    $this->db->join('T_T_T_RETUR_PENJUALAN', 'T_T_T_RETUR_PENJUALAN_RINCIAN.RETUR_PENJUALAN_ID = T_T_T_RETUR_PENJUALAN.ID', 'left');



    $this->db->where("T_T_T_RETUR_PENJUALAN.DATE<='{$to_date}' and T_T_T_RETUR_PENJUALAN.DATE>='{$from_date}'");

    $this->db->where("T_M_D_BARANG.BARANG_ID='{$barang_id}'");

    if($kategori_id!=0)
    {
        $this->db->where("T_M_D_BARANG.KATEGORI_ID='{$kategori_id}'");
    }

    $this->db->where("T_T_T_RETUR_PENJUALAN.COMPANY_ID={$this->session->userdata('company_id')}");
    $this->db->where('T_T_T_RETUR_PENJUALAN_RINCIAN.MARK_FOR_DELETE',FALSE);

    $query4 = $this->db->get_compiled_select();







    $query = $this->db->query($query1." UNION ".$query2." UNION ".$query3." UNION ".$query4." order by \"DATE\",\"TIME\" asc");



    return $query->result();


  }


}


