<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ParagraphSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $paragraphs = [
            ['identifier' => 'profile-title', 'text' => 'Profile'],
            ['identifier' => 'profile-text-1', 'text' => 'Berawal dari aktifitas dan kegiatan sebagai tenaga freelance dalam bidang konstruksi, mekanikal, piping, insulation pipa, sipil, dan maintenance service di beberapa perusahaan area Jawa Timur, maka berkumpullah kami para engineer muda ini untuk memulai pengabdian dan karir profesional kami sebuah melalui perusahaan yang mandiri CV. Sumber Waras Sukses.'],
            ['identifier' => 'profile-text-2', 'text' => 'CV. Sumber Waras Sukses didirikan di Malang pada tanggal 1 Februari 2018. Sekalipun masih relatif muda, namun para engineer kami adalah personil yang telah mempunyai pengalaman yang sangat banyak dalam bidangbidang konstruksi baja, konstruksi sipil, insulation pipa, fabrikasi manufaktur, erection struktur, dan pekerjaan sejenis lainnya. Pemilihan nama CV. Sumber Waras Sukses sendiri berasal dari daerah tempat tinggal kami yaitu Sumber Waras, sedangkan Sukses, itulah tujuan yang ingin dicapai dari pendirian perusahaan ini, yaitu menjadi perusahaan yang didukung oleh tenaga-tenaga profesional yang melakukan pekerjaannya secara profesional.'],
            ['identifier' => 'profile-text-3', 'text' => 'Selain itu, pendirian CV. Sumber Waras Sukses dimaksudkan untuk membuka lapangan kerja yang seluas-luasnya terutama untuk pekerja-pekerja muda di daerah tempat tinggal kami. Sehingga dapat lebih memaksimalkan kemampuan SDM para engineer-nya dalam melakukan pekerjaan secara profesional dalam bidang-bidang di atas.'],
            ['identifier' => 'profile-text-4', 'text' => 'Dengan didukung tenaga kerja yang profesional dan terlatih dalam bidang konstruksi, mekanikal, piping, insulation pipa, sipil dan maintenance service kami selalu mengedepankan kualitas, kecepatan serta harga yang terbaik untuk membuat seluruh mitra dan klien kami merasa puas. Komitmen kami untuk menyelesaikan setiap karya kontruksi yang telah dipercayakan tidak terlepas dari peran setiap personil kami dalam melakukan perencanaan, pelaksanaan dan pengendalian proyek dengan berbagai manajemen dan metode kontruksi yang efektif, efisien dan selalu memperhatikan K3 (Keselamatan Kesehatan Kerja) karena sebagai wujud dari rangkaian proses pembelajaran dan pengalaman perusahaan melalui manajemen teknologi dan metode kontruksi yang efektif dan efisien kami siap memberikan pelayanan jasa kontruksi terbaik dalam menciptakan karya kontruksi yang lebih nyata.'],
            ['identifier' => 'scope-of-work-title', 'text' => 'Scope of Work'],
            ['identifier' => 'scope-of-work-subtitle-1', 'text' => 'General Contractor'],
            ['identifier' => 'scope-of-work-text-1', 'text' => 'Melaksanakan pekerjaan sesuai dengan gambar perencanaan dan ketentuan mengenai risalah penjelasan pekerjaan yang telah ditetapkan oleh klien. Kami selalu konsentrasi dengan gambar pelaksanaan pekerjaan agar teknik pekerjaan terukur dengan baik sehingga lancar dalam pelaksanaan kontruksi. Kami juga membuat laporan hasil pekerjaan dengan disiplin, tepat waktu guna menjaga efisiensi agar sesuai dengan target pekerjaan.'],
            ['identifier' => 'scope-of-work-subtitle-2', 'text' => 'Steel Structure Design & Build'],
            ['identifier' => 'scope-of-work-text-2', 'text' => 'Kami dapat membuat gambar perencanaan pekerjaan mulai dari desain dan analisa, desain kontruksi, fabrikasi maupun desain erection karena kami ahli dalam bidang konstruksi baja, konstruksi sipil, insulation pipa, fabrikasi manufaktur, erection struktur, dan pekerjaan sejenis lainnya maka dari itu klien akan merasa sangat terbantu dengan kami, karena dalam pelaksanaannya dapat terselesaikan dengan cepat, efisien dan mudah.'],
            ['identifier' => 'scope-of-work-subtitle-3', 'text' => 'Maintenance Service'],
            ['identifier' => 'scope-of-work-text-3', 'text' => 'Kami juga melayani pekerjaan maintenance dan service mesin-mesin, perpipaan, peralatan, bangunan atau gedung, modifikasi dan pekerjaan sejenis lainnya yang termasuk dalam pekerjaan pemeliharaan. Kami memberikan solusi dan umapan balik yang cepat dan tepat kepada klien dalam mengatasi permasalahan yang ada dan mengutamakan profesionalisme kerja, agar semua pekerjaan dapat selesai dengan tepat waktu.'],
            ['identifier' => 'company-capability-title', 'text' => 'Company Capability'],
            ['identifier' => 'company-capability-subtitle-1', 'text' => 'TEAM KAMI ADALAH KEKUATAN KAMI'],
            ['identifier' => 'company-capability-text-1', 'text' => 'Kunci perusahaan dalam bekerja yaitu terletak pada karyawan,dibuktikan dengan etos kerja, profesionalisme dalam bekerja, kualifikasi teknis yang tinggi, integritas dan rasa kebersamaan yang kuat, sehingga kami mampu melaksanakan pekerjaan dengan baik.'],
            ['identifier' => 'company-capability-subtitle-2', 'text' => 'SOLUSI YANG KOMPETITIF'],
            ['identifier' => 'company-capability-text-2', 'text' => 'Perusahaan kami memliki kemampuan untuk menawarkan ide kreatif dan informasi yang tepat yang bertujuan untuk memberikan solusi yang optimal terhadap kebutuhan klien.'],
            ['identifier' => 'company-capability-subtitle-3', 'text' => 'KAPASITAS DAN FLEKSIBILITAS'],
            ['identifier' => 'company-capability-text-3', 'text' => 'Perusahaan kami sangat kritis dalam mengelola proyek-proyek pekerjaan, dengan mempertahankan fleksibilitas untuk merespon pekerjaan dengan cepat ,efektif dan efisien. Kami telah berhasil melakukan pekerjaan dengan target yang tepat waktu dan sesuai budget.'],
            ['identifier' => 'latest-projects-title', 'text' => 'Latest Projects'],
            ['identifier' => 'our-clients-title', 'text' => 'Our Clients'],
            ['identifier' => 'contact-us-title', 'text' => 'Contact Us'],
            ['identifier' => 'address-1', 'text' => 'Jl. Sumber Waras I 11 RT.05 RW.08'],
            ['identifier' => 'address-2', 'text' => 'Kelurahan Kalirejo, Kecamatan Lawang'],
            ['identifier' => 'address-3', 'text' => 'Kabupaten Malang, Provinsi Jawa Timur'],
            ['identifier' => 'address-4', 'text' => ''],
            ['identifier' => 'address-5', 'text' => ''],
            ['identifier' => 'email-1', 'text' => 'sumberwaras011@gmail.com'],
            ['identifier' => 'email-2', 'text' => ''],
            ['identifier' => 'email-3', 'text' => ''],
            ['identifier' => 'phone-1', 'text' => '(0341) 430 94 25'],
            ['identifier' => 'phone-2', 'text' => '(+62) 81 233 200 918 (Malang)'],
            ['identifier' => 'phone-3', 'text' => '(+62) 82 134 613 708 (Other)'],
            ['identifier' => 'phone-4', 'text' => ''],
            ['identifier' => 'phone-5', 'text' => ''],
            ['identifier' => 'company-overview-title', 'text' => 'Company Overview'],
            ['identifier' => 'company-overview-text-1', 'text' => 'Berawal dari aktifitas dan kegiatan sebagai tenaga freelance dalam bidang konstruksi, mekanikal, piping, insulation pipa, sipil, dan maintenance service di beberapa perusahaan area Jawa Timur, maka berkumpullah kami para engineer muda ini untuk memulai pengabdian dan karir profesional kami sebuah melalui perusahaan yang mandiri CV. Sumber Waras Sukses.'],
            ['identifier' => 'company-overview-text-2', 'text' => 'CV. Sumber Waras Sukses didirikan di Malang pada tanggal 1 Februari 2018. Sekalipun masih relatif muda, namun para engineer kami adalah personil yang telah mempunyai pengalaman yang sangat banyak dalam bidangbidang konstruksi baja, konstruksi sipil, insulation pipa, fabrikasi manufaktur, erection struktur, dan pekerjaan sejenis lainnya. Pemilihan nama CV. Sumber Waras Sukses sendiri berasal dari daerah tempat tinggal kami yaitu Sumber Waras, sedangkan Sukses, itulah tujuan yang ingin dicapai dari pendirian perusahaan ini, yaitu menjadi perusahaan yang didukung oleh tenaga-tenaga profesional yang melakukan pekerjaannya secara profesional.'],
            ['identifier' => 'company-overview-text-3', 'text' => 'Selain itu, pendirian CV. Sumber Waras Sukses dimaksudkan untuk membuka lapangan kerja yang seluas-luasnya terutama untuk pekerja-pekerja muda di daerah tempat tinggal kami. Sehingga dapat lebih memaksimalkan kemampuan SDM para engineer-nya dalam melakukan pekerjaan secara profesional dalam bidang-bidang di atas.'],
            ['identifier' => 'company-overview-text-4', 'text' => 'Dengan didukung tenaga kerja yang profesional dan terlatih dalam bidang konstruksi, mekanikal, piping, insulation pipa, sipil dan maintenance service kami selalu mengedepankan kualitas, kecepatan serta harga yang terbaik untuk membuat seluruh mitra dan klien kami merasa puas. Komitmen kami untuk menyelesaikan setiap karya kontruksi yang telah dipercayakan tidak terlepas dari peran setiap personil kami dalam melakukan perencanaan, pelaksanaan dan pengendalian proyek dengan berbagai manajemen dan metode kontruksi yang efektif, efisien dan selalu memperhatikan K3 (Keselamatan Kesehatan Kerja) karena sebagai wujud dari rangkaian proses pembelajaran dan pengalaman perusahaan melalui manajemen teknologi dan metode kontruksi yang efektif dan efisien kami siap memberikan pelayanan jasa kontruksi terbaik dalam menciptakan karya kontruksi yang lebih nyata.'],
            ['identifier' => 'company-overview-text-5', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
            ['identifier' => 'company-overview-text-6', 'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?'],
            ['identifier' => 'vision-mission-title', 'text' => 'Vision and Mission'],
            ['identifier' => 'vision-mission-text', 'text' => 'Pada saat ini CV. Sumber Waras Sukses berkomitmen menawarkan dan memberikan solusi terbaik dalam melaksanakan pekerjaan sesuai kontrak yang disepakati. Komitmen perusahaan tersebut dibangun dengan tujuan untuk meningkatkan kepuasan pelanggan secara nyata dengan menghasilkan kontruksi berkualitas dan tepat waktu yang didukung dengan tenaga SDM yang profesional.'],
            ['identifier' => 'vision-mission-subtitle-1', 'text' => 'Vision'],
            ['identifier' => 'vision-mission-text-1', 'text' => 'CV. Sumber Waras Sukses akan menjadi salah satu perusahaan kontruksi terbaik di Indonesia dengan penekanan laju pertumbuhan yang berkelanjutan dan pembangunan kompetensi melalui pengembangan sumber daya manusia, manajemen teknologi dan tata kelola perusahaan yang baik agar dapat berkontribusi dalam rangka pembangunan kemajuan Indonesia.'],
            ['identifier' => 'vision-mission-subtitle-2', 'text' => 'Mission'],
            ['identifier' => 'vision-mission-text-2', 'text' => 'Meningkatkan daya saing perusahaan di industri jasa kontruksi dengan mengembangkan pelayanan dan teknologi terbaik kepada konsumen dalam memenuhi harapan pemangku kepentingan. Meningkatkan pelatihan SDM untuk menghasilkan tenaga kerja yang berkualitas dan menciptakan lingkungan kerja yang kondusif, serta menyediakan lapangan kerja yang luas.'],
            ['identifier' => 'organization-chart-title', 'text' => 'Organization Chart'],
            ['identifier' => 'organization-chart-text-1', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
            ['identifier' => 'organization-chart-text-2', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
            ['identifier' => 'organization-chart-text-3', 'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?'],
            ['identifier' => 'organization-chart-text-4', 'text' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?'],
        ];
        foreach ($paragraphs as $item) {
            DB::table('paragraphs')->insert([
                'identifier' => $item['identifier'],
                'text' => $item['text'],
            ]);
        }
    }
}
