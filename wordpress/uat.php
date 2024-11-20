<?php
$sURL    = site_url(); // WordPress function
$asParts = parse_url($sURL); // PHP function

if (!$asParts)
    wp_die('ERROR: Path corrupt for parsing.'); // replace this with a better error result

$sScheme = $asParts['scheme'];
$nPort   = $asParts['port'];
$sHost   = $asParts['host'];
$nPort   = 80 == $nPort ? '' : $nPort;
$nPort   = 'https' == $sScheme and 443 == $nPort ? '' : $nPort;
$sPort   = !empty($sPort) ? ":$nPort" : '';
$baseurl = $sScheme . '://' . $sHost . $sPort;



switch (ENVIRONMENT) {
    case "development":
        $corporatetravel = 'http://elephanttravel.cmots.com';
        $CarIns = 'https://beta.elephant.in/motor-insurance/car-insurance';
        $Bike = 'https://beta.elephant.in/two-wheeler-insurance';
        $Travel = 'https://traveluat.elephant.in';
        $Home = '/home-insurance';
        $Cyber = 'http://uatcyber.elephant.in';
        $Health = '/health-insurance';
        $TopUp = '/super-top-up-insurance';
        $Illness = 'https://beta.elephant.in/criticalillness';
        $Accident = 'https://newui.elephant.in/personal-accident/input';
        $Corona = 'https://newui.elephant.in/corona/input';
        $Term = '/term-life-Insurance';
        $Grp = '/guaranteed-return-plan';
        $grouphealth = "https://sme.elephant.in/Group-Health-Insurance";
        $grouppa = "https://sme.elephant.in";
        $firepolicy = "https://sme.elephant.in/fpi/fire-package.aspx?PrevUrl=/fire-property-package";
        $workmen = "https://sme.elephant.in/Workmennew";
        $directors = "https://sme.elephant.in/directors-officers";
        $corpmotorfleet = "https://elephant.in/motor-insurance/corporate-motor-fleet-insurance";
        $corptravel = "https://corporatetravel.elephant.in";
        $hospital = "https://sme.elephant.in/hospitality";
        $educational = "https://sme.elephant.in/educational-institute";
        $shops = "https://sme.elephant.in/shop";
        $salons = "https://sme.elephant.in/fpi/fire-package.aspx?PrevUrl=/salon";
        $commercial = "https://sme.elephant.in/fpi/fire-package.aspx?PrevUrl=/office";
        $hospclinic = "https://sme.elephant.in/fpi/fire-package.aspx?PrevUrl=/clinic";
        $diamonds = "https://sme.elephant.in";
        $media = "https://sme.elephant.in";
        $WomenCancer = "https://betaaffinity.elephant.in/customerportal?partner=OFlYNXlnV1JSNldPbWtQNHBEc2ZHdz09&amp;product=bStqeGs3Z2pTRkRqV1VuemQwNUhmdz09";
        break;

    case "production":
        $corporatetravel = 'https://corporatetravel.elephant.in';
        $CarIns = 'https://elephant.in/motor-insurance/car-insurance';
        $Bike = 'https://elephant.in/motor-insurance/two-wheeler-insurance';
        $Travel = 'https://elephant.in/travel-insurance';
        $Home = '/home-insurance';
        $Cyber = 'https://elephant.in/cyber-insurance';
        $Health = '/health-insurance';
        $TopUp = '/super-top-up-insurance';
        $Illness = 'https://elephant.in/critical-illness-insurance';
        $Accident = 'https://elephant.in/personal-accident-insurance';
        $Corona = 'https://covid.elephant.in';
        $Term = '/term-life-Insurance';
        $Grp = '/guaranteed-return-plan';
        $grouphealth = "https://sme.elephant.in/Group-Health-Insurance";
        $grouppa = "https://sme.elephant.in";
        $firepolicy = "https://sme.elephant.in/fpi/fire-package.aspx?PrevUrl=/fire-property-package";
        $workmen = "https://sme.elephant.in/Workmennew";
        $directors = "https://sme.elephant.in/directors-officers";
        $corpmotorfleet = "https://elephant.in/motor-insurance/corporate-motor-fleet-insurance";
        $corptravel = "https://corporatetravel.elephant.in";
        $hospital = "https://sme.elephant.in/hospitality";
        $educational = "https://sme.elephant.in/educational-institute";
        $shops = "https://sme.elephant.in/shop";
        $salons = "https://sme.elephant.in/fpi/fire-package.aspx?PrevUrl=/salon";
        $commercial = "https://sme.elephant.in/fpi/fire-package.aspx?PrevUrl=/office";
        $hospclinic = "https://sme.elephant.in/fpi/fire-package.aspx?PrevUrl=/clinic";
        $diamonds = "https://sme.elephant.in";
        $media = "https://sme.elephant.in";
        $WomenCancer = "https://affinity.elephant.in/customerportal?partner=ZEdBWnI4c05INzQ2NWdkUmx2b3IyZz09&product=T0FnWGZyVmx0dnU1U3VMeitxbi9PQT09";
        break;
}
?>

<style>
#hide_nav {
    display: none;
}

.modal-dialog {
    position: relative;
    width: auto;
    margin: 1.75rem auto;
    pointer-events: none;
}

@media (max-width: 576px) {
    .modal-dialog {
        margin: 0.5rem !important;
    }
}

.discTxtSec {
    width: 100% !important;
}

.paymentGatewaySvg:first-child {
    margin-left: 0 !important;
}

.discFooterSupport {
    margin-top: 0 !important;
}

/* tablet view */
@media only screen and (min-width: 768px) and (max-width: 1024px) {
    .discDetailWrap {
        margin-top: 0 !important;
    }

    .paymentGatewaySvg {
        margin-top: 0 !important;
    }

    .footerTabMob .discTxt {
        margin-bottom: 30px !important;
        width: 100%;
    }

    .discTxtSecTablet {
        margin-top: -144px !important;
    }

    .discTxtSecForSupporrtTablet {
        margin-top: -58px !important;
    }

    .footerDesktop .col-6:nth-child(even) {
        padding-left: 1px !important;
    }

    .footerDesktop div:nth-child(even) div:first-child {
        padding-left: 0 !important;
    }

}

.idraRowMob {
    display: none;
}

/* mobile view */
@media only screen and (max-width: 767px) {
    .discDetailWrap {
        display: none !important;
    }

    .idraRowMob {
        display: block !important;
    }

    .discDetailWrapMob img {
        width: 56px;
        height: 24px;
        margin-bottom: 18px;
        background: #fff;
        border-radius: 10px;
        padding: 5px 4px;
    }

    .discTxt a:last-child,
    .discSubTitle a:last-child {
        margin-bottom: 12px;
    }

    .company_footer {
        margin-top: -47px !important;
    }

    /* .footerDesktop div:nth-child(even) {
        padding-left: 20px !important;
    } */
    .footerDesktop {
        display: none;
    }

    .footer_mob_support {
        padding-left: 0 !important;
    }

    .life_footer_mobile {
        padding-left: 0 !important;
    }

    .footerTabMob .discTx {
        margin-bottom: 0px !important;
    }

    .discTxtSec:nth-child(2) {
        margin-bottom: 0 !important;
    }

}

@media only screen and (min-width: 768px) {
    .footerTabMob {
        display: none;
    }
}

@media screen and (min-width: 768px) and (max-width:1024px) {
    .footerDesktop {
        display: none !important;
    }

    .footerTabMob {
        display: flex !important;
    }

    .footerMobile {
        display: none;
    }
}

@media screen and (max-width: 767px) {
    .footerDesktop {
        display: none !important;
    }

    .footerTabMob {
        display: none !important;
    }

    .footerMobile {
        display: flex;
    }

    .footerMobile .discTxt {
        margin-bottom: 20px !important;
    }

    .footerMobile .discTxt a:last-child,
    .footerMobile .discSubTitle a:last-child {
        margin-bottom: 0;
    }

    .disclaimerSecWrap .container .row:first-child .discCol:nth-child(2) .discTxt:nth-child(even) {
        padding-left: 0 !important;
    }

    .footerMobile .col_6_2 {
        padding-left: 10px !important;
    }

    .idraRowMob .discDetailItem span {
        font-family: "Inter-Bold" !important;
        font-size: 13px;
    }

    .discDetailItem {
        font-size: 13px;
        font-family: "Inter-Regular";
    }

    .discFooter_alliance_broker span {
        margin-bottom: 0;
    }

}

@media screen and (min-width:768px) {
    .footerMobile {
        display: none;
    }
}

@media screen and (max-width:767px) {
    .hideTabMob {
        display: none;
    }
}

@media screen and (min-width:768px) and (max-width:1024px) {
    .hideTabMob {
        display: block !important;
    }
}
</style>
<section class="disclaimerSecWrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 discCol">
                <div class="discTitle">Alliance Insurance Brokers Pvt. Ltd.</div>
                <div class="discTxt addressPadding">8th Floor, Gold Crest, 10th Road, Juhu, Vile Parle (W), Mumbai 400
                    049, India</div>

                <div class="discSubTitle">
                    <svg version="1.1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path
                            d="M20,4h-16c-1.1,0 -1.99,0.9 -1.99,2l-0.01,12c0,1.1 0.9,2 2,2h16c1.1,0 2,-0.9 2,-2v-12c0,-1.1 -0.9,-2 -2,-2Zm0,4l-8,5l-8,-5v-2l8,5l8,-5v2Z"
                            fill="#fff"></path>
                        <path fill="none" d="M0,0h24v24h-24Z"></path>
                    </svg>
                    Email
                </div>
                <div class="discTxt">
                    <a href="mailto:support@elephant.in">support@elephant.in</a>
                </div>

                <div class="discCallSubTitle">
                    <svg version="1.1" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path d="M0,0h24v24h-24Z" fill="none"></path>
                        <path fill="#fff"
                            d="M6.62,10.79c1.44,2.83 3.76,5.14 6.59,6.59l2.2,-2.2c0.27,-0.27 0.67,-0.36 1.02,-0.24c1.12,0.37 2.33,0.57 3.57,0.57c0.55,0 1,0.45 1,1v3.49c0,0.55 -0.45,1 -1,1c-9.39,0 -17,-7.61 -17,-17c0,-0.55 0.45,-1 1,-1h3.5c0.55,0 1,0.45 1,1c0,1.25 0.2,2.45 0.57,3.57c0.11,0.35 0.03,0.74 -0.25,1.02l-2.2,2.2Z">
                        </path>
                    </svg>
                    <a href="tel:18002669693">1800 266 9693</a>
                </div>
                <div class="discCallDay">Monday - Saturday</div>
                <div class="discCallTime">9:30 am - 6:30 pm IST</div>
                <div class="discSocialWrap">
                    <div class="discCallDay">We're socially active. Follow us</div>
                    <a href="https://www.linkedin.com/company/elephantdotin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#fff"
                                d="M12 0a12 12 0 1 0 12 12A12 12 0 0 0 12 0zm-2 16H8v-6h2zM9 9.109A1.109 1.109 0 1 1 10.1 8 1.1 1.1 0 0 1 9 9.109zM17 16h-2v-2.861c0-1.881-2-1.722-2 0V16h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548z" />
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/elephantdotin/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#fff"
                                d="M12 0a12 12 0 1 0 12 12A12 12 0 0 0 12 0zm3 8h-1.35c-.538 0-.65.221-.65.778V10h2l-.209 2H13v7h-3v-7H8v-2h2V7.692C10 5.923 10.931 5 13.029 5H15z" />
                        </svg>
                    </a>
                    <a href="https://twitter.com/elephantdotin">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#fff"
                                d="M12 0a12 12 0 1 0 12 12A12 12 0 0 0 12 0zm6.066 9.645A8.168 8.168 0 0 1 5.5 16.9a5.778 5.778 0 0 0 4.252-1.189 2.879 2.879 0 0 1-2.684-1.995 2.881 2.881 0 0 0 1.3-.049 2.876 2.876 0 0 1-2.3-2.853 2.865 2.865 0 0 0 1.3.359 2.877 2.877 0 0 1-.889-3.835 8.153 8.153 0 0 0 5.92 3 2.874 2.874 0 0 1 4.9-2.62 5.729 5.729 0 0 0 1.824-.7 2.884 2.884 0 0 1-1.273 1.591 5.73 5.73 0 0 0 1.65-.453 5.765 5.765 0 0 1-1.434 1.489z" />
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/elephant.in/">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <defs>
                                <style>
                                .insta-cls-1 {
                                    fill: #fff;
                                }

                                .insta-cls-2 {
                                    fill: #152981;
                                }
                                </style>
                            </defs>
                            <title>FinalInstagram</title>
                            <circle class="insta-cls-1" cx="12" cy="12" r="12" />
                            <circle class="insta-cls-1" cx="12" cy="12" r="12" />
                            <circle class="insta-cls-2" cx="15.74" cy="8.26" r="0.84" />
                            <path class="insta-cls-2"
                                d="M19,14.89A3.87,3.87,0,0,1,14.89,19c-.75,0-1,0-2.89,0s-2.14,0-2.89,0A3.87,3.87,0,0,1,5,14.89c0-.75,0-1,0-2.89S5,9.86,5,9.11A3.87,3.87,0,0,1,9.11,5c.75,0,1,0,2.89,0s2.14,0,2.89,0A3.87,3.87,0,0,1,19,9.11c0,.75,0,1,0,2.89S19,14.14,19,14.89Z" />
                            <path class="insta-cls-1"
                                d="M14.83,6.3c-.74,0-1,0-2.83,0s-2.09,0-2.83,0A2.63,2.63,0,0,0,6.3,9.17c0,.74,0,1,0,2.83s0,2.09,0,2.83A2.63,2.63,0,0,0,9.17,17.7c.74,0,1,0,2.83,0s2.09,0,2.83,0a2.63,2.63,0,0,0,2.87-2.87c0-.74,0-1,0-2.83s0-2.09,0-2.83A2.63,2.63,0,0,0,14.83,6.3Z" />
                            <circle class="insta-cls-2" cx="12" cy="12" r="4" />
                            <circle class="insta-cls-1" cx="12" cy="12" r="2.5" />
                            <circle class="insta-cls-2" cx="16" cy="8" r="0.75" />
                        </svg>
                    </a>
                    <a href="https://www.quora.com/profile/Elephant-Insurance-2/">
                        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <defs>
                                <style>
                                .quora-cls-1 {
                                    fill: #fff;
                                }

                                .quora-cls-2 {
                                    fill: #152981;
                                }
                                </style>
                            </defs>
                            <title>Quora</title>
                            <circle class="quora-cls-1" cx="12" cy="12" r="12" />
                            <path class="quora-cls-2"
                                d="M17.56,15.6s-.06.9-.88.9c-.63,0-1.06-.48-1.47-1.11a5.56,5.56,0,0,0,1.88-4.2A5.41,5.41,0,0,0,11.8,5.68a5.41,5.41,0,0,0-5.3,5.51,5.4,5.4,0,0,0,5.3,5.5h0a5.18,5.18,0,0,0,1.52-.23,3.19,3.19,0,0,0,2.6,1.86c2.48,0,2.58-2.72,2.58-2.72Zm-5.76.18c-1.71,0-3.09-2.06-3.09-4.59s1.38-4.6,3.09-4.6,3.08,2.06,3.08,4.6a6.14,6.14,0,0,1-.59,2.7,2.8,2.8,0,0,0-1.64-1.28,3.44,3.44,0,0,0-2.71.57l.32.69a1.63,1.63,0,0,1,1.15,0c.52.12.92.84,1.38,1.67h0A2.16,2.16,0,0,1,11.8,15.78Z" />
                        </svg>
                    </a>
                    <a href="https://in.pinterest.com/elephantdotin/">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="#fff"
                                d="M12 0a12 12 0 1 0 12 12A12 12 0 0 0 12 0zm0 19a7 7 0 0 1-2.073-.312 7.758 7.758 0 0 0 .87-1.835l.437-1.664a1.873 1.873 0 0 0 1.6.8c2.111 0 3.633-1.941 3.633-4.354A4.108 4.108 0 0 0 12.155 7.6c-3.021 0-4.625 2.024-4.625 4.232a3.137 3.137 0 0 0 1.422 2.712c.132.062.2.034.234-.094l.193-.793a.21.21 0 0 0-.049-.2 2.727 2.727 0 0 1-.521-1.6A3.03 3.03 0 0 1 11.97 8.82a2.763 2.763 0 0 1 2.924 2.848c0 1.894-.957 3.2-2.2 3.2a1.016 1.016 0 0 1-1.036-1.265 14.153 14.153 0 0 0 .58-2.331.879.879 0 0 0-.886-.986c-.7 0-1.268.727-1.268 1.7a2.511 2.511 0 0 0 .211 1.04s-.695 2.939-.822 3.484a6.678 6.678 0 0 0-.025 2.008A7 7 0 1 1 12 19z" />
                        </svg>
                    </a>
                </div>

                <div class="discDetailWrap">
                    <div class="discDetailItem"> <img
                            src="/public/assets_new/home_assets/images/new_img/new-irda-logo.png"> </div>
                    <div class="discDetailItem"> <span>CIN</span>: U67200MH2003PTC141621 </div>
                    <div class="discDetailItem"> <span>IRDAI Registration No.</span>: 217 </div>
                    <div class="discDetailItem"> <span>Valid from </span>: 13/10/2021 to 12/10/2024 </div>
                    <div class="discDetailItem"> <span>Category</span> : Composite Broker </div>
                    <div class="discDetailItem"> <span>Principal Officer Name</span>: Mr. S. V. Thakkar </div>
                </div>
                <div class="d-flex">
                    <div class="certificate iso hideTabMob">

                        <div onclick="openISO()">
                            <img src="/public/assets_new/home_assets/images/new_img/iso-27001-2022.png" />
                        </div>
                    </div>
                    <div class="certificate hideTabMob">
                        <div id="DigiCertClickID_reXhhpi7_1">
                            <div id="DigiCertClickID_reXhhpi7Seal"
                                style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: default;">
                                <img src="//seal.digicert.com/seals/cascade/?tag=reXhhpi7&amp;referer=beta.elephant.in&amp;format=png&amp;an=min"
                                    alt="DigiCert Secured Site Seal" tabindex="0" role="link"
                                    style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: pointer;" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 discCol">
                <div class="row footerDesktop">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="discTxtSec discTxt discSecRowPad">
                            <div class="discTitle">General Insurance</div>
                            <a href="/motor-insurance/car-insurance">Car Insurance</a>
                            <a href="/motor-insurance/two-wheeler-insurance">Two-Wheeler Insurance</a>
                            <a href="/travel-insurance">Travel Insurance</a>
                            <a href="/home-insurance">Home Insurance</a>
                            <a href="/cyber-insurance">Cyber Insurance</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="discTxtSec discTxt">
                            <div class="discTitle">Health Insurance</div>
                            <a href="/health-insurance">Health Insurance</a>
                            <!-- <a href="#">Senior Citizen Health Insurance</a> -->
                            <a href="/super-top-up-insurance">Super Top-Up Insurance</a>
                            <a href="/critical-illness-insurance">Critical Illness Insurance</a>
                            <a href="/personal-accident-insurance">Personal Accident Insurance</a>
                            <a
                                href=" https://affinity.elephant.in/customerportal?partner=ZEdBWnI4c05INzQ2NWdkUmx2b3IyZz09&product=T0FnWGZyVmx0dnU1U3VMeitxbi9PQT09">Women
                                Cancer Insurance</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="discTxtSec discTxt discTxtLifeInMob">
                            <div class="discTitle">Life Insurance</div>
                            <a class="discTxtSec-mb" href="/term-life-Insurance">Term Life Insurance</a>
                            <div class="discTitle">Investment Plan</div>
                            <a href="/guaranteed-return-plan">Guaranteed Return Plans</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="discTxtSec discTxt">
                            <div class="discTitle">Business Insurance Products</div>
                            <a
                                href="https://sme<?= ((ENVIRONMENT == "preproduction")?"preprod":'')?>.elephant.in/group-health-insurance">Group
                                Health Insurance</a>
                            <a href="https://sme<?= ((ENVIRONMENT == "preproduction")?"preprod":'')?>.elephant.in/">Group
                                Personal Accident</a>
                            <a
                                href="https://sme<?= ((ENVIRONMENT == "preproduction")?"preprod":'')?>.elephant.in/fpi/fire-package.aspx?PrevUrl=/fire-property-package">Fire
                                Package Policy</a>
                            <a
                                href="https://sme<?= ((ENVIRONMENT == "preproduction")?"preprod":'')?>.elephant.in/workmennew">Workmen
                                Compensation</a>
                            <a
                                href="https://sme<?= ((ENVIRONMENT == "preproduction")?"preprod":'')?>.elephant.in/directors-officers">Directors
                                and Officers Liability</a>
                            <a href="/motor-insurance/corporate-motor-fleet-insurance">Corporate Motor Fleet
                                Insurance</a>
                            <a href="/commercialcar">Commercial Car Insurance</a>
                            <a href="<?= $CorporateTravel?>">Corporate Travel Insurance</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="discTxtSec discTxt discTxtSecTablet discTxtSectorsMob">
                            <div class="discTitle">Business Insurance Sectors</div>
                            <a
                                href="https://sme<?= ((ENVIRONMENT == "preproduction")?"preprod":'')?>.elephant.in/hospitality">Hospitality
                                and Leisure</a>
                            <a
                                href="https://sme<?= ((ENVIRONMENT == "preproduction")?"preprod":'')?>.elephant.in/educational-institute">Educational
                                Institute</a>
                            <a href="https://sme<?= ((ENVIRONMENT == "preproduction")?"preprod":'')?>.elephant.in/shop">Shops
                                and Establishments</a>
                            <a
                                href="https://sme<?= ((ENVIRONMENT == "preproduction")?"preprod":'')?>.elephant.in/fpi/fire-package.aspx?PrevUrl=/salon">Salons
                                and Spas</a>
                            <a
                                href="https://sme<?= ((ENVIRONMENT == "preproduction")?"preprod":'')?>.elephant.in/fpi/fire-package.aspx?PrevUrl=/office">Commercial
                                Offices</a>
                            <a
                                href="https://sme<?= ((ENVIRONMENT == "preproduction")?"preprod":'')?>.elephant.in/fpi/fire-package.aspx?PrevUrl=/clinic">Hospitals
                                and Clinics</a>
                            <a href="https://sme<?= ((ENVIRONMENT == "preproduction")?"preprod":'')?>.elephant.in/">Diamonds
                                and Jewellery</a>
                            <a href="https://sme<?= ((ENVIRONMENT == "preproduction")?"preprod":'')?>.elephant.in/">Media
                                and Entertainment</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="discTxtSec discTxt discTxtLifeInMob">
                            <div class="discTitle">Elephant Benefits 360</div>
                            <a class="discTxtSec-mb" href="/eb360">EB360 Login</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="discTxtSec discTxt">
                            <div class="discTitle">Company</div>
                            <a href="/about-us">About Us</a>
                            <a href="/knowledge-center/latestnews">Latest News</a>
                            <a href="/knowledge-center/blogs/">Blogs</a>
                            <a href="/knowledge-center/testimonials">Testimonials</a>
                            <a href="/knowledge-center/faq">FAQs</a>
                            <a href="/sitemap">Sitemap</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="discTxtSec discTxt discTxtSecForSupporrtTablet discTxtSecForSupporrtMob">
                            <div class="discTitle discSupport">Support</div>
                            <!-- <a href="https://pos.elephant.in<?php echo $query_string; ?>">Become a Agent</a> -->
                            <a href="https://pos.elephant.in<?php echo $query_string; ?>">Become a Agent</a>
                            <!-- <a href="/get-started">Get Started</a> -->
                            <a href="/cancellation-and-refunds">Cancellation & Refunds</a>
                            <a href="/contact-us">Contact Us</a>
                            <a href="/customer-login/grievance-redressal">Grievance Redressal Mechanism</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                        <div class="discTxtSec discTxt">
                            <div class="discTitle discLegal">Legal</div>
                            <a href="/privacy-policy">Privacy Policy</a>
                            <a href="/terms-and-condition">Terms & Conditions</a>
                            <a href="/disclaimer">Disclaimer</a>
                        </div>
                    </div>
                </div>


                <div class="row footerTabMob">
                    <div class="col-6">
                        <div class="discTxtSec discTxt discSecRowPad">
                            <div class="discTitle">General Insurance</div>
                            <a href="/motor-insurance/car-insurance">Car Insurance</a>
                            <a href="/motor-insurance/two-wheeler-insurance">Two-Wheeler Insurance</a>
                            <a href="/travel-insurance">Travel Insurance</a>
                            <a href="/home-insurance">Home Insurance</a>
                            <a href="/cyber-insurance">Cyber Insurance</a>
                        </div>
                        <div class="discTxtSec discTxt life_footer_mobile">
                            <div class="discTitle">Life Insurance</div>
                            <a class="discTxtSec-mb" href="/term-life-Insurance">Term Life Insurance</a>
                            <div class="discTitle">Investment Plan</div>
                            <a href="/guaranteed-return-plan">Guaranteed Return Plans</a>
                        </div>
                        <div class="discTxtSec discTxt">
                            <div class="discTitle">Business Insurance Sectors</div>
                            <a href="http://cmots.smeinsure.in/hospitality">Hospitality and Leisure</a>
                            <a href="http://cmots.smeinsure.in/educational-institute">Educational Institute</a>
                            <a href="http://cmots.smeinsure.in/shop">Shops and Establishments</a>
                            <a href="http://cmots.smeinsure.in/fpi/fire-package.aspx?PrevUrl=/salon">Salons and Spas</a>
                            <a href="http://cmots.smeinsure.in/fpi/fire-package.aspx?PrevUrl=/office">Commercial
                                Offices</a>
                            <a href="http://cmots.smeinsure.in/fpi/fire-package.aspx?PrevUrl=/clinic">Hospitals and
                                Clinics</a>
                            <a href="http://cmots.smeinsure.in/#">Diamonds and Jewellery</a>
                            <a href="http://cmots.smeinsure.in/#">Media and Entertainment</a>
                        </div>
                        <div class="discTxtSec discTxt footer_mob_support">
                            <div class="discTitle discSupport ">Support</div>
                            <a href="https://uatpos.elephant.in<?php echo $query_string; ?>">Become a Agent</a>
                            <!-- <a href="/get-started">Get Started</a> -->
                            <a href="/cancellation-and-refunds">Cancellation & Refunds</a>
                            <a href="/contact-us">Contact Us</a>
                            <a href="/customer-login/grievance-redressal">Grievance Redressal Mechanism</a>
                        </div>
                        <!-- <div class="discTxtSec discTxt">
                            <div class="discTitle discLegal">Legal</div>
                            <a href="/privacy-policy">Privacy Policy</a>
                            <a href="/terms-and-condition">Terms & Conditions</a>
                            <a href="/disclaimer">Disclaimer</a>
                        </div> -->
                    </div>
                    <div class="col-6">
                        <div class="discTxtSec discTxt">
                            <div class="discTitle">Health Insurance</div>
                            <a href="/health-insurance">Health Insurance</a>
                            <!-- <a href="#">Senior Citizen Health Insurance</a> -->
                            <a href="/super-top-up-insurance">Super Top-Up Insurance</a>
                            <a href="/critical-illness-insurance">Critical Illness Insurance</a>
                            <a href="/personal-accident-insurance">Personal Accident Insurance</a>
                            <a
                                href=" https://betaaffinity.elephant.in/customerportal?partner=OFlYNXlnV1JSNldPbWtQNHBEc2ZHdz09&product=bStqeGs3Z2pTRkRqV1VuemQwNUhmdz09">Women
                                Cancer Insurance</a>
                        </div>
                        <div class="discTxtSec discTxt">
                            <div class="discTitle">Business Insurance Products</div>
                            <a href="http://cmots.smeinsure.in/group-health-insurance">Group Health Insurance</a>
                            <!-- <a href="https://sme.elephant.in/">Group Personal Accident</a> -->
                            <a href="http://cmots.smeinsure.in/#">Group Personal Accident</a>
                            <!-- <a href="https://sme.elephant.in/FPI/FirePropertyPackage.aspx">Fire Package Policy</a> -->
                            <a href="http://cmots.smeinsure.in/fpi/fire-package.aspx?PrevUrl=/fire-property-package">Fire
                                Package Policy</a>
                            <a href="http://cmots.smeinsure.in/workmennew">Workmen Compensation</a>
                            <!-- <a href="https://sme.elephant.in/directors-officers">Directors and Officers Liability</a> -->
                            <a href="http://cmots.smeinsure.in/directors-officers">Directors and Officers Liability</a>
                            <a href="/motor-insurance/corporate-motor-fleet-insurance">Corporate Motor Fleet
                                Insurance</a>
                            <a href="/commercialcar">Commercial Car Insurance</a>
                            <a href="<?= $CorporateTravel?>">Corporate Travel Insurance</a>
                        </div>
                        <div class="discTxtSec discTxt">
                            <div class="discTitle">Elephant Benefits 360</div>
                            <a href="/eb360" target="_blank">EB360 Login</a>
                        </div>
                        <div class="discTxtSec discTxt">
                            <div class="discTitle">Company</div>
                            <a href="/about-us">About Us</a>
                            <a href="/knowledge-center/latestnews">Latest News</a>
                            <a href="/knowledge-center/blogs/">Blogs</a>
                            <a href="/knowledge-center/testimonials">Testimonials</a>
                            <a href="/knowledge-center/faq">FAQs</a>
                            <a href="/sitemap">Sitemap</a>
                        </div>
                        <div class="discTxtSec discTxt">
                            <div class="discTitle discLegal">Legal</div>
                            <a href="/privacy-policy">Privacy Policy</a>
                            <a href="/terms-and-condition">Terms & Conditions</a>
                            <a href="/disclaimer">Disclaimer</a>
                        </div>
                    </div>
                </div>

                <div class="row footerMobile">
                    <div class="col-6">
                        <div class="discTxtSec discTxt discSecRowPad">
                            <div class="discTitle">General Insurance</div>
                            <a href="/motor-insurance/car-insurance">Car Insurance</a>
                            <a href="/motor-insurance/two-wheeler-insurance">Two-Wheeler Insurance</a>
                            <a href="/travel-insurance">Travel Insurance</a>
                            <a href="/home-insurance">Home Insurance</a>
                            <a href="/cyber-insurance">Cyber Insurance</a>
                        </div>
                        <div class="discTxtSec discTxt life_footer_mobile">
                            <div class="discTitle">Life Insurance</div>
                            <a class="discTxtSec-mb" href="/term-life-Insurance">Term Life Insurance</a>
                            <div class="discTitle">Investment Plan</div>
                            <a href="/guaranteed-return-plan">Guaranteed Return Plans</a>
                        </div>
                        <div class="discTxtSec discTxt">
                            <div class="discTitle">Business Insurance Sectors</div>
                            <a href="http://cmots.smeinsure.in/hospitality">Hospitality and Leisure</a>
                            <a href="http://cmots.smeinsure.in/educational-institute">Educational Institute</a>
                            <a href="http://cmots.smeinsure.in/shop">Shops and Establishments</a>
                            <a href="http://cmots.smeinsure.in/fpi/fire-package.aspx?PrevUrl=/salon">Salons and Spas</a>
                            <a href="http://cmots.smeinsure.in/fpi/fire-package.aspx?PrevUrl=/office">Commercial
                                Offices</a>
                            <a href="http://cmots.smeinsure.in/fpi/fire-package.aspx?PrevUrl=/clinic">Hospitals and
                                Clinics</a>
                            <a href="http://cmots.smeinsure.in/#">Diamonds and Jewellery</a>
                            <a href="http://cmots.smeinsure.in/#">Media and Entertainment</a>
                        </div>
                        <div class="discTxtSec discTxt footer_mob_support">
                            <div class="discTitle discSupport ">Support</div>
                            <a href="https://uatpos.elephant.in<?php echo $query_string; ?>">Become a Agent</a>
                            <!-- <a href="/get-started">Get Started</a> -->
                            <a href="/cancellation-and-refunds">Cancellation & Refunds</a>
                            <a href="/contact-us">Contact Us</a>
                            <a href="/customer-login/grievance-redressal">Grievance Redressal Mechanism</a>
                        </div>
                        <div class="discTxtSec discTxt">
                            <div class="discTitle discLegal">Legal</div>
                            <a href="/privacy-policy">Privacy Policy</a>
                            <a href="/terms-and-condition">Terms & Conditions</a>
                            <a href="/disclaimer">Disclaimer</a>
                        </div>
                    </div>
                    <div class="col-6 col_6_2">
                        <div class="discTxtSec discTxt">
                            <div class="discTitle">Health Insurance</div>
                            <a href="/health-insurance">Health Insurance</a>
                            <a href="/super-top-up-insurance">Super Top-Up Insurance</a>
                            <a href="/critical-illness-insurance">Critical Illness Insurance</a>
                            <a href="/personal-accident-insurance">Personal Accident Insurance</a>
                            <a
                                href=" https://betaaffinity.elephant.in/customerportal?partner=OFlYNXlnV1JSNldPbWtQNHBEc2ZHdz09&product=bStqeGs3Z2pTRkRqV1VuemQwNUhmdz09">Women
                                Cancer Insurance</a>
                        </div>
                        <div class="discTxtSec discTxt">
                            <div class="discTitle">Business Insurance Products</div>
                            <a href="http://cmots.smeinsure.in/group-health-insurance">Group Health Insurance</a>
                            <a href="http://cmots.smeinsure.in/#">Group Personal Accident</a>
                            <a href="http://cmots.smeinsure.in/fpi/fire-package.aspx?PrevUrl=/fire-property-package">Fire
                                Package Policy</a>
                            <a href="http://cmots.smeinsure.in/workmennew">Workmen Compensation</a>
                            <a href="http://cmots.smeinsure.in/directors-officers">Directors and Officers Liability</a>
                            <a href="/motor-insurance/corporate-motor-fleet-insurance">Corporate Motor Fleet
                                Insurance</a>
                            <a href="/commercialcar">Commercial Car Insurance</a>
                            <a href="<?= $CorporateTravel?>">Corporate Travel Insurance</a>
                        </div>
                        <div class="discTxtSec discTxt">
                            <div class="discTitle">Elephant Benefits 360</div>
                            <a href="/eb360" target="_blank">EB360 Login</a>
                        </div>
                        <div class="discTxtSec discTxt">
                            <div class="discTitle">Company</div>
                            <a href="/about-us">About Us</a>
                            <a href="/knowledge-center/latestnews">Latest News</a>
                            <a href="/knowledge-center/blogs/">Blogs</a>
                            <a href="/knowledge-center/testimonials">Testimonials</a>
                            <a href="/knowledge-center/faq">FAQs</a>
                            <a href="/sitemap">Sitemap</a>
                        </div>

                    </div>
                </div>






                <div class="row idraRowMob">
                    <div class="col">
                        <div class="discDetailWrapMob">
                            <div class="discDetailItem">
                                <img src="/public/assets_new/home_assets/images/new_img/new-irda-logo.png">
                            </div>
                            <div class="discDetailItem">
                                <span>CIN</span>: U67200MH2003PTC141621
                            </div>
                            <div class="discDetailItem">
                                <span>IRDAI Registration No.</span>: 217
                            </div>
                            <div class="discDetailItem">
                                <span>Valid from </span>: 13/10/2024 to 12/10/2027
                            </div>
                            <div class="discDetailItem">
                                <span>Category</span> : Composite Broker
                            </div>
                            <div class="discDetailItem">
                                <span>Principal Officer Name</span>: Mr. S. V. Thakkar
                            </div>
                        </div>
                        <div class="certificate d-flex mb-4">
                            <!-- <div id="DigiCertClickID_reXhhpi7"></div> -->
                            <div class="certificate iso ">

                                <div onclick="openISO()">
                                    <img src="/public/assets_new/home_assets/images/new_img/iso-27001-2022.png" />
                                </div>
                            </div>
                            <div class="certificate">
                                <div id="DigiCertClickID_reXhhpi7_1">
                                    <div id="DigiCertClickID_reXhhpi7Seal"
                                        style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: default;">
                                        <img src="//seal.digicert.com/seals/cascade/?tag=reXhhpi7&amp;referer=beta.elephant.in&amp;format=png&amp;an=min"
                                            alt="DigiCert Secured Site Seal" tabindex="0" role="link"
                                            style="text-decoration: none; text-align: center; display: block; vertical-align: baseline; font-size: 100%; font-style: normal; text-indent: 0px; line-height: 1; width: auto; margin: 0px auto; padding: 0px; border: 0px; background: transparent; position: relative; inset: 0px; clear: both; float: none; cursor: pointer;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="discTxtSec discTxtSecMob">
                            <div class="discFooter">*Standard T&C apply.</div>
                            <div class="discFooter">Insurance is the subject matter of solicitation. For more details on
                                policy terms, conditions, exclusions, limitations, please refer/read policy brochure
                                carefully before concluding sale.</div>
                            <div class="discFooter">Visitors are hereby informed that their information submitted on the
                                website may be shared with insurers for soliciting insurance policies.The product
                                information for comparison displayed on this website is of the insurers with whom our
                                company has an agreement.Product information is authentic and solely based on the
                                information received from the Insurer.</div>
                            <div class="discFooter">
                                <span>© Alliance Insurance Brokers Pvt. Ltd.</span><span> All rights reserved.</span>
                            </div>

                            <div class="discFooter">
                                <svg class="paymentGatewaySvg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 120 76">
                                    <defs>
                                        <style>
                                        .visa-cls-1 {
                                            fill: #f9f9f9;
                                            stroke: #fff;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 0.8px;
                                        }

                                        .visa-cls-2 {
                                            fill: #005bac;
                                        }

                                        .visa-cls-3 {
                                            fill: #f6ac1d;
                                        }
                                        </style>
                                    </defs>
                                    <title>VisaUpdated</title>
                                    <g>
                                        <g id="g3235">
                                            <path id="rect3917" class="visa-cls-1"
                                                d="M7.28,0H112.64a6.7,6.7,0,0,1,6.77,6.63V68.37A6.7,6.7,0,0,1,112.64,75H7.28A6.7,6.7,0,0,1,.51,68.37V6.63A6.7,6.7,0,0,1,7.28,0Z">
                                            </path>
                                            <g id="g3907">
                                                <g id="??_1" data-name="?? 1">
                                                    <g id="??_1-2" data-name="?? 1-2">
                                                        <g id="g3891">
                                                            <path id="path3893" class="visa-cls-2"
                                                                d="M49.59,23.45,44.88,51.81h7.53l4.7-28.36Zm-11.07,0L31.24,43l-.84-4.2h0l-.19-.94a23.53,23.53,0,0,0-6.68-8.31,34.55,34.55,0,0,0-3.35-2.27l6.53,24.56h7.83l12-28.35ZM68,31.34c0-3.21,7.33-2.8,10.57-1.05l1.07-6.1A22,22,0,0,0,72.82,23c-3.76,0-12.63,1.6-12.63,9.37,0,7.37,10.43,7.37,10.43,11.28s-9.41,3.15-12.44.73L57.05,50.7a21.53,21.53,0,0,0,8.51,1.6c5.15,0,12.9-2.61,12.9-9.71-.09-7.37-10.61-8.05-10.61-11.25ZM98.7,23.45H92.55a3.47,3.47,0,0,0-3.46,2.12L77.8,51.81h7.85l1.56-4.2h9.57l.89,4.2h6.92ZM89.52,41.78l4-10.61,2.22,10.61Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                                <g id="??_1-3" data-name="?? 1-3">
                                                    <g id="??_1-4" data-name="?? 1-4">
                                                        <g id="g3897">
                                                            <path id="path3899" class="visa-cls-3"
                                                                d="M28,26.12a3.27,3.27,0,0,0-3.65-2.56H12.22l-.15.5a30.18,30.18,0,0,1,11.4,5.53,21.94,21.94,0,0,1,7.08,9.34Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <svg class="paymentGatewaySvg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 120 76">
                                    <defs>
                                        <style>
                                        .rup-cls-1 {
                                            fill: #f9f9f9;
                                        }

                                        .rup-cls-2 {
                                            fill: #004a8c;
                                        }
                                        </style>
                                    </defs>
                                    <title>Rupayupdated</title>
                                    <g>
                                        <g id="g10480">
                                            <rect id="rect10482" class="rup-cls-1" x="2.78" y="1" width="115.22"
                                                height="74.21" rx="6.56" ry="6.56"></rect>
                                            <g id="text10484">
                                                <path id="path2999" class="rup-cls-2"
                                                    d="M25.44,47.7l-1-5.05a8.08,8.08,0,0,0-.24-1,2.71,2.71,0,0,0-.25-.67,1.24,1.24,0,0,0-.39-.4,1.29,1.29,0,0,0-.58-.13h-.73l-2.44,7.29h-6.2l7-20.52h8.22a9.11,9.11,0,0,1,5.89,1.4,3.64,3.64,0,0,1,.62,4.23A8.29,8.29,0,0,1,34.22,35a8.72,8.72,0,0,1-3.35,2.82,10.45,10.45,0,0,1-2.1.8v.13a3.39,3.39,0,0,1,.72.46,2.82,2.82,0,0,1,.54.6,3.33,3.33,0,0,1,.46.8,8,8,0,0,1,.34,1.08l1.63,6.1Zm2.95-14a1.78,1.78,0,0,0,0-1.62,2.05,2.05,0,0,0-1.82-.6H25.29l-1.6,4.68H24.8a3.87,3.87,0,0,0,2.37-.78,3.56,3.56,0,0,0,.77-.78,3.51,3.51,0,0,0,.47-.9Z">
                                                </path>
                                                <path id="path3001" class="rup-cls-2"
                                                    d="M42.85,47.7l.76-2.26h0l-.93.84a10,10,0,0,1-1.2.85,8.34,8.34,0,0,1-1.5.66,5.58,5.58,0,0,1-1.82.27A4.14,4.14,0,0,1,36,47.61,2.65,2.65,0,0,1,35,46.31a4.16,4.16,0,0,1-.2-2,11.69,11.69,0,0,1,.59-2.47l3-8.85h6.09l-2.84,8.39a2.44,2.44,0,0,0-.15,1.64,1,1,0,0,0,1,.53A2.34,2.34,0,0,0,44,43a4.11,4.11,0,0,0,1-1.66L47.79,33h6.1l-5,14.59Z">
                                                </path>
                                                <path id="path3003" class="rup-cls-2"
                                                    d="M73.91,33.94a9.4,9.4,0,0,1-1.57,2.88,11,11,0,0,1-2.48,2.28,11.84,11.84,0,0,1-3.24,1.47,12.88,12.88,0,0,1-3.85.53H61l-2.26,6.6H52.45l7-20.52h8.43a14.25,14.25,0,0,1,3.44.34,4.6,4.6,0,0,1,2.22,1.17,3.34,3.34,0,0,1,.92,2.11A7.84,7.84,0,0,1,73.91,33.94Zm-6.62.22a3,3,0,0,0,.2-1.22,1.32,1.32,0,0,0-.36-.77,1.82,1.82,0,0,0-.79-.44,5.3,5.3,0,0,0-1.06-.13H64.12L62.3,36.67h1.38A4.11,4.11,0,0,0,65,36.49,3.32,3.32,0,0,0,66,36a3.42,3.42,0,0,0,.72-.8,4,4,0,0,0,.48-1Z">
                                                </path>
                                                <path id="path3005" class="rup-cls-2"
                                                    d="M79.28,47.7,80,45.48h0a8.74,8.74,0,0,1-2.44,1.82,6.23,6.23,0,0,1-2.9.69,4.19,4.19,0,0,1-1.82-.34,2.38,2.38,0,0,1-1-1,2.9,2.9,0,0,1-.35-1.44,5.63,5.63,0,0,1,.33-1.82,7.44,7.44,0,0,1,.77-1.61,5.92,5.92,0,0,1,1.29-1.49,8.46,8.46,0,0,1,2-1.21,12.37,12.37,0,0,1,2.94-.71l3.81-.47a1.27,1.27,0,0,0,0-.67,1.07,1.07,0,0,0-.31-.52,1.75,1.75,0,0,0-.64-.32,2.82,2.82,0,0,0-.91-.13,11.79,11.79,0,0,0-3,.45c-.49.13-1,.28-1.4.44l-1.28.51,1.35-3.95a11.75,11.75,0,0,1,1.42-.46c.55-.14,1.1-.25,1.7-.36s1.15-.2,1.82-.26a14.33,14.33,0,0,1,1.6-.11,9.66,9.66,0,0,1,3.21.44A3.37,3.37,0,0,1,88,34.3a3.59,3.59,0,0,1,.45,2.15,11.57,11.57,0,0,1-.67,3L85,47.57Zm.11-6.42a3.19,3.19,0,0,0-1.27.46,1.83,1.83,0,0,0-.75,1,1.4,1.4,0,0,0,0,.5.75.75,0,0,0,.44.76,1.54,1.54,0,0,0,.64.11,2.86,2.86,0,0,0,.91-.16,3.11,3.11,0,0,0,.85-.53,4,4,0,0,0,1.24-1.84l.2-.57Z">
                                                </path>
                                                <path id="path3007" class="rup-cls-2"
                                                    d="M97.71,48.12a26.83,26.83,0,0,1-1.82,2.42,13.77,13.77,0,0,1-2.17,2.08,10.53,10.53,0,0,1-2.55,1.44,8.49,8.49,0,0,1-3,.53h-1.6l-.93-.18a7,7,0,0,1-.88-.29l1.57-4.6a1.25,1.25,0,0,0,.44.29,5.38,5.38,0,0,0,.55.24,2.93,2.93,0,0,0,.6.15h.56A3.62,3.62,0,0,0,90,49.87a3.46,3.46,0,0,0,1.2-1L92,47.7,90.88,33.12h6.74L97,40.19l-.16.64v1.42a3.39,3.39,0,0,1-.13.55h0c.15-.33.37-.73.62-1.19s.55-.93.86-1.44L102.29,33h5.92Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <svg class="paymentGatewaySvg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 120 76">
                                    <defs>
                                        <style>
                                        .master-cls-1 {
                                            fill: #227fbb;
                                        }

                                        .master-cls-2 {
                                            fill: #f2c500;
                                        }

                                        .master-cls-3 {
                                            fill: #e94b35;
                                        }

                                        .master-cls-4 {
                                            fill: #fff;
                                        }
                                        </style>
                                    </defs>
                                    <title>Mastercard</title>
                                    <g id="round-rect">
                                        <g id="payment_002-master-card" data-name="payment 002-master-card">
                                            <path id="bg" class="master-cls-1"
                                                d="M112,0H8A8,8,0,0,0,0,8V68a8,8,0,0,0,8,8H112a8,8,0,0,0,8-8V8A8,8,0,0,0,112,0Z">
                                            </path>
                                            <g id="Group">
                                                <path id="path2268" class="master-cls-2"
                                                    d="M112.41,37.64a31.23,31.23,0,1,1-62.46,0v0a31.23,31.23,0,1,1,62.46,0Z">
                                                </path>
                                                <path id="path1350" class="master-cls-3"
                                                    d="M39.09,6.07a31.57,31.57,0,0,0,.2,63.14A30.91,30.91,0,0,0,60.3,61h0a33.8,33.8,0,0,0,3.17-3.38h-6.4a31.35,31.35,0,0,1-2.33-3.26h11A29.63,29.63,0,0,0,67.6,51H52.93a31.18,31.18,0,0,1-1.31-3.31H68.91a32,32,0,0,0,.89-16.78H50.71a28.84,28.84,0,0,1,.89-3.31H68.89a33.22,33.22,0,0,0-1.35-3.39H52.93a29.44,29.44,0,0,1,1.79-3.31h11a31,31,0,0,0-2.42-3.38H57.17a28.63,28.63,0,0,1,3.14-3.19,30.94,30.94,0,0,0-21-8.23Z">
                                                </path>
                                                <path id="path4157" class="master-cls-4"
                                                    d="M50.52,45.68l.41-2.86c-.22,0-.56.1-.85.1-1.16,0-1.29-.62-1.21-1.08L49.8,36h1.76L52,32.85H50.33l.33-2H47.34c-.08.08-2,11.06-2,12.39,0,2,1.09,2.87,2.64,2.85a8.74,8.74,0,0,0,2.5-.44Z">
                                                </path>
                                                <path id="path4155" class="master-cls-4"
                                                    d="M51.57,40.23c0,4.75,3.1,5.88,5.74,5.88a8.46,8.46,0,0,0,3.52-.55l.58-3.24a10.19,10.19,0,0,1-3.53.83c-3.57,0-2.94-2.7-2.94-2.7h6.75a24,24,0,0,0,.44-3.06c0-2.22-1.09-4.92-4.74-4.92-3.34,0-5.82,3.65-5.82,7.76Zm5.83-4.74c1.88,0,1.53,2.13,1.53,2.3H55.24c0-.22.35-2.3,2.16-2.3Z">
                                                </path>
                                                <path id="path4151" class="master-cls-4"
                                                    d="M78.46,45.68,79.05,42a7.9,7.9,0,0,1-2.75.83c-2.36,0-3.3-1.82-3.3-3.78,0-4,2-6.15,4.28-6.15a5.86,5.86,0,0,1,3.06,1l.54-3.57a11.83,11.83,0,0,0-3.74-.82c-3.84,0-7.58,3.37-7.58,9.69,0,4.19,2,7,6,7a15.27,15.27,0,0,0,2.91-.46Z">
                                                </path>
                                                <path id="path4149" class="master-cls-4"
                                                    d="M32.23,32.53a11.41,11.41,0,0,0-4,.74l-.48,2.89a10.41,10.41,0,0,1,3.62-.59c1.24,0,2.15.14,2.15,1.16a2.12,2.12,0,0,1-.11.84s-1-.08-1.43-.08c-2.88,0-5.9,1.24-5.9,5,0,3,2,3.63,3.21,3.63a4.27,4.27,0,0,0,3.41-1.55l-.11,1.29h2.93l1.31-9.26c0-3.93-3.39-4-4.57-4Zm.71,7.53c.07.57-.35,3.22-2.35,3.22A1.22,1.22,0,0,1,29.29,42c0-.92.49-2,2.93-2a2.35,2.35,0,0,1,.72.07Z">
                                                </path>
                                                <path id="path4145" class="master-cls-4"
                                                    d="M39.91,46c.75,0,5,.19,5-4.27,0-4.18-4-3.36-4-5,0-.84.65-1.1,1.83-1.1.47,0,2.27.15,2.27.15l.42-3a15.41,15.41,0,0,0-3.06-.26c-2.46,0-5,1-5,4.39,0,3.85,4.16,3.46,4.16,5.08,0,1.08-1.16,1.17-2.06,1.17a10.92,10.92,0,0,1-3-.51l-.44,2.94a10.66,10.66,0,0,0,3.73.41Z">
                                                </path>
                                                <path id="path4139" class="master-cls-4"
                                                    d="M106,29.86l-.72,4.5a4.38,4.38,0,0,0-3.21-1.74c-3,0-5.58,3.71-5.58,8,0,2.75,1.35,5.45,4.12,5.45a4.12,4.12,0,0,0,3.09-1.41l-.14,1.2h3.23l2.54-16Zm-1.54,8.78c0,1.77-.87,4.14-2.68,4.14-1.19,0-1.75-1-1.75-2.61,0-2.6,1.15-4.32,2.61-4.32,1.2,0,1.82.83,1.82,2.79Z">
                                                </path>
                                                <polygon id="path4133" class="master-cls-4"
                                                    points="14.23 45.86 16.25 33.79 16.55 45.86 18.84 45.86 23.11 33.79 21.22 45.86 24.62 45.86 27.24 29.85 21.98 29.85 18.7 39.67 18.53 29.85 13.68 29.85 11.02 45.86 14.23 45.86 14.23 45.86">
                                                </polygon>
                                                <path id="path4131" class="master-cls-4"
                                                    d="M65.46,45.88c1-5.56,1.14-10.08,3.45-9.26a13.16,13.16,0,0,1,1.24-3.89,3.08,3.08,0,0,0-.64,0c-1.49,0-2.6,2.06-2.6,2.06l.3-1.89H64.12L62,45.88Z">
                                                </path>
                                                <path id="path4149-2" data-name="path4149" class="master-cls-4"
                                                    d="M86.13,32.53a11.41,11.41,0,0,0-4,.74l-.48,2.89a10.41,10.41,0,0,1,3.62-.59c1.24,0,2.15.14,2.15,1.16a2.12,2.12,0,0,1-.11.84s-1-.08-1.43-.08c-2.88,0-5.9,1.24-5.9,5,0,3,2,3.63,3.21,3.63a4.27,4.27,0,0,0,3.41-1.55l-.11,1.29h2.93l1.31-9.26c0-3.93-3.39-4-4.57-4Zm.71,7.53c.07.57-.35,3.22-2.35,3.22A1.22,1.22,0,0,1,83.19,42c0-.92.49-2,2.93-2a2.35,2.35,0,0,1,.72.07Z">
                                                </path>
                                                <path id="path4131-2" data-name="path4131" class="master-cls-4"
                                                    d="M93.37,45.88c1-5.56,1.15-10.08,3.46-9.26a12.93,12.93,0,0,1,1.23-3.89,3,3,0,0,0-.64,0c-1.49,0-2.59,2.06-2.59,2.06l.3-1.89H92L90,45.88Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <svg class="paymentGatewaySvg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 120 76">
                                    <defs>
                                        <style>
                                        .ae-cls-1 {
                                            fill: #2c8cd0;
                                        }

                                        .ae-cls-2 {
                                            fill: #5cc1ef;
                                            stroke: #fff;
                                            stroke-linecap: round;
                                            stroke-linejoin: round;
                                            stroke-width: 2.71px;
                                        }
                                        </style>
                                    </defs>
                                    <title>AEUpdated</title>
                                    <g id="layer1">
                                        <path id="rect3784" class="ae-cls-1"
                                            d="M9.34,1H110.51A6.47,6.47,0,0,1,117,7.45V68a6.49,6.49,0,0,1-6.47,6.51H9.34A6.5,6.5,0,0,1,2.84,68V7.49A6.48,6.48,0,0,1,9.32,1Z">
                                        </path>
                                        <g id="text3792">
                                            <path id="path3065" class="ae-cls-2"
                                                d="M19.51,34.8h-3l-1.19-2.51H9.92L8.8,34.8H5.89l5.29-11.07h2.89Zm-5.06-4.37-1.8-4.12-1.81,4.12Z">
                                            </path>
                                            <path id="path3067" class="ae-cls-2"
                                                d="M20.92,34.8V23.73H25l2.46,7.55,2.44-7.55H34V34.8H31.49V26L28.8,34.75H26.16L23.47,26v8.71Z">
                                            </path>
                                            <path id="path3069" class="ae-cls-2"
                                                d="M36.77,34.8V23.73H46.83v1.8H39.51V28H46.4V29.8H39.51v3h7.57v1.8Z">
                                            </path>
                                            <path id="path3071" class="ae-cls-2"
                                                d="M49.43,34.8V23.73h5.76a12.06,12.06,0,0,1,3.17.3,3.14,3.14,0,0,1,1.57,1,2.83,2.83,0,0,1,.59,1.81,2.59,2.59,0,0,1-.9,2.06A4.75,4.75,0,0,1,57,30a5.71,5.71,0,0,1,1.46.92A13.35,13.35,0,0,1,60,32.71l1.67,2.15H58.36l-2-2.41a13.11,13.11,0,0,0-1.45-1.62,2,2,0,0,0-.81-.47,5.9,5.9,0,0,0-1.39-.13h-.54v4.63Zm2.75-6.39h2a13.53,13.53,0,0,0,2.46-.13,1.54,1.54,0,0,0,.77-.47,1.26,1.26,0,0,0,.28-.83,1.17,1.17,0,0,0-.37-.9,1.78,1.78,0,0,0-1-.44H52.18Z">
                                            </path>
                                            <path id="path3073" class="ae-cls-2" d="M63,34.8V23.73h2.72V34.8Z"></path>
                                            <path id="path3075" class="ae-cls-2"
                                                d="M77.11,30.74l2.65.68a4.84,4.84,0,0,1-2,2.7,6.81,6.81,0,0,1-3.61.88,6.43,6.43,0,0,1-4.44-1.52,5.12,5.12,0,0,1-1.81-4.12,5.42,5.42,0,0,1,1.81-4.3,6.78,6.78,0,0,1,4.6-1.51,6.44,6.44,0,0,1,4,1.19,4.23,4.23,0,0,1,1.39,2L77,27.3A2.43,2.43,0,0,0,76,26a3.37,3.37,0,0,0-1.81-.49,3.52,3.52,0,0,0-2.44.87,3.87,3.87,0,0,0-.94,2.87,4.06,4.06,0,0,0,.89,3,3.34,3.34,0,0,0,2.4.91A3,3,0,0,0,77.11,30.74Z">
                                            </path>
                                            <path id="path3077" class="ae-cls-2"
                                                d="M94.29,34.8h-3l-1.17-2.51H84.72L83.59,34.8H80.72L86,23.73h2.91Zm-5-4.37-1.81-4.12-1.8,4.12Z">
                                            </path>
                                            <path id="path3079" class="ae-cls-2"
                                                d="M95.79,34.8V23.73h2.66L104,31.12V23.73h2.55V34.8h-2.75l-5.42-7.22V34.8Z">
                                            </path>
                                        </g>
                                        <g id="text3798">
                                            <path id="path3048" class="ae-cls-1"
                                                d="M19.51,34.8h-3l-1.19-2.51H9.92L8.8,34.8H5.89l5.29-11.07h2.89Zm-5.06-4.37-1.8-4.12-1.81,4.12Z">
                                            </path>
                                            <path id="path3050" class="ae-cls-1"
                                                d="M20.92,34.8V23.73H25l2.46,7.55,2.44-7.55H34V34.8H31.49V26L28.8,34.75H26.16L23.47,26v8.71Z">
                                            </path>
                                            <path id="path3052" class="ae-cls-1"
                                                d="M36.77,34.8V23.73H46.83v1.8H39.51V28H46.4V29.8H39.51v3h7.57v1.8Z">
                                            </path>
                                            <path id="path3054" class="ae-cls-1"
                                                d="M49.43,34.8V23.73h5.76a12.06,12.06,0,0,1,3.17.3,3.14,3.14,0,0,1,1.57,1,2.83,2.83,0,0,1,.59,1.81,2.59,2.59,0,0,1-.9,2.06A4.75,4.75,0,0,1,57,30a5.71,5.71,0,0,1,1.46.92A13.35,13.35,0,0,1,60,32.71l1.67,2.15H58.36l-2-2.41a13.11,13.11,0,0,0-1.45-1.62,2,2,0,0,0-.81-.47,5.9,5.9,0,0,0-1.39-.13h-.54v4.63Zm2.75-6.39h2a13.53,13.53,0,0,0,2.46-.13,1.54,1.54,0,0,0,.77-.47,1.26,1.26,0,0,0,.28-.83,1.17,1.17,0,0,0-.37-.9,1.78,1.78,0,0,0-1-.44H52.18Z">
                                            </path>
                                            <path id="path3056" class="ae-cls-1" d="M63,34.8V23.73h2.72V34.8Z"></path>
                                            <path id="path3058" class="ae-cls-1"
                                                d="M77.11,30.74l2.65.68a4.84,4.84,0,0,1-2,2.7,6.81,6.81,0,0,1-3.61.88,6.43,6.43,0,0,1-4.44-1.52,5.12,5.12,0,0,1-1.81-4.12,5.42,5.42,0,0,1,1.81-4.3,6.78,6.78,0,0,1,4.6-1.51,6.44,6.44,0,0,1,4,1.19,4.23,4.23,0,0,1,1.39,2L77,27.3A2.43,2.43,0,0,0,76,26a3.37,3.37,0,0,0-1.81-.49,3.52,3.52,0,0,0-2.44.87,3.87,3.87,0,0,0-.94,2.87,4.06,4.06,0,0,0,.89,3,3.34,3.34,0,0,0,2.4.91A3,3,0,0,0,77.11,30.74Z">
                                            </path>
                                            <path id="path3060" class="ae-cls-1"
                                                d="M94.29,34.8h-3l-1.17-2.51H84.72L83.59,34.8H80.72L86,23.73h2.91Zm-5-4.37-1.81-4.12-1.8,4.12Z">
                                            </path>
                                            <path id="path3062" class="ae-cls-1"
                                                d="M95.79,34.8V23.73h2.66L104,31.12V23.73h2.55V34.8h-2.75l-5.42-7.22V34.8Z">
                                            </path>
                                        </g>
                                        <g id="text3818">
                                            <path id="path3033" class="ae-cls-2"
                                                d="M27.46,51.66V40.58H37.53v1.81H30.14v2.46H37v1.8H30.14v3h7.57v1.81Z">
                                            </path>
                                            <path id="path3035" class="ae-cls-2"
                                                d="M38.75,51.66l4.63-5.75-4.21-5.33h3.2l2.71,3.62,2.67-3.62h3.18L46.7,46l4.65,5.69H48.06l-3-3.83-3,3.83Z">
                                            </path>
                                            <path id="path3037" class="ae-cls-2"
                                                d="M52.77,51.66V40.58h4.47a19.67,19.67,0,0,1,3.25.17,3.9,3.9,0,0,1,1.95,1.08,3.57,3.57,0,0,1,.32,4,3.53,3.53,0,0,1-1.13,1.08,4.4,4.4,0,0,1-1.43.52,19.25,19.25,0,0,1-2.84.17h-1.8v4.17Zm2.75-9.2v3.15H57a8.31,8.31,0,0,0,2.17-.18,1.66,1.66,0,0,0,.85-.55,1.2,1.2,0,0,0,.3-.86,1.32,1.32,0,0,0-.43-1,2.14,2.14,0,0,0-1.1-.48,13,13,0,0,0-2,0Z">
                                            </path>
                                            <path id="path3039" class="ae-cls-2"
                                                d="M65.44,51.66V40.58H71.2a12,12,0,0,1,3.16.31,3,3,0,0,1,1.59,1,2.8,2.8,0,0,1,.58,1.81,2.7,2.7,0,0,1-.88,2.06,4.73,4.73,0,0,1-2.7,1,5.9,5.9,0,0,1,1.47.93A12.21,12.21,0,0,1,76,49.56l1.64,2.15H74.36l-2-2.4A14.85,14.85,0,0,0,71,47.68a2.44,2.44,0,0,0-.83-.47,6.33,6.33,0,0,0-1.38-.12h-.56v4.62Zm2.74-6.4h2a12.54,12.54,0,0,0,2.45-.12,1.53,1.53,0,0,0,.78-.47,1.26,1.26,0,0,0,.27-.83,1.15,1.15,0,0,0-.36-.91,1.7,1.7,0,0,0-1-.43H68.18Z">
                                            </path>
                                            <path id="path3041" class="ae-cls-2"
                                                d="M79.13,51.66V40.58H89.18v1.81H81.86v2.46h6.81v1.8H81.86v3h7.59v1.81Z">
                                            </path>
                                            <path id="path3043" class="ae-cls-2"
                                                d="M91.09,48.06l2.66-.21a2.56,2.56,0,0,0,1,1.6,3.41,3.41,0,0,0,2,.51,3.58,3.58,0,0,0,2.08-.43,1.32,1.32,0,0,0,.67-1.07.87.87,0,0,0-.29-.67,2.59,2.59,0,0,0-1-.49c-.32,0-1.06-.23-2.2-.47a8.36,8.36,0,0,1-3.09-1.1,2.72,2.72,0,0,1-1.34-2.24,2.53,2.53,0,0,1,.6-1.59,3.65,3.65,0,0,1,1.68-1.12,8.39,8.39,0,0,1,2.69-.29,6.85,6.85,0,0,1,3.85.91,3.06,3.06,0,0,1,1.35,2.44l-2.74.1a1.83,1.83,0,0,0-.74-1.22,3.26,3.26,0,0,0-1.81-.38,3.89,3.89,0,0,0-1.81.39.78.78,0,0,0-.43.69.85.85,0,0,0,.42.69,8.75,8.75,0,0,0,2.51.74,13.75,13.75,0,0,1,2.94.79,3.62,3.62,0,0,1,1.5,1.12,2.86,2.86,0,0,1,.54,1.81,2.74,2.74,0,0,1-.65,1.81,3.65,3.65,0,0,1-1.8,1.24,9.82,9.82,0,0,1-3,.4,6.73,6.73,0,0,1-4-1,4,4,0,0,1-1.64-2.81Z">
                                            </path>
                                            <path id="path3045" class="ae-cls-2"
                                                d="M103.74,48.06l2.67-.21a2.53,2.53,0,0,0,1,1.6,3.39,3.39,0,0,0,2,.51,3.7,3.7,0,0,0,2.06-.43,1.26,1.26,0,0,0,.66-1.07.9.9,0,0,0-.27-.67,2.78,2.78,0,0,0-1-.49c-.33,0-1-.23-2.19-.47a8.36,8.36,0,0,1-3.09-1.1,2.72,2.72,0,0,1-1.35-2.24,2.45,2.45,0,0,1,.58-1.59,3.58,3.58,0,0,1,1.7-1.12,8.52,8.52,0,0,1,2.71-.29,6.7,6.7,0,0,1,3.83.91,3,3,0,0,1,1.35,2.44l-2.73.1a1.76,1.76,0,0,0-.76-1.22,3.07,3.07,0,0,0-1.8-.38,3.77,3.77,0,0,0-1.81.39.78.78,0,0,0-.43.69.82.82,0,0,0,.39.69,8.91,8.91,0,0,0,2.52.74,13.92,13.92,0,0,1,3,.79,3.69,3.69,0,0,1,1.5,1.12,3.05,3.05,0,0,1-.11,3.62,3.86,3.86,0,0,1-1.81,1.24,9.88,9.88,0,0,1-3,.4,6.67,6.67,0,0,1-3.94-1,4,4,0,0,1-1.66-2.81Z">
                                            </path>
                                        </g>
                                        <g id="text3824">
                                            <path id="path3018" class="ae-cls-1"
                                                d="M27.46,51.66V40.58H37.53v1.81H30.14v2.46H37v1.8H30.14v3h7.57v1.81Z">
                                            </path>
                                            <path id="path3020" class="ae-cls-1"
                                                d="M38.75,51.66l4.63-5.75-4.21-5.33h3.2l2.71,3.62,2.67-3.62h3.18L46.7,46l4.65,5.69H48.06l-3-3.83-3,3.83Z">
                                            </path>
                                            <path id="path3022" class="ae-cls-1"
                                                d="M52.77,51.66V40.58h4.47a19.67,19.67,0,0,1,3.25.17,3.9,3.9,0,0,1,1.95,1.08,3.57,3.57,0,0,1,.32,4,3.53,3.53,0,0,1-1.13,1.08,4.4,4.4,0,0,1-1.43.52,19.25,19.25,0,0,1-2.84.17h-1.8v4.17Zm2.75-9.2v3.15H57a8.31,8.31,0,0,0,2.17-.18,1.66,1.66,0,0,0,.85-.55,1.2,1.2,0,0,0,.3-.86,1.32,1.32,0,0,0-.43-1,2.14,2.14,0,0,0-1.1-.48,13,13,0,0,0-2,0Z">
                                            </path>
                                            <path id="path3024" class="ae-cls-1"
                                                d="M65.44,51.66V40.58H71.2a12,12,0,0,1,3.16.31,3,3,0,0,1,1.59,1,2.8,2.8,0,0,1,.58,1.81,2.7,2.7,0,0,1-.88,2.06,4.73,4.73,0,0,1-2.7,1,5.9,5.9,0,0,1,1.47.93A12.21,12.21,0,0,1,76,49.56l1.64,2.15H74.36l-2-2.4A14.85,14.85,0,0,0,71,47.68a2.44,2.44,0,0,0-.83-.47,6.33,6.33,0,0,0-1.38-.12h-.56v4.62Zm2.74-6.4h2a12.54,12.54,0,0,0,2.45-.12,1.53,1.53,0,0,0,.78-.47,1.26,1.26,0,0,0,.27-.83,1.15,1.15,0,0,0-.36-.91,1.7,1.7,0,0,0-1-.43H68.18Z">
                                            </path>
                                            <path id="path3026" class="ae-cls-1"
                                                d="M79.13,51.66V40.58H89.18v1.81H81.86v2.46h6.81v1.8H81.86v3h7.59v1.81Z">
                                            </path>
                                            <path id="path3028" class="ae-cls-1"
                                                d="M91.09,48.06l2.66-.21a2.56,2.56,0,0,0,1,1.6,3.41,3.41,0,0,0,2,.51,3.58,3.58,0,0,0,2.08-.43,1.32,1.32,0,0,0,.67-1.07.87.87,0,0,0-.29-.67,2.59,2.59,0,0,0-1-.49c-.32,0-1.06-.23-2.2-.47a8.36,8.36,0,0,1-3.09-1.1,2.72,2.72,0,0,1-1.34-2.24,2.53,2.53,0,0,1,.6-1.59,3.65,3.65,0,0,1,1.68-1.12,8.39,8.39,0,0,1,2.69-.29,6.85,6.85,0,0,1,3.85.91,3.06,3.06,0,0,1,1.35,2.44l-2.74.1a1.83,1.83,0,0,0-.74-1.22,3.26,3.26,0,0,0-1.81-.38,3.89,3.89,0,0,0-1.81.39.78.78,0,0,0-.43.69.85.85,0,0,0,.42.69,8.75,8.75,0,0,0,2.51.74,13.75,13.75,0,0,1,2.94.79,3.62,3.62,0,0,1,1.5,1.12,2.86,2.86,0,0,1,.54,1.81,2.74,2.74,0,0,1-.65,1.81,3.65,3.65,0,0,1-1.8,1.24,9.82,9.82,0,0,1-3,.4,6.73,6.73,0,0,1-4-1,4,4,0,0,1-1.64-2.81Z">
                                            </path>
                                            <path id="path3030" class="ae-cls-1"
                                                d="M103.74,48.06l2.67-.21a2.53,2.53,0,0,0,1,1.6,3.39,3.39,0,0,0,2,.51,3.7,3.7,0,0,0,2.06-.43,1.26,1.26,0,0,0,.66-1.07.9.9,0,0,0-.27-.67,2.78,2.78,0,0,0-1-.49c-.33,0-1-.23-2.19-.47a8.36,8.36,0,0,1-3.09-1.1,2.72,2.72,0,0,1-1.35-2.24,2.45,2.45,0,0,1,.58-1.59,3.58,3.58,0,0,1,1.7-1.12,8.52,8.52,0,0,1,2.71-.29,6.7,6.7,0,0,1,3.83.91,3,3,0,0,1,1.35,2.44l-2.73.1a1.76,1.76,0,0,0-.76-1.22,3.07,3.07,0,0,0-1.8-.38,3.77,3.77,0,0,0-1.81.39.78.78,0,0,0-.43.69.82.82,0,0,0,.39.69,8.91,8.91,0,0,0,2.52.74,13.92,13.92,0,0,1,3,.79,3.69,3.69,0,0,1,1.5,1.12,3.05,3.05,0,0,1-.11,3.62,3.86,3.86,0,0,1-1.81,1.24,9.88,9.88,0,0,1-3,.4,6.67,6.67,0,0,1-3.94-1,4,4,0,0,1-1.66-2.81Z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <svg class="paymentGatewaySvg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 120 76">
                                    <defs>
                                        <style>
                                        .net-cls-1 {
                                            fill: #f9f9f9;
                                        }

                                        .net-cls-2 {
                                            fill: #265697;
                                        }
                                        </style>
                                    </defs>
                                    <title>Netupdated</title>
                                    <g>
                                        <g id="g4282-8">
                                            <rect id="rect4284-8" class="net-cls-1" x="3.15" y="1" width="113.85"
                                                height="73.32" rx="6.48" ry="6.48"></rect>
                                            <g id="text4225-9-2">
                                                <path id="path3000" class="net-cls-2"
                                                    d="M32.6,38.34,22.78,24.92c-.42-.58-.78-1.1-1.08-1.57s-.59-.92-.81-1.31H20.8a18,18,0,0,0,.09,2.16,22.56,22.56,0,0,1,0,2.47V38.34H13.17V10.51h7.9l9.42,12.73.44.6c.16.23.32.48.5.72l.47.72a4.77,4.77,0,0,1,.34.63h0c0-.49-.09-1-.11-1.53V10.51H39.9V38.34Z">
                                                </path>
                                                <path id="path3002" class="net-cls-2"
                                                    d="M45.46,38.34V10.51H62.77v6.56h-9v4.05h8.41v6.57H53.76v4.09h9.59v6.56Z">
                                                </path>
                                                <path id="path3004" class="net-cls-2"
                                                    d="M81.5,17.07V38.34H73.07V17.07H65.29V10.51H89.37v6.56Z"></path>
                                                <path id="path3006" class="net-cls-2"
                                                    d="M26.91,57.7a5.46,5.46,0,0,1-.4,2.11,4.14,4.14,0,0,1-1.22,1.67,5.74,5.74,0,0,1-2.13,1.12A10.78,10.78,0,0,1,20,63H12.12V45.7h7.42a10.25,10.25,0,0,1,5.19,1,3.46,3.46,0,0,1,1.71,3.15A3.55,3.55,0,0,1,26.26,51a3.62,3.62,0,0,1-.5.9,3.37,3.37,0,0,1-.71.7,4.59,4.59,0,0,1-.79.5,7.32,7.32,0,0,1-.81.35l-.72.18h0a5.3,5.3,0,0,1,1.8.5,4.94,4.94,0,0,1,1.33.94,3.53,3.53,0,0,1,.83,1.22A3.22,3.22,0,0,1,27,57.64Zm-6.09-6.9a1.31,1.31,0,0,0-.66-1.24,4,4,0,0,0-1.81-.36h-1v3.26h1.49a2.53,2.53,0,0,0,.83-.13,1.83,1.83,0,0,0,.63-.34,1.52,1.52,0,0,0,.4-.54,1.64,1.64,0,0,0,.13-.65Zm.52,6.88a1.56,1.56,0,0,0-.16-.7,1.43,1.43,0,0,0-.41-.56,1.84,1.84,0,0,0-.61-.34,2.71,2.71,0,0,0-.8-.11h-2v3.6h1.8a2.94,2.94,0,0,0,.93-.12,2.1,2.1,0,0,0,.72-.35,1.62,1.62,0,0,0,.47-.57,2.11,2.11,0,0,0,.18-.78Z">
                                                </path>
                                                <path id="path3008" class="net-cls-2"
                                                    d="M35.59,63V61.07h0a4.45,4.45,0,0,1-1.51,1.6,4.58,4.58,0,0,1-3.89.29A3.2,3.2,0,0,1,29,62.15a3.89,3.89,0,0,1-.71-1.21,5.36,5.36,0,0,1-.21-1.49,5.18,5.18,0,0,1,.18-1.36,3.25,3.25,0,0,1,.66-1.26,4.21,4.21,0,0,1,1.37-1,7.47,7.47,0,0,1,2.25-.62l3.07-.39a1,1,0,0,0-.15-.56,1.09,1.09,0,0,0-.45-.4,2.26,2.26,0,0,0-.63-.29,5.43,5.43,0,0,0-.81-.09,7.1,7.1,0,0,0-1.22.11,7.65,7.65,0,0,0-1.17.27,9.69,9.69,0,0,0-1.07.38l-.92.43V51.34c.31-.13.65-.25,1.07-.38l1.31-.3L33,50.44a9.5,9.5,0,0,1,1.31-.09,9.65,9.65,0,0,1,2.83.36,4.31,4.31,0,0,1,1.8,1.1,4.1,4.1,0,0,1,1,1.8,9.07,9.07,0,0,1,.31,2.54V63Zm-1.8-5.4a2.16,2.16,0,0,0-.95.39,1,1,0,0,0-.35.83,2.94,2.94,0,0,0,0,.42,1.65,1.65,0,0,0,.22.36.74.74,0,0,0,.38.27,1.6,1.6,0,0,0,.57.11,1.93,1.93,0,0,0,.72-.15,1.91,1.91,0,0,0,.58-.43,2.29,2.29,0,0,0,.5-1.57v-.47Z">
                                                </path>
                                                <path id="path3010" class="net-cls-2"
                                                    d="M50.61,63V56.26a5.68,5.68,0,0,0,0-1,2.05,2.05,0,0,0-.27-.67,1.12,1.12,0,0,0-.47-.36,1.9,1.9,0,0,0-.63-.11,1.26,1.26,0,0,0-.65.17,1.86,1.86,0,0,0-.43.41,2.06,2.06,0,0,0-.25.59,2.66,2.66,0,0,0,0,.69v7H42.6V50.66h5.15v1.92h0a5.12,5.12,0,0,1,.63-.84,3.92,3.92,0,0,1,.86-.71,5.18,5.18,0,0,1,1.1-.5,4.21,4.21,0,0,1,1.32-.18,5.27,5.27,0,0,1,1.62.25,3.07,3.07,0,0,1,1.28.85A4.16,4.16,0,0,1,55.4,53a8,8,0,0,1,.31,2.43V63Z">
                                                </path>
                                                <path id="path3012" class="net-cls-2"
                                                    d="M66,63l-2.74-6.36h0V63h-5.2V44.71h5.15V56.46h0l2.48-5.8h5.8l-3.35,5.65,3.6,6.7Z">
                                                </path>
                                                <path id="path3014" class="net-cls-2"
                                                    d="M78.2,47.32a2.25,2.25,0,0,1-.18,1,2.47,2.47,0,0,1-.55.77,2.69,2.69,0,0,1-.9.51,3.45,3.45,0,0,1-1.23.2,3.24,3.24,0,0,1-1.19-.2,2.62,2.62,0,0,1-.9-.52,2.49,2.49,0,0,1-.57-.8,2.24,2.24,0,0,1-.2-.92,2.13,2.13,0,0,1,.21-1,2.08,2.08,0,0,1,.6-.75,2.59,2.59,0,0,1,.92-.47A3.59,3.59,0,0,1,75.34,45a3.44,3.44,0,0,1,1.19.18,2.52,2.52,0,0,1,.9.48,2.19,2.19,0,0,1,.58.74A2.05,2.05,0,0,1,78.2,47.32ZM72.8,63V50.66H78V63Z">
                                                </path>
                                                <path id="path3016" class="net-cls-2"
                                                    d="M88.42,63V56.26a5.68,5.68,0,0,0,0-1,2,2,0,0,0-.44-.67,1.06,1.06,0,0,0-.45-.36,2,2,0,0,0-.64-.11,1.3,1.3,0,0,0-1.07.58,2.06,2.06,0,0,0-.25.59,2.66,2.66,0,0,0,0,.69v7H80.4V50.66h5.13v1.92h0a4.34,4.34,0,0,1,.64-.84A3.56,3.56,0,0,1,87,51a6.41,6.41,0,0,1,1.1-.5,4.27,4.27,0,0,1,1.33-.18,5.16,5.16,0,0,1,1.61.25,3,3,0,0,1,1.29.85A4.33,4.33,0,0,1,93.19,53a8.71,8.71,0,0,1,.31,2.43V63Z">
                                                </path>
                                                <path id="path3018" class="net-cls-2"
                                                    d="M109.29,61.28a9.58,9.58,0,0,1-.2,1.93,6.43,6.43,0,0,1-.63,1.8,5.73,5.73,0,0,1-1.1,1.53,6.4,6.4,0,0,1-1.65,1.23,9.65,9.65,0,0,1-2.27.77,13.63,13.63,0,0,1-2.85.27H99.42l-1.08-.14a9.4,9.4,0,0,1-.92-.2,3.62,3.62,0,0,1-.63-.22v-4l.63.34a7.26,7.26,0,0,0,.88.34,10.05,10.05,0,0,0,1,.26,4.52,4.52,0,0,0,1.1.12,5.1,5.1,0,0,0,1.64-.25,3.74,3.74,0,0,0,1.19-.65,2.84,2.84,0,0,0,.91-2.14v-.78h0a3.39,3.39,0,0,1-.54.65,3.67,3.67,0,0,1-.79.62,4.67,4.67,0,0,1-1,.43,4,4,0,0,1-1.24.18,5.45,5.45,0,0,1-2.25-.45,4.93,4.93,0,0,1-1.62-1.25,5.59,5.59,0,0,1-1-2,9,9,0,0,1-.34-2.59,8.42,8.42,0,0,1,.47-2.94,6.07,6.07,0,0,1,1.17-2,5.11,5.11,0,0,1,1.8-1.28,5.52,5.52,0,0,1,2.09-.41,4,4,0,0,1,1.15.14,3.53,3.53,0,0,1,.9.36,2.38,2.38,0,0,1,.67.51,3.24,3.24,0,0,1,.47.57h0V50.67h5.11Zm-5.1-4.81a3.66,3.66,0,0,0,0-.81,2.82,2.82,0,0,0-.28-.75,1.83,1.83,0,0,0-.56-.58,1.41,1.41,0,0,0-.87-.23,1.46,1.46,0,0,0-.79.21,1.75,1.75,0,0,0-.61.6,2.87,2.87,0,0,0-.38.9,6.11,6.11,0,0,0-.13,1.13,3.56,3.56,0,0,0,.44,1.89,1.53,1.53,0,0,0,1.38.71,1.73,1.73,0,0,0,.81-.2,2,2,0,0,0,.6-.56,2.9,2.9,0,0,0,.36-.85,5.17,5.17,0,0,0,.11-1Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <svg class="paymentGatewaySvg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 120 76">
                                    <defs>
                                        <style>
                                        .upi-cls-1 {
                                            fill: none;
                                        }

                                        .upi-cls-2 {
                                            fill: #fff;
                                        }

                                        .upi-cls-3 {
                                            fill: #3a3734;
                                        }

                                        .upi-cls-4 {
                                            fill: #716d6a;
                                        }

                                        .upi-cls-5 {
                                            fill: #0e8635;
                                        }

                                        .upi-cls-6 {
                                            fill: #e97208;
                                        }

                                        .upi-cls-7 {
                                            fill: gray;
                                        }
                                        </style>
                                    </defs>
                                    <title>UPI 3</title>
                                    <rect class="upi-cls-1" x="1.75" y="3" width="116.57" height="69.57"></rect>
                                    <rect class="upi-cls-2" x="1.75" y="6.76" width="113.45" height="62.24"></rect>
                                    <path class="upi-cls-3"
                                        d="M17.79,48.89h.66l-.6,2.52a1.14,1.14,0,0,0,0,.85.77.77,0,0,0,.69.28,1.15,1.15,0,0,0,.83-.28,1.45,1.45,0,0,0,.45-.85l.73-2.52h.66l-.66,2.6a2.17,2.17,0,0,1-.73,1.26,2.06,2.06,0,0,1-1.35.41,1.33,1.33,0,0,1-1.13-.41,1.47,1.47,0,0,1-.13-1.26l.62-2.6Zm78.38,4.16,1-4.16h2.35l-.13.59H97.64l-.26,1H99l-.15.58h-1.6l-.32,1.36h1.59l-.15.6Zm0-3.14a1.55,1.55,0,0,0-.5-.38,1.88,1.88,0,0,0-1.83.32A2.11,2.11,0,0,0,93.15,51a1.4,1.4,0,0,0,.15,1.13,1,1,0,0,0,.92.43,1.94,1.94,0,0,0,.71-.13,5,5,0,0,0,.72-.39l-.19.75a2.5,2.5,0,0,1-.64.3,2.81,2.81,0,0,1-.71,0,1.82,1.82,0,0,1-.83-.17,1.35,1.35,0,0,1-.58-.45,1.47,1.47,0,0,1-.29-.72,2.48,2.48,0,0,1,0-.86,3,3,0,0,1,.38-.85,2.62,2.62,0,0,1,.62-.71,2.48,2.48,0,0,1,.81-.45,2.42,2.42,0,0,1,.88-.17,1.87,1.87,0,0,1,.66.11,2,2,0,0,1,.55.32Zm-6.43,1.5h1.13l-.19-.95a.74.74,0,0,1,0-.21,1,1,0,0,1,0-.25.85.85,0,0,1-.13.25l-.11.22-.66.94Zm1.43,1.64L91,52H89.4l-.73,1.07H88l3-4.32.92,4.32Zm-5.45,0,1-4.16H89l-.13.59h-1.6l-.24,1h1.6l-.15.58h-1.6L86.4,53Zm-1.88-2.39H84a1.46,1.46,0,0,0,.74-.13A.63.63,0,0,0,85,50.1v-.49a1.09,1.09,0,0,0-.66-.15h-.13L84,50.66Zm-.17.53-.45,1.88H82.6l1-4.18h.88a3,3,0,0,1,.6,0,.91.91,0,0,1,.34.17.86.86,0,0,1,.21.4,2.35,2.35,0,0,1,0,.53,1.64,1.64,0,0,1-.44.79,1.28,1.28,0,0,1-.77.33L85.36,53h-.88l-.88-1.88Zm-4.08,1.88,1-4.16h2.25l-.13.59h-1.6l-.24,1h1.6l-.15.58h-1.6l-.32,1.36H82l-.13.6Zm-.75-3.61L78,53.05h-.65l.86-3.59H77l.13-.58H80l-.13.58Zm-6.73,3.59,1-4.32L75,51.26l.15.23a2.61,2.61,0,0,0,.17.28l.7-2.88h.6l-1,4.31-2-2.58a1.07,1.07,0,0,0-.15-.22.8.8,0,0,1-.11-.25l-.69,2.9Zm-1.6,0,1-4.16h.67l-1,4.16Zm-4.87-.83.58-.24a.63.63,0,0,0,.19.41.67.67,0,0,0,.47.15.87.87,0,0,0,.51-.17.69.69,0,0,0,.17-.49.67.67,0,0,0-.43-.63H67a2.11,2.11,0,0,1-.75-.61.82.82,0,0,1,0-.65,1.4,1.4,0,0,1,.53-.83,1.57,1.57,0,0,1,1-.32,1.17,1.17,0,0,1,.71.17.63.63,0,0,1,.3.51l-.58.28a.49.49,0,0,0-.49-.4.8.8,0,0,0-.47.15.67.67,0,0,0-.24.38c0,.24.11.49.52.71h0a1.92,1.92,0,0,1,.68.55.92.92,0,0,1,0,.69,1.64,1.64,0,0,1-1.66,1.28,1.15,1.15,0,0,1-.8-.24.84.84,0,0,1-.29-.7ZM65,49.46l-.85,3.59h-.66l.85-3.59H63.22l.13-.58h2.82l-.15.58Zm-6.79,3.59,1-4.32,1.88,2.53.15.23.17.28.7-2.88h.6l-1,4.31-2-2.58-.15-.22a.85.85,0,0,1-.13-.25l-.7,2.9Zm-3,0,1-4.16h2.25l-.13.59h-1.6l-.24,1H58l-.15.58H56.28L56,52.45h1.6l-.14.6ZM54,51v-.56a.71.71,0,0,1-.13.28,1.07,1.07,0,0,1-.19.28L52.1,53.24,51.61,51v-.3a1.13,1.13,0,0,1,0-.26.37.37,0,0,1-.09.28.91.91,0,0,1-.11.3l-.94,2h-.6l2-4.34.56,2.63v.2a3,3,0,0,0,.1.32l.3-.45a.21.21,0,0,1,0-.11l1.88-2.63V53h-.62V51Zm-6.28,2,.45-1.88-.83-2.26H48l.51,1.43v.32l.13-.19.11-.15L50,48.86h.66l-1.88,2.26L48.34,53Zm-3-1.59h1.1l-.16-.95a.74.74,0,0,1,0-.21V50a.32.32,0,0,1-.14.25,1,1,0,0,1-.13.22l-.64.94Zm1.41,1.64-.21-1H44.3l-.73,1.07h-.7l3-4.32.92,4.32ZM42,50.62h.17a1.85,1.85,0,0,0,.77-.11.75.75,0,0,0,.21-.51.45.45,0,0,0,0-.45,1.31,1.31,0,0,0-.7-.13H42.3L42,50.57Zm-.17.57-.45,1.88h-.62l1-4.16h1a3.42,3.42,0,0,1,.64,0,.63.63,0,0,1,.53.55,1.63,1.63,0,0,1,0,.54,1.89,1.89,0,0,1-.23.55,1.8,1.8,0,0,1-.39.39,1.28,1.28,0,0,1-.42.17H42.2Zm-6.2,1.24h.56a4.09,4.09,0,0,0,.7,0,1.32,1.32,0,0,0,.45-.21,2,2,0,0,0,.45-.5A2,2,0,0,0,38,51a2.73,2.73,0,0,0,0-.7,1,1,0,0,0-.23-.5.7.7,0,0,0-.35-.21,3.05,3.05,0,0,0-.74,0h-.49Zm-.81.62,1-4.16h.89a5.41,5.41,0,0,1,1.2.1,1.14,1.14,0,0,1,.55.3,1.26,1.26,0,0,1,.35.7,2.11,2.11,0,0,1,0,1,3.35,3.35,0,0,1-.41,1,2.4,2.4,0,0,1-.7.72A2.53,2.53,0,0,1,37,53a6.37,6.37,0,0,1-1.07,0Zm-3,0,1-4.16H35l-.13.59h-1.6l-.24,1h1.6l-.15.58h-1.6l-.32,1.36h1.6L34,53Zm-1.6,0,1-4.16h.68l-1,4.16Zm-3,0,1-4.16H30.5l-.14.59H28.68l-.25,1H30l-.13.58H28.3L27.83,53Zm-1.6,0,1-4.16h.66l-1,4.16Zm-4.56,0,1-4.32,1.88,2.53.15.23.17.28.7-2.88h.6l-1,4.31-1.88-2.58-.19-.22a2,2,0,0,1-.13-.25l-.69,2.9Z">
                                    </path>
                                    <path class="upi-cls-4"
                                        d="M84.16,45.27H79.63l6.3-22.75h4.53Zm-37.6-1.43a2.1,2.1,0,0,1-2,1.54H21.12a1.63,1.63,0,0,1-1.43-.66,1.79,1.79,0,0,1-.19-1.62l5.64-20.51h4.53L24.58,40.92H42.7l5.1-18.33h4.53l-5.9,21.25ZM81.87,23.16a1.64,1.64,0,0,0-1.45-.64h-25L54.21,27H77l-1.32,4.76H53.08L49.32,45.32h4.53l2.43-9.06H76.55a2.86,2.86,0,0,0,1.88-.64A3.17,3.17,0,0,0,79.54,34l2.51-9.1a1.87,1.87,0,0,0-.18-1.67Z">
                                    </path>
                                    <path class="upi-cls-5"
                                        d="M98.28,22.55,103.92,34,92,45.36l1.43-5.17L100,34l-3.14-6.25Z"></path>
                                    <path class="upi-cls-6" d="M94.26,22.55,99.9,34,87.83,45.36Z"></path>
                                    <path class="upi-cls-7"
                                        d="M12.47,2.76h95a11,11,0,0,1,11,11V61.53a11,11,0,0,1-11,11h-95a11,11,0,0,1-11-11V13.76A11,11,0,0,1,12.47,2.76Zm94.9,3.76H12.47A7.22,7.22,0,0,0,5.3,13.76V61.53a7.27,7.27,0,0,0,7.17,7.23h95a7.24,7.24,0,0,0,7.2-7.21V13.76a7.17,7.17,0,0,0-7.14-7.22h-.13Z">
                                    </path>
                                </svg>
                                <svg class="paymentGatewaySvg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 120 76">
                                    <defs>
                                        <style>
                                        .paytm-cls-1 {
                                            fill: none;
                                        }

                                        .paytm-cls-2 {
                                            fill: #fff;
                                        }

                                        .paytm-cls-3 {
                                            fill: #02b9ef;
                                        }

                                        .paytm-cls-4 {
                                            fill: #06306f;
                                        }
                                        </style>
                                    </defs>
                                    <title>PayTM</title>
                                    <rect class="paytm-cls-1" x="1.75" y="3" width="116.57" height="69.57"></rect>
                                    <rect class="paytm-cls-2" x="1.75" y="6.26" width="113.45" height="63.24"></rect>
                                    <path class="paytm-cls-2"
                                        d="M12.47,2.76h95a11,11,0,0,1,11,11V61.53a11,11,0,0,1-11,11h-95a11,11,0,0,1-11-11V13.76A11,11,0,0,1,12.47,2.76Zm94.9,3.76H12.47A7.22,7.22,0,0,0,5.3,13.76V61.53a7.27,7.27,0,0,0,7.17,7.23h95a7.24,7.24,0,0,0,7.2-7.21V13.76a7.17,7.17,0,0,0-7.14-7.22h-.13Z">
                                    </path>
                                    <path class="paytm-cls-3"
                                        d="M83.78,28.28l.67-.54a5,5,0,0,1,7.36.59c.2.23.3.25.5.05s.29-.27.43-.42a5.11,5.11,0,0,1,8.74,3.62c0,4.85,0,9.67,0,14.51a2.58,2.58,0,0,1-2.76,2.8,19.64,19.64,0,0,0-2,0c-.69.07-.89-.15-.89-.88,0-4.72,0-9.44,0-14.17v-.59c0-1.09-.45-1.55-1.5-1.6a1.54,1.54,0,0,0-1.7,1.48c0,.22,0,.46,0,.68V46.06a2.56,2.56,0,0,1-2.82,2.82c-.91,0-2.14.4-2.66-.19S87,47,87,46.09V33.52c0-1.48-1-2.24-2.21-1.73a1.68,1.68,0,0,0-1,1.75c0,3.92,0,7.81,0,11.73v.93A2.57,2.57,0,0,1,81,48.88c-.68,0-1.35-.05-2,0s-.94-.13-.92-.91c0-6.63,0-13.26,0-19.9,0-.29,0-.56,0-.85s.12-.49.49-.49c1.55,0,3.09,0,4.64,0,.39,0,.57.1.54.53A7.13,7.13,0,0,0,83.78,28.28Z">
                                    </path>
                                    <path class="paytm-cls-4"
                                        d="M48,37.42v6.92c0,3-1.58,4.55-4.59,4.57-1.31,0-2.65,0-4,0a4.57,4.57,0,0,1-4.76-4.47,55,55,0,0,1,0-5.74,4.87,4.87,0,0,1,5-4.69h2.19c.71,0,1-.42,1-1.09s-.3-1-1-1-1.52,0-2.27,0a2.6,2.6,0,0,1-2.87-2.87c0-.74-.34-1.73.15-2.17s1.38-.14,2.11-.14h5.65A3.23,3.23,0,0,1,48,30.18C48,32.58,48,35,48,37.42Zm-5.16,3.83v-.84c0-1.72,0-1.72-1.72-1.66a1.25,1.25,0,0,0-1.35,1.37c0,.71,0,1.4,0,2.11,0,1.22.55,1.54,2.31,1.59,1.3,0,.64-.88.76-1.39A9.29,9.29,0,0,0,42.85,41.25Z">
                                    </path>
                                    <path class="paytm-cls-4"
                                        d="M63,35.58c0,2.58,0,5.18,0,7.76,0,2-.51,3.8-2.43,4.86a5.51,5.51,0,0,1-2.5.68c-1.94,0-3.88,0-5.82,0-.47,0-.57-.17-.55-.59,0-.71,0-1.4,0-2.11a2.47,2.47,0,0,1,2.42-2.43c.87,0,1.73,0,2.61,0,.71,0,1.1-.28,1.1-1s-.37-1.05-1.08-1.07a13.5,13.5,0,0,1-3.53-.2,4.69,4.69,0,0,1-3.52-4.33c-.11-3.29,0-6.58-.06-9.87,0-.38.12-.49.49-.48,1.39,0,2.75,0,4.14,0,.6,0,.52.32.52.7v7.42c0,1.08.51,1.65,1.45,1.69,1.11,0,1.6-.43,1.6-1.56,0-2.49,0-5,0-7.5,0-.59.15-.76.74-.75,1.23.05,2.48.07,3.71,0,.68,0,.78.22.76.81C63,30.25,63,32.92,63,35.58Z">
                                    </path>
                                    <path class="paytm-cls-4"
                                        d="M20,39.41V31.15a4,4,0,0,1,4.37-4.36,29.33,29.33,0,0,1,5.3.14,4.39,4.39,0,0,1,3.67,4.49c0,2.44,0,4.89,0,7.33,0,3.08-1.8,5-4.87,5-.93,0-1.86,0-2.79,0-.42,0-.6.12-.59.58,0,.67,0,1.35,0,2a2.45,2.45,0,0,1-2.49,2.51c-.85,0-1.91.36-2.45-.13s-.13-1.54-.15-2.35C20,44.09,20,41.74,20,39.41Zm5.09-4.13v1.6c0,1.91,0,1.91,1.91,1.74a1.16,1.16,0,0,0,1.23-1.3c0-.94,0-1.91,0-2.85.1-2.73-.41-2.46-2.63-2.48-.41,0-.54.12-.54.52C25.15,33.42,25.13,34.35,25.13,35.28Z">
                                    </path>
                                    <path class="paytm-cls-3"
                                        d="M67.8,39.45c0-2.25,0-4.51,0-6.75,0-.52-.12-.74-.69-.73-.76,0-1.78.26-2.2-.12s-.12-1.53-.18-2.34v-.17c0-.79-.26-1.72.08-2.31s1.37-.22,2.09-.41a6,6,0,0,0,3.39-2.34,3.88,3.88,0,0,1,2.35-1.52c.52-.1.84,0,.81.64,0,1,0,1.91,0,2.87,0,.41.14.54.54.52.68,0,1.35,0,2,0,.4,0,.54.13.52.54,0,1.38,0,2.75,0,4.13,0,.39-.1.59-.52.54a1.13,1.13,0,0,0-.26,0c-.74.07-1.77-.34-2.16.17s-.13,1.45-.13,2.21c0,4.59,0,9.16,0,13.75,0,.64-.17.84-.81.79s-1.23,0-1.86,0a3,3,0,0,1-3-3.12Z">
                                    </path>
                                </svg>
                                <svg class="paymentGatewaySvg" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 120 76">
                                    <defs>
                                        <style>
                                        .gpay-cls-1 {
                                            fill: none;
                                        }

                                        .gpay-cls-2 {
                                            fill: #fff;
                                        }

                                        .gpay-cls-3 {
                                            fill: #5f6368;
                                        }

                                        .gpay-cls-4 {
                                            fill: #4285f4;
                                        }

                                        .gpay-cls-5 {
                                            fill: #34a853;
                                        }

                                        .gpay-cls-6 {
                                            fill: #fbbc04;
                                        }

                                        .gpay-cls-7 {
                                            fill: #ea4335;
                                        }
                                        </style>
                                    </defs>
                                    <title>Gpay</title>
                                    <rect class="gpay-cls-1" x="1.75" y="3" width="116.57" height="69.57"></rect>
                                    <rect class="gpay-cls-2" x="3.25" y="6.16" width="113.45" height="63.24"></rect>
                                    <path class="gpay-cls-2"
                                        d="M12.47,2.76h95a11,11,0,0,1,11,11h0V61.53a11,11,0,0,1-11,11h-95a11,11,0,0,1-11-11h0V13.76A11,11,0,0,1,12.47,2.76Zm94.9,3.76H12.47A7.22,7.22,0,0,0,5.3,13.76V61.53a7.27,7.27,0,0,0,7.17,7.23h95a7.24,7.24,0,0,0,7.2-7.21V13.76a7.17,7.17,0,0,0-7.12-7.22h-.15Z">
                                    </path>
                                    <path class="gpay-cls-3"
                                        d="M57.68,37.72v7.35H55.35V26.92h6.18a5.65,5.65,0,0,1,4,1.57,5.26,5.26,0,0,1,0,7.69,5.6,5.6,0,0,1-4,1.54Zm0-8.56v6.33h3.91a3.06,3.06,0,0,0,2.31-.94A3.09,3.09,0,0,0,64,30.18l-.06-.06a3.07,3.07,0,0,0-2.31-1H57.68Z">
                                    </path>
                                    <path class="gpay-cls-3"
                                        d="M72.58,32.25a5.78,5.78,0,0,1,4.08,1.38,4.89,4.89,0,0,1,1.5,3.79v7.65H75.93V43.35h-.1A4.46,4.46,0,0,1,72,45.48a5,5,0,0,1-3.43-1.22,3.86,3.86,0,0,1-1.38-3,3.69,3.69,0,0,1,1.45-3.07A6.16,6.16,0,0,1,72.5,37a7,7,0,0,1,3.43.76v-.53a2.64,2.64,0,0,0-1-2.06,3.27,3.27,0,0,0-2.25-.85A3.58,3.58,0,0,0,69.62,36l-2.05-1.29A5.71,5.71,0,0,1,72.58,32.25Zm-3,9a1.87,1.87,0,0,0,.78,1.52,2.81,2.81,0,0,0,1.81.61,3.68,3.68,0,0,0,2.62-1.09,3.39,3.39,0,0,0,1.16-2.56,4.76,4.76,0,0,0-3-.87,3.91,3.91,0,0,0-2.37.69,2,2,0,0,0-1,1.7Z">
                                    </path>
                                    <path class="gpay-cls-3"
                                        d="M91,32.65l-7.79,17.9h-2.4l2.89-6.26L78.54,32.65h2.53l3.7,8.92h0l3.6-8.92Z">
                                    </path>
                                    <path class="gpay-cls-4"
                                        d="M48.26,36.14A12.55,12.55,0,0,0,48.08,34H38.24v4h5.63a4.8,4.8,0,0,1-2.08,3.17v2.61h3.36A10.21,10.21,0,0,0,48.26,36.14Z">
                                    </path>
                                    <path class="gpay-cls-5"
                                        d="M38.24,46.33a10,10,0,0,0,6.91-2.52L41.79,41.2a6.32,6.32,0,0,1-9.4-3.3H28.93v2.68A10.43,10.43,0,0,0,38.24,46.33Z">
                                    </path>
                                    <path class="gpay-cls-6"
                                        d="M32.39,37.9a6.23,6.23,0,0,1,0-4V31.22H28.93a10.36,10.36,0,0,0,0,9.36Z">
                                    </path>
                                    <path class="gpay-cls-7"
                                        d="M38.24,29.6a5.69,5.69,0,0,1,4,1.56h0l3-3a10,10,0,0,0-7-2.72,10.43,10.43,0,0,0-9.31,5.75l3.46,2.68A6.22,6.22,0,0,1,38.24,29.6Z">
                                    </path>
                                </svg>
                            </div>

                            <div class="discFooter discFooterSupport">Elephant.in is best viewed through Internet Edge,
                                Mozilla Firefox&#174; 16.x and +, Safari 5.1 and +, Chrome 23 and +, or an equivalent
                                browser software. If your browser is older, you may have trouble viewing many of our web
                                site features properly. If you are unsure of the version of your browser, you can
                                determine it by choosing 'Help' at the top of your browser window and then selecting
                                'About' (your browser).</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header modalClose">
                <svg data-bs-dismiss="modal" aria-label="Close" version="1.1" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <path
                        d="M12,2c-5.53,0 -10,4.47 -10,10c0,5.53 4.47,10 10,10c5.53,0 10,-4.47 10,-10c0,-5.53 -4.47,-10 -10,-10Zm5,13.59l-1.41,1.41l-3.59,-3.59l-3.59,3.59l-1.41,-1.41l3.59,-3.59l-3.59,-3.59l1.41,-1.41l3.59,3.59l3.59,-3.59l1.41,1.41l-3.59,3.59l3.59,3.59Z"
                        fill="#fff"></path>
                    <path fill="none" d="M0,0h24v24h-24Z"></path>
                </svg>
            </div>
            <div class="modal-body">
                <div class="loginModalBodyWrap">
                    <div class="loginListWrap">
                        <div class="LoginModTxt">I am a Corporate</div>
                        <div class="LoginModSubTxt">For Employers Only</div>
                        <div class="LoginModSvg">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 60 60"
                                viewBox="0 0 60 60">
                                <path fill="#f4d2b1" d="M38.4606628,24.4532413c0,2.7924461-1.1376381,5.331068-2.8300934,7.1081104
                                    						c-0.1879959,0.2068233-0.3854675,0.4042912-0.592289,0.5829353c-1.1376953,1.0154037-2.5010338,1.7018089-4.0147858,1.9180412
                                    						L30.09268,34.1939735l-1.1941071-0.1598206c-1.5231609-0.2162895-2.9053249-0.9026375-4.042963-1.9180984
                                    						c-0.1692333-0.1504116-0.329113-0.3008804-0.4889355-0.4701138c-1.7299843-1.7770424-2.8300915-4.3814316-2.8300915-7.2303448
                                    						l0.4795246-8.0106926l4.1276093-3.5634956l8.8569202-1.3445168c0,0,1.9556847,1.6453962,3.4600258,2.4728003
                                    						C39.9650612,14.7970953,38.4606628,24.4532413,38.4606628,24.4532413z" />
                                <path
                                    d="M30.0927372,35.1343727c-0.0417786,0-0.0835552-0.0027542-0.1248741-0.0082626l-1.1941051-0.1602249
                                    						c-1.6651382-0.2364311-3.2343254-0.979248-4.5445824-2.1485634c-0.1877708-0.1671104-0.3668175-0.3365173-0.5463238-0.5265808
                                    						c-1.9575806-2.0099201-3.0864964-4.8843136-3.0864964-7.8753185l0.4815922-8.0667572
                                    						c0.0151501-0.2534218,0.1317596-0.4898548,0.3241215-0.6555882l4.127264-3.5634956
                                    						c0.1340561-0.1156921,0.2979527-0.1914434,0.4733257-0.21807l8.8568611-1.3442307
                                    						c0.2671928-0.0394821,0.5394363,0.0358095,0.7460289,0.2102652c0.0188255,0.0156097,1.9043274,1.5962734,3.308239,2.3680124
                                    						c1.3768272,0.7570477,1.5402641,4.5859003,0.4866409,11.3818846c-0.0188217,2.8427162-1.1426849,5.6390648-3.0892487,7.6824951
                                    						c-0.1983299,0.2185287-0.4232864,0.4430275-0.658802,0.6464081c-1.3001556,1.1605911-2.8587837,1.9029465-4.4959183,2.1366272
                                    						l-0.931963,0.1322174C30.1808834,35.1311607,30.1368103,35.1343727,30.0927372,35.1343727z M22.9313145,16.8568821
                                    						l-0.4563408,7.6145515c0.0018368,2.4492722,0.9360943,4.8452892,2.5654221,6.5182304
                                    						c0.1505833,0.1597652,0.2910671,0.2915249,0.4393539,0.4232864c1.0343418,0.9232388,2.2615032,1.5072079,3.5510998,1.6899281
                                    						l1.0582142,0.1423187l0.8024998-0.1138535c1.2863846-0.1836395,2.4708481-0.7519989,3.52034-1.6885529
                                    						c0.1905251-0.1643562,0.3603897-0.3346806,0.5219917-0.5132675c1.6495285-1.7317066,2.5865402-4.085947,2.5865402-6.4764538
                                    						c0-0.0482063,0.0036736-0.0968704,0.0110168-0.1446152c0.6900215-4.4302673,0.8667717-8.7531061,0.398037-9.5583591
                                    						c-1.1876793-0.6670647-2.5769005-1.7546606-3.2021866-2.2605839l-8.1746464,1.2404747L22.9313145,16.8568821z" />
                                <path fill="#544f55" d="M38.4794846,24.4438305V17.84342c0-1.0248146-0.9684601-1.6359844-1.7582169-1.1564598
                                    						c-4.8516026,2.9710903-10.1732597-1.1941061-10.1732597-1.1941061c-3.4882622-0.4512911-5.011425,8.9227419-5.011425,8.9227419
                                    						l-1.5701618-5.9798279c-1.2505188-4.5600767,2.1625099-8.9697418,6.1772957-7.5499907
                                    						c0.046999,0.0187654,0.0752335,0.0281773,0.0752335,0.0281773c3.9677296-3.0933247,7.5499897-2.8959141,10.1920261-1.8522186
                                    						c2.7360916,1.0812263,4.456665,3.1497364,4.5507202,6.431118
                                    						C41.0462875,18.6050014,41.2907524,20.5795116,38.4794846,24.4438305z" />
                                <path d="M38.4794846,25.3841133c-0.0968666,0-0.1951141-0.0151501-0.2910652-0.0459099
                                    						c-0.3870163-0.1262493-0.6491623-0.4870987-0.6491623-0.8943157v-6.6004105
                                    						c0-0.1969509-0.0858498-0.3153973-0.1661911-0.3608475c-0.0555496-0.0312195-0.1028366-0.0298424-0.1638985,0.0078049
                                    						c-4.7699966,2.9225979-9.7938728-0.2277126-10.984766-1.0687733c-1.6857967,0.1537952-3.2256012,4.8581429-3.7599869,8.144804
                                    						c-0.0711594,0.4379768-0.4393539,0.7666893-0.8828411,0.7882671c-0.4393539,0.0151501-0.8415203-0.2708664-0.9544582-0.7005806
                                    						l-1.5701046-5.9797115c-0.7602615-2.7729349-0.0096416-5.7281294,1.9158039-7.5190592
                                    						c1.4241123-1.3244886,3.2499332-1.784502,5.0688686-1.2859249c4.325592-3.1650014,8.1976013-2.6756058,10.714817-1.6821241
                                    						c3.2664642,1.2909756,5.0454559,3.8077345,5.1450806,7.2784929l0.0160675,0.5376005
                                    						c0.0876884,2.847765,0.1570091,5.097332-2.6779022,8.9936714
                                    						C39.0593224,25.2450085,38.7742233,25.3841133,38.4794846,25.3841133z M37.3000717,15.5801392
                                    						c0.3415642,0,0.6822128,0.0876875,0.9948578,0.2635212c0.6936913,0.3906898,1.1247826,1.1564598,1.1247826,1.9998169v3.1613293
                                    						c0.7180252-1.7151794,0.6757889-3.0819054,0.6184006-4.9430771l-0.0160675-0.5431089
                                    						c-0.0785065-2.7348289-1.3726959-4.5611086-3.9569397-5.5821362c-3.1089935-1.2299156-6.2280846-0.6509972-9.2682114,1.718852
                                    						c-0.2465343,0.1928196-0.5720329,0.2492886-0.870903,0.1519604c-0.018364-0.005969-0.1120205-0.0408602-0.1299248-0.0477467
                                    						c-1.2547054-0.4430265-2.5254822-0.1730785-3.5423775,0.7726574c-1.4186039,1.3198986-1.9607944,3.5391636-1.3804989,5.6546726
                                    						l0.6087608,2.3188896c0.8924809-2.9212208,2.5140038-6.2859287,5.1868553-5.9452801
                                    						c0.166193,0.0215769,0.3250389,0.0881462,0.4572582,0.1909828c0.0486641,0.0376463,4.879261,3.7223434,9.1043129,1.1335058
                                    						C36.5645981,15.6820583,36.9327927,15.5801392,37.3000717,15.5801392z" />
                                <path fill="#e3334f"
                                    d="M51.6250839,51.6241417H8.3746576c0-4.1492424,2.5165195-7.9136505,5.0608644-10.635498
                                    						c2.5443449-2.721859,6.0632477-4.4081268,9.9418831-4.4081268h1.006916
                                    						c0.5167007,2.1130676,2.318922,3.7681198,4.4577465,3.7681198h2.2042141
                                    						c0.3242397,0.0211639,1.7359562,0.0771599,3.0154629-0.9474411c1.3222694-1.0588455,1.5539703-2.5114937,1.5961418-2.8206787
                                    						h0.9644508C44.3861504,36.5805168,51.6250839,43.3186684,51.6250839,51.6241417z" />
                                <path
                                    d="M51.6252136,52.5643768H8.3747873c-0.5192366,0-0.9402266-0.42099-0.9402266-0.9402275
                                    						c0-4.623085,2.8900032-8.6842422,5.3140249-11.277668c2.8367481-3.0346184,6.6114283-4.7061844,10.6289682-4.7061844h1.0067959
                                    						c0.4333858,0,0.8103027,0.2961159,0.9131393,0.7171059c0.4324684,1.7679749,1.9231491,3.0511475,3.5446739,3.0511475h2.2041149
                                    						c0.4609318,0.0266266,1.4920597,0.0078049,2.4276943-0.7414398c0.9893494-0.7919388,1.2087975-1.8946838,1.2524109-2.2137566
                                    						c0.0638161-0.4659805,0.4613914-0.8130569,0.9315033-0.8130569h0.9645576
                                    						c8.4928017,0,15.9429932,7.469017,15.9429932,15.9838524C52.5654373,52.1433868,52.1444473,52.5643768,51.6252136,52.5643768z
                                    						 M9.3623009,50.6839218h41.2882538c-0.5183182-7.1141357-6.8510742-13.1631699-14.0281105-13.1631699h-0.2143974
                                    						c-0.2322998,0.7607193-0.7235336,1.7854195-1.7587929,2.6145439c-1.4489021,1.1610527-3.0451756,1.1922722-3.6640358,1.1518707
                                    						l-2.143055,0.0018349c-2.2426796,0-4.3067722-1.5466919-5.1487522-3.7682495h-0.3158569
                                    						c-3.4909592,0-6.7780781,1.4594612-9.2553558,4.1102753C12.1021805,43.7919884,9.7245264,47.0492668,9.3623009,50.6839218z" />
                                <g>
                                    <path fill="#d8ac8b" d="M35.6305695,31.5613518v4.2874298c0,0.8274078-0.235054,1.9650421-0.6675224,2.6043892
                                    						c-0.0564117,0.0846481-0.1222343,0.1692924-0.1880569,0.2444687c0,0-0.1128235,0.1316452-0.225647,0.2538795
                                    						c-0.5359344,0.5641136-1.1094589,0.864994-1.1094589,0.864994c-0.2538795,0.1316452-0.4795265,0.2068787-0.7145805,0.2914658
                                    						c-0.1692352,0.0564117-0.3478813,0.1222343-0.6017609,0.1786461c-0.2632332,0.0470009-0.4982891,0.0658226-0.6581688,0.0752335
                                    						c-0.4794674-0.0094109-0.9684029-0.0188217-1.4573402-0.0282326c-0.5453472-0.0093536-1.0718708-0.0093536-1.5983963-0.0093536
                                    						c-0.3666439-0.0470581-0.6769352-0.1316452-0.9025803-0.2068787c-0.5829372-0.1974716-0.9778728-0.4512939-1.0906963-0.5453491
                                    						c-0.0939999-0.0751762-0.1409988-0.093998-0.2350559-0.1692352c-0.0094109-0.0094109-0.1409988-0.1034088-0.1504116-0.1222343
                                    						c-0.0940571-0.0751762-0.1598225-0.1409988-0.2444668-0.2256432c-0.0846462-0.0845871-0.2256451-0.2350578-0.3008804-0.3196449
                                    						c-0.0564117-0.0564117-0.3854675-0.5265236-0.4325237-0.5923462c-0.0564117-0.0752373,0-0.0564117-0.0564117-0.1410599
                                    						c-0.0470009-0.0752335-0.0939999-0.1598206-0.1410007-0.235054c-0.3102894-0.5735245-0.4889355-1.2222862-0.4889355-1.918045
                                    						v-4.2028408c0.1598225,0.1692333,0.3197021,0.3197021,0.4889355,0.4701138
                                    						c1.1376381,1.015461,2.5198021,1.7018089,4.042963,1.9180984l1.1941071,0.1598206l0.9308147-0.1316452
                                    						c1.513752-0.2162323,2.8770905-0.9026375,4.0147858-1.9180412
                                    						C35.2451019,31.9656429,35.4425735,31.7681751,35.6305695,31.5613518z" />
                                    <path d="M31.5219002,41.3004799l-1.5310822-0.0266266c-0.5385189-0.009182-1.0595913-0.009182-1.5811234-0.009182
                                    						c-0.0403996,0-0.0803413-0.0027542-0.1202831-0.0078049c-0.3654385-0.0468292-0.7290421-0.1303825-1.0802498-0.2474518
                                    						c-0.6684437-0.2267952-1.1683979-0.5265846-1.3947315-0.715271c-0.0927372-0.0615196-0.1473694-0.0987053-0.2203655-0.1574707
                                    						c-0.0013771-0.0009155-0.0022945-0.0013771-0.0032139-0.0022964c-0.0679455-0.0509567-0.1331367-0.1005402-0.193737-0.1574669
                                    						c-0.1000824-0.0835571-0.1790485-0.1606827-0.2754574-0.2570953c-0.0973282-0.0977859-0.2570934-0.2671928-0.3415661-0.3631439
                                    						c-0.0316792-0.028923-0.0982475-0.1092644-0.4549637-0.614727c-0.0867691-0.117527-0.1478291-0.2309265-0.1868515-0.3438606
                                    						l-0.0789642-0.1313019c-0.430172-0.791481-0.6326332-1.5870934-0.6326332-2.4180565v-4.2030125
                                    						c0-0.3851814,0.2350559-0.7317982,0.5931511-0.8736591c0.3571758-0.1423187,0.7666874-0.051878,1.031126,0.2286301
                                    						c0.1400242,0.1487465,0.280508,0.2805061,0.4287949,0.4122677c1.0343418,0.9232388,2.2615032,1.5072079,3.5510998,1.6899281
                                    						l1.0582142,0.1423187l0.8024998-0.1138535c1.2863846-0.1836395,2.4708481-0.7519989,3.52034-1.6885529
                                    						c0.1905251-0.1643562,0.3603897-0.3346806,0.5219917-0.5132675c0.2612228-0.2883129,0.6730309-0.3847218,1.0347977-0.2456169
                                    						c0.3626862,0.1400242,0.6018753,0.4884777,0.6018753,0.8773308v4.287487c0,0.948494-0.256176,2.2844582-0.8286667,3.131031
                                    						c-0.0743713,0.1120186-0.1671104,0.231842-0.2598457,0.3374329c-0.0004616,0.0004616-0.1207428,0.1409416-0.2414856,0.2717857
                                    						c-0.6344681,0.667984-1.2905159,1.021946-1.3635139,1.060051c-0.2717819,0.14048-0.5109711,0.2286301-0.7561264,0.3158569
                                    						c-0.00597,0.0018349-0.0918198,0.0325966-0.0977898,0.0344315c-0.2474518,0.0840149-0.4398117,0.1482887-0.6950684,0.2052155
                                    						C31.9814548,41.266964,31.7078342,41.289463,31.5219002,41.3004799z M28.4735088,39.3842163
                                    						c0.5105133,0,1.021946,0.0004616,1.5503635,0.009182l1.4603825,0.0284653
                                    						c0.0583038-0.0064278,0.254797-0.0215797,0.4751625-0.0606003c0.1349735-0.0312195,0.2658176-0.0766716,0.3856411-0.1175308
                                    						l0.1441536-0.0500412c0.1689491-0.0601387,0.3351402-0.1170692,0.5187798-0.212101l0,0
                                    						c-0.0004616,0,0.4485359-0.2446976,0.8594246-0.6776237c0.0904427-0.0982475,0.1905251-0.2148552,0.193737-0.2185287
                                    						c0.0459099-0.0523376,0.0849342-0.1019211,0.1179886-0.1519623c0.2887726-0.4264984,0.5109711-1.33918,0.5109711-2.0847511
                                    						v-2.2412987c-1.0784111,0.7317963-2.283535,1.2069588-3.5336533,1.3855476l-0.931963,0.1322174
                                    						c-0.0844727,0.0119362-0.1712418,0.0128555-0.2566338,0.0009193l-1.1941051-0.1602249
                                    						c-1.2299156-0.1744537-2.4074955-0.6252861-3.4666271-1.3203545v2.2031937
                                    						c0,0.5151062,0.1262512,1.0100098,0.3755398,1.4709435l0.1101818,0.1822586
                                    						c0.033514,0.053257,0.0647335,0.1184464,0.0913601,0.1886902c0.1202831,0.1698647,0.2520428,0.3557968,0.3085117,0.4255791
                                    						c0.0638142,0.0711594,0.1868515,0.2020035,0.2603073,0.2759171c0.0569286,0.0569267,0.1019192,0.1032944,0.1666508,0.155632
                                    						c0.0202007,0.0160675,0.0399418,0.0330544,0.0587654,0.0509605c0.0229549,0.018364,0.0569267,0.0449905,0.0890636,0.0711594
                                    						l0.0009193-0.0013771c0.1074276,0.0734558,0.1620598,0.1106415,0.2350559,0.1694069
                                    						c0.0633545,0.0491219,0.3580933,0.237812,0.8052521,0.3888512
                                    						C28.0231361,39.2983665,28.2471752,39.3516197,28.4735088,39.3842163z M25.9314995,37.8393631
                                    						c0.0211182,0.0830956,0.033514,0.1652718,0.033514,0.2364311C25.9650135,37.99683,25.9530773,37.9160309,25.9314995,37.8393631
                                    						z M25.807085,37.58181c0.0059681,0.0082626,0.0119362,0.0165291,0.0179043,0.0247917
                                    						C25.8190212,37.5983391,25.8130531,37.5896149,25.807085,37.58181z" />
                                </g>
                                <g>
                                    <path d="M35.6431961,37.8439522c-0.5192375,0-0.9448166-0.42099-0.9448166-0.9402275
                                    						c0-0.5192337,0.4159393-0.9402237,0.9351768-0.9402237h0.0096397c0.5192375,0,0.9402275,0.42099,0.9402275,0.9402237
                                    						C36.5834236,37.4229622,36.1624336,37.8439522,35.6431961,37.8439522z" />
                                </g>
                            </svg>
                        </div>
                        <button type="button" class="loginModSubBtn"
                            onclick="location.href='<?php echo $baseurl; ?>/signup'">FREE
                            CORPORATE SIGN UP</button>
                        <button type="button" class="loginModBtn loginCorpPopBtn" onclick="corpPopBtn()">CORPORATE
                            LOGIN</button>
                        <div class="loginModCorpWrapBtn"> <button type="button" class="loginModBtn"
                                onclick="location.href='<?php echo $baseurl; ?>/corporate-login'">CORPORATE TRAVEL
                                LOGIN</button> <button type="button" class="loginModBtn"
                                onclick="location.href='<?php echo $baseurl; ?>/motor-insurance/corporate-motor-fleet-insurance'">CORPORATE
                                MOTOR FLEET LOGIN</button> </div>
                    </div>
                    <div class="loginListWrap">
                        <div class="LoginModTxt">I am an Existing Customer</div>
                        <div class="LoginModSubTxt">My Account</div>
                        <div class="LoginModSvg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
                                <defs>
                                    <style>
                                    .pos-cls-1 {
                                        fill: #f9f5f2;
                                    }

                                    .pos-cls-2 {
                                        fill: #43addc;
                                    }

                                    .pos-cls-3 {
                                        fill: #a05d35;
                                    }

                                    .pos-cls-4 {
                                        fill: #231f20;
                                    }
                                    </style>
                                </defs>
                                <g data-name="Man">
                                    <path class="pos-cls-1"
                                        d="M28 54h8a4.012 4.012 0 0 0 4-4v-5H24v5a4.012 4.012 0 0 0 4 4z"
                                        fill="#f9f5f2" />
                                    <path class="pos-cls-2"
                                        d="M57.36 54.32A8.024 8.024 0 0 0 49.53 48H40v2a4.012 4.012 0 0 1-4 4h-8a4.012 4.012 0 0 1-4-4v-2h-9.53a8.024 8.024 0 0 0-7.83 6.32L5 62h54z"
                                        fill="#43addc" />
                                    <path class="pos-cls-3"
                                        d="M20 28v-6.91C21.96 23.97 26.6 26 32 26s10.04-2.03 12-4.91V28a4 4 0 0 1 4 4V20a16 16 0 0 0-32 0v12a4 4 0 0 1 4-4z"
                                        fill="#a05d35" />
                                    <path class="pos-cls-1" d="M16 32a4 4 0 0 0 4 4v-8a4 4 0 0 0-4 4z" fill="#f9f5f2" />
                                    <path class="pos-cls-1" d="M44 28v8a4 4 0 0 0 0-8z" fill="#f9f5f2" />
                                    <path class="pos-cls-1"
                                        d="M32 26c-5.4 0-10.04-2.03-12-4.91V41a4 4 0 0 0 4 4h16a4 4 0 0 0 4-4V21.09C42.04 23.97 37.4 26 32 26z"
                                        fill="#f9f5f2" />
                                    <path class="pos-cls-4"
                                        d="M58.338 54.107A9.072 9.072 0 0 0 49.53 47H41v-1.1a5.009 5.009 0 0 0 4-4.9v-4.1a5.009 5.009 0 0 0 4-4.9V20a17 17 0 0 0-34 0v12a5.009 5.009 0 0 0 4 4.9V41a5.009 5.009 0 0 0 4 4.9V47h-8.53a9.071 9.071 0 0 0-8.808 7.111l-1.64 7.68A1 1 0 0 0 5 63h54a1 1 0 0 0 .978-1.209zM25 46h14v4a3 3 0 0 1-3 3h-8a3 3 0 0 1-3-3zm20-11.171v-5.645c.032.012.065.018.1.03.055.022.109.048.163.073a2.94 2.94 0 0 1 .322.175c.049.03.1.06.145.093a3.169 3.169 0 0 1 .335.276c.022.021.047.039.068.06a3.059 3.059 0 0 1 .333.4c.027.04.05.084.076.125a3.065 3.065 0 0 1 .184.338q.037.082.069.168a2.733 2.733 0 0 1 .112.36c.014.055.03.108.04.164A2.941 2.941 0 0 1 47 32a3.006 3.006 0 0 1-2 2.829zM17 20a15 15 0 0 1 30 0v8c-.048-.035-.1-.065-.149-.1s-.085-.058-.129-.087a4.979 4.979 0 0 0-.74-.4c-.037-.016-.076-.029-.115-.044a4.878 4.878 0 0 0-.85-.265L45 27.1v-6.01a1 1 0 0 0-1.827-.563C41.353 23.2 36.862 25 32 25s-9.353-1.8-11.173-4.473A1 1 0 0 0 19 21.09v6.01h-.014a4.878 4.878 0 0 0-.85.265c-.039.015-.078.028-.115.044a4.979 4.979 0 0 0-.74.4c-.044.029-.087.057-.129.087s-.1.064-.149.1zm0 12a2.941 2.941 0 0 1 .056-.551c.01-.056.026-.109.04-.164a2.96 2.96 0 0 1 .112-.361c.022-.056.044-.112.069-.166a2.991 2.991 0 0 1 .184-.339c.026-.041.049-.085.076-.125a3.059 3.059 0 0 1 .333-.4c.021-.021.046-.039.068-.06a3.169 3.169 0 0 1 .335-.276c.047-.033.1-.063.145-.093a2.94 2.94 0 0 1 .322-.175c.054-.025.108-.051.163-.073.031-.012.065-.018.1-.03v5.645A3.006 3.006 0 0 1 17 32zm4 9V23.605a15.482 15.482 0 0 0 6.29 2.878 21.713 21.713 0 0 0 9.42 0A15.482 15.482 0 0 0 43 23.605V41a3 3 0 0 1-3 3H24a3 3 0 0 1-3-3zm28.847 20l-.861-5.165-1.972.33L47.82 61H16.18l.806-4.835-1.972-.33L14.153 61H6.236l1.381-6.468A7.058 7.058 0 0 1 14.47 49H23v1a5.006 5.006 0 0 0 5 5h8a5.006 5.006 0 0 0 5-5v-1h8.53a7.059 7.059 0 0 1 6.853 5.529L57.764 61z"
                                        fill="#231f20" />
                                    <circle class="pos-cls-4" cx="38" cy="29" r="2" fill="#231f20" />
                                    <circle class="pos-cls-4" cx="26" cy="29" r="2" fill="#231f20" />
                                </g>
                                <metadata>
                                    <rdf:RDF xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                        xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
                                        xmlns:dc="http://purl.org/dc/elements/1.1/">
                                        <rdf:Description about="https://iconscout.com/legal#licenses" dc:title="man"
                                            dc:description="man" dc:publisher="Iconscout" dc:date="2018-07-13"
                                            dc:format="image/svg+xml" dc:language="en">
                                            <dc:creator>
                                                <rdf:Bag>
                                                    <rdf:li>Komkrit Noenpoempisut</rdf:li>
                                                </rdf:Bag>
                                            </dc:creator>
                                        </rdf:Description>
                                    </rdf:RDF>
                                </metadata>
                            </svg>
                        </div>
                        <div class="loginModCustTxt">Login to your lifetime personalized account for seamless policy
                            management including claims.</div>
                        <button type="button" class="loginModBtn"
                            onclick="location.href='<?php echo $baseurl; ?>/customer-login'">CUSTOMER
                            LOGIN</button>
                    </div>
                    <div class="loginListWrap">
                        <div class="LoginModTxt">POS Login/Sign Up</div>
                        <div class="LoginModSvg">
                            <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 70 70"
                                viewBox="0 0 70 70">
                                <path fill="#59b9ff"
                                    d="M65.78684,61.24003v5.12H4.20682v-5.12c0-5.53998,2.52002-10.47998,6.48004-13.76001
                                                                    			c1.29999-1.07996,2.75-1.97998,4.31995-2.65997c0.28003-0.12,0.56006-0.22998,0.84003-0.34003
                                                                    			c0.85999-0.32996,1.75-0.57996,2.66998-0.76996c1.17999-0.25,2.41003-0.38,3.67004-0.38h25.63c1.25,0,2.47998,0.13,3.65997,0.38
                                                                    			c0.90997,0.19,1.79999,0.44,2.65002,0.76996c0.28998,0.10004,0.57996,0.22003,0.85999,0.34003
                                                                    			c1.57001,0.67999,3.01996,1.58002,4.32001,2.65997C63.26682,50.76005,65.78684,55.70005,65.78684,61.24003z" />
                                <path fill="#489cd5"
                                    d="M65.78684,61.24202v5.12H4.20682v-4.93l40.05486-0.38906
                                                                    			c6.63313-0.06443,12.49119-4.67485,13.75634-11.18653c0.29123-1.49892,0.30631-2.76445-0.17118-3.47446
                                                                    			c0.5,0.34003,0.98999,0.71002,1.45996,1.10004C63.26682,50.76197,65.78684,55.70198,65.78684,61.24202z" />
                                <path fill="#b4dff9"
                                    d="M22.1868,43.33198c-1.26001,0-2.48999,0.13-3.66998,0.38c-0.91998,0.19-1.81,0.44-2.66998,0.77002
                                                                    			c-0.28003,0.10999-0.56,0.21997-0.84003,0.33997c-1.57001,0.67999-3.02002,1.58002-4.32001,2.66003
                                                                    			c-3.20905,2.65796-5.47162,6.40643-6.2146,10.68054h0c1.48712,0,2.85786-0.8484,3.47569-2.20111
                                                                    			c1.12753-2.46866,2.80038-4.63613,4.86891-6.34943c1.29999-1.08002,2.75-1.98004,4.32001-2.66003
                                                                    			c0.27997-0.12,0.56-0.22998,0.83997-0.33997c0.86005-0.33002,1.75-0.58002,2.67004-0.77002
                                                                    			c1.17999-0.25,2.40997-0.38,3.66998-0.38h4.85199v-2.13H22.1868z" />
                                <path fill="#fbb449"
                                    d="M42.40683 36.042v7.28998c0 2.48999-3.32001 4.51001-7.41003 4.51001-4.08996 0-7.40997-2.02002-7.40997-4.51001V36.042c1.91998 1.62 4.51996 2.53998 7.40997 2.53998S40.4968 37.662 42.40683 36.042zM51.83534 26.74858c-.06785 1.74881-1.54381 3.11021-3.29815 3.04215-.00878-.00034-.00878-.00034-.01751-.00068.13171-2.26303.12894-5.13548.11499-6.13435l-.03638-.19404c.06175-.00637.1231-.00399.18451-.00161C50.53714 23.52811 51.90319 24.99977 51.83534 26.74858zM19.16911 26.74858c.06785 1.74881 1.54381 3.11021 3.29814 3.04215.00878-.00034.00878-.00034.01751-.00068-.13171-2.26303-.12895-5.13548-.11499-6.13435l.03638-.19404c-.06175-.00637-.1231-.00399-.18451-.00161C20.46731 23.52811 19.10126 24.99977 19.16911 26.74858z" />
                                <path fill="#fbb449"
                                    d="M48.59829,26.70291v1.64776c0,7.21667-5.85051,13.06724-13.05674,13.06724
                                                                    		c-7.21673,0-13.0568-5.85057-13.0568-13.06724v-7.19585h20.52374c1.10544,0,2.01274,0.90736,2.01274,2.0128v1.59556
                                                                    		c0,1.07419,0.87604,1.93973,1.93973,1.93973H48.59829z" />
                                <path fill="#726f76"
                                    d="M48.59829,17.81761v8.8853h-1.63732c-1.06369,0-1.93973-0.86554-1.93973-1.93973V23.1702
                                                                    			c0-1.11306-0.90232-2.01538-2.01538-2.01538H23.01664c-4.82851,0-8.74972-3.92115-8.74972-8.7601
                                                                    			c0-2.41947,0.9803-4.59911,2.56549-6.18423c1.58512-1.58519,3.7752-2.56549,6.18423-2.56549h2.33603
                                                                    			c-0.63614,0-1.20977,0.26072-1.62688,0.67789c-0.53188,0.53188-0.81347,1.33485-0.60489,2.19001
                                                                    			c0.23984,1.04287,1.24102,1.74158,2.31521,1.74158h13.59905C44.31673,8.25448,48.59829,12.53604,48.59829,17.81761z" />
                                <path fill="#464854"
                                    d="M48.59773,22.93036v3.76996h-1.64001c-1.06,0-1.94-0.85999-1.94-1.94v-1.58997
                                                                    			c0-1.11005-0.90002-2.02002-2.01001-2.02002H23.01771c-4.83002,0-8.75-3.91998-8.75-8.76001
                                                                    			c0-0.64996,0.07001-1.27997,0.20996-1.89001c0.85004,3.93005,4.35004,6.88001,8.54004,6.88001H43.0077
                                                                    			c1.10999,0,2.01001,0.90002,2.01001,2.01001v1.60004c0,1.06995,0.88,1.94,1.94,1.94H48.59773z" />
                                <path fill="#9a9ba5"
                                    d="M23.05769 6.07032h-.03998c-2.41003 0-4.60004.98004-6.19 2.57001-1.31 1.31-2.20001 3.02002-2.47003 4.95001-.06-.39001-.08997-.78998-.08997-1.20001 0-2.41998.97998-4.58997 2.56-6.17999 1.58997-1.58997 3.77997-2.57001 6.19-2.57001h2.33002c-.63 0-1.20001.27002-1.62006.67999C23.28773 4.76032 23.01771 5.38032 23.05769 6.07032zM22.48476 21.15482v5.01622c-.73002 0-1.38704-.29197-1.86679-.77172-.47968-.47968-.77172-1.1367-.77172-1.86672v-2.97216c.79259.31285 1.6582.511 2.54461.57357L22.48476 21.15482z" />
                                <path
                                    d="M55.28,44.13c-2.25933-0.97912-4.81594-1.54999-7.46002-1.54999H43.16V39.87
                                                                    			c3.15997-2.09998,5.40997-5.46002,6.02002-9.37c1.95166-0.25254,3.32949-1.86904,3.39996-3.72003
                                                                    			c0.08002-1.97998-1.33002-3.67999-3.22998-4.00995v-4.95001C49.35001,12.13,44.72,7.5,39.03,7.5H25.43997
                                                                    			c-0.76996,0-1.42999-0.47998-1.58997-1.16003c-0.13-0.54999,0.01996-1.09998,0.40997-1.48999
                                                                    			c0.29004-0.28998,0.67999-0.45996,1.09003-0.45996c0.41998,0,0.75-0.33002,0.75-0.75c0-0.41003-0.33002-0.75-0.75-0.75h-2.33002
                                                                    			c-5.25644,0-9.5,4.27532-9.5,9.5c0,3.84998,2.28998,7.16998,5.58002,8.66998v2.46997c0,0.26001,0.02997,0.51001,0.08002,0.76001
                                                                    			C18.66,25.01001,18.38998,25.88,18.42001,26.77997c0.0762,1.98248,1.63269,3.54978,3.47998,3.73004
                                                                    			c0.53998,3.44,2.35999,6.45996,4.94,8.56v3.51001h-4.65002c-10.3027,0-18.72998,8.32166-18.72998,18.65997v5.12
                                                                    			c0,0.41003,0.33002,0.75,0.75,0.75h61.58002c0.40997,0,0.75-0.33997,0.75-0.75v-5.12
                                                                    			C66.54001,53.71629,62.02638,47.04517,55.28,44.13z M49.38998,24.32001C50.37997,24.63,51.09,25.56,51.09,26.63v0.08997
                                                                    			c-0.04999,1.06-0.77002,1.94-1.76001,2.22003C49.35662,28.67388,49.40246,25.39168,49.38998,24.32001z M15.01999,12.39001
                                                                    			c0-4.3493,3.46561-7.84337,7.70001-7.98999c-0.40002,0.67999-0.52002,1.48999-0.33002,2.27997
                                                                    			C22.69998,8.02997,23.98001,9,25.43997,9H39.03c4.85999,0,8.82001,3.96002,8.82001,8.82001v8.13h-0.89001
                                                                    			c-0.65997,0-1.19-0.53003-1.19-1.19v-1.59003c0-1.51996-1.23999-2.76001-2.76001-2.76001H23.01999
                                                                    			C18.69371,20.40997,15.01999,16.8821,15.01999,12.39001z M20.60001,23.52997c0-0.13388,0-2.03268,0-1.92999
                                                                    			c0.22475,0.05621,0.94898,0.22003,1.13,0.22003c0,0.38316,0,3.60391,0,3.45001
                                                                    			C20.94397,24.877,20.60001,24.21412,20.60001,23.52997z M19.92001,26.71997c-0.01001-0.28998,0.02997-0.57996,0.12-0.84998
                                                                    			c0.01001,0.02002,0.02997,0.03998,0.04999,0.06c0.42999,0.42999,0.96002,0.72998,1.53998,0.88
                                                                    			c0.01001,0.70001,0.03003,1.44,0.06,2.15002C20.59904,28.63555,19.95071,27.70432,19.92001,26.71997z M23.23001,28.34998
                                                                    			c0-0.21471,0-6.54269,0-6.44h19.77997c0.69,0,1.26001,0.56,1.26001,1.26001v1.59003c0,1.48999,1.21002,2.69,2.69,2.69h0.89001
                                                                    			V27.69c-0.02002,0.70001-0.04004,1.39996-0.08002,2.06v0.02997c-0.71333,6.0722-5.86703,10.89001-12.22998,10.89001
                                                                    			C28.81354,40.66998,23.23001,35.20321,23.23001,28.34998z M28.34,40.14001c2.09998,1.28998,4.56,2.02997,7.20001,2.02997
                                                                    			c2.20001,0,4.27997-0.51996,6.12-1.42999v1.84003v0.75c0,2.44504-3.82788,3.75995-6.66003,3.75995
                                                                    			c-3.15997,0-5.88995-1.31995-6.51996-3.00995C28.24996,43.44117,28.34,40.04001,28.34,40.14001z M65.04001,65.60999H4.95999v-4.37
                                                                    			c0-9.52867,7.78381-17.15997,17.22998-17.15997h4.73004c0.54999,2.57996,3.89996,4.50995,8.07996,4.50995
                                                                    			c4.17004,0,7.53003-1.92999,8.08002-4.50995h4.73999c9.44682,0,17.22003,7.65818,17.22003,17.15997V65.60999z" />
                            </svg>
                        </div>
                        <button type="button" class="loginModSubBtn"
                            onclick="window.open('https://pos.elephant.in/','_blank')">BECOME A POS</button>
                        <button type="button" class="pos-sign-in"
                            style="width: calc(100% - 92px);height: 60px;border: solid 1px #fff;border-radius: 12px;background: none;font-family: 'WorkSans-SemiBold';font-size: 15px;line-height: 16px;color: #fff;margin: 0 46px;"
                            onclick="location.href='pos-login'">POS LOGIN</button>
                    </div>
                </div>
                <div class="loginModalEmployeeSec">
                    <div class="employeeSec">I am an Employee of Alliance Insurance Brokers</div>
                    <button type="button" class="loginModSubBtn"
                        onclick="location.href = '/employee-login'">LOGIN</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- certificate js -->
<script type="text/javascript">
var __dcid = __dcid || [];
__dcid.push({
    "cid": "DigiCertClickID_reXhhpi7",
    "tag": "reXhhpi7"
});
(function() {
    var cid = document.createElement("script");
    cid.async = true;
    cid.src = "//seal.digicert.com/seals/cascade/seal.min.js";
    var s = document.getElementsByTagName("script");
    var ls = s[(s.length - 1)];
    ls.parentNode.insertBefore(cid, ls.nextSibling);
}());
</script>
<!-- Jquery js -->
<script src="/knowledge-center/wp-content/themes/bam/scripts/jquery-3.5.1.min.js"></script>

<!-- Custon Script -->
<script src="/knowledge-center/wp-content/themes/bam/scripts/script.js"></script>

<!-- Bootstrap Bundle with Popper -->
<script src="/knowledge-center/wp-content/themes/bam/scripts/bootstrap.bundle.min.js"></script>
<script src="/knowledge-center/wp-content/themes/bam/scripts/splide.min.js"></script>

</body>

</html>