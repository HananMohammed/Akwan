<?php


namespace App\repositoryhome;


use App\BrandName;
use App\Fruits;
use App\Gallary;
use App\OurServices;
use App\Partner;
use App\repository\AboutUsRepositry;
use App\repository\AddressRepository;
use App\repository\certificatesRepositry;
use App\repository\CrudRepository;
use App\repository\MailRepository;
use App\repository\Missionrepositry;
use App\repository\newsRepository;
use App\repository\PhoneRepository;
use App\repository\prouductsRepository;
use App\repository\QrCodeRepository;
use App\repository\ScoialRepository;
use App\repository\SliderRepositry;
use App\SingleAbout;
use App\Mission;
use App\SubService;
use App\Sale;
use App\Seo;
use App\Features;
use App\Map;
use App\project_akwan;
use App\SingleAboutChallenge;
use App\NewServices;
use App\NewCreativeServices;
use App\BlogArticle;
use App\BlogCategory;
use App\BlogImagesController;
use App\Emails;
use App\category;
use App\Address;

class FotterRepo
{
    public function projectCats(){
        return category::all();
    }
    public function getSeoData( )
    {
        return Seo::all();

    }
    public function getSale()
    {
        return Sale::where('off', '=', null)->paginate(4,['*'],'offers');

    }
    public function getServices()
    {
        return OurServices::all();
    }
    function getFeaturesData()
    {
        return Features::all();
    }
    /**
     * @param QrCodeRepository $qrcode
     * @return QrCodeRepository[]|\Illuminate\Database\Eloquent\Collection
     */
    public function QrCodeData ( )
    {
        $qrcode=new QrCodeRepository();

        return $qrcode->getAllData();
    }

    /**
     * @return PhoneRepository[]|\Illuminate\Database\Eloquent\Collection
     */
    public function  getPhoneData()
    {
        $phone=new PhoneRepository();
        return $phone->getAllPhoneData();
    }

    /**
     * @return AddressRepository[]|\Illuminate\Database\Eloquent\Collection
     */

    public function getAddressData()
    {
        $address=new AddressRepository();
        return $address->getAllAddressData();
    }

    public function emailsData(){
        $email=new MailRepository();
        return $email->getAllMailData();
    }
    public function getScoialData(){
        $data=new ScoialRepository();
        return $data->getAllSocialData();
    }
    public function sliderData(){
        $data=new SliderRepositry();
        return $data->getAllSlidesFromDb();
    }
    public function aboutus()
    {
        $data=new AboutUsRepositry();
        return $data->AboutUsData();
    }
    //single about

    public function maissonandvission()
    {
        $data=new Missionrepositry();
        return $data->MissionData();
    }

    public  function  certificates()
    {
        $data=new certificatesRepositry();
        return $data->certificatesData();
    }
    public function newsData()
    {
        $data=new newsRepository();
        return $data->getAllDataAsasc();
    }
    public function allnewsdata()

    {
        $data=new newsRepository();
        return $data->hendelnewsdata();
    }
    public function productData()
    {
//        return Fruits::paginate(4);
       return Fruits::where('is_available', '=', 1)->paginate(4,['*'],'cars');
    }

    public function getGallery()
    {
        return Gallary::all();
    }

    public function carGallery()
    {
        return Fruits::all();
    }
    public  function  getPartener()
    {
        return Partner::all();
    }
    public function getBrands(){
       return BrandName::all();
     }
     public  function getMapData(){
        return Map::all();
     }
    public function singleAbout()
    {
        return SingleAbout::all();
    }
    public  function  ProjectAkwan()
    {
        //return  project_akwan::paginate(6);
        return project_akwan::paginate(6,['*'],'ProjectAkwan');
    }

    public  function  singleChallenge()
    {
        return  SingleAboutChallenge::all();
    }
    public  function homeServices()
    {
        return NewServices::paginate(6);
    }
    public  function CreativeServices()
    {
        return NewCreativeServices::paginate(4);
    }
    /*blogs*/
    public function  BlogArticle()
    {
        return BlogArticle::all();
    }
    public function  allblogs()
    {
//      return BlogArticle::paginate(4);

        # use default 'page' for this
//        return BlogArticle::paginate(3,['*'],'allblogs');
        return BlogArticle::paginate(3,['*'],'allblogs');

    }
//    public function  allblogsCat()
//    {
////      return BlogArticle::paginate(4);
//
//        # use default 'page' for this
////        return BlogArticle::paginate(3,['*'],'allblogs');
//        return BlogArticle::all();
//
//    }
    public function  otherblogs()
    {
        return BlogArticle::paginate(3,['*'],'otherblogs');
    }

    public function SubService(){
//SubService::paginate(6,['*'],'otherservice')

        return    SubService::paginate(6);
    }
    public function  BlogCategory()
    {
        return BlogCategory::all();
    }
    public function  BlogImages()
    {
        return BlogImagesController::all();
    }
    public function  Email()
    {
        return Emails::all();
    }
    public function  Address()
    {
        return Address::all();
    }
    /**
     * @return array
     */
    public function footerCollection(){
        return [
            'seo'=>$this->getSeoData()[0],
            'sale'=>$this->getSale(),
            'serv'=>$this->getServices(),
            'gal'=>$this->getGallery(),
            'Partner'=>$this->getPartener(),
            'qrcode'=>$this->QrCodeData(),
            'phone'=>$this->getPhoneData(),
//            'address'=>$this->getAddressData()[0],
//            'email'=>$this->emailsData()[0],
            'social'=>$this->getScoialData(),
            'slides'=>$this->sliderData(),
            'about'=>$this->aboutus()[0],
            'mission'=>$this->maissonandvission()[0],
            'certificates'=>$this->certificates(),
            'news'=>$this->newsData(),
            'hnews'=>$this->allnewsdata(),
            'products'=>$this->productData(),
            'brands'=>$this->getBrands(),
            'offer'=>$this->getSale(),
            'map'=>$this->getMapData()[0],
            'features'=>$this->getFeaturesData(),
            'single_about' =>$this->singleAbout(),
            'projectAkwan' =>$this-> ProjectAkwan(),
            'single_challenge' => $this-> singleChallenge(),
            'homeServices' => $this-> homeServices(),
            'creativeServices' => $this-> CreativeServices(),
            'blog_article' => $this-> BlogArticle(),
            'allblogs' => $this-> allblogs(),
            'otherblogs' => $this-> otherblogs(),
            'blog_Category' => $this-> BlogCategory(),
            'blog_Image' => $this-> BlogImages(),
            'Address' => $this->  Address(),
            'Email' => $this->  Email(),
            'projectCats'=>$this->projectCats(),
            'SubService'=>$this->SubService(),
        ];
    }
}
