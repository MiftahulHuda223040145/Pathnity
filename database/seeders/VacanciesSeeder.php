<?php

namespace Database\Seeders;

use App\Models\Vacancies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class VacanciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vacancies = [
            [
                'title' => 'Fullstack Developer',
                'category_id' => '1',
                'types_id' => '1',
                'salary' => '10000000',
                'numberofworker' => '10',
                'description' => 'Duties and Responsibilities Designs, codes or configures, tests, debugs, deploys, documents and maintains web service applications using a variety of software development toolkits, testing/verification applications and other tools, while adhering to specific development best practices and quality standards. Gathers business requirements, translating that information into detailed technical specifications from which programs will be written or configured, and validating that the proposed applications align with both the architectural design and the business needs. Responsible for troubleshooting and issue analysis, as well as coding, testing and implementing software enhancements.

                Qualifications:

                Bachelors Degree in Information Technology, Computer Science or other relevant fields
                Minimum 5 years of experience in Java Development
                Knowledgeable in software development design patterns Nice to have:
                Good to have GIT, Swagger, PCF, Rabbit MQ
                Good API skills technology such as Rest Webservice
                Experience on creating unit test using JUnit, Mockito or PowerMock
                Experience on mark up language such as JSON and YML
                Experience on using Quality and Security scan tools such as Sonar, Fortify and WebInspect
                Experienced on Agile methodology.
                Good English communication skills.
                Willing to work in Semarang (hybrid).
                Pertanyaan dari perusahaan
                Lamaran kamu akan mencakup pertanyaan-pertanyaan berikut:
                How many years experience do you have as a Full Stack Java Developer?
                Which of the following types of qualifications do you have?
                What is your expected monthly basic salary?
                How many years experience do you have in a software development role?
                How much notice are you required to give your current employer?',
                'status' => '1',
                'organizer_id' => '1',

            ],
            [
                'title' => 'Data Scientist',
                'category_id' => '2',
                'types_id' => '2',
                'salary' => '15000000',
                'numberofworker' => '5',
                'description' => 'Duties and Responsibilities Designs, codes or configures, tests,
                    debugs, deploys, documents and maintains web service applications using a variety of software development tool
                    kits, testing/verification applications and other tools, while adhering to specific development best practices and
                    quality standards. Gathers business requirements, translating that information into detailed technical specifications
                    from which programs will be written or configured, and validating that the proposed applications align with both
                    the architectural design and the business needs. Responsible for troubleshooting and issue analysis, as well as
                    coding, testing and implementing software enhancements.
                    Qualifications:
                        Bachelors Degree in Information Technology, Computer Science or other relevant fields
                        Minimum 5 years of experience in Java Development
                        Knowledgeable in software development design patterns Nice to have:
                        Good to have GIT, Swagger, PCF, Rabbit MQ
                        Good API skills technology such as Rest Webservice
                        Experience on creating unit test using JUnit, Mockito or PowerMock
                        Experience on mark up language such as JSON and YML
                        Experience on using Quality and Security scan tools such as Sonar, Fortify and WebInspect
                        Experienced on Agile methodology.
                        Good English communication skills.
                        Willing to work in Semarang (hybrid).
                        Pertanyaan dari perusahaan
                        Lamaran kamu akan mencakup pertanyaan-pertanyaan berikut:
                        How many years experience do you have as a Full Stack Java Developer?
                        Which of the following types of qualifications do you have?
                        What is your expected monthly basic salary?
                        How many years experience do you have in a software development role?
                        How much notice are you required to give your current employer?',
                'status' => '0',
                'organizer_id' => '2',

            ],
            [
                'title' => 'Data Engineer',
                'category_id' => '2',
                'types_id' => '3',
                'salary' => '18000000',
                'numberofworker' => '3',
                'description' => 'Duties and Responsibilities Designs, codes or configures, tests,
                    debugs, deploys, documents and maintains web service applications using a variety of software development tool
                    kits, testing/verification applications and other tools, while adhering to specific development best practices and
                    quality standards. Gathers business requirements, translating that information into detailed technical specifications
                    from which programs will be written or configured, and validating that the proposed applications align with both
                    the architectural design and the business needs. Responsible for troubleshooting and issue analysis, as well as
                    coding, testing and implementing software enhancements.
                    Qualifications:
                        Bachelors Degree in Information Technology, Computer Science or other relevant fields
                        Minimum 5 years of experience in Java Development
                        Knowledgeable in software development design patterns Nice to have:
                        Good to have GIT, Swagger, PCF, Rabbit MQ
                        Good API skills technology such as Rest Webservice
                        Experience on creating unit test using JUnit, Mockito or PowerMock
                        Experience on mark up language such as JSON and YML
                        Experience on using Quality and Security scan tools such as Sonar, Fortify and WebInspect
                        Experienced on Agile methodology.
                        Good English communication skills.
                        Willing to work in Semarang (hybrid).
                        Pertanyaan dari perusahaan
                        Lamaran kamu akan mencakup pertanyaan-pertanyaan berikut:
                        How many years experience do you have as a Full Stack Java Developer?
                        Which of the following types of qualifications do you have?
                        What is your expected monthly basic salary?
                        How many years experience do you have in a software development role?
                        How much notice are you required to give your current employer?',
                'status' => '1',
                'organizer_id' => '2',

            ],
            [

                'title' => 'Talent Management & Organization Development Supervisor',
                'category_id' => '2',
                'types_id' => '3',
                'salary' => '18000000',
                'numberofworker' => '3',
                'description' => 'Company Description

                        This is a full-time on-site role for a Total Compensation and Reward professional at PT. PASSION ABADI KORPORA located in South Tangerang. The role involves tasks such as compensation planning, reward planning, job evaluation, compensation management, designing compensation structures, and responsible for monthly compensation and benefit.

                        

                        Role Description

                        This is a full-time on-site role for a Talent Management & Organization Development Supervisor at PT. PASSION ABADI KORPORA located in Jakarta Metropolitan Area. The Supervisor will be responsible for tasks related to analytical skills, talent management, organization analytic, communication, program development, sales, and team management.

                        

                        Qualifications

                        Analytical Skills
                        Communication skills
                        Program Development skills
                        Sales skills
                        Team Management skills
                        Experience in talent management and organization development
                        Strong leadership and interpersonal skills
                        Result and process oriented
                        Commit to give excellent result
                        Prefer Master s degree in Human Resources, Business Administration, or related field
                        Pertanyaan dari perusahaan
                        Lamaran kamu akan mencakup pertanyaan-pertanyaan berikut:
                        What is your expected monthly basic salary?
                        Which of the following types of qualifications do you have?
                        How many years experience do you have as an Organisational Development Supervisor?
                        How much notice are you required to give your current employer?
                        Which of the following languages are you fluent in?',
                'status' => '0',
                'organizer_id' => '2',

            ],
            [
                'title' => 'Software Engineer',
                'category_id' => '1',
                'types_id' => '2',
                'salary' => '25000000',
                'numberofworker' => '5',
                'description' => 'Company Description
            
                        Our client is a fast-growing tech company providing cutting-edge solutions. The role involves designing, developing, and maintaining software systems.
            
                        Role Description
            
                        Full-time on-site role for a Software Engineer responsible for coding, debugging, and collaborating with the engineering team to develop innovative solutions.
            
                        Qualifications
            
                        Strong proficiency in JavaScript, Python, or Java
                        Experience with cloud platforms like AWS or Azure
                        Strong problem-solving and communication skills
                        Bachelor\'s degree in Computer Science or a related field
                        Ability to work independently and in teams
                        ',
                'status' => '1',
                'organizer_id' => '1',

            ],
            [
                'title' => 'Digital Marketing Specialist',
                'category_id' => '3',
                'types_id' => '1',
                'salary' => '15000000',
                'numberofworker' => '3',
                'description' => 'Company Description
            
                        An innovative marketing agency seeking talented professionals to enhance online marketing campaigns and drive customer engagement.
            
                        Role Description
            
                        The role involves managing online ads, content marketing, and analyzing campaign results.
            
                        Qualifications
            
                        Bachelor\'s degree in Marketing or related fields
                        Expertise in Google Ads and social media platforms
                        Proven ability to generate results-oriented campaigns
                        ',
                'status' => '1',
                'organizer_id' => '2',

            ],
            [
                'title' => 'UI/UX Designer',
                'category_id' => '3',
                'types_id' => '2',
                'salary' => '22000000',
                'numberofworker' => '2',
                'description' => 'Company Description
            
                        Leading e-commerce platform with a focus on exceptional user experience. The role involves designing user interfaces and ensuring smooth interactions.
            
                        Role Description
            
                        Responsible for wireframing, prototyping, and improving usability.
            
                        Qualifications
            
                        Proficiency in Figma or Adobe XD
                        Portfolio showcasing UX/UI projects
                        Understanding of responsive design
                        ',
                'status' => '0',
                'organizer_id' => '3',

            ],
            [
                'title' => 'Data Scientist',
                'category_id' => '2',
                'types_id' => '3',
                'salary' => '35000000',
                'numberofworker' => '4',
                'description' => 'Company Description
            
                        An AI-driven company specializing in big data analytics.
            
                        Role Description
            
                        Develop machine learning models and analyze data for strategic decisions.
            
                        Qualifications
            
                        Proficiency in Python, R, or SQL
                        Experience with TensorFlow or PyTorch
                        Strong analytical mindset
                        ',
                'status' => '1',
                'organizer_id' => '4',

            ],
            [
                'title' => 'Human Resources Manager',
                'category_id' => '1',
                'types_id' => '1',
                'salary' => '18000000',
                'numberofworker' => '1',
                'description' => 'Company Description
            
                        A global logistics company.
            
                        Role Description
            
                        Oversee recruitment, employee relations, and compliance.
            
                        Qualifications
            
                        Bachelor\'s degree in HR or a related field
                        Strong interpersonal and negotiation skills
                        Proven track record in HR leadership
                        ',
                'status' => '0',
                'organizer_id' => '5',

            ],
            [
                'title' => 'Financial Analyst',
                'category_id' => '1',
                'types_id' => '1',
                'salary' => '20000000',
                'numberofworker' => '2',
                'description' => 'Company Description
            
                        A multinational firm offering comprehensive investment solutions.
            
                        Role Description
            
                        Analyze financial data and prepare reports for stakeholders.
            
                        Qualifications
            
                        Bachelor\'s degree in Finance or Accounting
                        Proficiency in Excel and financial modeling
                        Strong attention to detail
                        ',
                'status' => '1',
                'organizer_id' => '6',

            ],
            [
                'title' => 'Project Manager',
                'category_id' => '2',
                'types_id' => '3',
                'salary' => '30000000',
                'numberofworker' => '3',
                'description' => 'Company Description
            
                        Leading construction company focusing on sustainable development.
            
                        Role Description
            
                        Manage large-scale construction projects ensuring on-time delivery.
            
                        Qualifications
            
                        PMP certification preferred
                        Bachelor\'s degree in Civil Engineering
                        Strong organizational and leadership skills
                        ',
                'status' => '1',
                'organizer_id' => '7',

            ],
            [
                'title' => 'Graphic Designer',
                'category_id' => '2',
                'types_id' => '1',
                'salary' => '12000000',
                'numberofworker' => '2',
                'description' => 'Company Description
            
                        A creative agency specializing in brand development.
            
                        Role Description
            
                        Create visual content for marketing campaigns and branding.
            
                        Qualifications
            
                        Expertise in Adobe Creative Suite
                        Strong creative and visual skills
                        Portfolio showcasing past projects
                        ',
                'status' => '0',
                'organizer_id' => '8',

            ],
            [
                'title' => 'Content Writer',
                'category_id' => '2',
                'types_id' => '2',
                'salary' => '10000000',
                'numberofworker' => '3',
                'description' => 'Company Description
            
                        An educational technology startup.
            
                        Role Description
            
                        Create engaging content for blogs, social media, and newsletters.
            
                        Qualifications
            
                        Bachelor\'s degree in Journalism or Communications
                        Excellent writing and editing skills
                        Ability to work under deadlines
                        ',
                'status' => '0',
                'organizer_id' => '9',

            ],
            [
                'title' => 'Customer Support Specialist',
                'category_id' => '1',
                'types_id' => '1',
                'salary' => '8000000',
                'numberofworker' => '10',
                'description' => 'Company Description
            
                        A tech company providing SaaS solutions.
            
                        Role Description
            
                        Provide excellent customer service and resolve client issues.
            
                        Qualifications
            
                        Strong communication skills
                        Experience with CRM tools
                        Patience and problem-solving mindset
                        ',
                'status' => '1',
                'organizer_id' => '9',
            ],
            [
                'title' => 'Koordinator Relawan Komunitas',
                'category_id' => '4',  // Pilih kategori yang sesuai (misalnya kategori "Sosial")
                'types_id' => '4',  // ID tipe untuk Volunteer
                'salary' => null,  // Biasanya relawan tidak menerima gaji
                'numberofworker' => '5',  // Jumlah relawan yang dibutuhkan
                'description' => 'Kami mencari relawan yang berdedikasi untuk membantu mengelola program pengabdian masyarakat dan mengoordinasikan acara-acara komunitas. Relawan akan bekerja bersama pemimpin komunitas untuk memastikan kelancaran kegiatan.',
                'status' => '1',  // Status aktif
                'organizer_id' => '2',  // ID organizer yang menawarkan program ini
            ],

            [
                'title' => 'Relawan Pembersihan Lingkungan',
                'category_id' => '5',  // Misalnya kategori "Lingkungan"
                'types_id' => '4',  // ID tipe untuk Volunteer
                'salary' => null,  // Tidak ada gaji
                'numberofworker' => '10',  // Jumlah relawan yang dibutuhkan
                'description' => 'Relawan akan berpartisipasi dalam kegiatan pembersihan lingkungan di area-area umum dan sungai. Kegiatan ini bertujuan untuk menciptakan lingkungan yang lebih bersih dan sehat bagi masyarakat.',
                'status' => '1',  // Status aktif
                'organizer_id' => '3',  // ID organizer
            ],

            [
                'title' => 'Relawan Pendidikan Anak',
                'category_id' => '6',  // Kategori yang sesuai (misalnya "Pendidikan")
                'types_id' => '4',  // ID tipe untuk Volunteer
                'salary' => null,  // Tidak ada gaji
                'numberofworker' => '6',  // Jumlah relawan yang dibutuhkan
                'description' => 'Relawan dibutuhkan untuk mengajar anak-anak di daerah yang membutuhkan. Program ini bertujuan untuk membantu meningkatkan pendidikan bagi anak-anak di daerah kurang mampu.',
                'status' => '1',  // Status aktif
                'organizer_id' => '4',  // ID organizer
            ],
        ];

        foreach ($vacancies as $vacancy) {
            Vacancies::create($vacancy);
        }
    }
}
