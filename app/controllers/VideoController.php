<?php

class VideoController extends BaseController
{


    protected $layout = 'layout.index';


    public function getIndex($id)
    {

        $video_info = DB::table('animation_detail')
            ->where('id', $id)
            ->first();


        $video_recommend_html = $this->Video_Recommend();
        $video_author_html = $this->Video_Author();
        $categories_html = $this->Bili_Categories();

        return View::make('layout.Video')
            ->with('categories_html', $categories_html)
            ->with('video_info', $video_info)
            ->with('video_author_html', $video_author_html)
            ->with('video_recommend_html', $video_recommend_html);

    }

    public function Bili_Categories()
    {
        $categories_html = "";
        $result_categories = DB::table('categories')->get();
        foreach ($result_categories as $key => $value) {
            $categories_html .= '<li>
            <a href="search?categories=' . $value->id . '" style="text-align: center;"><span class="label label-info">' . $value->daily_count . '</span>
                <div>' . $value->name . '</div>
            </a>
        </li>';

        }
        return $categories_html;
    }


    public function Video_Author()
    {
        $video_author_html = "";
        $result_author = DB::table('animation_detail')->take(1)->get();
        foreach ($result_author as $key => $value) {
            $video_author_html .= '<img src="/assets/images/profile/' . $value->id . '.png" style="height: 68px; width: 64px; border-radius: 64px;">';
        }
        return $video_author_html;
    }

    public function Video_Recommend()
    {
        $video_recommend_html = "";
        $result_recommend = DB::table('animation_detail')->take(4)->get();
        foreach ($result_recommend as $key => $value) {
            $video_recommend_html .= ' <div class="col-md-3">
                    <img class="bili-video-img" src="/assets/images/cover/' . $value->id . '.png">
                    <div class="bili-video-title"><a href="#">
                            <div>' . $value->name . '</div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div style="color: #aaa;">
                                        <span class="glyphicon glyphicon-expand"></span>&nbsp;' . $value->click_count . '
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="color: #aaa;">
                                        <span class="glyphicon glyphicon-comment"></span>&nbsp;' . $value->comment_count . '
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>';
        }
        return $video_recommend_html;
    }


}