<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function getNews($category = null)
    {
        $option = [
           CURLOPT_RETURNTRANSFER => true, //文字列として返す
           CURLOPT_TIMEOUT => 3, // タイムアウト時間
        ];

        $api_key = config('app.api_key');
        if (empty($category)) {
            $ch = curl_init("https://newsapi.org/v2/top-headlines?country=jp&apiKey=$api_key");
        } else {
            $ch = curl_init("https://newsapi.org/v2/top-headlines?country=jp&apiKey=$api_key&category=$category");
        }
        curl_setopt_array($ch, $option);

        $json = curl_exec($ch);
        $info = curl_getinfo($ch);
        $errorNo = curl_errno($ch);

        // OK以外はエラーなので空白配列を返す
        if ($errorNo !== CURLE_OK) {
            // 詳しくエラーハンドリングしたい場合はerrorNoで確認
            // タイムアウトの場合はCURLE_OPERATION_TIMEDOUT
            return [];
        }

        // 200以外のステータスコードは失敗とみなし空配列を返す
        if ($info['http_code'] !== 200) {
            return [];
        }

        // dd($json);
        // 文字列から変換
        $jsonArray = json_decode($json, true);

        return $jsonArray;
    }
}
