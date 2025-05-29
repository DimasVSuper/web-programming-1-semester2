<?php
require_once "../database/database.php"; // Memanggil koneksi database
require_once "../models/pendaftaran.php"; // Memanggil class Pendaftaran

class PendaftaranHandler
{
    private $conn; // Properti untuk menyimpan koneksi database

    public function __construct($conn)
    {
        $this->conn = $conn; // Menginisialisasi koneksi database
    }

    public function prosesPendaftaran($postData)
    {
        try {
            // Buat instance dari class Pendaftaran
            $pendaftaran = new Pendaftaran($postData);

            // Query untuk menyimpan data ke database
            $sql = "INSERT INTO pendaftaran_mahasiswa (nik, nama, alamat, jenis_kelamin, tgl_lahir, prodi_kode, prodi_nama)
                    VALUES (?, ?, ?, ?, ?, ?, ?)";

            // Gunakan prepared statement untuk mencegah SQL Injection
            $stmt = $this->conn->prepare($sql); // Menyiapkan query
            $stmt->bind_param(
                "sssssss", // Menentukan tipe data untuk setiap parameter (semua string)
                $pendaftaran->nik, // Mengikat parameter NIK
                $pendaftaran->nama, // Mengikat parameter Nama
                $pendaftaran->alamat, // Mengikat parameter Alamat
                $pendaftaran->jenis_kelamin, // Mengikat parameter Jenis Kelamin
                $pendaftaran->tgl_lahir, // Mengikat parameter Tanggal Lahir
                $pendaftaran->prodi_kode, // Mengikat parameter Kode Program Studi
                $pendaftaran->program_studi // Mengikat parameter Nama Program Studi
            );

            if ($stmt->execute()) { // Menjalankan query
                return "Data berhasil disimpan ke database."; // Mengembalikan pesan sukses
            } else {
                throw new Exception("Gagal menyimpan data: " . $stmt->error); // Melempar exception jika query gagal
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage()); // Menangkap dan melempar ulang exception
        } finally {
            $stmt->close(); // Menutup statement
            $this->conn->close(); // Menutup koneksi database
        }
    }
}