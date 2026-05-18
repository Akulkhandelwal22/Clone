<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Post extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        // 'image',
        'title',
        'slug',
        'content',
        'category_id',
        'user_id',
        'published_at',
    ];

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->width(400);
            // ->nonQueued();  if dont want to use 'php artisan queue:listen'
            

        $this
            ->addMediaConversion('large')
            ->width(1200);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function claps()
    {
        return $this->hasMany(Clap::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function readTime($WordsPerMinute = 100)
    {
        $wordCount = str_word_count(strip_tags($this->content));
        $minutes = ceil($wordCount / $WordsPerMinute);

        return max(1, $minutes);
    }
    public function imageUrl($conversionName = '')
    {
        $media = $this->getFirstMedia();
        if ($media?->hasGeneratedConversion($conversionName)) {
            return $media->getUrl($conversionName);
        }
        return $media?->getUrl();
    }
}
