<?php
class Latihan extendsn CI_Controller
{
    public funcation index()
    {
    echo "Selamat Datang .. selamat belajar Web Programming";
    //$this->load->view('view-latihan1');
    
        
    }

    public function penjumlahan($n1, $n2)
    {
        $this->load->mode1('Model_latihan');

        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan->jumlah($n1, $n2);

        $this->load->view('view-latihan1', $data);

    }
    