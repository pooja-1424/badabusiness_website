<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class Courses extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('courses')->insert([
            [
            'name' => 'Export-Import',
            'price' => '14,500',
            'img'=>'export_& import_website_image.jpg',
            'description' => 'Discover essential export and import procedures.-
             Discover how to choose the best product to export and import.-
             Learn how to set up an export and import business registration.-
             Learn how to locate foreign buyers and sellers.-
             Learn how to create contracts in the export and import industries.-
             Understand the fundamentals of export and import.-
             Learn how it can help you grow your business.-
             The advantages and disadvantages of dealing with foreign currency.-
             Learn about the various factors that affect product pricing.-
             Understand the various payment methods.-
             Learn about the various taxes and duties in Export & Import.-
             Discover all of the Incoterms that are used to create shipping contracts and trade agreements between parties all over the world.-
             Learn how to make payments in the export-import business.-
             Learn about the different types of taxes and duties that are involved in the export-import business.-
             Learn about the various types of government programmes available to exporters.',
            'category_id'=>'1'
            ],
[
            'name' => 'Busyness to Busyness',
            'price' => '14,500',
            'img'=>'Busyness_to_Business.jpg',
            'description' => 'Learn how to run your business fast and autopilot.-
             Learn how to manage your time so that you can provide more value to your customers.-
             Learn how to make more sales in less investment and less time.-
             Learn how to generate passive income from various sources.-
             Learn how to hire smart employees for your company.-
             Learn how to make better financial decisions.-
             Learn how to hold the most meetings in the shortest amount of time while increasing sales.',
            'category_id'=>'1'
],
            [
            'name' => 'How to Scale a Startup',
            'price' => '19,500',
            'img'=>'how_to_scale_a_startup.jpg',
            'description' => ' Learn how to acquire new customers to help your startup grow.-
            Learn how to improve your cash flow.-
            Understand how to introduce innovation into your business.-
            Learn Model,Strategy,Management to Implement J-Curve in Your Business.-
            How to Increase Network Effects, High Gross Margins, Distribution, and Market Size?
            How to manage multiple projects?
            Learn about 14 channels for acquiring new customers.-
            Learn how to use merger and acquisition to multiply the size of your startup.-
            Understand how to track your startups progress using numbers and metrics.-
            Understand how to create monoply, even for a small business.-
            Understand how to generate leads in order to expand your business.- 
            Purchase online tools to help your business grow.-
            Understand how to scale various types of businesses (online, B2B, B2C).         
            ',
            'category_id'=>'1'
            ],
            [
            'name' => 'Family Business',
            'price' => '12,500',
            'img'=>'Export_import.jpg',
            'description' => 'Discover Growth Strategies for Family Businesses.-
            Discover How to Manage Family Business Conflicts.-
            Discover how to run a family business operations.-
            Learn how to leverage the family business brand.-
            Recognize cash flow management and accounting.-
            Learn how to attract business professionals.-
            Learn about Succession Planning.-
            Learn how to pique the interest of the next generation in your business.          
            ',
            'category_id'=>'1'
                ],
        [
            'name' => 'Low Cost Marketing Ideas',
            'price' => '12,500',
            'img'=>'low_cost_marketing.jpg',
            'description' => ' Viral Marketing.-
            Street Marketing.-
            Meme Marketing.-
            Under-Cover Marketing (Stealth Marketing).-
            Ambient Marketing.-
            Moment Marketing.-
            Film Based Marketing.-
            Humour Marketing.-
            Cause Marketing.-
            Engagement Marketing.-
            Smartphone Marketing.-
            Challenge Marketing.         
            ',
            'category_id'=>'2'
                ],
        [
            'name' => 'Brand Management',
            'price' => '14,500',
            'img'=>'Export_import.jpg',
            'description' => 'What exactly is a brand?-
            How do you create an eye-catching brand logo?-
            How should brand elements and guidelines be defined?-
            Jingles for brands and their significance.-
            How can a brands recall value be increased?-
            What are the various stages of brand development?-
            Social media branding.-
            The significance of brand promise and loyalty.          
            ',
            'category_id'=>'2'
                ],
        [
            'name' => 'Zero Dollar Marketing',
            'price' => '14,500',
            'img'=>'Zero_Dollar_Marketing(creative).jpg',
            'description' => 'Discover the ideal customer for your product.-
            Customers from all over the world can be reached.-
            Increase store traffic.-
            Learn how to use social media to communicate with customers.-
            Learn how to improve customer satisfaction by using feedback from customers.-
            Learn how to reduce customer acquisition costs.         
            ',
            'category_id'=>'2'
                ],
        [
            'name' => 'Generating Leads Through Blogging ',
            'price' => '12,500',
            'img'=>'Zero_Dollar_Marketing(creative).jpg',
            'description' =>  'Understand what a blog is and why it is important for your business.-
            Learn how different businesses have benefited from blogging.-
            Learn how to build a blog from scratch.-
            Learn how to search hot topics for the blog.-
            Importance of creating clickable headlines.-
            How to promote your business locally through blogs.-
            How to build audience for organic and inorganic blogs.-
            Learn how to use blogs for booking appointments.-
            Learn how to write a blog post in less than 30 minutes every day.-
            Optimisation of your blog to get more traffic, leads & sales.-
            Tips to become a successful blogger.-
            Monetisation of blogs.          
            ',
            'category_id'=>'3'
                ],
        [
            'name' => 'Whatsapp Marketing',
            'price' => '14,500',
            'img'=>'Whatsapp Marketing.jpg',
            'description' =>  'Discover the significance and advantages of WhatsApp marketing.-
             Discover how to use WhatsApps basic and advanced marketing features.-
             Learn how to configure WhatsApp Gateways.-
             Learn how to connect Google Sheets to WhatsApp.-
             Discover how to send/schedule manual and automated messages via WhatsApp Newsletter.-
             Discover how to Nurture Leads Using WhatsApp.                 
            ',
            'category_id'=>'3'
                ],
        [
            'name' => 'Instagram Marketing',
            'price' => '12,500',
            'img'=>'instagram_image.jpg',
            'description' =>  'Make a business Instagram account.-
             How to make various Instagram posts?-
             Learn how to take beautiful photographs?-
             Discover the value of hashtags.-
             Instagram marketing tools and features Instagram Influencer Marketing.-
             Learn how to run Instagram advertisements?-
             How to Assess the Effectiveness of an Instagram Post?-
             Instagram metrics.-
             How to Go Viral on Instagram?            
            ',
            'category_id'=>'3'
                ],
                       
        [
            'name' => 'Email Marketing',
            'price' => '14,500',
            'img'=>'Email_marketing.jpg',
            'description' =>  'Email marketing procedure in steps.-
             Learn how to create a focused email list of customers?-
             How to use lead magnets to get client email addresses?-
             Learn how to divide up your mailing list of clients?-
             Find out how to raise email open rates?-
             Utilising Canva to create inventive email designs.-
             Mailchimp is used for email automation.-
             Know how to use A/B testing in your email marketing plan?-
             Learn how to use analytics to improve email campaigns?             
            ',
            'category_id'=>'3'
                ],
        [
            'name' => 'Micro Videos Mastery',
            'price' => '12,500',
            'img'=>'Micro_Video_Mastery.jpg',
            'description' =>  'How to Use Micro Videos to Expand Your Online Business?-
             The Fundamentals of Shooting Micro Videos?-
             How do you find hot industry topics for micro videos?-
             Microvideos of various types.-
             How can micro videos be used to generate leads?-
             How should you optimise and edit micro videos for Google ranking?            
            ',
            'category_id'=>'3'
        ],
        [
            'name' => 'Digital Marketing Part-I',
            'price' => '19,500',
            'img'=>'digital_marketing.jpg',
            'description' =>  'Learn how digital marketing can help your company achieve its objectives.-
            Learn how traditional and digital marketing differ from one another.-
            Learn how to tell a tale so that it reaches the intended audience.-
            Acquire knowledge about creating a Facebook page and LinkedIn profile.-
            Twitter and YouTube accounts for your enterprise Gain knowledge of Search Engine Optimization (SEO) and how to apply it to your business.-
            Discover how to assemble a social media marketing team for your company.-
            Discover how to monetize various social media platforms.         
            ',
            'category_id'=>'3'
        ],
        [
            'name' => 'Online Reputation Management',
            'price' => '12,500',
            'img'=>'Online_Reputation_Management.jpg',
            'description' =>  ' Learn how to build a 5-star online reputation.-
            Learn about Search Engine Results Page (SERP) and its importance.-
            Learn how to handle the negative reviews online.-
            Learn how to get more positive reviews online and leverage them.-
            Learn the importance of building online communities.        
            ',
            'category_id'=>'3'
        ],
        [
            'name' => 'How To Conduct Succesfull Webinars',
            'price' => '12,500',
            'img'=>'Online_Reputation_Management.jpg',
            'description' =>  'Developing your childs entrepreneurial abilities.-
             Handling unnecessary demands from children.-
             How can you raise emotionally intelligent children?-
             Teaching children to learn from their mistakes.-
             How can parents change their attitudes toward their children?-
             How can you connect with your child?-
             How can we teach children to ask powerful and relevant questions?-
             Childrens Entrepreneurial Tools.-
             Educating your child about money.       
            ',
            'category_id'=>'3'
        ],
        [
            'name' => 'Digital Marketing Part-II',
            'price' => '19,500',
            'img'=>'Online_Reputation_Management.jpg',
            'description' =>  'The importance of performance marketing for business growth.-
            How to use Google platforms and tools for business benefits?-
            Google AdWords for search and display marketing.-
            How to generate leads through social media?-
            Use of Pixel for conversion, tracking, and remarketing.-
            Make your business ready for mobile marketing.-
            Learn what is growth hacking A.-
            E-mail marketing and E-commerce marketing.-
            Learn how to do successful affiliate marketing.-
            Generate revenue using Google AdSense.-
            And many more       
            ',
            'category_id'=>'3'
        ],
        [
            'name' => 'Video Enfluencer',
            'price' => '14,500',
            'img'=>'Video_Influence.jpg',
            'description' =>  'Learn how to become a video influencer and earn money.-
             Learn how to shoot and edit videos like a pro for free.-
             Discover strategies and tactics for increasing social media subscribers.-
             Learn how to create more appealing and engaging thumbnail and title designs for media-social media.-
             Learn how to make viral videos and become a celebrity video influencer.-
             Learn how to build a personal brand and a powerful network.
            ',
            'category_id'=>'3'
        ],
        ]);

    }
    }

