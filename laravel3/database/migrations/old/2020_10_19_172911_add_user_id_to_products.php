<?php
	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Support\Facades\Schema;
	class AddUserIdToProducts extends Migration
	{
		/**
			* Run the migrations.
			*
			* @return void
		*/
		public function up()
		{
			Schema::table('products', function (Blueprint $table) {
				$table->biginteger('user_id')->unsigned()->after('id');
				$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			});
		}
		/**
			* Reverse the migrations.
			*
			* @return void
		*/
		public function down()
		{
			Schema::table('products', function (Blueprint $table) {
				//
			});
		}
	}