<?php

namespace Tots\Blog\Http\Controllers\Posts;

use Tots\Blog\Models\TotsPost;
use Illuminate\Http\Request;
use Tots\Core\Helpers\StringHelper;

class CreateController extends \Laravel\Lumen\Routing\Controller
{
    public function handle(Request $request)
    {
        // Process validations
        $this->validate($request, [
            'title' => 'required|min:3',
        ]);
        // Create new model
        $item = new TotsPost();
        $item->title = $request->input('title');
        $item->slug = StringHelper::createSlug($request->input('title'));
        $item->content = $request->input('content');
        $item->summary = $request->input('summary');
        $item->photo_featured = $request->input('photo_featured');
        $item->photo_featured_mobile = $request->input('photo_featured_mobile');
        $item->is_featured = $request->input('is_featured');
        $item->is_archived = $request->input('is_archived');
        $item->language_id = $request->input('language_id');
        $item->status = 0;
        $item->seo_title = $request->input('seo_title');
        $item->seo_description = $request->input('seo_description');
        $item->seo_keywords = $request->input('seo_keywords');
        $item->visibility = $request->input('visibility');
        $item->creator_id = $request->user()->id;
        // Save new model
        $item->save();
        // Return data
        return $item;
    }
}