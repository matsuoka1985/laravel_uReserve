<?php

namespace App\Services; //ディレクトリ構成と同じにする。

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EventService{ //ファイル名と同じクラス名にしないといけない。
    //新規送信されたイベントが登録済みのイベントと時間が重複していないかチェック。
    public static function checkEventDuplication($eventDate,$startTime,$endTime){
        $check=DB::table('events')
        ->whereDate('start_date',$eventDate)
        ->whereTime('end_date','>',$startTime)
        ->whereTime('start_date','<',$endTime)
        ->exists();
        return $check;
    }

    //フォームから送信された日付、開始時間、終了時間データをもとにDBに登録する「日付＋時間」という表記に加工するための関数。
    public static function joinDateAndTime($date,$time){
        $join=$date. " " . $time;
        $dateTime=Carbon::createFromFormat('Y-m-d H:i',$join);
        return $dateTime;
    }
}