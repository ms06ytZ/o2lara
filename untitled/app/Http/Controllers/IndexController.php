<?php

namespace App\Http\Controllers;

use App\Index;
use Illuminate\Support\Collection;
use Storage;

class IndexController extends Controller {

    public function index() {

        //$index = index::All;

        $index = new Index();
        
        $contents = null;
         //theme
        $exists = Storage::disk('local')->exists('siteTheme.html');
        if ($exists) {
            $contents = Storage::get("siteTheme.html");
        
        }
          $index->theme = $contents;
          //sub_theme
 
        $exists = Storage::disk('local')->exists('siteSubTheme.html');
        if ($exists) {
            $contents = Storage::get("siteSubTheme.html");
          
        }
          $index->sub_theme = $contents;
        
          //welcomeMessage
             $exists = Storage::disk('local')->exists('welcomeMessage.html');
        if ($exists) {
            $contents = Storage::get("welcomeMessage.html");
           
        }
          $index->welcomes = $contents;
        

        $services = new Collection();
        $service1 = new Collection();
        $service1->place = 'London';
        $service1->image = '../image/s1.png';
        $service1->capture = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry¥'s standard dummy text ever.";
        $service2 = new Collection();
        $service2->place = 'Berlin';
        $service2->image = '../image/s2.png';
        $service2->capture = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry¥'s standard dummy text ever.";
        $service3 = new Collection();
        $service3->place = 'Paris';
        $service3->image = '../image/s3.png';
        $service3->capture = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry¥'s standard dummy text ever.";
        $service4 = new Collection();
        $service4->place = 'Tokyo';
        $service4->image = '../image/s4.png';
        $service4->capture = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry¥'s standard dummy text ever.";
        $services[] = $service1;
        $services[] = $service2;
        $services[] = $service3;
        $services[] = $service4;

        $index->services = $services;

        //SomeChart
        $exists = Storage::disk('local')->exists('someChart.json');
        if ($exists) {
            $contents = Storage::get("someChart.json");
            $contentsJon = json_decode($contents, false);
        }

        $index->smCharts = $contentsJon;


        //TODO next cool works
        $exists = Storage::disk('local')->exists('coolWorks.json');
        if ($exists) {
            $contents = Storage::get("coolWorks.json");
            $contentsJon = json_decode($contents, false);
        }
        //dd($contentsJon);
        $index->coolWorks = $contentsJon;

        //WhiteSection
        $exists = Storage::disk('local')->exists('whitesection.html');
        if ($exists) {
            $contents = Storage::get("whitesection.html");
            //  $contentsJon = json_decode($contents, false);
        }
        //dd($contentsJon);
        $index->whiteSection = $contents;

        //GreySection  TODO no DOM
        $exists = Storage::disk('local')->exists('greySection.html');
        if ($exists) {
            $contents = Storage::get("greySection.html");
        }
        $index->greySection = $contents;


        //GreySection
        $exists = Storage::disk('local')->exists('greySection.html');
        if ($exists) {
            $contents = Storage::get("greySection.html");
        }
        $index->greySection = $contents;
        
        //footerSection
        $exists = Storage::disk('local')->exists('footerSection.html');
        if ($exists) {
            $contents = Storage::get("footerSection.html");
        }
        $index->footerSection = $contents;

        return view('index')->with('index', $index);
    }

    public function chartsJson() {
        $exists = Storage::disk('local')->exists('someChart.json');
        $contentsJon = null;
        if ($exists) {
            $contents = Storage::get("someChart.json");
            $contentsJon = json_decode($contents, false);
        }
        $charts = $contentsJon->someChart;

        return response()
                        ->json($contentsJon);
    }

    public function create() {
        return view('index.create');
    }

    public function detail() {
        $id = $request->input('id');
        $index = index::find($id);
        return view('index.detail')->with('index', $index);
    }

    public function update() {
        return view('index.update');
    }

    public function delete() {
        return view('index.delete');
    }

}
