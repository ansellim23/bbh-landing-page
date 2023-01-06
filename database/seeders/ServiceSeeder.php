<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServicesModel;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            ['service_name'=>'Solution Design of Automation','service_description'=>'Business Automation Can Decentralize Access To Systems & Enable The Broader Org. Remove The Need For Custom Code, Standalone Solutions, & Point-to-point Connections. Services: Interactive Docs, Tutorials, Code Snippets & Examples.','service_status'=>1],
            ['service_name'=>'Increase our Virtual Presence','service_description'=>'Your brand acquires a voice when your company regularly posts on social media, no matter the platform. This voice helps your company become relatable to customers and provides a human touch. Businesses can get to know their customers by using social media.','service_status'=>1],
            ['service_name'=>'Content Marketing','service_description'=>'Content marketing is a strategic marketing approach focused on creating and distributing valuable, relevant, and consistent content to attract and retain a clearly defined audience — and, ultimately, to drive profitable customer action.','service_status'=>1],
            ['service_name'=>'Effective Tactics & Execution','service_description'=>'Everyone seems to have different definitions; often, those definitions are easily mixed up. Why is it important to understand these terms? When we clearly understand the meanings of vision, mission, strategy, tactics, and execution, we are better able to delegate who should accomplish what. We plan better, we execute better, and we achieve more.','service_status'=>1],
            ['service_name'=>'Virtual Assistants','service_description'=>'A virtual assistant is a remote employee who offers administrative support for you and your business, usually part-time. They can do tasks that an executive assistant would typically handle, such as scheduling appointments, making phone calls, arranging travel, or organizing emails.','service_status'=>1],
            ['service_name'=>'Hollywood Spotlight','service_description'=>'Creation of pre requisite requirements for movie film adaptation. We offer a range of services to help film studios and production companies adapt source material into successful movies. These services include scriptwriting, storyboarding, casting, location scouting, and pre-production planning. The company helps bring source material to the big screen in a way that is true to the original vision while also being commercially successful.','service_status'=>1],
        ];
        foreach($services as $value){
            ServicesModel::create($value);
        }
    }
}
