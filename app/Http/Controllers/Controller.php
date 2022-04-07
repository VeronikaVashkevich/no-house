<?php

namespace App\Http\Controllers;

use App\Models\Bath;
use App\Models\Door;
use App\Models\Laminate;
use App\Models\Linoleum;
use App\Models\Mixer;
use App\Models\Paint;
use App\Models\Parquet;
use App\Models\PvcPanel;
use App\Models\Sink;
use App\Models\Tiles;
use App\Models\Varnish;
use App\Models\Wallpaper;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    const CLASSES = [
        'bath' => Bath::class,
        'door' => Door::class,
        'laminate' => Laminate::class,
        'linoleum' => Linoleum::class,
        'mixer' => Mixer::class,
        'paint' => Paint::class,
        'parquet' => Parquet::class,
        'pvcPanel' => PvcPanel::class,
        'sink' => Sink::class,
        'tile' => Tiles::class,
        'varnish' => Varnish::class,
        'wallpaper' => Wallpaper::class,
    ];

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function uploadImage(Request $request)
    {
        return Cloudinary::upload($request->file('image')->getRealPath(), [
            'folder' => 'products',
        ])->getSecurePath();
    }

    /**
     * @param $className
     * @param Request $request
     * @return Model
     */
    public function getGoodByClass($className, $id)
    {
        $class = $this->getParentClass($className);

        return $class::query()->where(['id' => $id])->first();
    }

    public function getParentClass($className)
    {
        return $this::CLASSES[$className];
    }
}
