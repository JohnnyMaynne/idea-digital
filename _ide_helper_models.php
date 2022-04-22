<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\AboutUsPage
 *
 * @property int $id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property array|null $content
 * @property-read mixed $social_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUsPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUsPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUsPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUsPage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUsPage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUsPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|AboutUsPage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|AboutUsPage withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|AboutUsPage withoutTrashed()
 */
	class AboutUsPage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Author
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property int|null $position
 * @property-read string $slug
 * @property-read mixed $social_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Slugs\AuthorSlug[] $slugs
 * @property-read int|null $slugs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Work[] $works
 * @property-read int|null $works_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Author forFallbackLocaleSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Author forInactiveSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Author forSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Author newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Author newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Author ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|Author query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Author whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Author withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Author withoutTrashed()
 */
	class Author extends \Eloquent implements \A17\Twill\Models\Behaviors\Sortable, \Spatie\Searchable\Searchable {}
}

namespace App\Models{
/**
 * App\Models\BlogPage
 *
 * @property int $id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property array|null $content
 * @property-read mixed $social_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|BlogPage withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|BlogPage withoutTrashed()
 */
	class BlogPage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Client
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property int|null $position
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Client newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Client ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|Client query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Client whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Client withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Client withoutTrashed()
 */
	class Client extends \Eloquent implements \A17\Twill\Models\Behaviors\Sortable {}
}

namespace App\Models{
/**
 * App\Models\Comment
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $name
 * @property string|null $email
 * @property string|null $comment
 * @property int|null $position
 * @property string|null $commentable_type
 * @property int|null $commentable_id
 * @property int $_lft
 * @property int $_rgt
 * @property int|null $parent_id
 * @property-read \Kalnoy\Nestedset\Collection|Comment[] $children
 * @property-read int|null $children_count
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $commentable
 * @property-read string $ancestors_slug
 * @property-read string $nested_slug
 * @property-read mixed $title_in_dashboard
 * @property-read Comment|null $parent
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Kalnoy\Nestedset\Collection|static[] all($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment ancestorsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment ancestorsOf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment applyNestedSetScope(?string $table = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment countErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment d()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment defaultOrder(string $dir = 'asc')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment descendantsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment descendantsOf($id, array $columns = [], $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model draft()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment fixSubtree($root)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment fixTree($root = null)
 * @method static \Kalnoy\Nestedset\Collection|static[] get($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment getNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment getPlainNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment getTotalErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment hasChildren()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment hasParent()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment isBroken()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment leaves(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment makeGap(int $cut, int $height)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment moveNode($key, $position)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model onlyTrashed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment orWhereAncestorOf(bool $id, bool $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment orWhereDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment orWhereNodeBetween($values)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment orWhereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment ordered()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model published()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model publishedInListings()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment query()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment rebuildSubtree($root, array $data, $delete = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment rebuildTree(array $data, $delete = false, $root = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment reversed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment root(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model visible()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereAncestorOf($id, $andSelf = false, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereAncestorOrSelf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereComment($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereCommentableId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereCommentableType($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereCreatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereDeletedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereDescendantOf($id, $boolean = 'and', $not = false, $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereDescendantOrSelf(string $id, string $boolean = 'and', string $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereEmail($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereIsAfter($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereIsBefore($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereIsLeaf()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereIsRoot()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereLft($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereName($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereNodeBetween($values, $boolean = 'and', $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereParentId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment wherePosition($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment wherePublished($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereRgt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model whereTag($tags, string $type = 'slug')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment whereUpdatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment withDepth(string $as = 'depth')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Comment withTrashed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Comment withoutRoot()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Comment withoutTrashed()
 */
	class Comment extends \Eloquent implements \A17\Twill\Models\Behaviors\Sortable {}
}

namespace App\Models{
/**
 * App\Models\ContactsPage
 *
 * @property int $id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property array|null $content
 * @property-read mixed $social_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactsPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactsPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactsPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactsPage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactsPage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactsPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|ContactsPage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|ContactsPage withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|ContactsPage withoutTrashed()
 */
	class ContactsPage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Department
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property int|null $position
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Department ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Department withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Department withoutTrashed()
 */
	class Department extends \Eloquent implements \A17\Twill\Models\Behaviors\Sortable {}
}

namespace App\Models{
/**
 * App\Models\Email
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property string|null $description
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Email newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Email newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|Email query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Email whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Email whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Email whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Email whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Email wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Email whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Email whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Email withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Email withoutTrashed()
 */
	class Email extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Employee
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property string|null $description
 * @property int|null $position
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Employee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Employee withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Employee withoutTrashed()
 */
	class Employee extends \Eloquent implements \A17\Twill\Models\Behaviors\Sortable {}
}

namespace App\Models{
/**
 * App\Models\HomePage
 *
 * @property int $id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property array|null $content
 * @property-read mixed $social_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\RelatedItem[] $relatedItems
 * @property-read int|null $related_items_count
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|HomePage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomePage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|HomePage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|HomePage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomePage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomePage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|HomePage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|HomePage withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|HomePage withoutTrashed()
 */
	class HomePage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JobsPage
 *
 * @property int $id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property array|null $content
 * @property-read mixed $social_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|JobsPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobsPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|JobsPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|JobsPage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsPage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobsPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|JobsPage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|JobsPage withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|JobsPage withoutTrashed()
 */
	class JobsPage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Page
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property int|null $position
 * @property int $_lft
 * @property int $_rgt
 * @property int|null $parent_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Block[] $blocks
 * @property-read int|null $blocks_count
 * @property-read \Kalnoy\Nestedset\Collection|Page[] $children
 * @property-read int|null $children_count
 * @property-read string $ancestors_slug
 * @property-read string $nested_slug
 * @property-read string $slug
 * @property-read mixed $social_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-read Page|null $parent
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Slugs\PageSlug[] $slugs
 * @property-read int|null $slugs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Kalnoy\Nestedset\Collection|static[] all($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page ancestorsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page ancestorsOf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page applyNestedSetScope(?string $table = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page countErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page d()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page defaultOrder(string $dir = 'asc')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page descendantsAndSelf($id, array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page descendantsOf($id, array $columns = [], $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model draft()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page fixSubtree($root)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page fixTree($root = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page forFallbackLocaleSlug($slug)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page forInactiveSlug($slug)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page forSlug($slug)
 * @method static \Kalnoy\Nestedset\Collection|static[] get($columns = ['*'])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page getNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page getPlainNodeData($id, $required = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page getTotalErrors()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page hasChildren()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page hasParent()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page isBroken()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page leaves(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page makeGap(int $cut, int $height)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page moveNode($key, $position)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page newQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model onlyTrashed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page orWhereAncestorOf(bool $id, bool $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page orWhereDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page orWhereNodeBetween($values)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page orWhereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page ordered()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model published()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model publishedInListings()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page query()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page rebuildSubtree($root, array $data, $delete = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page rebuildTree(array $data, $delete = false, $root = null)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page reversed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page root(array $columns = [])
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model visible()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereAncestorOf($id, $andSelf = false, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereAncestorOrSelf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereCreatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereDeletedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereDescendantOf($id, $boolean = 'and', $not = false, $andSelf = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereDescendantOrSelf(string $id, string $boolean = 'and', string $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereIsAfter($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereIsBefore($id, $boolean = 'and')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereIsLeaf()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereIsRoot()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereLft($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereNodeBetween($values, $boolean = 'and', $not = false)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereNotDescendantOf($id)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereParentId($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page wherePosition($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page wherePublished($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereRgt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model whereTag($tags, string $type = 'slug')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereTitle($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page whereUpdatedAt($value)
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page withDepth(string $as = 'depth')
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Page withTrashed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Page withoutRoot()
 * @method static \Kalnoy\Nestedset\QueryBuilder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Page withoutTrashed()
 */
	class Page extends \Eloquent implements \A17\Twill\Models\Behaviors\Sortable {}
}

namespace App\Models{
/**
 * App\Models\Post
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property int|null $category_id
 * @property string|null $publish_start_date
 * @property string|null $publish_end_date
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\Comment[] $approvedComments
 * @property-read int|null $approved_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Author[] $author
 * @property-read int|null $author_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Block[] $blocks
 * @property-read int|null $blocks_count
 * @property-read \App\Models\PostCategory|null $category
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read mixed $average_rating
 * @property-read string $slug
 * @property-read mixed $social_image
 * @property-read mixed $sum_rating
 * @property-read mixed $user_average_rating
 * @property-read mixed $user_sum_rating
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-read \Illuminate\Database\Eloquent\Collection|\willvincent\Rateable\Rating[] $ratings
 * @property-read int|null $ratings_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Revisions\PostRevision[] $revisions
 * @property-read int|null $revisions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Slugs\PostSlug[] $slugs
 * @property-read int|null $slugs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\CyrildeWit\EloquentViewable\View[] $views
 * @property-read int|null $views_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Post forFallbackLocaleSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Post forInactiveSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Post forSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Post mine()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Post orderByUniqueViews(string $direction = 'desc', $period = null, ?string $collection = null, string $as = 'unique_views_count')
 * @method static \Illuminate\Database\Eloquent\Builder|Post orderByViews(string $direction = 'desc', ?\CyrildeWit\EloquentViewable\Support\Period $period = null, ?string $collection = null, bool $unique = false, string $as = 'views_count')
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|Post query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePublishEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePublishStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Post withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Post withViewsCount(?\CyrildeWit\EloquentViewable\Support\Period $period = null, ?string $collection = null, bool $unique = false, string $as = 'views_count')
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Post withoutTrashed()
 */
	class Post extends \Eloquent implements \CyrildeWit\EloquentViewable\Contracts\Viewable, \Spatie\Searchable\Searchable {}
}

namespace App\Models{
/**
 * App\Models\PostCategory
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property int|null $position
 * @property-read string $slug
 * @property-read mixed $social_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Post[] $posts
 * @property-read int|null $posts_count
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Slugs\PostCategorySlug[] $slugs
 * @property-read int|null $slugs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory forFallbackLocaleSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory forInactiveSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory forSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|PostCategory withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|PostCategory withoutTrashed()
 */
	class PostCategory extends \Eloquent implements \A17\Twill\Models\Behaviors\Sortable {}
}

namespace App\Models{
/**
 * App\Models\Question
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $question
 * @property string|null $answer
 * @property int|null $position
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Question newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Question ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|Question query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Question whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Question withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Question withoutTrashed()
 */
	class Question extends \Eloquent implements \A17\Twill\Models\Behaviors\Sortable {}
}

namespace App\Models\Revisions{
/**
 * App\Models\Revisions\PostRevision
 *
 * @property int $id
 * @property int $post_id
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property mixed $payload
 * @property-read mixed $by_user
 * @property-read \A17\Twill\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision query()
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostRevision whereUserId($value)
 */
	class PostRevision extends \Eloquent {}
}

namespace App\Models\Revisions{
/**
 * App\Models\Revisions\WorkRevision
 *
 * @property int $id
 * @property int $work_id
 * @property int|null $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property mixed $payload
 * @property-read mixed $by_user
 * @property-read \A17\Twill\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|WorkRevision newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkRevision newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkRevision query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkRevision whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkRevision whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkRevision wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkRevision whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkRevision whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkRevision whereWorkId($value)
 */
	class WorkRevision extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SeoPage
 *
 * @property int $id
 * @property string|null $title
 * @property array|null $steps
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property array|null $content
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Block[] $blocks
 * @property-read int|null $blocks_count
 * @property-read mixed $social_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\RelatedItem[] $relatedItems
 * @property-read int|null $related_items_count
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|SeoPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SeoPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|SeoPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|SeoPage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SeoPage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SeoPage whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SeoPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SeoPage whereSteps($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|SeoPage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|SeoPage withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|SeoPage withoutTrashed()
 */
	class SeoPage extends \Eloquent {}
}

namespace App\Models\Slugs{
/**
 * App\Models\Slugs\AuthorSlug
 *
 * @property int $id
 * @property int $author_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $slug
 * @property string $locale
 * @property int $active
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorSlug newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorSlug newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorSlug query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorSlug whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorSlug whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorSlug whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorSlug whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorSlug whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorSlug whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorSlug whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|AuthorSlug whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|AuthorSlug withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|AuthorSlug withoutTrashed()
 */
	class AuthorSlug extends \Eloquent {}
}

namespace App\Models\Slugs{
/**
 * App\Models\Slugs\PageSlug
 *
 * @property int $id
 * @property int $page_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $slug
 * @property string $locale
 * @property int $active
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|PageSlug newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PageSlug newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|PageSlug query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|PageSlug whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageSlug whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageSlug whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageSlug whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageSlug whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageSlug wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PageSlug whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|PageSlug whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|PageSlug withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|PageSlug withoutTrashed()
 */
	class PageSlug extends \Eloquent {}
}

namespace App\Models\Slugs{
/**
 * App\Models\Slugs\PostCategorySlug
 *
 * @property int $id
 * @property int $post_category_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $slug
 * @property string $locale
 * @property int $active
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategorySlug newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategorySlug newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategorySlug query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategorySlug whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategorySlug whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategorySlug whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategorySlug whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategorySlug whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategorySlug wherePostCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategorySlug whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|PostCategorySlug whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|PostCategorySlug withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|PostCategorySlug withoutTrashed()
 */
	class PostCategorySlug extends \Eloquent {}
}

namespace App\Models\Slugs{
/**
 * App\Models\Slugs\PostSlug
 *
 * @property int $id
 * @property int $post_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $slug
 * @property string $locale
 * @property int $active
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|PostSlug whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|PostSlug withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|PostSlug withoutTrashed()
 */
	class PostSlug extends \Eloquent {}
}

namespace App\Models\Slugs{
/**
 * App\Models\Slugs\VacancySlug
 *
 * @property int $id
 * @property int $vacancy_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $slug
 * @property string $locale
 * @property int $active
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|VacancySlug newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|VacancySlug newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|VacancySlug query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|VacancySlug whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VacancySlug whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VacancySlug whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VacancySlug whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VacancySlug whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VacancySlug whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|VacancySlug whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|VacancySlug whereVacancyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|VacancySlug withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|VacancySlug withoutTrashed()
 */
	class VacancySlug extends \Eloquent {}
}

namespace App\Models\Slugs{
/**
 * App\Models\Slugs\WorkSlug
 *
 * @property int $id
 * @property int $work_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $slug
 * @property string $locale
 * @property int $active
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSlug newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSlug newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSlug query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSlug whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSlug whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSlug whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSlug whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSlug whereLocale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSlug whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSlug whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkSlug whereWorkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|WorkSlug withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|WorkSlug withoutTrashed()
 */
	class WorkSlug extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Subscriber
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property string|null $description
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Subscriber withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Subscriber withoutTrashed()
 */
	class Subscriber extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TeamPage
 *
 * @property int $id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property array|null $content
 * @property-read mixed $social_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TeamPage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|TeamPage withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|TeamPage withoutTrashed()
 */
	class TeamPage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Testimonial
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $name
 * @property string|null $text
 * @property int|null $position
 * @property string|null $post
 * @property int|null $work_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\File[] $files
 * @property-read int|null $files_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read \App\Models\Work|null $work
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial wherePost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Testimonial whereWorkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Testimonial withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Testimonial withoutTrashed()
 */
	class Testimonial extends \Eloquent implements \A17\Twill\Models\Behaviors\Sortable {}
}

namespace App\Models{
/**
 * App\Models\TestimonialsPage
 *
 * @property int $id
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property array|null $content
 * @property-read mixed $social_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|TestimonialsPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TestimonialsPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|TestimonialsPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|TestimonialsPage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestimonialsPage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestimonialsPage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestimonialsPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|TestimonialsPage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TestimonialsPage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|TestimonialsPage withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|TestimonialsPage withoutTrashed()
 */
	class TestimonialsPage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Vacancy
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property string|null $description
 * @property int|null $position
 * @property string|null $type
 * @property string|null $post
 * @property string|null $time
 * @property-read string $slug
 * @property-read mixed $social_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Slugs\VacancySlug[] $slugs
 * @property-read int|null $slugs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy forFallbackLocaleSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy forInactiveSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy forSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy wherePost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Vacancy withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Vacancy withoutTrashed()
 */
	class Vacancy extends \Eloquent implements \A17\Twill\Models\Behaviors\Sortable {}
}

namespace App\Models{
/**
 * App\Models\Work
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $published
 * @property string|null $title
 * @property string|null $description
 * @property int|null $position
 * @property string|null $publish_start_date
 * @property string|null $publish_end_date
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\Comment[] $approvedComments
 * @property-read int|null $approved_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Author[] $author
 * @property-read int|null $author_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Block[] $blocks
 * @property-read int|null $blocks_count
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read string $slug
 * @property-read mixed $social_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Revisions\WorkRevision[] $revisions
 * @property-read int|null $revisions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Slugs\WorkSlug[] $slugs
 * @property-read int|null $slugs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read Work|null $testimonial
 * @property-read \Illuminate\Database\Eloquent\Collection|\CyrildeWit\EloquentViewable\View[] $views
 * @property-read int|null $views_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|Work forFallbackLocaleSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Work forInactiveSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Work forSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Work mine()
 * @method static \Illuminate\Database\Eloquent\Builder|Work newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Work newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Work orderByUniqueViews(string $direction = 'desc', $period = null, ?string $collection = null, string $as = 'unique_views_count')
 * @method static \Illuminate\Database\Eloquent\Builder|Work orderByViews(string $direction = 'desc', ?\CyrildeWit\EloquentViewable\Support\Period $period = null, ?string $collection = null, bool $unique = false, string $as = 'views_count')
 * @method static \Illuminate\Database\Eloquent\Builder|Work ordered()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|Work query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work wherePublishEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work wherePublishStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Work whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Work withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Work withViewsCount(?\CyrildeWit\EloquentViewable\Support\Period $period = null, ?string $collection = null, bool $unique = false, string $as = 'views_count')
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|Work withoutTrashed()
 */
	class Work extends \Eloquent implements \A17\Twill\Models\Behaviors\Sortable, \CyrildeWit\EloquentViewable\Contracts\Viewable, \Spatie\Searchable\Searchable {}
}

namespace App\Models{
/**
 * App\Models\WorksPage
 *
 * @property int $id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property array|null $content
 * @property-read mixed $social_image
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Media[] $medias
 * @property-read int|null $medias_count
 * @property-read \CwsDigital\TwillMetadata\Models\Metadata|null $metadata
 * @property-write mixed $publish_start_date
 * @property-read \Illuminate\Database\Eloquent\Collection|\A17\Twill\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|Model draft()
 * @method static \Illuminate\Database\Eloquent\Builder|WorksPage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorksPage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Model onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model published()
 * @method static \Illuminate\Database\Eloquent\Builder|Model publishedInListings()
 * @method static \Illuminate\Database\Eloquent\Builder|WorksPage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Model visible()
 * @method static \Illuminate\Database\Eloquent\Builder|WorksPage whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorksPage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorksPage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model whereTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Eloquent\Builder|WorksPage whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Model withTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|WorksPage withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Model withoutTag($tags, string $type = 'slug')
 * @method static \Illuminate\Database\Query\Builder|WorksPage withoutTrashed()
 */
	class WorksPage extends \Eloquent {}
}

