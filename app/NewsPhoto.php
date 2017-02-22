<?php

namespace App;

// use Image;

use Illuminate\Database\Eloquent\Model;

use Symfony\Component\HttpFoundation\File\UploadedFile;

class NewsPhoto extends Model
{
    protected $table = 'news_photos';

    protected $fillable = ['path', 'name', 'thumbnail_path'];

    protected $file;

    protected static function boot() 
    {
        static::creating(function($photo) {
            return $photo->upload();
        });
    }

    public function news()
    {
    	return $this->belongsTo('App\News');
    }

    public static function fromFile(UploadedFile $file)
    {
        $photo = new static;

        $photo->file = $file;

        return $photo->fill([
            'name' => $photo->fileName(),
            'path' => $photo->filePath(),
            'thumbnail_path' => $photo->thumbnailPath()
        ]);
    }

    public function fileName()
    {
        $name = sha1(time() . $this->file->getClientOriginalName());

        $extension = $this->file->getClientOriginalExtension();

        return "{$name}.{$extension}";
    }

    public function filePath()
    {
        return $this->baseDir() . '/' . $this->fileName();
    }

    public function thumbnailPath()
    {
        return $this->baseDir() . '/tn-' . $this->fileName();
    }

    public function baseDir()
    {
        return 'images/news';
    }

    public function upload()
    {
    	$this->file->move($this->baseDir(), $this->fileName()); 
        
        $this->makeThumbnail();

        return $this;            
    }

    public function makeThumbnail()
    {
        Image::make($this->filePath())
            ->fit(150)
            ->save($this->thumbnailPath());
    }

    public function delete()
    {
        \File::delete([
            $this->path,
            $this->thumbnail_path
        ]);

        parent::delete();
    }
}
