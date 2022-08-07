<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Certificate::truncate();
        $certificates = [
            [
                // id: 1
                'Akta Pendirian', // 'title',
                'Wulandari Saputri, SH., M.Kn', // 'notary',
                '1', // 'number',
                '2018-02-01', // 'date',
                null, // 'city',
                null, // 'class_of_city',
                null, // 'certificate_of_domicile',
                null, // 'published_by',
                null, // 'registration_number',
                null, // 'tax_number',
                null, // 'tax_letter',
                null, // 'business_license',
            ],
            [
                // id: 2
                'Pendaftaran di Pengadilan Negeri', // 'title',
                null, // 'notary',
                '60/CV/II/2018', // 'number',
                '2018-02-07', // 'date',
                'Kepanjen', // 'city',
                'Kelas I-B', // 'class_of_city',
                null, // 'certificate_of_domicile',
                null, // 'published_by',
                null, // 'registration_number',
                null, // 'tax_number',
                null, // 'tax_letter',
                null, // 'business_license',
            ],
            [
                // id: 3
                'Pengesahan oleh Menteri Kehakiman', // 'title',
                null, // 'notary',
                'AHU-00077.AH.02.02 TAHUN 2017', // 'number',
                '2017-12-15', // 'date',
                null, // 'city',
                null, // 'class_of_city',
                null, // 'certificate_of_domicile',
                null, // 'published_by',
                null, // 'registration_number',
                null, // 'tax_number',
                null, // 'tax_letter',
                null, // 'business_license',
            ],
            [
                // id: 4
                'Akta Perubahan', // 'title',
                'Ita Kirstiana, SH., M.Kn', // 'notary',
                '4', // 'number',
                '2020-08-04', // 'date',
                null, // 'city',
                null, // 'class_of_city',
                null, // 'certificate_of_domicile',
                null, // 'published_by',
                null, // 'registration_number',
                null, // 'tax_number',
                null, // 'tax_letter',
                null, // 'business_license',
            ],
            [
                // id: 5
                'Pengesahan oleh Menteri Kehakiman', // 'title',
                null, // 'notary',
                'AHU-0025381.AH.01.16 TAHUN 2020', // 'number',
                '2020-08-13', // 'date',
                null, // 'city',
                null, // 'class_of_city',
                null, // 'certificate_of_domicile',
                null, // 'published_by',
                null, // 'registration_number',
                null, // 'tax_number',
                null, // 'tax_letter',
                null, // 'business_license',
            ],
            [
                // id: 6
                'Surat Keterangan Domisili Perusahaan', // 'title',
                null, // 'notary',
                null, // 'number',
                null, // 'date',
                null, // 'city',
                null, // 'class_of_city',
                '530/24/35.07.25.1005/2020', // 'certificate_of_domicile',
                'Kelurahan Kalirejo', // 'published_by',
                null, // 'registration_number',
                null, // 'tax_number',
                null, // 'tax_letter',
                null, // 'business_license',
            ],
            [
                // id: 7
                'Tanda Daftar Perusahaan', // 'title',
                null, // 'notary',
                '132534705024', // 'number',
                '2018-02-20', // 'date',
                null, // 'city',
                null, // 'class_of_city',
                null, // 'certificate_of_domicile',
                'Dinas Perindustrian Dan Perdagangan Kabupaten Malang', // 'published_by',
                null, // 'registration_number',
                null, // 'tax_number',
                null, // 'tax_letter',
                null, // 'business_license',
            ],
            [
                // id: 8
                'Sertifikat Badan Usaha', // 'title',
                null, // 'notary',
                null, // 'number',
                '2020-05-21', // 'date',
                null, // 'city',
                null, // 'class_of_city',
                null, // 'certificate_of_domicile',
                'LPJK Provinsi Jawa Timur', // 'published_by',
                '0-3507-16-139-1-13-091971', // 'registration_number',
                null, // 'tax_number',
                null, // 'tax_letter',
                null, // 'business_license',
            ],
            [
                // id: 9
                'Surat Izin Usaha Perusahaan (SIUP)', // 'title',
                null, // 'notary',
                '503/0050/SIUP-K/35.07.122/2018', // 'number',
                '2018-02-14', // 'date',
                null, // 'city',
                null, // 'class_of_city',
                null, // 'certificate_of_domicile',
                'Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu Kabupaten Malang', // 'published_by',
                null, // 'registration_number',
                null, // 'tax_number',
                null, // 'tax_letter',
                null, // 'business_license',
            ],
            [
                // id: 10
                'Nomor Induk Berusaha', // 'title',
                null, // 'notary',
                null, // 'number',
                '2020-09-03', // 'date',
                null, // 'city',
                null, // 'class_of_city',
                null, // 'certificate_of_domicile',
                'Badan Koordinasi Penanaman Modal', // 'published_by',
                '0220506960832', // 'registration_number',
                null, // 'tax_number',
                null, // 'tax_letter',
                null, // 'business_license',
            ],
            [
                // id: 11
                'Perpajakan', // 'title',
                null, // 'notary',
                null, // 'number',
                null, // 'date',
                null, // 'city',
                null, // 'class_of_city',
                null, // 'certificate_of_domicile',
                null, // 'published_by',
                null, // 'registration_number',
                '83.936.544.2-657.000', // 'tax_number',
                'S-196PKP/WPJ.12/KP.1003/2018', // 'tax_letter',
                'No: 503/113/IUJK/35.07.122.2020', // 'business_license',
            ],
        ];
        foreach ($certificates as $item) {
            DB::table('certificates')->insert([
                'title' => $item[0],
                'notary' => $item[1],
                'number' => $item[2],
                'date' => $item[3],
                'city' => $item[4],
                'class_of_city' => $item[5],
                'certificate_of_domicile' => $item[6],
                'published_by' => $item[7],
                'registration_number' => $item[8],
                'tax_number' => $item[9],
                'tax_letter' => $item[10],
                'business_license' => $item[11],
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
