<?php

namespace Tots\Blog\Http\Controllers\Posts;

use Tots\Blog\Models\TotsPost;
use Illuminate\Http\Request;

class PublicListController extends \Laravel\Lumen\Routing\Controller
{
    public function handle(Request $request)
    {
        // Create query
        $elofilter = \Tots\EloFilter\Query::run(TotsPost::class, $request);
        // Custom filters
        $elofilter->getQueryRequest()->addWhere('is_archived', 0);
        $elofilter->getQueryRequest()->addWhere('status', TotsPost::STATUS_ACTIVE);
        $elofilter->getQueryRequest()->addWhere('visibility', TotsPost::VISIBILITY_PUBLIC);
        // Execute query
        return $elofilter->execute();
    }
}