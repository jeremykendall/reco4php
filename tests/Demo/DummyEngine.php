<?php

namespace GraphAware\Reco4PHP\Tests\Demo;

use GraphAware\Reco4PHP\Engine\BaseRecommendationEngine;
use GraphAware\Reco4PHP\Filter\ExcludeSelf;

class DummyEngine extends BaseRecommendationEngine
{
    public function name()
    {
        return "dummy";
    }

    public function engines()
    {
        return array(
            new WatchDiscoveryEngine(),
            new FollowsDiscovery(),
            new ContributionDiscovery(),
            //new CollaborativeFollowsDiscovery()
            //new RandomDiscovery()
        );
    }

    public function postProcessors()
    {
        return array(
            //new LanguagePostProcessor(),
            new RecoFollowsDegreePostProcessor()
        );
    }


    public function blacklistBuilders()
    {
        // TODO: Implement blacklistBuilders() method.
    }

    public function filters()
    {
        return array(
            new ExcludeSelf()
        );
    }

    public function loggers()
    {
        // TODO: Implement loggers() method.
    }

}