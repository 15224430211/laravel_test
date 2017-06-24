<?php

class VideoController extends IndexController
{

    protected $layout = 'layout.index';

    public function getIndex()
    {
        $categories_html = $this->Bili_Categories();
        return View::make('layout.Video')
            ->with('categories_html', $categories_html);
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

}