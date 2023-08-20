<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 30; $i++) { 
            $certificate = new Certificate();
            $certificate->user_id = $i;
            $certificate->certificate = "https://cdn.discordapp.com/attachments/982119215723053096/1142161915104202932/B1ZIgijJVCiOAAAAAElFTkSuQmCC.png";
            $certificate->save();

            $certificate = new Certificate();
            $certificate->user_id = $i;
            $certificate->certificate = "https://cdn.discordapp.com/attachments/982119215723053096/1142161915343274024/2Q.png";
            $certificate->save();
        }
        
    }
}
