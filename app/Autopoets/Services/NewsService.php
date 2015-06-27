<?php namespace Autopoets\Services;

use Illuminate\Http\Request;

use Repositories\News\NewsRepository as NewsRepository;



class NewsService {
	
	public function __construct(NewsRepository $news) 
	{
        $this->news = $news;
	}

	public function createNews($request) 
	{
		dd($request->input('title'));
		$this->newsForm->validate($input);



	}
}