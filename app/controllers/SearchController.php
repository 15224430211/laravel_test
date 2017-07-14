<?php

class SearchController extends BaseController
{
    private $page_num;

    public function getIndex()
    {
        $search_html = $this->Bili_Search();
        $categories_html = $this->Bili_categories();
        $page_html = $this->Bili_Page($this->page_num);
        return View::make('layout.SearchIndex')
            ->with('search_html', $search_html)
            ->with('categories_html', $categories_html)
            ->with('page_html', $page_html);
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
            $_GET['order'] = " (1/(animation_detail.click_count*0.01 +
    animation_detail.comment_count*0.099 + animation_detail.fav_count*0.6 +
    animation_detail.coin_count*0.099)) ";
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
            $duration = '1=1';
        }


        if (isset($_GET['categories']) && $_GET['categories'] != "0") {
            $categories = 'animation_detail.categories_id =' . $_GET['categories'];
        } else {
            $categories = '1=1';
        }


        if (isset($_GET['page']) && is_numeric($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }


        $search_html = "";
        $result = DB::table('animation_detail')
            ->select(DB::raw('animation_detail.*,categories.`name` AS fuck'))
            ->leftJoin('categories', 'categories.id', '=', 'animation_detail.categories_id')
            ->where('animation_detail.name', 'LIKE', "%" . $_GET['keyword'] . "%")
            ->whereRaw($duration)
            ->whereRaw($categories)
            ->skip(($page - 1) * 10)
            ->take(10)->orderBy(DB::raw($_GET['order']), "DESC")->get();

        foreach ($result as $key => $value) {
            $search_html .= '
<div class="col-md-12">
<hr>
            <div class="row">
                <div class="col-md-3 bili-search-detail-img">
                    <a href="/video/' . $value->id . '">
                    <img src="assets/images/cover/' . $value->image_name . '.png" ></a>
                    <div>' . $value->length . '</div>

                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 bili-search-detail-name">
                            <h4 style="">
                                <span class="label label-primary">' . ($key + 1) . '</span>&nbsp;<a href="/video/' . $value->id . '">' . $value->name . '</a>
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


        $count = DB::table('animation_detail')
            ->where('animation_detail.name', 'LIKE', "%" . $_GET['keyword'] . "%")
            ->whereRaw($duration)
            ->whereRaw($categories)
            ->count();
//        页数获取
        $this->page_num = ceil($count / 10);

        return $search_html;
    }


    public function Bili_Categories()
    {
        $categories_html = '<li role="presentation"><a data-filter="0" href="javascript:;">
            <small>全部分类</small>
            </a>
            </li> ';

        $result_categories = DB::table('categories')->get();

        foreach ($result_categories as $key => $value) {
            $categories_html .= '<li role="presentation"><a data-filter="' . $value->id . '" href="javascript:;">
            <small>' . $value->name . '</small>
            </a>
            </li> ';
        }
        return $categories_html;

    }

    public function Bili_Page($page_num)
    {
        $page_html = "";
        for ($i = 0; $i < $page_num; $i++) {
            $page_html .= '<li><a data-filter="' . ($i + 1) . '" href="javascript:;">' . ($i + 1) . '</a></li>';
        }

        return $page_html;
    }

}