<?php

namespace App\Models;

use CodeIgniter\I18n\Time;

/**
 * interface PresensiInterface
 * @method cekAbsen
 * @method absenMasuk
 * @method absenKeluar
 * @method getPresensiById
 * @method getPresensiByKehadiran
 * @method updatePresensi
 */
interface PresensiInterface
{
  public function cekAbsen(string|int $id, string|Time $date);

  public function absenMasuk(string $id, string $date, string $time);
  
  public function absenKeluar(string $id, string $time);
  
  public function getPresensiById(string $idPresensi);
  
  public function getPresensiByKehadiran(string $idKehadiran, string $tanggal);
  
}
