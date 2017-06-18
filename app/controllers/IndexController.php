<?php

class IndexController extends BaseController
{
    public function getIndex()
    {
        $categories_html = $this->Bili_Categories();
        $title_html = $this->Bili_Title();
        $bili_video_ranking_html = $this->Bili_Video_Ranking();
        return View::make('layout.index')
            ->with('categories_html', $categories_html)
            ->with('title_html', $title_html)
            ->with('bili_video_ranking_html', $bili_video_ranking_html);

    }

    public function Bili_Categories()
    {
        $a = mysqli_connect("127.0.0.1", "root", "", "bilibili");
        $categories_html = "";
        $sql = "SELECT
categories.`name`,
categories.id,
categories.visit_count,
categories.daily_count
FROM
categories";
//        die(var_dump($a));
        $result_categories = DB::select($sql);
        $result_categories = json_decode(json_encode($result_categories), 1);
        foreach ($result_categories as $key => $value) {
            $categories_html .= '<li>
            <a href="#" style="text-align: center;"><span class="label label-info">' . $value["daily_count"] . '</span>
                <div>' . $value["name"] . '</div>
            </a>
        </li>';

        }
        return $categories_html;
    }

    public function Bili_Title()
    {
        $a = mysqli_connect("127.0.0.1", "root", "", "bilibili");
        $title_html = "";
        $sql = "SELECT
animation_detail.image_name,
animation_detail.fav_count,
animation_detail.coin_count,
animation_detail.click_count,
animation_detail.update_time,
animation_detail.`name`,
animation_detail.comment_count,
animation_detail.id
FROM
animation_detail
LIMIT 6";
        $result = mysqli_fetch_all(mysqli_query($a, $sql), MYSQLI_ASSOC);
        foreach ($result as $value) {
            $title_html .= '<div class="col-md-4">
                      <div class="bili-item">
                        <a href="#">
                            <img class="bili-item-img img-responsive img-rounded" src="assets/images/cover/' . $value['image_name'] . '.png">
                            <div class="bili-item-mask">
                                <p>' . $value['name'] . '</p>
                                <p>up主:坂田银时</p>
                                <p>播放数:' . $value['click_count'] . '</p>
                            </div>
                        </a>
                      </div>
                    </div>';

        }
        return $title_html;
    }

    public function Bili_Video_Ranking()
    {
        $a = mysqli_connect("127.0.0.1", "root", "", "bilibili");
        $sql = "SELECT
categories.`name`,
categories.id,
categories.visit_count,
categories.daily_count
FROM
categories";
        $result_categories = DB::select($sql);
        $result_categories = json_decode(json_encode($result_categories), 1);
        $bili_video_ranking_html = "";
        foreach ($result_categories as $categories_key => $categories_value) {
            $bili_video_html = "";
            $sql = "SELECT
animation_detail.id,
animation_detail.`name`,
animation_detail.click_count,
animation_detail.comment_count,
animation_detail.image_name,
animation_detail.length
FROM
animation_detail
WHERE
animation_detail.categories_id =" . $categories_value['id'] . "
LIMIT 8";

            $result = DB::select($sql);
            $result = json_decode(json_encode($result), 1);
            foreach ($result as $value) {
                $bili_video_html .=
                    "<div class='col-md-3' data-video-id='{$value['id']}'>
                    <img class='bili-video-img' src='assets/images/cover/" . $value['image_name'] . ".png'>
                    <div class='bili-video-background'>
                        <img src='#'>
                    </div>
                    <div class='bili-video-mask'>
                     <div class='bili-video-progress'>
                     <div class='progress'>
                                <div class='progress-bar' role='progressbar'>
                                    <span class='sr-only'></span>
                                </div>
                            </div>
                     </div>
                     <div class='text-right'>" . $value['length'] . "</div>
                    </div>
                    <div class='bili-video-title'><a href='#'>
                    <div>" . $value['name'] . "</div>
                            <div class='row'>
                                <div class='col-md-6'>
                                    <div style='color: #aaa;'>
                                    <span class='glyphicon glyphicon-expand'></span>&nbsp;" . $value['click_count'] . "</div>
                                </div>
                                <div class='col-md-6'>
                                    <div style='color: #aaa;'>
                                        <span class='glyphicon glyphicon-comment'></span>&nbsp;" . $value['comment_count'] . "</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>";
            }
            $bili_video_html = "<div class='col-md-8'>
            <div class='row'>
                <div class='col-md-1'><img src='assets/images/icons/" . $categories_value['id'] . ".png'/></div>
                <div class='col-md-1' style='padding: 0px'><a href='#'><h4>" . $categories_value['name'] . "</h4></a>
                </div>
                <div class='col-md-4'>
                    <ul class='nav nav-tabs nav-justified'>
                        <li role='presentation' class='active'><a href='#'>有新动态</a></li>
                        <li role='presentation'><a href='#'>最新投稿</a></li>
                    </ul>
                </div>
                <div class='col-md-2'></div>
                <div class='col-md-2' style='padding-right:0;'><h5>
                        <button type='button' class='btn btn-default btn-block btn-xs'>
                        <span class='glyphicon glyphicon-refresh'></span>&nbsp;111新动态</button></h5>
                </div>
                <div class='col-md-2'>
                    <h5>
                        <a class='btn btn-default btn-block btn-xs' href='#' role='button'>
                            更多&nbsp;<span class='glyphicon glyphicon-chevron-right'></span> </a>
                    </h5>
                </div>
            </div>
            <div class='row'>" . $bili_video_html
                . "</div>
        </div>";

            $bili_ranking_html = "";
            $sql = "SELECT
animation_detail.id,
animation_detail.`name`,
animation_detail.image_name
FROM
animation_detail
WHERE
animation_detail.categories_id =" . $categories_value['id'] . "
LIMIT 7";
            $result = DB::select($sql);
            $result = json_decode(json_encode($result), 1);
            foreach ($result as $key => $value) {
                if ($key == 0) {
                    $bili_ranking_html .= "
<div class='col-md-12' data-video-id='{$value["id"]}'>
                    <div class='media bili-ranking-media'>
                        <div class='media-left'><span class='label label-primary'>" . ($key + 1) . "</span>
                        </div>
                        <div class='media-left'>
                            <a href='#'>
                                <img class='media-object' src='assets/images/cover/" . $value['image_name'] . ".png'>
                            </a>
                        </div>
                        <div class='media-body media-heading'>
                            <a href='#'>" . $value['name'] . "</a>
                        </div>
                    </div>
                    </div>";
                } else {
                    $bili_ranking_html .= "
    <div class='col-md-12' data-video-id='{$value["id"]}'>
                    <div class='media bili-ranking-media'>
                        <div class='media-left'>
                            <span class='label label-primary'>" . ($key + 1) . "</span>
                        </div>
                        <div class='media-body'>
                            <a href='#'>
                                <div>
                                " . $value['name'] . "</div>
                            </a>
                        </div>
                    </div>
                </div>";
                }
            }
            $bili_ranking_html = "<div class='col-md-4'>
            <div class='row'>
                <div class='col-md-3'><h3 style='margin-top: 10px'>排行</h3>
                </div>
                <div class='col-md-3 col-md-offset-6'>
                    <div class='dropdown' style='margin-top: 5px;'>
                        <button class='btn btn-default dropdown-toggle' type='button' id='dropdownMenu1' data-toggle='dropdown'>
                                    三日 <span class='caret'></span>
                        </button>
                        <ul class='dropdown-menu' style='min-width: 0;'>
                            <li><a href='#'>一周</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class='row'>" . $bili_ranking_html . "
            <div class='col-md-offset-2 col-md-8'><a class='btn btn-xs btn-block btn-default' href='#' role='button'>查看更多</a>
            </div>

</div>
</div>";
            $bili_video_ranking_html .= "<hr><div class='row'>" . $bili_video_html . $bili_ranking_html . "</div>
";
        }

        return $bili_video_ranking_html;
    }

    public function postBiliVideo()
    {
        $a = mysqli_connect("127.0.0.1", "root", "", "bilibili");
        $sql = '
SELECT
animation_detail.id,
animation_detail.`name`,
animation_detail.update_time,
animation_detail.click_count,
animation_detail.comment_count,
animation_detail.fav_count,
animation_detail.coin_count,
animation_detail.image_name,
animation_detail.length,
animation_detail.detail
FROM
animation_detail';
        $result = DB::select($sql);
        $result = json_decode(json_encode($result), 1);
        echo json_encode(($result), JSON_UNESCAPED_UNICODE);

    }

    function myfunction($result)
    {
        $fuck = array();
        foreach ($result as $key => $value) {
            $fuck[$value['id']] = $value;
        }
        return $fuck;
    }

}