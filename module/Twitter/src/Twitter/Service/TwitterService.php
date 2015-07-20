<?php

namespace Twitter\Service;

use ZendService\Twitter\Twitter as TwitterAPI;

class TwitterService
{
	protected	$twitter_api;
	private   	$search_metadata;
	private   	$search_results;
	private   	$recent_statuses;

	public function __construct($twitter_config)
	{
        $twitter = new TwitterAPI($twitter_config);

		$this->twitter_api = $twitter;       

    }

	public function verifyCredentials() {
		$credentials = $this->twitter_api->account->verifyCredentials();

		return $credentials->isSuccess();
	}
    /**
     * {@inheritDoc}
     */
    public function searchStatusesByKeyword($hashtag)
    {
    	$this->search_results = $this->twitter_api->search->tweets($hashtag)->toValue();
    }

    public function getSearchResults()
    {
    	return $this->search_results;
    }

    public function setSearchMetaData()
    {
    	$this->search_metadata = $this->search_results->search_metadata;
    }

    public function getSearchMetaData()
    {
    	$this->setSearchMetaData();

    	return $this->search_metadata;
    }

    public function getRecentStatuses()
    {
    	$stat_search_results = $this->getSearchResults()->statuses;
    	$search_metadata = $this->getSearchMetaData();
    	$recent_statuses = array();

    	for ($count = 0; $count < $search_metadata->count; $count++) {
    		if ($stat_search_results[$count]->metadata->result_type == 'recent') {
    			$recent_statuses[] = $stat_search_results[$count];
    		}
    	}

    	return $recent_statuses;
    }

    public function getUsersInfoByKeyword($keyword)
    {
    	return $this->twitter_api->users->search($keyword)->toValue();
    }
}