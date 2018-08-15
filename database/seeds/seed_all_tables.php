<?php

use Illuminate\Database\Seeder;

class seed_all_tables extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_permissions')->insert([
            ['description'=>'No Permissions','key'=>1],
            ['description'=>'Full Permissions','key'=>2],
        ]);

        DB::table('type_whitelisting_ems_rank')->insert([
            ['description'=>'Untrained','key'=>0],
            ['description'=>'Probationary','key'=>1],
            ['description'=>'EMT','key'=>2],
            ['description'=>'Paramedic','key'=>3],
            ['description'=>'Supervisor','key'=>4],
            ['description'=>'Lieutenent','key'=>5],
            ['description'=>'Captain','key'=>6],
            ['description'=>'Batallion Chief','key'=>7],
            ['description'=>'Fire Chief','key'=>8],
        ]);

        DB::table('type_whitelisting_ems_fd')->insert([
            ['description'=>'No','key'=>0],
            ['description'=>'Yes','key'=>1],
        ]);

        DB::table('type_whitelisting_ems_aviation')->insert([
            ['description'=>'No','key'=>0],
            ['description'=>'Yes','key'=>1],
        ]);

        DB::table('type_whitelisting_sd_rank')->insert([
            ['description'=>'Untrained','key'=>0],
            ['description'=>'Cadet','key'=>1],
            ['description'=>'Junior Deputy','key'=>2],
            ['description'=>'Deputy','key'=>3],
            ['description'=>'Senior Deputy','key'=>4],
            ['description'=>'Corporal','key'=>5],
            ['description'=>'Sergeant','key'=>6],
            ['description'=>'Lieutenent','key'=>7],
            ['description'=>'Captain','key'=>8],
            ['description'=>'Assistant Chief','key'=>9],
            ['description'=>'Chief of Police','key'=>10],
        ]);

        DB::table('type_whitelisting_sd_aviation')->insert([
            ['description'=>'No Whitelist','key'=>0],
            ['description'=>'Regular','key'=>1],
            ['description'=>'Supervisor','key'=>2],
            ['description'=>'Command','key'=>3],
        ]);

        DB::table('type_whitelisting_sd_cid')->insert([
            ['description'=>'No Whitelist','key'=>0],
            ['description'=>'Regular','key'=>1],
            ['description'=>'Supervisor','key'=>2],
            ['description'=>'Command','key'=>3],
        ]);

        DB::table('type_whitelisting_sd_fto')->insert([
            ['description'=>'No Whitelist','key'=>0],
            ['description'=>'Regular','key'=>1],
            ['description'=>'Supervisor','key'=>2],
            ['description'=>'Command','key'=>3],
        ]);

        DB::table('type_whitelisting_sd_gu')->insert([
            ['description'=>'No Whitelist','key'=>0],
            ['description'=>'Regular','key'=>1],
            ['description'=>'Supervisor','key'=>2],
            ['description'=>'Command','key'=>3],
        ]);

        DB::table('type_whitelisting_sd_hp')->insert([
            ['description'=>'No Whitelist','key'=>0],
            ['description'=>'Regular','key'=>1],
            ['description'=>'Supervisor','key'=>2],
            ['description'=>'Command','key'=>3],
        ]);

        DB::table('type_whitelisting_sd_ia')->insert([
            ['description'=>'No Whitelist','key'=>0],
            ['description'=>'Regular','key'=>1],
            ['description'=>'Supervisor','key'=>2],
            ['description'=>'Command','key'=>3],
        ]);

        DB::table('type_whitelisting_sd_k9')->insert([
            ['description'=>'No Whitelist','key'=>0],
            ['description'=>'Regular','key'=>1],
            ['description'=>'Supervisor','key'=>2],
            ['description'=>'Command','key'=>3],
        ]);

        DB::table('type_whitelisting_sd_sert')->insert([
            ['description'=>'No Whitelist','key'=>0],
            ['description'=>'Regular','key'=>1],
            ['description'=>'Supervisor','key'=>2],
            ['description'=>'Command','key'=>3],
        ]);

        DB::table('type_whitelisting_staff_rank')->insert([
            ['description'=>'No Whitelist','key'=>0],
            ['description'=>'Helper','key'=>1],
            ['description'=>'Moderator','key'=>2],
            ['description'=>'Admin','key'=>3],
            ['description'=>'Senior Staff','key'=>4],
            ['description'=>'Developer','key'=>5],
        ]);

    }
}
