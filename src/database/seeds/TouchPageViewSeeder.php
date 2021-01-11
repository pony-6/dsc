<?php

use App\Models\TouchPageView;
use Illuminate\Database\Seeder;

class TouchPageViewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->touch_page_view();
    }

    public function touch_page_view()
    {
        $res = TouchPageView::query()->select('id', 'data')->where('ru_id', 0)->where('type', 'index')->first();
		
        if (isset($res->data) && !empty($res->data)) {
            if (stripos($res->data, '"isShow":true') === false) {
                $data = str_replace(',"data":{', ',"isShow":true,"data":{', $res->data);
				
				TouchPageView::where('id', $res->id)->update([
					'data' => $data
				]);
            }
        }
    }
}