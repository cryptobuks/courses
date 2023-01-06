<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class CustomFields extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'mainHeading' => $this->mainHeading(),
            'subheading' => $this->subheading(),   
            'selectedProduct' => $this->selectedProduct(),
            'checkoutLink' => $this->checkoutLink(),
            'formShortcode' => $this->formShortcode(),
            'formShortcodeModal' => $this->formShortcodeModal(),
            'firstContent' => $this->firstContent(),
            'titleYellowBox' => $this->titleYellowBox(),
            'toggleTitleYellowBox' => $this->toggleTitleYellowBox(),
            'subtitleYellowBox' => $this->subtitleYellowBox(),
            'toggleSubtitleYellowBox' => $this->toggleSubtitleYellowBox(),
            'imageYellowBox' => $this->imageYellowBox(),
            'textYellowBox' => $this->textYellowBox(),
            'moneyBackGuarranteHeadline' => $this->moneyBackGuarranteHeadline(),
            'moneyBackGuarranteText' => $this->moneyBackGuarranteText(),
            'testimonialContent' => $this->testimonialContent(),
            'toggleMoneyBack' => $this->toggleMoneyBack(),
            'toggleTestimonials' => $this->toggleTestimonials(),
            'productFaq' => $this->productFaq(),
            'whatYouGetTitle' => $this->whatYouGetTitle(),
            'whoIsFor' => $this->whoIsFor(),
            'toggleWhoIsFor' => $this->toggleWhoIsFor(),
            'moneyBack' => $this->moneyBack(),
            'limitedOffer' => $this->limitedOffer(),
            'toggleLimitedOffer' => $this->toggleLimitedOffer(),
            'whatYouGetSubtitle' => $this->whatYouGetSubtitle(),
            'toggleWhatYouGetSubtitle' => $this->toggleWhatYouGetSubtitle(),
            'whatYouGetImage' => $this->whatYouGetImage(),
            'whatYouGetText' => $this->whatYouGetText(),
            'timer' => $this->timer(),
            'logoColor' => $this->logoColor(),
            'logoWhite' => $this->logoWhite(),
            'siteDescription' => $this->siteDescription(),
            'phoneNumber' => $this->phoneNumber(),   
            'topBarText' => $this->topBarText(),   
            'thirdTitle' => $this->thirdTitle(),   
            'expertMainPhoto' => $this->expertMainPhoto(),   
            'expertName' => $this->expertName(),   
            'expertJob' => $this->expertJob(),   
            'expertProfilePhoto' => $this->expertProfilePhoto(),   
            'productTitle' => $this->productTitle(),   
            'productPhoto' => $this->productPhoto(),   
            'productIncludes' => $this->productIncludes(),   
            'topBarText' => $this->topBarText(),   
            'email' => $this->email(),   
            'satisfiedCustomersNumber' => $this->satisfiedCustomersNumber(),   
            'bestSellingAuthorBadge' => $this->bestSellingAuthorBadge(),  
            'moneyBackImage' => $this->moneyBackImage(),  
            'secondContent' => $this->secondContent(),  
            'badgeText' => $this->badgeText(),  
            'topHeading' => $this->topHeading(),  
            'beforeFirstContent' => $this->beforeFirstContent(),  
            'expertSalespageDescription' => $this->expertSalespageDescription(),  
            'personalAssistanceText' => $this->personalAssistanceText(),  
            'personalAssistanceHeadline' => $this->personalAssistanceHeadline(),  
            'redTextYellowBox' => $this->redTextYellowBox(),  
            'modalText' => $this->modalText(),  

            
            /* CHECKOUT PAGE */
            'productNameCheckout' => $this->productNameCheckout(),  
            'productImageCheckout' => $this->productImageCheckout(),  
            'whatYouGetCheckout' => $this->whatYouGetCheckout(),  
            'moneyBackGuaranteeHeadlineCheckout' => $this->moneyBackGuaranteeHeadlineCheckout(),  
            'moneyBackGuaranteeTextCheckout' => $this->moneyBackGuaranteeTextCheckout(),  
            'personalAssistanceHeadlineCheckout' => $this->personalAssistanceHeadlineCheckout(),  
            'personalAssistanceTextCheckout' => $this->personalAssistanceTextCheckout(),  
           
            /* UPSELL PAGE */
            'productUpsell' => $this->productUpsell(),  
            'upsellName' => $this->upsellName(),  
            'firstHeadline' => $this->firstHeadline(),  
            'toggleBar1' => $this->toggleBar1(),  
            'toggleBar2' => $this->toggleBar2(),  
            'toggleBar3' => $this->toggleBar3(),  
            'firstContentUpsell' => $this->firstContentUpsell(), 
            'secondContentUpsell' => $this->secondContentUpsell(), 
            'greenBoxTitle' => $this->greenBoxTitle(),  
            'greenBoxNoThanks' => $this->greenBoxNoThanks(),  
            'priceIncreaseIn' => $this->priceIncreaseIn(),
            
            /* TESTIMONIALS */
            'testimonialName' => $this->testimonialName(),
            'testimonialText' => $this->testimonialText(),
            'testimonialImage' => $this->testimonialImage(),
            'testimonialHeadline' => $this->testimonialHeadline(),
            'testimonialLink' => $this->testimonialLink(),

            /* THANK YOU PAGE */
            'firstHeadlineThankYou' => $this->firstHeadlineThankYou(),
            'firstContentThankYou' => $this->firstContentThankYou(),
            'buttonTextThankYou' => $this->buttonTextThankYou(),
            'buttonLinkThankYou' => $this->buttonLinkThankYou(),    
            'secondContentThankYou' => $this->secondContentThankYou(),


            /* HOME PAGE */
            'mainImageHome' => $this->mainImageHome(),
            'firstTextHome' => $this->firstTextHome(),
            'secondTextHome' => $this->secondTextHome(),
            'thirdTextHome' => $this->thirdTextHome(),
            'formShortcodeHome' => $this->formShortcodeHome(),
            'headlineSecondSectionHome' => $this->headlineSecondSectionHome(),
            'coursesHome' => $this->coursesHome(),
            'headlineThirdSectionHome' => $this->headlineThirdSectionHome(),
            'contentThirdSectionHome' => $this->contentThirdSectionHome(),
            'headlineFourthSectionHome' => $this->headlineFourthSectionHome(),
            'contentFourthSectionHome' => $this->contentFourthSectionHome(),
            'headlineFifthSectionHome' => $this->headlineFifthSectionHome(),
            'contentFifthSectionHome' => $this->contentFifthSectionHome(),
            'imageThirdSectionHome' => $this->imageThirdSectionHome(),
            'homepageButtonLink' => $this->homepageButton(),
            'homepageButtonText' => $this->homepageButtonText(),
            'productCardButton' => $this->productCardButton(),
            
            /** AUTHOR PAGE */
            'authorIntroText' => $this->authorIntroText(),
            'authorContentText' => $this->authorContentText(),
            'authorEbookImage' => $this->authorEbookImage(),
            'authorEbookContent' => $this->authorEbookContent(),
            'authorSignature' => $this->authorSignature()
        ];
    }
    /* SALES PAGE */
    public function mainHeading(){
        return get_field("main_heading");
    }
    public function subheading(){
        return get_field("subheading");
    }
    public function selectedProduct(){
        return get_field("selected_product");
    }
    public function checkoutLink(){
        return get_field("checkout_link");
    }
    public function formShortcode(){
        return get_field("form_shortcode");
    }
    public function formShortcodeModal(){
        return get_field("form_shortcode_modal");
    }
    public function firstContent(){
        return get_field("first_content");
    }
    public function secondContent(){
        return get_field("second_content");
    }
    public function titleYellowBox(){
        return get_field("title_yellow_box");
    }
    public function toggleTitleYellowBox(){
        return get_field("toggle_title_yellow_box");
    }
    public function subtitleYellowBox(){
        return get_field("subtitle_yellow_box");
    }
    public function toggleSubtitleYellowBox(){
        return get_field("toggle_subtitle_yellow_box");
    }
    public function imageYellowBox(){
        if(get_field("image_yellow_box")){
            return get_field("image_yellow_box")['url'];
        }
    }
    public function textYellowBox(){
        return get_field("text_yellow_box");
    }
    public function productBonus(){
        if(have_rows("product_bonus")):
            while(have_rows("product_bonus")) :the_row();
              $productBonusImage = get_sub_field("product_bonus_image")['url'];  
              $productBonusTitle = get_sub_field("product_bonus_title");  
              $productBonusContent = get_sub_field("product_bonus_content");  
              $productBonusValue = get_sub_field("product_bonus_value");  
            endwhile;
        endif;
    }
    public function moneyBackGuarranteHeadline(){
        return get_field("money_back_guarantee_headline");
    }
    public function moneyBackGuarranteText(){
        return get_field("money_back_guarantee_text");
    }
    public function testimonialContent(){
        return get_field("testimonial_content");
    }
    public function toggleTestimonials(){
        return get_field("toggle_testimonial");
    }
    public function whoIsFor(){
        return get_field("who_is_for");
    }
    public function toggleWhoIsFor(){
        return get_field("toggle_who_is_for");
    }
    public function moneyBack(){
        return get_field("money_back");
    }
    public function toggleMoneyBack(){
        return get_field("toggle_money_back");
    }
    public function limitedOffer(){
        return get_field("limited_offer");
    }
    public function toggleLimitedOffer(){
        return get_field("toggle_limited_offer");
    }
    
    public function productFaq(){
        if(have_rows("product_faq")):
            while(have_rows("product_faq")) :the_row();
              $productFaqQuestion = get_sub_field("product_faq_question");  
              $productFaqText = get_sub_field("product_faq_anwser"); 
            endwhile;
        endif;
    }
    public function whatYouGetTitle(){
        return get_field("what_you_get_title");
    }
    public function whatYouGetSubtitle(){
        return get_field("what_you_get_subtitle");
    }
    public function toggleWhatYouGetSubtitle(){
        return get_field("toggle_what_you_get_subtitle");
    }
    public function whatYouGetImage(){
        if(get_field("what_you_get_image")){
            return get_field("what_you_get_image") ['url'];
        }
    }
    public function whatYouGetText(){
        return get_field("what_you_get_text");
    }
    public function timer(){
        return get_field("timer");
    }
    public function logoColor(){
        return get_field("site_logo_color", 'options')['url'];
    }
    public function logoWhite(){
        return get_field("site_logo_white", 'options')['url'];
    }
    public function siteDescription(){
        return get_field("site_description");
    }
    public function phoneNumber(){
        return get_field("phone", 'options');
    }
    public function email(){
        return get_field("email", 'options');
    }
    
    public function thirdTitle(){
        return get_field("third_title");
    }
    public function expertMainPhoto(){
        if(get_field("expert_main_photo" , "options")){
            return get_field("expert_main_photo" , "options") ['url'];
        }    
    }
    public function expertName(){
        return get_field("expert_name" , "options");
    }
    public function expertJob(){
        return get_field("expert_job" , "options");
    }
    public function expertProfilePhoto(){
        if(get_field("expert_profile_photo" , "options")){
            return get_field("expert_profile_photo" , "options") ['url'];
        }
    }
    public function expertBestSellingPhoto(){
        if(get_field("expert_best_selling_photo" , "options")){
            return get_field("expert_best_selling_photo" , "options") ['url'];
        }
    }
    public function productTitle(){
        return get_field("product_title");
    }
    public function productPhoto(){
        return get_field("product_photo");
    }
    public function productIncludes(){
        return get_field("product_includes");
    }
    public function topBarText(){
        return get_field("top_bar_text");
    }
    public function satisfiedCustomersNumber(){
        return get_field("satisfied_customers_number", "options");
    }
    public function bestSellingAuthorBadge(){
        if(get_field("author_badge", "options")){
            return get_field("author_badge", "options")['url'];
        }
    }
    public function moneyBackImage(){
        if(get_field("money_back_image")){
            return get_field("money_back_image")['url'];
        }
    }
    public function expertSalespageDescription(){
        return get_field("expert_salespage_description");
    }
    public function personalAssistanceText(){
        return get_field("personal_assistance_text");
    }
    public function personalAssistanceHeadline(){
        return get_field("personal_assistance_headline");
    }
    public function badgeText(){
        return get_field("badge_text");
    }
    public function topHeading(){
        return get_field("top_heading");
    }
    public function beforeFirstContent(){
        return get_field("before_first_content");
    }
    public function redTextYellowBox(){
        return get_field("red_text_yellow_box");
    }
    public function modalText(){
        return get_field("modal_text");
    }




    /* CHECKOUT PAGE */
    public function productNameCheckout(){
        return get_field("product_name_checkout");
    }
    public function productImageCheckout(){
        if(get_field("product_image_checkout")){
            return get_field("product_image_checkout")['url'];
        }
    }
    public function whatYouGetCheckout(){
        return get_field("what_you_get_checkout");
    }
    public function moneyBackGuaranteeHeadlineCheckout(){
        return get_field("money_back_guarantee_headline_checkout");
    }
    public function moneyBackGuaranteeTextCheckout(){
        return get_field("money_back_guarantee_text_checkout");
    }
    public function personalAssistanceHeadlineCheckout(){
        return get_field("personal_assistance_headline_checkout");
    }
    public function personalAssistanceTextCheckout(){
        return get_field("personal_assistance_text_checkout");
    }
   



    /* UPSELL PAGE */
    public function productUpsell(){
        return get_field("product_upsell");
    }
    public function upsellName(){
        return get_field("upsell_name");
    }
    public function firstHeadline(){
        return get_field("first_headline");
    }
    public function toggleBar1(){
        return get_field("toggle_bar_1");
    }
    public function toggleBar2(){
        return get_field("toggle_bar_2");
    }
    public function toggleBar3(){
        return get_field("toggle_bar_3");
    }
    public function firstContentUpsell(){
        return get_field("first_content_upsell");
    }
    public function secondContentUpsell(){
        return get_field("second_content_upsell");
    }
    public function greenBoxTitle(){
        return get_field("green_box_title");
    }
    public function greenBoxNoThanks(){
        return get_field("green_box_no_thanks");
    }
    public function priceIncreaseIn(){
        return get_field("price_increase");
    }

/* TESTIMONIALS */
public function testimonialName(){
    return get_field("testimonial_name");
}
public function testimonialText(){
    return get_field("testimonial_text");
}
public function testimonialHeadline(){
    return get_field("testimonial_headline");
}
public function testimonialImage(){
    return get_field("testimonial_image");
}

public function testimonialLink(){
    if(get_field("testimonial_link")){
        return get_field("testimonial_link")['url'];
    }
}

/* THANK YOU PAGE */
public function firstHeadlineThankYou(){
    return get_field("first_headline_thank_you");
}
public function firstContentThankYou(){
    return get_field("first_content_thank_you");
}
public function buttonTextThankYou(){
    return get_field("button_text_thank_you");
}
public function buttonLinkThankYou(){
    return get_field("button_link_thank_you");
}    
public function secondContentThankYou(){
    return get_field("second_content_thank_you");
}

/* HOME PAGE */
public function mainImageHome(){
if(get_field("main_image_home")){
    return get_field("main_image_home")['url'];
}
}
public function firstTextHome(){
    return get_field("first_text_home");
}
public function secondTextHome(){
    return get_field("second_text_home");
}
public function thirdTextHome(){
    return get_field("third_text_home");
}
public function formShortcodeHome(){
    return get_field("form_shortcode_home");
}
public function headlineSecondSectionHome(){
    return get_field("headline_second_sections_home");
}
public function coursesHome(){
    if(have_rows("courses")):
        while(have_rows("courses")) :the_row();
          $courseImage = get_sub_field("course_image");  
          $courseHeadline = get_sub_field("course_headline"); 
          $courseText = get_sub_field("course_text"); 
        endwhile;
    endif;
}
public function headlineThirdSectionHome(){
    return get_field("headline_third_section_home");
}
public function contentThirdSectionHome(){
    return get_field("content_third_section_home");
}
public function imageThirdSectionHome(){
    if(get_field("image_third_section_home")){
        return get_field("image_third_section_home")['url'];
    }
    }
public function headlineFourthSectionHome(){
    return get_field("headline_fourth_section_home");
}
public function contentFourthSectionHome(){
    return get_field("content_fourth_section_home");
}
public function headlineFifthSectionHome(){
    return get_field("headline_fifth_section_home");
}
public function contentFifthSectionHome(){
    return get_field("content_fifth_section_home");
}
public function homepageButton(){
    return get_field("homepageButton_link");
}
public function homepageButtonText(){
    return get_field("homepageButton_text");
}
public function productCardButton(){
    return get_field("product_card_button_text");
}

public function authorIntroText(){
    return get_field("author_intro_text");
}
public function authorContentText(){
    return get_field("author_content_text");
}

public function authorEbookImage() {
    if(get_field("author_ebook_img")){
        return get_field("author_ebook_img")['url'];
    }
}
public function authorEbookContent(){
    return get_field("author_ebook_content");
}
public function authorSignature() {
    if(get_field("author_signature")){
        return get_field("author_signature")['url'];
    }
}
}

