<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //Create Admin Role
        $sadmin = new Role();
        $sadmin->name = "suadmin";
        $sadmin->display_name = "Super Administrator";
        $sadmin->save();

        $admin = new Role();
        $admin->name = "admin";
        $admin->display_name = "Administrator";
        $admin->save();


        //Create Desk Officer Role
        $desk = new Role();
        $desk->name = "deskofficer";
        $desk->display_name = "Desk Officer";
        $desk->save();

        //Create Secretary Role
        $secretary = new Role();
        $secretary->name = "secretary";
        $secretary->display_name = "Secretary";
        $secretary->save();

        //Create Treasurer Role
        $treasurer = new Role();
        $treasurer->name = "treasurer";
        $treasurer->display_name = "Treasurer";
        $treasurer->save();

        //Create Clerk Role
        $clerk = new Role();
        $clerk->name = "clerk";
        $clerk->display_name = "Clerk";
        $clerk->save();

        $author = new Role();
        $author->name = "author";
        $author->display_name = "Author";
        $author->save();


        //Attach the roles

        $user1 = User::find(1);
        $user1->detachrole($sadmin);
        $user1->attachrole($sadmin);

        $user2 = User::find(2);
        $user2->detachrole($admin);
        $user2->attachrole($admin);

        $user3 = User::find(3);
        $user3->detachrole($desk);
        $user3->attachrole($desk);

        $user4 = User::find(4);
        $user4->detachrole($secretary);
        $user4->attachrole($secretary);

        $user5 = User::find(5);
        $user5->detachrole($treasurer);
        $user5->attachrole($treasurer);

        $user6 = User::find(6);
        $user6->detachrole($clerk);
        $user6->attachrole($clerk);

        $user7 = User::find(7);
        $user7->detachrole($author);
        $user7->attachrole($author);

    }
}
