<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Urunlers
 *
 * @property int $id
 * @property int $urun_id
 * @property string $urun_ad
 * @property int $miktar
 * @property string $birim
 * @property int $fiyat
 * @property string $satistami
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Urunlers newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Urunlers newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Urunlers query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Urunlers whereBirim($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Urunlers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Urunlers whereFiyat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Urunlers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Urunlers whereMiktar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Urunlers whereSatistami($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Urunlers whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Urunlers whereUrunAd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Urunlers whereUrunId($value)
 * @mixin \Eloquent
 */
class Urunlers extends Model
{
    //
}
