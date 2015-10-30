<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		// $this->call('HospitalTableSeeder');
		// $this->call('HospitalInformationTableSeeder');
		// $this->call('DepartmentTableSeeder');
		// $this->call('DoctorTableSeeder');
		// $this->call('ScheduleTableSeeder');
		// $this->call('PeriodTableSeeder');
		// $this->call('RegisterAccountTableSeeder');
		// $this->call('RegisterRecordTableSeeder');
		// $this->call('CommentTableSeeder');
		// $this->call('FeedbackTableSeeder');
	}	

}
