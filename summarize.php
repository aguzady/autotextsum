<?php
 include "./indexer.php";
   
 function summarize ($filename, $compress) {
  // proses indexing
  $inv_index  = indexer();
  
  // load file dan daftar stopwords
  $load_file  = file_get_contents("./corpus/".$filename);
  $sentence  = preg_split("/[.]+/", $load_file);
  $sentence  = array_slice($sentence, 0, sizeof($sentence)-1); // buang array terakhir (kosong)
 
  $stopwords = file_get_contents("./stopwords.txt");
  $stopwords = preg_split("/[\s]+/", $stopwords);
 
  // jumlah kalimat yang diringkas
  $compression_rate  = $compress/100; 
  $max_sentence    = floor(sizeof($sentence)*$compression_rate);
 
  // inisialisasi
  $sentence_weight = array();
 
  
  foreach ($sentence as $key => $value) {
   // tokenisasi dengan membuang stopwords
   $word = preg_split("/[\d\W\s]+/", strtolower($value));
   $word = array_diff($word, $stopwords);  
   $word = array_values($word); // perbaiki indeks
   $output = array();
   
	}
 
  // return teks asli dan hasil ringkasan
  $output = array();
  $output['original'] = $load_file;
  
 
  return $output;
 }