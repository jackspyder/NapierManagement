<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'price' => '800',
                'duration' => '5',
                'title' => 'PRINCE2',
                'qualification' => 'PRINCE2 Foundation',
                'awarded_by' => 'BCS & Napier University',
                'overview' => 'PRINCE2 (an acronym for Projects IN Controlled Environments) is an industry standard methodology for effective project management. It is used extensively by the UK Government, and is also widely recognised and used in the private sector, both in the UK and internationally.
Using PRINCE2 provides you with greater control of resources, and the ability to manage business and project risk more effectively. A certification in PRINCE2 can benefit individuals seeking leading project management skills and greater employment prospects. PRINCE2 allows you to do your job more effectively, and is a great addition to any CV.
',
                'description' => 'This PRINCE2 Online Training is fully Accredited PRINCE2 Project Management Online Training and will prepare the delegates for the PRINCE2 Foundation and Practitioner Exams included on this course. PRINCE2 is the best practice for formal project management and by taking this course, delegates will learn the different methods, themes and practices that will allow them to become an effective project manager. Students will be able to list and understand the seven key principles, processes and themes involved in managing a project using the PRINCE2 methodology. The PRINCE2 Online Foundation and Practitioner Training course allows the delegates to take part in distance learning at their own pace, adapting to their busy schedule and allow them to complete their exams when they feel ready.',
                'who_for' => 'Mid Level Managers looking to gain skills',
                'requirements' => 'No Requirements',
                'career_path' => 'Management Roles',
            ], //Venue One

            [
                'price' => '600',
                'duration' => '4',
                'title' => 'Programme Management',
                'qualification' => 'ND in Program Management',
                'awarded_by' => 'BCS & Napier University',
                'overview' => 'A program is a group of related projects managed in a coordinated manner to obtain benefits not available from managing them individually. Program management is the application of knowledge, skills, tools and techniques to meet program requirements. 
Our programme management course will train you to interact effectively with those involved in the management of a programme or act as an informed member of a programme office, business change team or project delivery team working within a relevant environment.
',
                'description' => 'A program is a group of related projects managed in a coordinated manner to obtain benefits not available from managing them individually. Program management is the application of knowledge, skills, tools and techniques to meet program requirements. 
Our programme management course will train you to interact effectively with those involved in the management of a programme or act as an informed member of a programme office, business change team or project delivery team working within a relevant environment.
',
                'who_for' => 'Mid Level Managers looking to gain skills',
                'requirements' => 'No Requirements',
                'career_path' => 'Management Roles',
            ], //Venue One

            [
                'price' => '200',
                'duration' => '2',
                'title' => 'Change Management',
                'qualification' => '',
                'awarded_by' => 'BCS & Napier University',
                'overview' => 'Change management is the discipline that guides how we prepare, equip and support individuals to successfully adopt change in order to drive organizational success and outcomes.
Our change management course is accredited by The Change Management Institute (CMI), and completion of it certifies your ability to:
• Perform the role of a highly effective organizational change, transition or transformation manager.
• Draw from a range of professional approaches to enable an organization to implement change smoothly.
• Motivate and ease people into adjusting to organizational change.
• Identify the roles needed to assemble teams most likely to deliver successful change.',
                'description' => 'Change management is the discipline that guides how we prepare, equip and support individuals to successfully adopt change in order to drive organizational success and outcomes.
Our change management course is accredited by The Change Management Institute (CMI), and completion of it certifies your ability to:
• Perform the role of a highly effective organizational change, transition or transformation manager.
• Draw from a range of professional approaches to enable an organization to implement change smoothly.
• Motivate and ease people into adjusting to organizational change.
• Identify the roles needed to assemble teams most likely to deliver successful change.',
                'who_for' => 'Mid Level Managers looking to gain skills',
                'requirements' => 'No Requirements',
                'career_path' => 'Management Roles',
            ], //Venue One

            [
                'price' => '700',
                'duration' => '5',
                'title' => 'ITIL',
                'qualification' => '',
                'awarded_by' => 'BCS & Napier University',
                'overview' => 'ITIL, formerly an acronym for Information Technology Infrastructure Library, is a set of detailed practices for IT service management (ITSM) that focuses on aligning IT services with the needs of business.
This course is aimed at IT professionals working within an organisation that has adopted ITIL, or anyone who wish to develop a basic understanding of IT service management.
Our course allows you to understand service management as a practice, the purpose of the ITIL service lifecycle, key ITIL principles, models and definitions, selected processes, functions and roles, and the recommended technology and architecture.
',
                'description' => 'ITIL, formerly an acronym for Information Technology Infrastructure Library, is a set of detailed practices for IT service management (ITSM) that focuses on aligning IT services with the needs of business.
This course is aimed at IT professionals working within an organisation that has adopted ITIL, or anyone who wish to develop a basic understanding of IT service management.
Our course allows you to understand service management as a practice, the purpose of the ITIL service lifecycle, key ITIL principles, models and definitions, selected processes, functions and roles, and the recommended technology and architecture.
',
                'who_for' => 'Mid Level Managers looking to gain skills',
                'requirements' => 'No Requirements',
                'career_path' => 'Management Roles',
            ], //Venue One

            [
                'price' => '500',
                'duration' => '4',
                'title' => 'Risk management',
                'qualification' => '',
                'awarded_by' => 'BCS & Napier University',
                'overview' => 'Risk management is the systematic application of principles, approach and processes to identify and assess risks and then to plan and implement a suitable response.
Our course is for anyone new to risk or wishing to enter the risk profession. Through completion of our risk management course, you will be able to:
• Evaluate risk management frameworks and practices in an applied industry setting.
• Critically assess risk management reports and research.
• Identify the limitations and the positive role of risk management in real-life situations.
',
                'description' => 'Risk management is the systematic application of principles, approach and processes to identify and assess risks and then to plan and implement a suitable response.
Our course is for anyone new to risk or wishing to enter the risk profession. Through completion of our risk management course, you will be able to:
• Evaluate risk management frameworks and practices in an applied industry setting.
• Critically assess risk management reports and research.
• Identify the limitations and the positive role of risk management in real-life situations.',
                'who_for' => 'Mid Level Managers looking to gain skills',
                'requirements' => 'No Requirements',
                'career_path' => 'Management Roles',
            ] //Venue One
        ]);
    }
}
