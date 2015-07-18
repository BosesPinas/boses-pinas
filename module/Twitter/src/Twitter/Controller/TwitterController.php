<?php

namespace Twitter\Controller;

use Twitter\Service\TwitterService;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class TwitterController extends AbstractActionController
{
	protected $twitterService;

    public function __construct(TwitterService $twitterService)
    {
        $this->twitterService = $twitterService;
    }

	public function getPostsByHashtagAction()
  	{
  		$hashtag = $this->params()->fromRoute('hashtag');

  		\Zend\Debug\Debug::dump($this->twitterService->getStatusesByHashtag('#' . $hashtag));exit;

    	$result = new JsonModel();

        return $result;
  	}
}
