<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider {

	public function register() {
		$this->registerNewsRepository();
	}

	public function registerNewsRepository() {
		$this->app->bind(
			'Repositories\News\NewsRepository',
			'Repositories\News\EloquentNewsRepository'
		);
	}
}