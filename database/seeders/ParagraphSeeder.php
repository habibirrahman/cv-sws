<?php

namespace Database\Seeders;

use App\Models\Paragraph;
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
        Paragraph::truncate();
        $paragraphs = [
            ['profile-title', 'Profile'],
            ['profile-text-1', 'Berawal dari aktifitas dan kegiatan sebagai tenaga freelance dalam bidang konstruksi, mekanikal, piping, insulation pipa, sipil, dan maintenance service di beberapa perusahaan area Jawa Timur, maka berkumpullah kami para engineer muda ini untuk memulai pengabdian dan karir profesional kami sebuah melalui perusahaan yang mandiri CV. Sumber Waras Sukses.'],
            ['profile-text-2', 'CV. Sumber Waras Sukses didirikan di Malang pada tanggal 1 Februari 2018. Sekalipun masih relatif muda, namun para engineer kami adalah personil yang telah mempunyai pengalaman yang sangat banyak dalam bidangbidang konstruksi baja, konstruksi sipil, insulation pipa, fabrikasi manufaktur, erection struktur, dan pekerjaan sejenis lainnya'],
            ['profile-text-3', ''],
            ['profile-text-4', ''],
            ['scope-of-work-title', 'Scope of Work'],
            ['scope-of-work-subtitle-1', 'General Contractor'],
            ['scope-of-work-text-1', 'Melaksanakan pekerjaan sesuai dengan gambar perencanaan dan ketentuan mengenai risalah penjelasan pekerjaan yang telah ditetapkan oleh klien. Kami selalu konsentrasi dengan gambar pelaksanaan pekerjaan agar teknik pekerjaan terukur dengan baik sehingga lancar dalam pelaksanaan kontruksi. Kami juga membuat laporan hasil pekerjaan dengan disiplin, tepat waktu guna menjaga efisiensi agar sesuai dengan target pekerjaan.'],
            ['scope-of-work-subtitle-2', 'Steel Structure Design & Build'],
            ['scope-of-work-text-2', 'Kami dapat membuat gambar perencanaan pekerjaan mulai dari desain dan analisa, desain kontruksi, fabrikasi maupun desain erection karena kami ahli dalam bidang konstruksi baja, konstruksi sipil, insulation pipa, fabrikasi manufaktur, erection struktur, dan pekerjaan sejenis lainnya maka dari itu klien akan merasa sangat terbantu dengan kami, karena dalam pelaksanaannya dapat terselesaikan dengan cepat, efisien dan mudah.'],
            ['scope-of-work-subtitle-3', 'Maintenance Service'],
            ['scope-of-work-text-3', 'Kami juga melayani pekerjaan maintenance dan service mesin-mesin, perpipaan, peralatan, bangunan atau gedung, modifikasi dan pekerjaan sejenis lainnya yang termasuk dalam pekerjaan pemeliharaan. Kami memberikan solusi dan umapan balik yang cepat dan tepat kepada klien dalam mengatasi permasalahan yang ada dan mengutamakan profesionalisme kerja, agar semua pekerjaan dapat selesai dengan tepat waktu.'],
            ['company-capability-title', 'Company Capability'],
            ['company-capability-subtitle-1', 'TEAM KAMI ADALAH KEKUATAN KAMI'],
            ['company-capability-text-1', 'Kunci perusahaan dalam bekerja yaitu terletak pada karyawan,dibuktikan dengan etos kerja, profesionalisme dalam bekerja, kualifikasi teknis yang tinggi, integritas dan rasa kebersamaan yang kuat, sehingga kami mampu melaksanakan pekerjaan dengan baik.'],
            ['company-capability-subtitle-2', 'SOLUSI YANG KOMPETITIF'],
            ['company-capability-text-2', 'Perusahaan kami memliki kemampuan untuk menawarkan ide kreatif dan informasi yang tepat yang bertujuan untuk memberikan solusi yang optimal terhadap kebutuhan klien.'],
            ['company-capability-subtitle-3', 'KAPASITAS DAN FLEKSIBILITAS'],
            ['company-capability-text-3', 'Perusahaan kami sangat kritis dalam mengelola proyek-proyek pekerjaan, dengan mempertahankan fleksibilitas untuk merespon pekerjaan dengan cepat ,efektif dan efisien. Kami telah berhasil melakukan pekerjaan dengan target yang tepat waktu dan sesuai budget.'],
            ['latest-projects-title', 'Latest Projects'],
            ['our-clients-title', 'Our Clients'],
            ['contact-us-title', 'Contact Us'],
            ['contact-us-address-1', 'Jl. Sumber Waras I 11 RT.05 RW.08'],
            ['contact-us-address-2', 'Kelurahan Kalirejo, Kecamatan Lawang'],
            ['contact-us-address-3', 'Kabupaten Malang, Provinsi Jawa Timur'],
            ['contact-us-address-4', ''],
            ['contact-us-address-5', ''],
            ['contact-us-email-1', 'sumberwaras011@gmail.com'],
            ['contact-us-email-2', ''],
            ['contact-us-email-3', ''],
            ['contact-us-phone-1', '(0341) 430 94 25'],
            ['contact-us-phone-2', '(+62) 81 233 200 918 (Malang)'],
            ['contact-us-phone-3', '(+62) 82 134 613 708 (Other)'],
            ['contact-us-phone-4', ''],
            ['contact-us-phone-5', ''],
            ['company-overview-title', 'Company Overview'],
            ['company-overview-text-1', 'Berawal dari aktifitas dan kegiatan sebagai tenaga freelance dalam bidang konstruksi, mekanikal, piping, insulation pipa, sipil, dan maintenance service di beberapa perusahaan area Jawa Timur, maka berkumpullah kami para engineer muda ini untuk memulai pengabdian dan karir profesional kami sebuah melalui perusahaan yang mandiri CV. Sumber Waras Sukses.'],
            ['company-overview-text-2', 'CV. Sumber Waras Sukses didirikan di Malang pada tanggal 1 Februari 2018. Sekalipun masih relatif muda, namun para engineer kami adalah personil yang telah mempunyai pengalaman yang sangat banyak dalam bidangbidang konstruksi baja, konstruksi sipil, insulation pipa, fabrikasi manufaktur, erection struktur, dan pekerjaan sejenis lainnya.'],
            ['company-overview-text-3', 'Pemilihan nama CV. Sumber Waras Sukses sendiri berasal dari daerah tempat tinggal kami yaitu Sumber Waras, sedangkan Sukses, itulah tujuan yang ingin dicapai dari pendirian perusahaan ini, yaitu menjadi perusahaan yang didukung oleh tenaga-tenaga profesional yang melakukan pekerjaannya secara profesional.'],
            ['company-overview-text-4', 'Selain itu, pendirian CV. Sumber Waras Sukses dimaksudkan untuk membuka lapangan kerja yang seluas-luasnya terutama untuk pekerja-pekerja muda di daerah tempat tinggal kami. Sehingga dapat lebih memaksimalkan kemampuan SDM para engineer-nya dalam melakukan pekerjaan secara profesional dalam bidang-bidang di atas.'],
            ['company-overview-text-5', 'Dengan didukung tenaga kerja yang profesional dan terlatih dalam bidang konstruksi, mekanikal, piping, insulation pipa, sipil dan maintenance service kami selalu mengedepankan kualitas, kecepatan serta harga yang terbaik untuk membuat seluruh mitra dan klien kami merasa puas.'],
            ['company-overview-text-6', 'Komitmen kami untuk menyelesaikan setiap karya kontruksi yang telah dipercayakan tidak terlepas dari peran setiap personil kami dalam melakukan perencanaan, pelaksanaan dan pengendalian proyek dengan berbagai manajemen dan metode kontruksi yang efektif, efisien dan selalu memperhatikan K3 (Keselamatan Kesehatan Kerja) karena sebagai wujud dari rangkaian proses pembelajaran dan pengalaman perusahaan melalui manajemen teknologi dan metode kontruksi yang efektif dan efisien kami siap memberikan pelayanan jasa kontruksi terbaik dalam menciptakan karya kontruksi yang lebih nyata.'],
            ['company-overview-text-7', ''],
            ['company-overview-text-8', ''],
            ['vision-mission-title', 'Vision and Mission'],
            ['vision-mission-text', 'Pada saat ini CV. Sumber Waras Sukses berkomitmen menawarkan dan memberikan solusi terbaik dalam melaksanakan pekerjaan sesuai kontrak yang disepakati. Komitmen perusahaan tersebut dibangun dengan tujuan untuk meningkatkan kepuasan pelanggan secara nyata dengan menghasilkan kontruksi berkualitas dan tepat waktu yang didukung dengan tenaga SDM yang profesional.'],
            ['vision-mission-subtitle-1', 'Vision'],
            ['vision-mission-text-1', 'CV. Sumber Waras Sukses akan menjadi salah satu perusahaan kontruksi terbaik di Indonesia dengan penekanan laju pertumbuhan yang berkelanjutan dan pembangunan kompetensi melalui pengembangan sumber daya manusia, manajemen teknologi dan tata kelola perusahaan yang baik agar dapat berkontribusi dalam rangka pembangunan kemajuan Indonesia.'],
            ['vision-mission-subtitle-2', 'Mission'],
            ['vision-mission-text-2', 'Meningkatkan daya saing perusahaan di industri jasa kontruksi dengan mengembangkan pelayanan dan teknologi terbaik kepada konsumen dalam memenuhi harapan pemangku kepentingan. Meningkatkan pelatihan SDM untuk menghasilkan tenaga kerja yang berkualitas dan menciptakan lingkungan kerja yang kondusif, serta menyediakan lapangan kerja yang luas.'],
            ['organization-chart-title', 'Organization Chart'],
            ['organization-chart-text-1', ''],
            ['organization-chart-text-2', ''],
            ['organization-chart-text-3', ''],
            ['organization-chart-text-4', ''],
            ['our-projects-title', 'Our Projects'],
            ['certifications-title', 'Certifications'],
        ];
        foreach ($paragraphs as $item) {
            DB::table('paragraphs')->insert([
                'identifier' => $item[0],
                'text' => $item[1],
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}
