<?php namespace Repositories\News;

interface NewsRepository {
	public function createOrUpdate($input, $id = null);

}