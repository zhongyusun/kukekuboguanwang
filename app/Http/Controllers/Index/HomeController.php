<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\Banner;
use App\Models\Blogroll;
use App\Models\Casecategory;
use App\Models\Cases;
use App\Models\Classify;
use App\Models\Config;
use App\Models\Contact;
use App\Models\Design;
use App\Models\Fangan;
use App\Models\Fanganlist;
use App\Models\Information;
use App\Models\Link;
use App\Models\Product;
use App\Models\Sign;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //首页
    public function home()
    {
        //获取所有的产品分类
        $classifies = Classify::all();

        //获取所有的合作案例分类
        $caseCategories = Casecategory::all()->toArray();

        //将该分类下的一条数据压入分类下
        foreach ($caseCategories as $k => $caseCategory) {
            $case = Cases::where('casecategory_id', $caseCategory['id'])->inRandomOrder()->limit(1)->get()->toArray();
            if ($case) {
                $file = $case[0];
                //图片图列
                $pic_lists = $file['pic_list'];
                $pic_lists = json_decode($pic_lists);
                $file['content'] = $this->cut_str($file['content'], 150);
                $caseCategory['file'] = $file;
                $caseCategories[$k] = $caseCategory;
            }else{
                $file=$case;
                $file['name']='';
                $file['content']='';
                $caseCategory['file']=$file;
                $caseCategories[$k]=$caseCategory;
            }
        }

        //获取公司资讯的数据
        $articles = Information::where('category_id', 1)->get();
        foreach ($articles as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }
        $arti = Information::where('category_id', 1)->orderBy('created_at', 'desc')->limit(1)->get();
        foreach ($arti as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }

        //获取行业动态的数据
        $art = Information::where('category_id', 2)->get();
        foreach ($art as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }
        $artic = Information::where('category_id', 2)->orderBy('created_at', 'desc')->limit(1)->get();
        foreach ($artic as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }

        //获取常见问答数据
        $arts = Information::where('category_id', 3)->get();
        foreach ($arts as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }
        $articl = Information::where('category_id', 3)->orderBy('created_at', 'desc')->limit(1)->get();
        foreach ($articl as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }

        //获取友情链接
        $links = Link::all();

        //获取banner
        $banners = Banner::all();

        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();

        //公司信息
        $company = Config::where('title', 'company')->get();
        $company = $company->toArray();

        //获取三大标签
        $sign = Sign::all()->where('title', 'shouye');
        foreach ($sign as $v) {
            $sign = $v->data;
        }

        //八大优势
        $advantages = Advantage::all();

        //获取所有的方案分类
        $fanganlist = Fanganlist::all();
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        if($this->is_mobile()){
            return view('index.phone.index',compact('sign'));

        }else{
              return view('index.home.home', compact('config','fanganlist', 'advantages', 'sign', 'company', 'banner_down', 'banners', 'links', 'classifies', 'caseCategories', 'pic_lists', 'articles', 'art', 'arts', 'arti', 'artic', 'articl'));
        }
    }

    //优势列表
    public function advantages(){
        //获取全部的优势
        $advantages=Advantage::all();
        //获取三大标签
        $sign = Sign::all()->where('title', 'advantage');
        foreach ($sign as $v) {
            $sign = $v->data;
        }
        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();
        //获取友情链接
        $links = Link::all();
        //获取所有的产品分类
        $classifies = Classify::all();
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        //获取热门产品
        $products = Product::inRandomOrder()->limit(4)->get();
        //随机获取3条资讯
        $article = Information::inRandomOrder()->limit(3)->get();
        foreach ($article as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }
        //随机获取6条资讯
        $articles = Information::inRandomOrder()->limit(6)->get();
        return view('index.home.advantages',compact('advantages','sign','banner_down','links','classifies','config','products','article','articles'));
    }

    //优势详情
    public function advantage(Advantage $advantage){
        //获取所有的产品分类
        $classifies = Classify::all();

        //随机获取三个产品
        $products = Product::inRandomOrder()->limit(3)->get();

        //获取常见问答数据
        $articles = Information::where('category_id', 3)->get();
        foreach ($articles as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }

        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();
        //获取友情链接
        $links = Link::all();
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        return view('index.home.advantage_info',compact('advantage','classifies','products','articles','banner_down','links','config'));
    }
    //产品列表
    public function product_list()
    {
        //获取地址兰参数
        $id = $_SERVER['QUERY_STRING'];
        if ($id) {
            $products = Product::where('classify_id', $id)->get();
            $sign=Classify::all()->where('id',$id);
            foreach ($sign as $v){
                $sign=$v;
            }
            $sign=$sign->toArray();

        } else {
            //获取所有的产品
            $products = Product::all();
            //获取三大标签
            $sign = Sign::all()->where('title', 'product');
            foreach ($sign as $v) {
                $sign = $v->data;
            }
        }

        //获取行业资讯的数据
        $art = Information::where('category_id', 2)->get();
        foreach ($art as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }

        //获取常见问答的数据
        $arts = Information::where('category_id', 3)->get();
        foreach ($arts as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }

        //获取所有的分类
        $classifies = Classify::all();

        //获取所有的友链
        $links = Link::all();
        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        if ($this->is_mobile()){
            return view('index.phone.canpinList',compact('sign'));
        }else{
            return view('index.home.product_list', compact('id','config','sign','banner_down', 'links', 'products', 'classifies', 'arts', 'art'));

        }
    }

    //产品详情
    public function productInfo(Product $product)
    {
        //获取所有的产品分类
        $classifies = Classify::all();
        //将图列进行解析
        $pic_list = $product->pic_list;
        $pic_lists = json_decode($pic_list);
        $pics = json_decode($product->pics);
        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();
        //获取友情链接
        $links = Link::all();
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        if ($this->is_mobile()){
            return view('index.phone.canpinInfo');
        }else{
            return view('index.home.product_info', compact('config','links', 'banner_down', 'product', 'pic_lists', 'pics', 'classifies'));

        }
    }

    //新闻中心
    public function news()
    {
        //获取地址兰参数
        $id = $_SERVER['QUERY_STRING'];
        if ($id){

            //获取该分类下的资讯数据
            $articles=Information::where('category_id',$id)->paginate(6);
            foreach ($articles as $v) {
                $v->content = $this->cut_str($v->content, 100);
            }
            //随机获取一条资讯数据
            $article = Information::where('category_id',$id)->inRandomOrder()->limit(1)->get();
            foreach ($article as $v) {
                $v->content = $this->cut_str($v->content, 100);
            }

        }else{


        //获取所有的资讯数据
        $articles = Information::paginate(6);
        foreach ($articles as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }
            //随机获取一条资讯数据
            $article = Information::inRandomOrder()->limit(1)->get();
            foreach ($article as $v) {
                $v->content = $this->cut_str($v->content, 100);
            }
        }
        //获取所有的产品分类
        $classifies = Classify::all();


        //随机获取三个产品
        $products = Product::inRandomOrder()->limit(3)->get();

        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();

        //获取友情链接
        $links = Link::all();

        //获取三大标签
        $sign = Sign::all()->where('title', 'news');
        foreach ($sign as $v) {
            $sign = $v->data;
        }
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        if ($this->is_mobile()){
            return  view('index.phone.newsList',compact('sign'));
        }else{

            return view('index.home.news', compact('id','config','classifies', 'articles', 'products', 'article', 'banner_down', 'links', 'sign'));

        }
    }

    //资讯详情
    public function newInfo(Information $information)
    {
        //获取所有的产品分类
        $classifies = Classify::all();

        //随机获取三个产品
        $products = Product::inRandomOrder()->limit(3)->get();

        //获取常见问答数据
        $articles = Information::where('category_id', 3)->get();
        foreach ($articles as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }

        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();
        //获取友情链接
        $links = Link::all();
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        $sql = Information::where('id', '<', $information->id)->latest('id')->take(1);
        $list = Information::where('id', '>', $information->id)->oldest('id')->take(1)->union($sql)->orderBy('id', 'asc')->get();

        if ($this->is_mobile()){
            return  view('index.phone.newInfo');
        }else{
            return view('index.home.new_info', compact('list','config','information', 'classifies', 'products', 'articles', 'banner_down', 'links'));

        }
    }

    //我们的公司
    public function aboutUs()
    {
        //获取所有的产品分类
        $classifies = Classify::all();

        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();
        //获取友情链接
        $links = Link::all();
        //获取三大标签
        $sign = Sign::all()->where('title', 'about');
        foreach ($sign as $v) {
            $sign = $v->data;
        }
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        return view('index.home.about_us', compact('classifies', 'links', 'banner_down', 'sign','config'));
    }

    //更赞的用户体验
    public function ue()
    {
        //获取所有的产品分类
        $classifies = Classify::all();

        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();

        //获取友情链接
        $links = Link::all();

        //获取三大标签
        $sign = Sign::all()->where('title', 'ue');
        foreach ($sign as $v) {
            $sign = $v->data;
        }
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        //获取所有的案例行业分类
        $cases=Casecategory::inRandomOrder()->limit(4)->get();

        return view('index.home.us', compact('cases','classifies', 'banner_down', 'links', 'sign','config'));
    }

    //联系我们
    public function contactUs()
    {
        //获取所有的产品分类
        $classifies = Classify::all();
        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();
        //获取友情链接
        $links = Link::all();
        //获取三大标签
        $sign = Sign::all()->where('title', 'us');
        foreach ($sign as $v) {
            $sign = $v->data;
        }
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        return view('index.home.contact_us', compact('sign','classifies','banner_down','links','config'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'number' => 'required|max:140',
            'site' => 'required|max:140',
            'email' => 'required|max:255',
            'content' => 'required',
        ]);
        $data = $request->toArray();

        Contact::create($data);
        return redirect()->back()->with('success', '留言成功');
    }

    //行业案例列表
    public function case()
    {
        //获取所有的产品分类
        $classifies = Classify::all();
        //获取所有的案例分类
        $caseCategories = Casecategory::all();
        //获取地址兰参数
        $id = $_SERVER['QUERY_STRING'];
        //随机获取三个产品
        $products = Product::inRandomOrder()->limit(3)->get();
        if ($id) {
            //获取该分类下的所有案例数据
            $cases = Cases::where('casecategory_id', $id)->paginate(6);
            foreach ($cases as $v) {
                $v->content = $this->cut_str($v->content, 100);
            }
            //获取当前分类下的一条数据
            $case = Cases::where('casecategory_id', $id)->orderBy('created_at', 'desc')->limit(1)->get();
            foreach ($case as $v) {
                $v->content = $this->cut_str($v->content, 100);
            }
            //获取当前案例分类的数据
            $label = Casecategory::find($id);
            $label=$label->toArray();

        } else {
            //获取三大标签
            $sign = Sign::all()->where('title', 'shouye');
            foreach ($sign as $v) {
                $label = $v->data;
            }
            //获取所有的案例数据
            $cases = Cases::paginate(6);
            foreach ($cases as $v) {
                $v->content = $this->cut_str($v->content, 100);
            }
//            //获取所有的案例分类数据
//            $label=Casecategory::all();
            //获取所有案例中的一条数据
            $case = Cases::orderBy('created_at', 'desc')->limit(1)->get();
            foreach ($case as $v) {
                $v->content = $this->cut_str($v->content, 100);
            }
        }
        //获取常见问答数据
        $articles = Information::where('category_id', 3)->get();
        foreach ($articles as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }
        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();
        //获取友情链接
        $links = Link::all();
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
            return view('index.home.case_list', compact('id','config','links','banner_down', 'cases', 'classifies', 'caseCategories', 'id', 'case', 'label', 'products', 'articles'));
    }

    //行业案例详情
    public function case_info(Cases $cases){


        //获取所有的产品分类
        $classifies = Classify::all();

        //随机获取三个产品
        $products = Product::inRandomOrder()->limit(3)->get();


        //获取相关行业的资讯
        $articles = Cases::where('casecategory_id', $cases->casecategory_id)->get();
        foreach ($articles as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }

        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();
        //获取友情链接
        $links = Link::all();
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        $sql = Cases::where('id', '<', $cases->id)->latest('id')->take(1);
        $list = Cases::where('id', '>', $cases->id)->oldest('id')->take(1)->union($sql)->orderBy('id', 'asc')->get();

        return view('index.home.case_info',compact('list','cases','config','products','articles','banner_down','classifies','links'));
    }

    //网站地图
    public function map()
    {
        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();

        //获取所有的产品分类
        $classifies = Classify::all();

        //获取友情链接
        $links = Link::all();

        //获取三大标签
        $sign = Sign::all()->where('title', 'map');
        foreach ($sign as $v) {
            $sign = $v->data;
        }
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        return view('index.home.map', compact('config','banner_down', 'classifies', 'links', 'sign'));
    }

    //方案列表
    public function fanganlist()
    {
        //获取三大标签
        $sign = Sign::all()->where('title', 'fangan');
        foreach ($sign as $v) {
            $sign = $v->data;
        }

        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();

        //获取所有的产品分类
        $classifies = Classify::all();

        //获取友情链接
        $links = Link::all();

        //获取所有的方案分类
        $fanganlist = Fanganlist::all();

        //随机获取4条产品数据
        $products = Product::inRandomOrder()->limit(4)->get();
        //随机获取3条资讯
        $article = Information::inRandomOrder()->limit(3)->get();
        foreach ($article as $v) {
            $v->content = $this->cut_str($v->content, 100);
        }
        //随机获取6条资讯
        $articles = Information::inRandomOrder()->limit(6)->get();
        //公司信息
        $company = Config::where('title', 'company')->get();
        $company = $company->toArray();
        //获取地址兰参数
        $id = $_SERVER['QUERY_STRING'];
        if ($id) {
            //获取该分类下的方案
            $fangan = Fangan::where('fanganlist_id', $id)->get();
            //该分类数据
            $sign=Fanganlist::find($id);
            $sign=$sign->toArray();
        } else {
            //获取所有得方案
            $fangan = Fangan::all();
        }
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        if ($this->is_mobile()){
            return view('index.phone.canpinList');
        }else{
            return view('index.home.fanganlist', compact('id','config','company', 'articles', 'article', 'products', 'sign', 'banner_down', 'classifies', 'links', 'fanganlist', 'fangan'));

        }
    }

    //方案详情
    public function fangan(Fangan $fangan)
    {
        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();
        //获取所有的产品分类
        $classifies = Classify::all();
        //获取友情链接
        $links = Link::all();
        //随机获取3条产品数据
        $products = Product::inRandomOrder()->limit(3)->get();
        //随机获取该分类下的方案
        $fangans = Fangan::where('fanganlist_id', $fangan->fanganlist_id)->inRandomOrder()->get();
        foreach ($fangans as $v) {
            $v->content = $this->cut_str($v->content, 20);
        }
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        if ($this->is_mobile()){
            return  view('index.phone.canpinInfo');
        }else{
            return view('index.home.fangan', compact('config','fangans', 'fangan', 'banner_down', 'classifies', 'links', 'products'));

        }
    }

    //友链提交
    public function links(){
        //获取三大标签
        $sign = Sign::all()->where('title', 'shouye');
        foreach ($sign as $v) {
            $sign = $v->data;
        }
        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();
        //获取友情链接
        $links = Link::all();
        //获取所有的产品分类
        $classifies = Classify::all();
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        return view('index.home.links',compact('sign','banner_down','links','classifies','config'));
    }

    public function link_post(Request $request){
        $this->validate($request, [
            'name' => 'max:255',
            'phone' => 'max:140',
            'site' => 'required|max:140',
            'email' => 'max:255',
            'qq' => 'max:255',
            'link' => 'required',
        ]);
        $data = $request->toArray();
        Blogroll::create($data);
        return redirect()->back()->with('success', '提交成功');

    }

    //将富文本编辑器的的标签去掉
    public function cut_str($str, $len, $suffix = "...")
    {
        $str = strip_tags($str);
        $str = str_replace("\r\n", "", $str);
        if (function_exists('mb_substr')) {
            if (strlen($str) > $len) {
                $str = mb_substr($str, 0, $len, 'utf-8') . $suffix;
            }
            return $str;
        } else {
            if (strlen($str) > $len) {
                $str = substr($str, 0, $len, 'utf-8') . $suffix;
            }
            return $str;
        }
    }

    //判断是否为手机访问
    public function is_mobile(){
        if (isset($_SERVER['HTTP_VIA']) && stristr($_SERVER['HTTP_VIA'], "wap")) {
            return true;
        } elseif (isset($_SERVER['HTTP_ACCEPT']) && strpos(strtoupper($_SERVER['HTTP_ACCEPT']), "VND.WAP.WML")) {
            return true;
        } elseif (isset($_SERVER['HTTP_X_WAP_PROFILE']) || isset($_SERVER['HTTP_PROFILE'])){
            return true;
        } elseif (isset($_SERVER['HTTP_USER_AGENT']) && preg_match('/(blackberry|configuration\/cldc|hp |hp-|htc |htc_|htc-|iemobile|kindle|midp|mmp|motorola|mobile|nokia|opera mini|opera |Googlebot-Mobile|YahooSeeker\/M1A1-R2D2|android|iphone|ipod|mobi|palm|palmos|pocket|portalmmm|ppc;|smartphone|sonyericsson|sqh|spv|symbian|treo|up.browser|up.link|vodafone|windows ce|xda |xda_)/i', $_SERVER['HTTP_USER_AGENT'])) {
            return true;
        }
        return false;
    }

    //补偿方案
    public function design(){
        //获取banner下的数据
        $banner_down = Config::where('title', 'banner')->get();
        $banner_down = $banner_down->toArray();
        //获取所有的产品分类
        $classifies = Classify::all();
        //获取友情链接
        $links = Link::all();
        //获取网站基础信息
        $config=Config::where('title','site')->get();
        foreach ($config as $v){
            $config=$v->data;
        }
        //获取数据
        $designs=Design::all();
        //获取三大标签
        $sign = Sign::all()->where('title', 'design');
        foreach ($sign as $v) {
            $sign = $v->data;
        }
        //获取地址兰参数
        $id = $_SERVER['QUERY_STRING'];
        if ($id){
            $sign=Design::find($id);

        }
        return view('index.home.design',compact('banner_down','classifies','links','config','designs','sign'));
    }
}
