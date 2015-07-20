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

	public function getStatusesByKeywordAction()
  	{
  		$keyword = $this->params()->fromRoute('keyword');

  		$this->twitterService->searchStatusesByKeyword($keyword);

  		$statuses = $this->twitterService->getSearchResults();

  		$result = new JsonModel(array(
  								'success' 	=> $this->twitterService->verifyCredentials() ? 1 : 0,
  								'statuses' 	=> $this->twitterService->verifyCredentials() ? $statuses->statuses : new \stdClass(),
  								));

        return $result;
  	}

  	public function getRecentStatusesByKeywordAction()
  	{
  		$keyword = $this->params()->fromRoute('keyword');

  		$this->twitterService->searchStatusesByKeyword($keyword);

  		$statuses = $this->twitterService->getRecentStatuses();

  		$result = new JsonModel(array(
  								'success' 	=> $this->twitterService->verifyCredentials() ? 1 : 0,
  								'statuses' 	=> $this->twitterService->verifyCredentials() ? $statuses : new \stdClass(),
  								));

        return $result;
  	}

  	public function getUsersInfoByKeywordAction()
  	{
  		$keyword = $this->params()->fromRoute('keyword');

  		$users = $this->twitterService->getUsersInfoByKeyword($keyword);

  		$result = new JsonModel(array(
  								'success'	=> $this->twitterService->verifyCredentials() ? 1 : 0,
  								'users' 	=> $this->twitterService->verifyCredentials() ? $users : new \stdClass(),
  								));

        return $result;
  	}
}
