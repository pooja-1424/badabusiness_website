<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class SocialMedia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('social_media')->insert([
            [
            'name' => 'Whatsapp Marketing',
            'prize' => '14,500',
            'img'=>'/img/Whatsapp_Marketing.jpg',
            'description' => 'Discover the significance and advantages of WhatsApp marketing.
            Discover how to use WhatsApps basic and advanced marketing features.
            Learn how to configure WhatsApp Gateways.
            Learn how to connect Google Sheets to WhatsApp.
            Discover how to send or schedule manual and automated messages via WhatsApp Newsletter.
            Discover how to Nurture Leads Using WhatsApp.',
            'category_id'=>'2'
            ],
[
            'name' => 'Instagram Marketing',
            'prize' => '14,500',
            'img'=>'/img/instagram_image.jpg',
            'description' => 'Make a business Instagram account.
            How to make various Instagram posts.
            Learn how to take beautiful photographs.
            Discover the value of hashtags.
            Instagram marketing tools and features Instagram Influencer Marketing.
            Learn how to run Instagram advertisements.
            How to Assess the Effectiveness of an Instagram Post.
            Instagram metrics.
            How to Go Viral on Instagram.',
            'category_id'=>'2'
],


        ]);

    }
}
