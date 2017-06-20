<?php

class SearchController extends BaseController
{
    public function getIndex()
    {
        $search_html = $this->Bili_Search();
        return View::make('layout.SearchIndex')
            ->with('search_html', $search_html);
    }

    public function Bili_Search()
    {
        if (!isset($_GET['keyword'])) {
            $_GET['keyword'] = "";
        }
        if (isset($_GET['order']) && $_GET['order'] == "click_count") {
            $_GET['order'] = "animation_detail." . $_GET['order'];
        } elseif (isset($_GET['order']) && $_GET['order'] == "fav_count") {
            $_GET['order'] = "animation_detail." . $_GET['order'];
        } elseif (isset($_GET['order']) && $_GET['order'] == "update_time") {
            $_GET['order'] = "animation_detail." . $_GET['order'];
        } elseif (isset($_GET['order']) && $_GET['order'] == "comment_count") {
            $_GET['order'] = "animation_detail." . $_GET['order'];
        } else {
            $_GET['order'] = " (animation_detail.click_count*0.01 +
    animation_detail.comment_count*0.099 + animation_detail.fav_count*0.6 +
    animation_detail.coin_count*0.099) ";
        }


        if (isset($_GET['duration']) && $_GET['duration'] == "1") {
            $duration = 'animation_detail.length < "10:00"';
        } elseif (isset($_GET['duration']) && $_GET['duration'] == "2") {
            $duration = 'animation_detail.length > "10:00" AND animation_detail.length < "30:00"';
        } elseif (isset($_GET['duration']) && $_GET['duration'] == "3") {
            $duration = 'animation_detail.length > "30:00" AND animation_detail.length < "60:00"';
        } elseif (isset($_GET['duration']) && $_GET['duration'] == "4") {
            $duration = 'animation_detail.length > "60:00"';
        } else {
            $duration ='1=1';
        }


        $search_html = "";
        $result = DB::table('animation_detail')
            ->select(DB::raw('animation_detail.*,categories.id,categories.`name` AS fuck'))
            ->leftJoin('categories', 'categories.id', '=', 'animation_detail.categories_id')
            ->where('animation_detail.name', 'LIKE', "%" . $_GET['keyword'] . "%")
            ->whereRaw($duration)
            ->take(7)->orderBy(DB::raw($_GET['order']))->get();
        foreach ($result as $key => $value) {
            $search_html .= '
<div class="col-md-12">
<hr>
            <div class="row">
                <div class="col-md-3 bili-search-detail-img">
                    <img src="assets/images/cover/' . $value->image_name . '.png" >
                    <div>' . $value->length . '</div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 bili-search-detail-name">
                            <h4 style="">
                                <span class="label label-primary">' . ($key + 1) . '</span>&nbsp;<a href="#">' . $value->name . '</a>
                            </h4>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p style="overflow: hidden;height: 80px;">' . $value->detail . '</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        <span class="glyphicon glyphicon-play"></span>&nbsp;' . $value->click_count . '
                        </div>
                        <div class="col-md-2">
                        <span class="glyphicon glyphicon-comment"></span>&nbsp;' . $value->comment_count . '
                        </div>
                        <div class="col-md-2">
                        <span class="glyphicon glyphicon-time"></span>&nbsp;' . substr($value->update_time, 2, 9) . '
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