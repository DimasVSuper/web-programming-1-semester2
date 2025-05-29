<?php

class Pendaftaran
{
    public $nik; // Properti untuk menyimpan NIK
    public $nama; // Properti untuk menyimpan nama
    public $alamat; // Properti untuk menyimpan alamat
    public $jenis_kelamin; // Properti untuk menyimpan jenis kelamin
    public $tgl_lahir; // Properti untuk menyimpan tanggal lahir
    public $prodi_kode; // Properti untuk menyimpan kode program studi
    public $program_studi; // Properti untuk menyimpan nama program studi

    public function __construct($postData)
    {
        // Mengambil data dari $postData (biasanya berasal dari $_POST)
        $this->nik = $postData["nik"] ?? ''; // Mengambil NIK atau default ke string kosong
        $this->nama = $postData["nama"] ?? ''; // Mengambil nama atau default ke string kosong
        $this->alamat = $postData["alamat"] ?? ''; // Mengambil alamat atau default ke string kosong
        $this->jenis_kelamin = $postData["jenis_kelamin"] ?? ''; // Mengambil jenis kelamin atau default ke string kosong
        $this->tgl_lahir = $postData["tgl_lahir"] ?? ''; // Mengambil tanggal lahir atau default ke string kosong
        $this->prodi_kode = $postData["prodi"] ?? ''; // Mengambil kode program studi atau default ke string kosong

        // Validasi input: Memastikan semua field wajib diisi
        if (empty($this->nik) || empty($this->nama) || empty($this->alamat) || empty($this->jenis_kelamin) || empty($this->tgl_lahir) || empty($this->prodi_kode)) {
            throw new Exception("Semua field wajib diisi!"); // Melempar exception jika ada field yang kosong
        }

        // Menentukan nama program studi berdasarkan kode
        $this->program_studi = match ($this->prodi_kode) {
            "10" => "Informatika", // Jika kode adalah "10", program studi adalah "Informatika"
            "11" => "Akuntansi", // Jika kode adalah "11", program studi adalah "Akuntansi"
            "12" => "Sistem Informasi", // Jika kode adalah "12", program studi adalah "Sistem Informasi"
            "13" => "Manajemen", // Jika kode adalah "13", program studi adalah "Manajemen"
            "14" => "Public Relation", // Jika kode adalah "14", program studi adalah "Public Relation"
            default => "Tidak Diketahui" // Jika kode tidak cocok, program studi adalah "Tidak Diketahui"
        };
    }
}