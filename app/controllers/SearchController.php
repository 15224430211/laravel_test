<?php

class SearchController extends BaseController
{
    public function getIndex()
    {
        $search_html = $this->Bili_Search();
        return View::make('layout.SearchIndex')
        ->with('search_html',$search_html);
    }

    public function Bili_Search()
    {
        if (!isset($_GET['keyword'])) {
            $_GET['keyword'] = "";
        }

        if (isset($_GET['order']) && $_GET['order'] == "click_count") {
            $_GET['order'] = " animation_detail." . $_GET['order'];

        } elseif (isset($_GET['order']) && $_GET['order'] == "fav_count") {
            $_GET['order'] = " animation_detail." . $_GET['order'];
        } elseif (isset($_GET['order']) && $_GET['order'] == "update_time") {
            $_GET['order'] = " animation_detail." . $_GET['order'];
        } else {
            $_GET['order'] = " (animation_detail.click_count*0.01 +
    animation_detail.comment_count*0.099 + animation_detail.fav_count*0.6 +
    animation_detail.coin_count*0.099) ";
        }


        $a = mysqli_connect("127.0.0.1", "root", "", "bilibili");
        $search_html = "";
        $sql = 'SELECT
animation_detail.*,
categories.id,
categories.`name` AS fuck
FROM
animation_detail ,
categories
WHERE
categories.id=animation_detail.categories_id AND
animation_detail.`name` LIKE "%' . $_GET['keyword'] . '%"
ORDER BY
' . $_GET['order'] . ' DESC
LIMIT 8';
        $result = DB::select($sql);
        $result = json_decode(json_encode($result), 1);
        foreach ($result as $key => $value) {
            $search_html .= '
<div class="col-md-12">
<hr>
            <div class="row">
                <div class="col-md-3 bili-search-detail-img">
                    <img src="assets/images/cover/' . $value['image_name'] . '.png" >
                    <div>' . $value['length'] . '</div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 bili-search-detail-name">
                            <h4 style="">
                                <span class="label label-primary">1</span>&nbsp;<a href="#">' . $value['name'] . '</a>
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="overflow: hidden;height: 80px;">' . $value['detail'] . '</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        <span class="glyphicon glyphicon-play"></span>&nbsp;' . $value['click_count'] . '
                        </div>
                        <div class="col-md-2">
                        <span class="glyphicon glyphicon-comment"></span>&nbsp;' . $value['comment_count'] . '
                        </div>
                        <div class="col-md-2">
                        <span class="glyphicon glyphicon-time"></span>&nbsp;' . substr($value['update_time'], 2, 9) . '
                        </div>
                        <div class="col-md-2">up主:&nbsp;</div>
                    </div>
                </div>
            </div>
        </div>';
        }
        return $search_html;
    }
}