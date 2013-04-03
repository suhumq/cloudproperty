<?php
  App::uses('AppController', 'Controller'); 
  class JurnalsController extends AppController {

  	public $uses = array('Jurnal','Project');
  	
  	public function index() {   
  		$this->set('jurnals', $this->Jurnal->find('all'));
      
 	}

      function search() { 
                    $this->set('projects', $this->Project->find('list'));

            $a = $this->params['data']; 
            debug($a);
            debug($a);
             
        } 
 	
  public function profit_loss() {
      $this->set('projects', $this->Project->find('list'));
      $this->set('jurnals', $this->Jurnal->find('all'));

      $projectname = 0;
      $this->set('projectname', $projectname);
      
      
      $cp = $this->request->is('post');
      if ($cp == true)
      {      

      $a = $this->params['data']['Jurnal']['project_id']; 
      $projectname = $this->Project->findById($a);
      $this->set('projectname', $projectname);
      


      //Pemasukan
      $penjualan = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE account_credit = 'Penjualan' AND project_id = $a;");
      $this->set('penjualan', $penjualan);
      //Pengeluaran
      $pembebasan_tanah = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 5 AND project_id = $a;");
      $this->set('pembebasan_tanah', $pembebasan_tanah);
      $pbb = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 6 AND project_id = $a;");
      $this->set('pbb', $pbb);
      $diskon = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 7 AND project_id = $a;");
      $this->set('diskon', $diskon);
      $irk = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 8 AND project_id = $a;");
      $this->set('irk', $irk);
      $ippt = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 9 AND project_id = $a;");
      $this->set('ippt', $ippt);
      $imb = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 10 AND project_id = $a;");
      $this->set('imb', $imb);
      $biaya_tt = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 11 AND project_id = $a;");
      $this->set('biaya_tt', $biaya_tt);
      $cut_fill = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 12 AND project_id = $a;");
      $this->set('cut_fill', $cut_fill);
      $kirmir = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 13 AND project_id = $a;");
      $this->set('kirmir', $kirmir);
      $penetrasi = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 14 AND project_id = $a;");
      $this->set('penetrasi', $penetrasi);
      $hotmix = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 15 AND project_id = $a;");
      $this->set('hotmix', $hotmix);
      $batas_kavling = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 16 AND project_id = $a;");
      $this->set('batas_kavling', $batas_kavling);
      $saluran_jalan = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 17 AND project_id = $a;");
      $this->set('saluran_jalan', $saluran_jalan);
      $brandgank = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 18 AND project_id = $a;");
      $this->set('brandgank', $brandgank);
      $canstein = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 19 AND project_id = $a;");
      $this->set('canstein', $canstein);
      $instalasi_air = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 20 AND project_id = $a;");
      $this->set('instalasi_air', $instalasi_air);
      $pdam = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 21 AND project_id = $a;");
      $this->set('pdam', $pdam);
      $listrik = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 22 AND project_id = $a;");
      $this->set('listrik', $listrik);
      $pln = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 23 AND project_id = $a;");
      $this->set('pln', $pln);
      $penerangan = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 24 AND project_id = $a;");
      $this->set('penerangan', $penerangan);
      $penghijauan = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 25 AND project_id = $a;");
      $this->set('penghijauan', $penghijauan);
      $benteng = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 26 AND project_id = $a;");
      $this->set('benteng', $benteng);
      $gapura = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 27 AND project_id = $a;");
      $this->set('gapura', $gapura);
      $pek_penghijauan = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 28 AND project_id = $a;");
      $this->set('pek_penghijauan', $pek_penghijauan);
      $pek_fasos = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 29 AND project_id = $a;");
      $this->set('pek_fasos', $pek_fasos);
      $taman_canstein = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 30 AND project_id = $a;");
      $this->set('taman_canstein', $taman_canstein);
      $taman_fasum = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 31 AND project_id = $a;");
      $this->set('taman_fasum', $taman_fasum);
      $bayar_bangunan = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 32 AND project_id = $a;");
      $this->set('bayar_bangunan', $bayar_bangunan);
      $biaya_personalia = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 33 AND project_id = $a;");
      $this->set('biaya_personalia', $biaya_personalia);
      $bunga_bank = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 34 AND project_id = $a;");
      $this->set('bunga_bank', $bunga_bank);
      $overhead = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 35 AND project_id = $a;");
      $this->set('overhead', $overhead);
      $biaya_promosi = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 36 AND project_id = $a;");
      $this->set('biaya_promosi', $biaya_promosi);
      $biaya_agen = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 37 AND project_id = $a;");
      $this->set('biaya_agen', $biaya_agen);
      $mobilisasi = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 38 AND project_id = $a;");
      $this->set('mobilisasi', $mobilisasi);
      $konsultasi = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 39 AND project_id = $a;");
      $this->set('konsultasi', $konsultasi);
      $pph = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 40 AND project_id = $a;");
      $this->set('pph', $pph);
      $zakat = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 41 AND project_id = $a;");
      $this->set('zakat', $zakat);
      $hotmix_akses_masuk = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals WHERE cashflow_id = 42 AND project_id = $a;");
      $this->set('hotmix_akses_masuk', $hotmix_akses_masuk); 

      //total pengeluaran
      $total_pengeluaran = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals  WHERE operationalproject_id AND project_id = $a;");
      $this->set('total_pengeluaran', $total_pengeluaran);  

      $total_pemasukan = $this->Jurnal->query("SELECT SUM(amount) FROM jurnals  WHERE account_credit = 'Penjualan' AND project_id = $a;");
      $this->set('total_pemasukan', $total_pemasukan);

      $neraca_kas = ($total_pemasukan[0][0]['SUM(amount)'] - $total_pengeluaran[0][0]['SUM(amount)']);
      $this->set('neraca_kas', $neraca_kas);
      }
      else
      {
       $neraca_kas = 0; 
       $this->set('neraca_kas', $neraca_kas);
      }

  }
	

	
  }
?>