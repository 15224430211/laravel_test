<?php

class VideoController extends BaseController
{


    protected $layout = 'layout.index';

    public function getIndex()
    {
        $video_recommend_html = $this->Video_Recommend();
        $video_author_html = $this->Video_Author();
        $video_id_html = $this->Video_id();
        $video_fav_html = $this->Video_Fav();
        $video_update_time_html = $this->Video_Update_time();
        $categories_html = $this->Bili_Categories();
        $video_title_html = $this->Video_Title();
        return View::make('layout.Video')
            ->with('categories_html', $categories_html)
            ->with('video_title_html', $video_title_html)
            ->with('video_fav_html', $video_fav_html)
            ->with('video_author_html', $video_author_html)
            ->with('video_id_html', $video_id_html)
            ->with('video_recommend_html', $video_recommend_html)
            ->with('video_update_time_html', $video_update_time_html);

    }

    public function Bili_Categories()
    {
        $categories_html = "";
        $result_categories = DB::table('categories')->get();
        foreach ($result_categories as $key => $value) {
            $categories_html .= '<li>
            <a href="#" style="text-align: center;"><span class="label label-info">' . $value->daily_count . '</span>
                <div>' . $value->name . '</div>
            </a>
        </li>';

        }
        return $categories_html;
    }


    public function Video_Title()
    {
        $video_title_html = "";
        $result_title = DB::table('animation_detail')->take(1)->get();
        foreach ($result_title as $key => $value) {
            $video_title_html .= '<h4>' . $value->name . '</h4>';
        }
        return $video_title_html;


    }

    public function Video_Update_time()
    {
        $video_update_time_html = "";
        $result_update_time = DB::table('animation_detail')->take(1)->get();
        foreach ($result_update_time as $key => $value) {
            $video_update_time_html .= ' <P style="color: #6d757a;">' . $value->update_time . ' </p>';
        }
        return $video_update_time_html;
    }

    public function Video_Fav()
    {
        $video_fav_html = "";
        $result_fav = DB::table('animation_detail')->take(1)->get();
        foreach ($result_fav as $key => $value) {
            $video_fav_html .= ' <div class="row">
                <div class="col-md-2" style="color: #6d757a;"><span class="glyphicon glyphicon-play" aria-hidden="true"></span>&nbsp;' . $value->click_count . '
                </div>
                <div class="col-md-2" style="color: #6d757a;"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span>&nbsp;' . $value->comment_count . '
                </div>
                <div class="col-md-2" style="color: #6d757a;"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;排名&nbsp;???
                </div>
                <div class="col-md-3" style="color: #6d757a;"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>&nbsp;硬币&nbsp;' . $value->coin_count . '
                </div>
                <div class="col-md-3" style="color: #6d757a;"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>&nbsp;收藏&nbsp;' . $value->fav_count . '
                </div>
            </div>';
        }
        return $video_fav_html;
    }

    public function Video_Author()
    {
        $video_author_html = "";
        $result_author = DB::table('animation_detail')->take(1)->get();
        foreach ($result_author as $key => $value) {
            $video_author_html .= '<img src="assets/images/profile/' . $value->id . '.png" style="height: 68px; width: 64px; border-radius: 64px;">';
        }
        return $video_author_html;
    }

    public function Video_Recommend()
    {
        $video_recommend_html = "";
        $result_recommend = DB::table('animation_detail')->take(4)->get();
        foreach ($result_recommend as $key => $value) {
            $video_recommend_html .= ' <div class="col-md-3">
                    <img class=\'bili-video-img\' src=\'assets/images/cover/' . $value->id . '.png\'>
                    <div class=\'bili-video-title\'><a href=\'#\'>
                            <div>' . $value->name . '</div>
                            <div class=\'row\'>
                                <div class=\'col-md-6\'>
                                    <div style=\'color: #aaa;\'>
                                        <span class=\'glyphicon glyphicon-expand\'></span>&nbsp;' . $value->click_count . '
                                    </div>
                                </div>
                                <div class=\'col-md-6\'>
                                    <div style=\'color: #aaa;\'>
                                        <span class=\'glyphicon glyphicon-comment\'></span>&nbsp;' . $value->comment_count . '
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>';
        }
        return $video_recommend_html;
    }


    public function Video_id()
    {
        $video_id_html = "";
        $result_id = DB::table('animation_detail')->take(1)->get();
        foreach ($result_id as $key => $value) {
            $video_id_html .= '<video controls="autoplay" width="680px" height="440px">
                <source src="assets/video/' . $value->id . '.mp4">
            </video>';
        }
        return $video_id_html;
    }
}