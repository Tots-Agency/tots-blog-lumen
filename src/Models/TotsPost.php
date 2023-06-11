<?php

namespace Tots\Blog\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Tots\Auth\Models\TotsUser;

/**
 * Description of Model
 * @property int $id ID of item
 * @property mixed $title Description for variable
 * @property mixed $slug Description for variable
 * @property mixed $content Description for variable
 * @property mixed $summary Description for variable
 * @property mixed $photo_featured Description for variable
 * @property mixed $photo_featured_mobile Description for variable
 * @property mixed $is_featured Description for variable
 * @property mixed $is_archived Description for variable
 * @property mixed $language_id Description for variable
 * @property mixed $status Description for variable
 * @property mixed $seo_title Description for variable
 * @property mixed $seo_description Description for variable
 * @property mixed $seo_keywords Description for variable
 * @property mixed $visibility Description for variable
 * @property mixed $creator_id Description for variable
 * @property mixed $created_at Description for variable
 * @property mixed $updated_at Description for variable

 *
 * @OA\Schema()
 * @OA\Property(
 *  property="id",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="title",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="slug",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="content",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="summary",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="photo_featured",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="photo_featured_mobile",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="is_featured",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="is_archived",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="language_id",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="status",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="seo_title",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="seo_description",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="seo_keywords",
 *  type="string",
 *  description=""
 * )
 * @OA\Property(
 *  property="visibility",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="creator_id",
 *  type="integer",
 *  description=""
 * )
 * @OA\Property(
 *  property="created_at",
 *  type="",
 *  description=""
 * )
 * @OA\Property(
 *  property="updated_at",
 *  type="",
 *  description=""
 * )
* @OA\Property(
 *  property="deleted_at",
 *  type="",
 *  description=""
 * )
 *
 * @author matiascamiletti
 */
class TotsPost extends Model
{
    use SoftDeletes;

    const STATUS_DRAFT = 0;
    const STATUS_ACTIVE = 1;

    const VISIBILITY_PUBLIC = 0;
    const VISIBILITY_PRIVATE = 1;

    protected $table = 'tots_post';
    
    //protected $casts = ['data' => 'array'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    //public $timestamps = false;

    /**
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function creator()
    {
        return $this->belongsTo(TotsUser::class, 'creator_id');
    }


    
}