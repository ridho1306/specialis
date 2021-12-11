<?php

/* setting zona waktu */
	date_default_timezone_set('Asia/Jakarta');
	$this->fpdf->FPDF("L","cm","A4");

// kita set marginnya dimulai dari kiri, atas, kanan. jika tidak diset, defaultnya 1 cm
	$this->fpdf->SetMargins(3,2,3);
/* AliasNbPages() merupakan fungsi untuk menampilkan total halaman
di footer, nanti kita akan membuat page number dengan format : number page / total page
*/
	$this->fpdf->AliasNbPages();

// AddPage merupakan fungsi untuk membuat halaman baru
	$this->fpdf->AddPage(); 

// Setting Font : String Family, String Style, Font size
	$this->fpdf->SetFont('Times','B',16);

/* Kita akan membuat header dari halaman pdf yang kita buat
————– Header Halaman dimulai dari baris ini —————————–
*/
	$this->fpdf->Cell(23.5,0.5,'LAPORAN PERSEDIAAN BARANG',0,0,'C');
	$this->fpdf->Ln();
	$this->fpdf->Cell(23.5,0.5,'PADA CV. RIA KENCANA UNGU ',0,0,'C');
	$this->fpdf->Ln();
	$this->fpdf->Cell(23.5,0.5,'KOTA PALEMBANG',0,0,'C');
// fungsi Ln untuk membuat baris baru
	$this->fpdf->Ln();
	$this->fpdf->Ln();
	
/* Setting ulang Font : String Family, String Style, Font size
kenapa disetting ulang ???
jika tidak disetting ulang, ukuran font akan mengikuti settingan sebelumnya.
tetapi karena kita menginginkan settingan untuk penulisan alamatnya berbeda,
maka kita harus mensetting ulang Font nya.
jika diatas settingannya : helvetica, ‘B’, ’12’
khusus untuk penulisan alamat, kita setting : helvetica, ”, 10
yang artinya string stylenya normal / tidak Bold dan ukurannya 10
*/
	$this->fpdf->SetFont('helvetica','B',10);
	$this->fpdf->Cell(23.5,0.5,' Jl. Jenderal Ahmad Yani No.24J, 9 Ulu, Seberang Ulu I',0,0,'C');
	$this->fpdf->Ln();
	$this->fpdf->Cell(23.5,0.5,' Kota Palembang, Sumatera Selatan 30116, Telepon 0711-375890',0,0,'C');

	

/* Fungsi Line untuk membuat garis */
	$this->fpdf->Line(1,4,28.5,4);
	$this->fpdf->Line(1,4.05,28.5,4.05);

/* ————– Header Halaman selesai ————————————————*/



	$this->fpdf->Ln(1);
	$this->fpdf->SetFont('Times','',12);
	$this->fpdf->Cell(23.5,1,'LAPORAN PERSEDIAAN BARANG ',0,0,'C');
/* setting header table barang masuk */	
	$this->fpdf->Ln();
	$this->fpdf->Cell(23.5,1,'LAPORAN PERSEDIAAN BARANG MASUK',0,0,'L');


	$this->fpdf->Ln(1);
	$this->fpdf->SetFont('Times','',12);
	$this->fpdf->Cell(1 , 1, 'No' , 1, 'LR', 'C');
	$this->fpdf->Cell(4 , 1, 'Nama BARANG' , 1, 'LR', 'C');
	$this->fpdf->Cell(3 , 1, 'Jumlah' , 1, 'LR', 'C');
	$this->fpdf->Cell(3 , 1, 'Nama Pemesan' , 1, 'LR', 'C');
	$this->fpdf->Cell(4 , 1, 'Tanggal Masuk' , 1, 'LR', 'C');
	$this->fpdf->Cell(5 , 1, 'Supplier' , 1, 'LR', 'C');

/* generate hasil query disini */
	$no=1;
	foreach($masuk as $list_persediaan)
	{	
		$this->fpdf->Ln();
		$this->fpdf->SetFont('Times','',12);
		$this->fpdf->Cell(1 , 0.7, $no++ , 1, 'LR', 'C');
		$this->fpdf->Cell(4 , 0.7, $list_persediaan->nama_barang, 1, 'LR', 'L');
		$this->fpdf->Cell(3 , 0.7, $list_persediaan->jumlah , 1, 'LR', 'C');
		$this->fpdf->Cell(3 , 0.7, $list_persediaan->nama_pegawai , 1, 'LR', 'C');
		$this->fpdf->Cell(4 , 0.7, $list_persediaan->tanggal_masuk, 1, 'LR', 'R');
		$this->fpdf->Cell(5  , 0.7, $list_persediaan->nama_supplier, 1, 'LR', 'R');
		$no++;
	}
	// akhir table masuk

// table keluar
/* setting header table barang keluar */	
	$this->fpdf->Ln(2);
	$this->fpdf->Cell(23.5,1,'LAPORAN PERSEDIAAN BARANG KELUAR',0,0,'L');


	$this->fpdf->Ln(1);
	$this->fpdf->SetFont('Times','',12);
	$this->fpdf->Cell(1 , 1, 'No' , 1, 'LR', 'C');
	$this->fpdf->Cell(3 , 1, 'Nama barang' , 1, 'LR', 'C');
	$this->fpdf->Cell(3 , 1, 'Jumlah' , 1, 'LR', 'C');
	$this->fpdf->Cell(3 , 1, 'EOQ' , 1, 'LR', 'C');
	$this->fpdf->Cell(3 , 1, 'Pegawai' , 1, 'LR', 'C');
	$this->fpdf->Cell(4 , 1, 'Tanggal Keluar' , 1, 'LR', 'C');
	$this->fpdf->Cell(5 , 1, 'Supplier' , 1, 'LR', 'C');
	

 //generate hasil query disini 
	$no=1;
	$grandtotal=0;
	foreach($keluar as $data)
	{	
		$total=$data->jumlah * $data->harga_satuan; 
		$this->fpdf->Ln();
		$this->fpdf->SetFont('Times','',12);
		$this->fpdf->Cell(1 , 1, $no , 1, 'LR', 'C');
		$this->fpdf->Cell(3 , 1, $data->nama_barang , 1, 'LR', 'L');
		$this->fpdf->Cell(3 , 1, $data->jumlah , 1, 'LR', 'C');
		$this->fpdf->Cell(3 , 1, $data->eoq , 1, 'LR', 'C');
		$this->fpdf->Cell(3 , 1, $data->nama_pegawai , 1, 'LR', 'C');
		$this->fpdf->Cell(4 , 1, $data->tanggal_keluar , 1, 'LR', 'R');
		$this->fpdf->Cell(5 , 1, $data->nama_supplier , 1, 'LR', 'R');
		$no++;		
	}

// table Retur
/* setting header table barang keluar */	
	$this->fpdf->Ln(2);
	$this->fpdf->Cell(23.5,1,'LAPORAN PERSEDIAAN RETUR',0,0,'L');


	$this->fpdf->Ln(1);
	$this->fpdf->SetFont('Times','',12);
	$this->fpdf->Cell(1 , 1, 'No' , 1, 'LR', 'C');
	$this->fpdf->Cell(3 , 1, 'Nama barang' , 1, 'LR', 'C');
	$this->fpdf->Cell(3 , 1, 'Jumlah' , 1, 'LR', 'C');
	$this->fpdf->Cell(4 , 1, 'Tanggal Keluar' , 1, 'LR', 'C');
	$this->fpdf->Cell(5 , 1, 'Supplier' , 1, 'LR', 'C');
	

 //generate hasil query disini 
	$no=1;
	$grandtotal=0;
	foreach($retur as $data)
	{	
		$total=$data->jumlah * $data->harga_satuan; 
		$this->fpdf->Ln();
		$this->fpdf->SetFont('Times','',12);
		$this->fpdf->Cell(1 , 1, $no , 1, 'LR', 'C');
		$this->fpdf->Cell(3 , 1, $data->nama_barang , 1, 'LR', 'L');
		$this->fpdf->Cell(3 , 1, $data->jumlah , 1, 'LR', 'C');
		$this->fpdf->Cell(4 , 1, $data->tanggal , 1, 'LR', 'R');
		$this->fpdf->Cell(5 , 1, $data->nama_supplier , 1, 'LR', 'R');
		$no++;		
	}


/* setting posisi footer 3 cm dari bawah */
	$this->fpdf->SetY(-2.6);

/* setting font untuk footer */
	$this->fpdf->SetFont('Times','',10);

/* setting cell untuk waktu pencetakan */
	$this->fpdf->Cell(9.5, 0.5, 'Printed on : '.date('d/m/Y  H:i').' || CV. RIA KENCANA UNGU',0,'LR','L');

/* setting cell untuk page number */
	$this->fpdf->Cell(17, 0.5, 'Page '.$this->fpdf->PageNo().'/{nb}',0,0,'R');

/* generate pdf jika semua konstruktor, data yang akan ditampilkan, dll sudah selesai */
	ob_end_clean();
	$this->fpdf->Output("laporan_Persediaan_barang_RKU.pdf","I");

?>