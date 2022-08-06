<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            // page 7
            [
                // id: 1
                'Modifikasi Platform WTP N',
                'Modifikasi Platform di area WTP N PT Otsuka Indonesia di Lawang',
                'PT Otsuka Indonesia, Lawang',
                '2018-11-07',
            ],
            [
                // id: 2
                'Fabrikasi dan Pemasangan Ducting',
                'Fabrikasi dan pemasangan Ducting di area PT Molindo Raya Industrial Lawang',
                'PT Molindo Raya Industrial, Lawang',
                '2019-01-04',
            ],
            [
                // id: 3
                'Repair Saluran Dryer by Design',
                'Repair saluran Dryer by design untuk di area PT Molindo Raya Industrial Lawang',
                'PT Molindo Raya Industrial, Lawang',
                '2019-01-08',
            ],
            [
                // id: 4
                'Pembongkaran Kondensor dan Tabung Ex-Header Steam Lt.5 dan Lt.6',
                'Pembongkaran Kondensor dan Tabung Ex-Header Steam Lt.5 dan Lt.6 di PT Molindo Raya Industrial Lawang',
                'PT Molindo Raya Industrial, Lawang',
                '2019-01-12',
            ],
            // page 8
            [
                // id: 5
                'Reparasi Quench Tangki Bocor DP 3',
                'Reparasi Quench tangki yang bocor di area DP 3 di PT Molindo Raya Industrial Lawang',
                'PT Molindo Raya Industrial, Lawang',
                '2019-01-16',
            ],
            // [
            //     // id: 6
            //     'MODIFIKASI CWS DAN CWR',
            //     'Modifikasi saluran pipa CWS dan saluran pipa CWR di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-01-25',
            // ],
            // [
            //     // id: 7
            //     'PASANG PIPA SOLAR',
            //     'Pemasangan pipa solar di PT Otsuka Indonesia Lawang',
            //     'PT Otsuka Indonesia, Lawang',
            //     '2019-02-23',
            // ],
            // [
            //     // id: 8
            //     'PEMBANGUNAN MUSHOLA RT 02',
            //     'Pembangunan mushola RT 02 RW 08 di area sekitar di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-03-05',
            // ],
            // // page 9
            // [
            //     // id: 9
            //     'SUPPORT CABLE TRAY',
            //     'Pemasangan support besi untuk tray kabel di PT Otsuka Indonesia Lawang',
            //     'PT Otsuka Indonesia, Lawang',
            //     '2019-03-16',
            // ],
            // [
            //     // id: 10
            //     'PEMASANGAN PIPA PENDINGIN EVAPORATOR',
            //     'Pemasangan pipa pendingin evaporator di seberang spraypond di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-07-05',
            // ],
            // [
            //     // id: 11
            //     'PEMASANGAN ATAP FERMENTATOR & PROPAGATOR',
            //     'Penambahan atap fermentator 5 dan 6 dan pemasangan atap di atas tangki propagator PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-07-19',
            // ],
            // [
            //     // id: 12
            //     'PEMASANGAN CEROBONG COOLER',
            //     'Pemasangan cerobong cooler beserta platform dan tangga di area PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-07-26',
            // ],
            // // page 10
            // [
            //     // id: 13
            //     'MODIF JALUR PIPA UDARA DAN STEAM',
            //     'Modif jalur pipa udara dan pemasangan isolasi pipa steam untuk area di PT Otsuka Indonesia Lawang',
            //     'PT Otsuka Indonesia, Lawang',
            //     '2019-08-08',
            // ],
            // [
            //     // id: 14
            //     'PEMASANGAN BLIND NOZZLE SPRAY DI SPRAYPOND',
            //     'Pemasangan blind nozzle spray di saluran spraypond di area PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-08-11',
            // ],
            // [
            //     // id: 15
            //     'PEMBONGKARAN DAN PEMBUATAN PLATFORM DISAMPING UTARA GUDANG ALKOHOL',
            //     'Pembongkaran platform lama dan pemasangan platform baru untuk area gudang alkohol di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-08-21',
            // ],
            // [
            //     // id: 16
            //     'PENGECATAN TANGKI DAN SALURAN AREA ACS',
            //     'Pengecatan seluruh tangki dan saluran pipa untuk area acs di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-08-23',
            // ],
            // // page 11
            // [
            //     // id: 17
            //     'GRILL SELOKAN LVP - PLABOTTLE',
            //     'Pembuatan grill selokan di area LVP plabottle di PT Otsuka Indonesia Lawang',
            //     'PT Otsuka Indonesia, Lawang',
            //     '2019-09-09',
            // ],
            // [
            //     // id: 18
            //     'PASANG COR PEDESTAL CONDENSOR',
            //     'Pengecoran pedestal untuk dum condensor dan pasang supply denim water ke boiler batu bara di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-09-10',
            // ],
            // [
            //     // id: 19
            //     'PEMASANGAN BYPAS OUTLET POMPA SPRAYPOND DAN PENGGANTIAN VALVE 8" YANG RUSAK',
            //     'Pemasangan bypass outlet pompa spraypond dan penggantian valve 8" yang rusak di area depan evaporator di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-09-27',
            // ],
            // [
            //     // id: 20
            //     'PENGGANTIAN ATAP DI BOILER TAIHU 3 & 4',
            //     'Penggantian dan pemasangan atap baru untuk area boiler taihu di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-09-28',
            // ],
            // // page 12
            // [
            //     // id: 21
            //     'MODIF CEROBONG PLATFORM BOILER DAN JASA',
            //     'Pembongkaran platform lama di area boiler dan pemasangan kembali platform baru untuk area gudang alkohol di PT Otsuka Indonesia Lawang',
            //     'PT Otsuka Indonesia, Lawang',
            //     '2019-09-30',
            // ],
            // [
            //     // id: 22
            //     'PEMBUATAN GERBANG UTAMA DAN PAGAR GERBANG UTAMA',
            //     'Pembuatan pagar dan gerbang utama di PT Otsuka Indonesia Lawang',
            //     'PT Otsuka Indonesia, Lawang',
            //     '2019-10-03',
            // ],
            // [
            //     // id: 23
            //     'PENGGANTIAN ATAP GUDANG ORGANIK',
            //     'Penggantian dan pemasangan atap baru untuk area atap gudang granulasi organik PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-10-30',
            // ],
            // [
            //     // id: 24
            //     'PEMASANGAN PIPA STEAM NEW GRANULATOR NUTRISI',
            //     'Pemasangan pipa steam dan isolasi pipa di area nutrisi PT Otsuka Indonesia Lawang',
            //     'PT Otsuka Indonesia, Lawang',
            //     '2019-11-21',
            // ],
            // // page 13
            // [
            //     // id: 25
            //     'PEMASANGAN ISOLASI PIPA STEAM BOILER VINASSE',
            //     'Pemasangan isolasi rangkaian pipa steam di area boiler vinasse PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-11-30',
            // ],
            // [
            //     // id: 26
            //     'PENGGANTIAN CREMONA GREEN HOUSE YANG KEROPOS',
            //     'Penggantian cremona green house di area kompos di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-12-07',
            // ],
            // [
            //     // id: 27
            //     'TAMBAHAN PIPA STEAM JALUR NUTRISI',
            //     'Pemasangan isolasi pipa steam untuk jalur pipa nutrisi di area PT Otsuka Indonesia Lawang',
            //     'PT Otsuka Indonesia, Lawang',
            //     '2019-12-08',
            // ],
            // [
            //     // id: 28
            //     'REPAIR TALANG AIR STOCKPILLE BOILER BATU BARA',
            //     'Reparasi talang air stockpille di area boiler batu bara PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-12-10',
            // ],
            // // page 14
            // [
            //     // id: 29
            //     'PENGGANTIAN TIANG PENYANGGA ATAP GREEN HOUSE',
            //     'Penggantian tiang penyangga atap green house area kompos PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-12-11',
            // ],
            // [
            //     // id: 30
            //     'PENGGANTIAN TALANG GREEN HOUSE',
            //     'Penggantian talang baru untuk green house area kompos PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-12-11',
            // ],
            // [
            //     // id: 31
            //     'PEMASANGAN 2 UNIT TANGGA MAINTENANCE CARGO LIFT',
            //     'Pemasangan 2 unit tangga untuk maintenance cargo lift di PT Otsuka Indonesia Lawang',
            //     'PT Otsuka Indonesia, Lawang',
            //     '2019-12-12',
            // ],
            // [
            //     // id: 32
            //     'CLEANING OVERHOUL BOILER 8 TON & BOILER 10 TON',
            //     'Servis pembersihan tangki overhoul boiler ukuran 8 ton & 10 ton PT Otsuka Indonesia Lawang',
            //     'PT Otsuka Indonesia, Lawang',
            //     '2019-12-13',
            // ],
            // // page 15
            // [
            //     // id: 33
            //     'CLEANING LANTAI FURNACE DP 5 DAN DP 4',
            //     'Pembersihan kerak lantai furnace DP 5 dan DP 4 di area UPP PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-12-15',
            // ],
            // [
            //     // id: 34
            //     'PEMASANGAN CEROBONG PVC QC',
            //     'Pemasangan cerobong dari pipa PVC di area QC di PT Otsuka Indonesia Lawang',
            //     'PT Otsuka Indonesia, Lawang',
            //     '2019-12-16',
            // ],
            // [
            //     // id: 35
            //     'PEMASANGAN ISOLASI PIPA STEAM BOILER VINASSE',
            //     'Pemasangan isolasi pipa steam boiler vinasse ke area distilasi di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2019-12-18',
            // ],
            // [
            //     // id: 36
            //     'PEMBUATAN SALURAN KABEL CUBICLE BOILER VINASSE',
            //     'Pembuatan saluran kabel cubicle boiler vinasse PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-03-03',
            // ],
            // // page 16
            // [
            //     // id: 37
            //     'REPAIR PONDASI FURNACE DP 4 YANG PECAH DAN REPAIR PLAT FURNACE DP 4 BAGIAN BYPASS',
            //     'Reparasi pondasi furnace dan repair plat furnace DP 4 bagian bypass di area UPP PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-02-07',
            // ],
            // // duplicated
            // [
            //     // id: 38
            //     'PEMBUATAN BUNDWALL ASAM SULFAT & DEFOAMER',
            //     'Pemasangan bundwall untuk tangka asam sulfat dan defoamer di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-01-20',
            // ],
            // [
            //     // id: 39
            //     'PENGGANTIAN PLATFORM GENSET',
            //     'Pembongkaran platform lama dan pemasangan kembali platform baru di area genset PT Otsuka Indonesia Lawang',
            //     'PT Otsuka Indonesia, Lawang',
            //     '2020-01-30',
            // ],
            // // page 17
            // [
            //     // id: 40
            //     'PEMBUATAN PIPERACK 2ND PLANT DISTILASI',
            //     'Pembuatan pipe rack 2nd Distilasi dan saluran pipa puran pendingin condensor .Luasan kurang lebih 1019.8 𝑚2 PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-03-11',
            // ],
            // [
            //     // id: 41
            //     'PEMASANGAN PIPA FEED CONDENSATE STEAM DISTILASI 2',
            //     'Reparasi pondasi furnace dan repair plat furnace DP 4 bagian bypass di area UPP PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-02-07',
            // ],
            // [
            //     // id: 42
            //     'PEMASANGAN PIPA STEAM COMPRESOR, AIR SUMBER WARAS, DAN SPENTLESS KE DISTILASI 2',
            //     'Pemasangan pipa steam, pipa compresor, pipa air sumber waras, dan pipa speentless ke area distilasi 2 di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-03-30',
            // ],
            // [
            //     // id: 43
            //     'PEMASANGAN ISOLASI PIPA STEAM FEED DISTILASI 2',
            //     'Pemasangan isolasi pipa steam feed di area distilasi 2 di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-04-05',
            // ],
            // // page 18
            // [
            //     // id: 44
            //     'PEMASANGAN PIPA PRODUKSI ALKOHOL DAN PEMASANGAN CONTROL VALVE CWR DISTILASI 2',
            //     'Pemasangan saluran pipa produksi alkohol distilasi 2 ke tangki storage di area distilasi 2 dan pasang control valve CWR Condensor distilasi 2 di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-05-05',
            // ],
            // [
            //     // id: 45
            //     'PEMASANGAN SALURAN AIR VACCUM & MECH SEAL',
            //     'Pemasangan saluran air vaccum dan saluran air mech seal di area distilasi 2 di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-05-12',
            // ],
            // [
            //     // id: 46
            //     'PEMBUATAN DAN PEMASANGAN KANOPI RT 02',
            //     'Pembuatan design dan fabrikasi pemasangan kanopi di RT 02 RW 08 area disekitar PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-05-12',
            // ],
            // [
            //     // id: 47
            //     'PEMASANGAN SALURAN PEMADAM DARI DISTILASI 1 KE DISTILASI 2',
            //     'Pemasangan saluran air pipa pemadam dari area distilasi 1 ke area distilasi 2 di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-06-09',
            // ],
            // // page 19
            // [
            //     // id: 48
            //     'MODIFIKASI SALURAN STEAM RECT & COLOUMN',
            //     'Perbaikan dan modifikasi saluran steam rect dan coloumn di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-06-11',
            // ],
            // [
            //     // id: 49
            //     'JASA PEMBUATAN JALUR UDARA COMPRESSOR',
            //     'Perbaikan dan pemasangan saluran pipa jalur udara di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-07-09',
            // ],
            // [
            //     // id: 50
            //     'PEMASANGAN VALVE DAN FLANGE DI DISTRIBUTOR PIPA CWR',
            //     'Pemasangan valve dan flange di distributor pipa CWR Cooling Tower 1 Cell di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-07-24',
            // ],
            // [
            //     // id: 51
            //     'PEMASANGAN NOZZLE CWS DAN CWR DAN VALVE STEAM HEADER EVAP 60 BRIX',
            //     'Pemasangan nozzle CWS & CWR dan steam header evap 60 brix di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-07-27',
            // ],
            // // page 20
            // [
            //     // id: 52
            //     'PERBAIKAN PINTU HARMONIKA',
            //     'Pembongkaran dan perbaikan pintu harmonika di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-07-29',
            // ],
            // [
            //     // id: 53
            //     'PERBAIKAN PLAT FURNACE 1 LEPAS',
            //     'Perbaikan plat furnace DP 1 di area UPP di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-07-30',
            // ],
            // [
            //     // id: 54
            //     'PEMASANGAN SALURAN CWR CT 8002 1 CELL',
            //     'Pemasangan saluran CWR CT 8002 1 Cell di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-08-02',
            // ],
            // [
            //     // id: 55
            //     'PEMASANGAN VALVE DAN PIPING REBOILER RECT 2',
            //     'Pemasangan valve & piping reboiler rect 2 dan penambahan piping dalam tangki diameter 2” panjang kurang lebih 3 meter di PT Molindo Raya Industrial Lawang',
            //     'PT Molindo Raya Industrial, Lawang',
            //     '2020-08-06',
            // ],
        ];
        foreach ($projects as $item) {
            DB::table('projects')->insert([
                'name' => $item[0],
                'description' => $item[1],
                'location' => $item[2],
                'date' => $item[3],
            ]);
        }
    }
}
