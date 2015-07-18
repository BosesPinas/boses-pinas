<?php

namespace Twitter\Service;

use ZendService\Twitter\Twitter as TwitterAPI;

class TwitterService
{
	protected $twitter_api;

	public function __construct($twitter_config)
	{
        $this->twitter_api = new TwitterAPI($twitter_config);
	}

    /**
     * {@inheritDoc}
     */
    public function searchByHashtag($hashtag)
    {
        return $this->twitter_api->search->tweets($hashtag);
    }

    public function getStatusesByHashtag($hashtag)
    {
        return $this->searchByHashtag($hashtag)->statuses;
    }

}