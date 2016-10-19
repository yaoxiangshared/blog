<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/8/31
 * Time: 22:58
 */
use Illuminate\Database\Seeder;
use App\Resume;
class ResumeTableSeeder extends Seeder{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TODO: Implement run() method.
        DB::table('resumes')->delete();
        for ($i=0; $i < 9; $i++) {
            Resume::create([
                'category_id'   =>1,
                'name'    => '简历模板'.$i,
                'path'    => '/uplaod/resume/ '.$i,
                'pic' => 'www'.$i,
            ]);
        }
    }
}