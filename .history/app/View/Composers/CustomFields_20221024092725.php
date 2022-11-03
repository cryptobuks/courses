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
            'heading' => $this->heading(),
            'subheading' => $this->subheading(),   
            'selectedProduct' => $this->selectedProduct(),
            'checkoutLink' => $this->checkoutLink(),
            'formShortcode' => $this->formShortcode(),
            'firstContent' => $this->firstContent(),
            'titleYellowBox' => $this->titleYellowBox(),
            'toggleTitleYellowBox' => $this->toggleTitleYellowBox(),
            'subtitleYellowBox' => $this->subtitleYellowBox(),
            'toggleSubtitleYellowBox' => $this->toggleSubtitleYellowBox(),
            'imageYellowBox' => $this->imageYellowBox(),
            'textYellowBox' => $this->textYellowBox(),
            'guaranteeUnderButton' => $this->guaranteeUnderButton(),
            'testimonialContent' => $this->testimonialContent(),
            'toggleMoneyBack' => $this->toggleMoneyBack(),
            'productTestimonials' => $this->productTestimonials(),
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
            /* CHECKOUT PAGE */
            'productNameCheckout' => $this->productNameCheckout(),  
            'productImageCheckout' => $this->productImageCheckout(),  
            'whatYouGetCheckout' => $this->whatYouGetCheckout(),  
            'productTestimonialsCheckout' => $this->productTestimonialsCheckout(),  

            /* UPSELL PAGE */
            'productUpsell' => $this->productUpsell(),  
            'upsellName' => $this->upsellName(),  
            'firstHeadline' => $this->firstHeadline(),  
            'toggleBar1' => $this->toggleBar1(),  
            'toggleBar2' => $this->toggleBar2(),  
            'toggleBar3' => $this->toggleBar3(),  
            'firstContentUpsell' => $this->firstContentUpsell(), 
            'greenBoxTitle' => $this->greenBoxTitle(),  
            'greenBoxNoThanks' => $this->greenBoxNoThanks(),  
            'priceIncreaseIn' => $this->priceIncreaseIn(),  
        ];
    }
    /* SALES PAGE */
    public function heading(){
        return get_field("heading");
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
    public function firstContent(){
        return get_field("first_content");
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
        if(get_field("imageYellowBox")){
            return get_field("imageYellowBox")['url'];
        }
    }
    public function textYellowBox(){
        return get_field("text_yellow_box");
    }
    public function guaranteeUnderButton(){
        return get_field("guarantee_button");
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
        return get_field("what_you_get_image");
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
        return get_field("site_logo_white");
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
        if(get_field("expert_main_photo")){
            return get_field("expert_main_photo") ['url'];
        }    }
    public function expertName(){
        return get_field("expert_name");
    }
    public function expertJob(){
        return get_field("expert_job");
    }
    public function expertProfilePhoto(){
        if(get_field("expert_profile_photo")){
            return get_field("expert_profile_photo") ['url'];
        }
    }
    public function productTitle(){
        return get_field("product_title");
    }
    public function productPhoto(){
        return get_field("product_photo");
    }
    public function productIncludes(){
        if(have_rows("product_includes")):
            while(have_rows("product_includes")) :the_row();
              $productIncludesText = get_sub_field("product_includes_text");  
            endwhile;
        endif;
    }
    public function topBarText(){
        return get_field("top_bar_text");
    }
    public function satisfiedCustomersNumber(){
        return get_field("satisfied_customers_number");
    }
    public function bestSellingAuthorBadge(){
        if(get_field("author_badge")){
            return get_field("author_badge")['url'];
        }
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
    public function productTestimonialsCheckout(){
        if(have_rows("testimonial_checkout")):
            while(have_rows("testimonial_checkout")) :the_row();
              $testimonialNameCheckout = get_sub_field("testimonial_name_checkout");  
              $testimonialTextCheckout = get_sub_field("testimonial_text_checkout"); 
              $testimonialHeadlineCheckout = get_sub_field("testimonial_headline_checkout"); 
              $testimonialImageCheckout = get_sub_field("testimonial_image_checkout");  
            endwhile;
        endif;
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
public function productTestimonialsName(){
    $testimonialName = get_sub_field("testimonial_name");  
    $testimonialText = get_sub_field("testimonial_text"); 
    $testimonialHeadline = get_sub_field("testimonial_headline"); 
    $testimonialImage = get_sub_field("testimonial_image");  
}
public function testimonialName(){
    return get_field("testimonial_name");
}
    
}