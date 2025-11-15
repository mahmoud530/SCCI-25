const headTitle = document.getElementById("head-title");
const paper = document.getElementById("paper");
const membersTitle = document.getElementById("members-title");
const headJobList = document.getElementById("head-job-list");
const membersJobList = document.getElementById("members-job-list");
const membersJobListTitle = document.getElementById("members-job-list-title");
const imagesContainer = document.getElementById("images-container");

/* ----------------- AC COMMITTEE ----------------*/

const ACHeadJobDescriptionList = [
    "Make A Plan For The Whole Year Which Should Include Goals And Agenda For Each Month.",
    "Set A Description For The Workshops And Choose A Crew For Each.",
    "Create A Healthy Environment Between The Members.",
    "Be A Source Of Positivity And Support For The Members.",
    "Monitor The Members And Guide Them While Maintaining Their Dependability And Leaving Them Enough Space To Shine.",
    "Make Sure The Academic Projects Are Well Organized By The Members."
]

const ACMemberImageList = [
    "AC-members/ID [Recovered][1]_01.png",
    "AC-members/ID [Recovered][1]-02.png",
    "AC-members/ID [Recovered][1]-03.png",
    "AC-members/ID [Recovered][1]-04.png",
    "AC-members/ID [Recovered][1]-05.png",
    "AC-members/ID [Recovered][1]-06.png",
    "AC-members/ID [Recovered][1]-07.png",
    "AC-members/ID [Recovered][1]-08.png",
    "AC-members/ID [Recovered][1]-09.png",
    "AC-members/ID [Recovered][1]-10.png",
    "AC-members/ID [Recovered][1]-11.png",
    "AC-members/ID [Recovered][1]-12.png",
    "AC-members/ID [Recovered][1]-13.png",
    "AC-members/ID [Recovered][1]-14.png",
    "AC-members/ID [Recovered][1]-15.png",
    "AC-members/ID [Recovered][1]-16.png",
    "AC-members/ID [Recovered][1]-17.png",
    "AC-members/ID [Recovered][1]-18.png",
    "AC-members/ID [Recovered][1]-19.png",
    "AC-members/ID [Recovered][1]-20.png",

]

const ACMemberJobDescriptionList = [
    "They Are Responsible For The Sessions Fully, Preparing Its Materials.",
    "Deliver Them Through Sessions To The Participants To Maximize Their Potentials & Decrease The Gap Between Them & The Market Needs Through 5 Workshops (Appsplash, Devology, Markative, Investeneur, Techsolve)."
]

/* ----------------- HR COMMITTEE ----------------*/

const HRHeadJobDescriptionList = [
    "Provide Reports And Feedback Through The Year Either Verbally Or Written To President.",
    "Do Research And Development To Major Event That Are Happening In The Year To Help Make Them Better Or Avoid Any Problems That Occurred In The Previous Years And Act As Counsel For The Next Years.",
    "Collect Database Of Members And Heads (Previous And Current) And Trainers.",
    "Handle Problems With Members, Heads, Or High Board.",
    "Provide Feedback To Board And High Board For Each Squad.",
]

const HRMemberImageList = [
    "HR-members/ABDELRAHMAN ALAA-1.png",
    "HR-members/ARWA MOHAMED-1.png",
    "HR-members/HABIBA EMAD-1.png",
    "HR-members/IBRAHIM MOHAMED-1.png",
    "HR-members/JANA AHMED-1.png",
    "HR-members/JANA ASHRAF-1.png",
    "HR-members/MARWAN AYMAN-1.png",
    "HR-members/MAZEN MOHAMED-1.png",
    "HR-members/MENNA HATEM-1.png",
    "HR-members/MOREEN EDWARD-1.png",
    "HR-members/Sama refaat-1.png",
    "HR-members/SAMA YOUSEF-1.png",
    "HR-members/ZIAD EMAD-1.png",
]

const HRMemberJobDescriptionList = [
    "Managing The Human Resources Functions Such As Recruiting, Interviewing Selecting And Planning. Analyzing Event, Sessions And Meetings And Reporting Them.",
    "Working On And Writing R&Ds Reports.",
    "Keeping Up With Members Work And Evaluating Them And Constantly Giving Them Feedback.",
    "Making Sure That The Constitutions Are Being Followed Along With Work Ethics.",
    "Developing Members By Giving Them Proper Trainings That They Need Along The Year.",
    "Evaluating SCCI Performance Output.",
    "Solving Problems In Committees And In SCCI As A Whole And Maintaining A Great Environment And Keeping The SCCI Present."
]

/* ----------------- IT COMMITTEE ----------------*/
const ITHeadJobDescriptionList = [
    "Responsible For Planning For The Website And Mobile App Of SCCI And Guide The Members For Creating It.",
    "Responsible For Providing The Needed Training For The Members To Know How To Create The Website And The Mobile Application Right Without Facing Any Problems Or Difficulties.",
    "Responsible For Linking All The Members Work Together And Make Them On The Same Rythm.",
    "Responsible For Editing On The Members Work To Make All Of Them With The Same Flow.",
];

const ITMemberImageList = [
    "IT-members/ID-1.png",
    "IT-members/ID [Recovered]7-1.png",
    "IT-members/ID [Recovered]-1.png",
    "IT-members/ID [Recovered]11-1.png",
    "IT-members/ID [Recovered]4-1.png",
    "IT-members/ID [Recovered]5-1.png",
    "IT-members/ID [Recovered]6-1.png",
    "IT-members/ID [Recovered]8-1.png",
    "IT-members/ID [Recovered]10-1.png",
    "IT-members/ID [Recovered]12-1.png",
    
]

const ITMemberJobDescriptionList = [
    "Responsible For SCCI's Website Which Is The Core Of Marketing To The Place And Facilitate The Workflow Totally At The Same Time.",
    "Responsible For Maintaining The Participants' Laptops From Software As. Operating Systems And The Software Programs Used In Sessions.",
    "Responsible For SCCI's Mobile Application.",
    "Responsible For Creating Any Required Form For Any Of The SCCI's Events.",
];

/* ----------------- SMM COMMITTEE ----------------*/
const SMMHeadJobDescriptionList = [
    "Responsible For All Campaigns & Digital Designs For All SCCI Events & Their Content.",
    "Manage SCCI's Social Media Platforms, Newsletter & Behance Project (Facebook & Instagram).",
    "Market SCCI Events And Online Coverage For All SCCI's Sessions & Events.",
];

const SMMMemberImageList = [
    "SMM-members/ID [Recovered].ai.pdf malak-1.png",
    "SMM-members/ID [Recovered].pdf BESHOY-1.png",
    "SMM-members/ID [Recovered].pdf farida-1.png",
    "SMM-members/ID [Recovered].pdf fatma-1.png",
    "SMM-members/ID [Recovered].pdf hagar-1.png",
    "SMM-members/ID [Recovered].pdf HANA-1.png",
    "SMM-members/ID [Recovered].pdf HASSAN-1.png",
    "SMM-members/ID [Recovered].pdf haya-1.png",
    "SMM-members/ID [Recovered].pdf KAREMA-1.png",
    "SMM-members/ID [Recovered].pdf nadine-1.png",
    "SMM-members/ID [Recovered].pdf nour e-1.png",
    "SMM-members/ID [Recovered].pdf nour-1.png",
    "SMM-members/ID [Recovered].pdf SHAHD-1.png"
]

const SMMMemberJobDescriptionList = [
    "Full Marketing Campaigns Designing.",
    "Writing & Designing SCCI's Newsletter.",
    "Online Coverage For SCCI's Sessions & Events.",
    "Managing SCCI's Social Media Platforms (Facebook & Instagram).",
    "Replying On Posts, Comments, Questions On The Social Media Platforms.",
];

/* ----------------- MP COMMITTEE ----------------*/
const MPHeadJobDescriptionList = [
    "Responsible For Using Media Tools Such As Videos, Documentaries, Series & Projects.",
    "Photography Coverage Of All SCCI's Sessions And Events.",
    "Interactive Media To Deliver SCCI's Image.",
];

const MPMemberImageList = [
    "MP-members/ID [ABDELRAHMAN YASSER]-1.png",
    "MP-members/ID [ANAS KHALIL]-1.png",
    "MP-members/ID [AYA SHREIF]-1.png",
    "MP-members/ID [Kareesm essam]-1.png",
    "MP-members/ID [NOURHAN MOSTAFA]-1.png",
    "MP-members/ID [OMAR AHMED]-1.png",
    "MP-members/ID [YOUSSEF AHMED]-1.png",

]

const MPMemberJobDescriptionList = [
    "Photography, Video Making.",
    "Coverage For SCCI's Sessions And Events.",
    "Responsible For Visual Documentaries For SCCI.",
    "Managing SCCI's YouTube Channel.",
];

/* ----------------- DD COMMITTEE ----------------*/
const DDHeadJobDescriptionList = [
    "Determine The Message Of What The Design Should Portray.",
    "Using Palettes, Brushes & Tools To Create The Most Beautiful Pieces.",
    "Combine Art & Technology To Communicate Ideas Through The Printed Designs & Posters.",
    "Responsible For Handmade Crafts, Decorations, Internal & External Booths, T-Shirts & IDs & Giveaways.",
];

const DDMemberImageList = [
    "DD-members/Ahmed hosny-1.png",
    "DD-members/Aladdin ahmed-1.png",
    "DD-members/BENDARY-1.png",
    "DD-members/Hanna osama-1.png",
    "DD-members/Jwairiah omar-1.png",
    "DD-members/Mariam wael-1.png",
    "DD-members/Miral hossam-1.png",
    "DD-members/Sarah elalalily-1.png",
    "DD-members/Mohamed hesham-1.png",
    "DD-members/Mohamed Ramadan-1.png",
    "DD-members/Rahma mahmoud-1.png",
    "DD-members/Rana hesham-1.png"

]

const DDMemberJobDescriptionList = [
    "Responsible For Internal & External Booths.",
    "Responsible For Photobooths Decorations.",
    "Responsible For T-Shirt, IDs, Brochures, Flyers, Tickets, Posters, General Meeting's Gifts, Certificate Designs.",
    "Responsible For Workshops Decorations.",
    "Responsible For SCCI Events' Decorations.",
];

/* ----------------- MC COMMITTEE ----------------*/
const MCHeadJobDescriptionList = [
    "Distributing the members on the workshops.",
    "Supervising the handling of the application.",
    "Help the members making the mobile application.",
    "Coordinates with SMM head to upload the newsletter on the application.",
    "Help the members to make the forms.",
    "Making a friendly environment in the committee to produce more good work.",
    "Support the members and help them to learn more and be more productive.",
    "Provide the members with all the needed trainings.",
];

const MCMemberImageList = [
    "MC-members/BADR-1.png",
    "MC-members/ID [ADEL MAGDY].jpg",
    "MC-members/ID [ASHRAF].jpg",
    "MC-members/ID [AYA ESSAM].jpg",
    "MC-members/ID [BODA].jpg",
    "MC-members/ID [EBRAHIM].jpg",
    "MC-members/ID [MAZEN].jpg",
    "MC-members/ID [MOHAMED AHMED].jpg",
    "MC-members/ID [MOHAMED AYMAN].jpg",
    "MC-members/ID [MOHRAEL].jpg",
    "MC-members/ID [OMAR HAMED].jpg",
    "MC-members/ID [SALSABEEL MOHAMED].jpg"
]

const MCMemberJobDescriptionList = [
    "Technical support for all the workshops.",
    "Responsible for handling SCCI application.",
    "Upload the newsletter on the website in coordination with SMM.",
    "Make all the forms that will be needed through the year.",
    "Make a partition in the application for SCCI store in coordination with DD.",
    "Creating an absence form to make it easier to utilize time away for HRs.",
    "Including sections in the application for posting announcements and uploading tasks for participants and resources.",
];

/* ----------------- PR COMMITTEE ----------------*/
const PRHeadJobDescriptionList = [
    " Planning, Developing And Implementing PR Strategies.",
    "Managing Enquires From Media, Individuals And Other Organizations.",
    "Excellent Initiative Ability To Prioritize And Plan Effectively.",
    "Having Excellent Communication And Leadership Skills.",
    "Places And Permissions For Juniors & Internship Sessions."
]

const PRMemberImageList = [
    "PR-members/EMAN PR-1.png",
    "PR-members/FADY PR-1.png",
    "PR-members/JANA G PR-1.png",
    "PR-members/JANA M PR-1.png",
    "PR-members/JUMANA PR-1.png",
    "PR-members/NOURHAN PR-1.png",
    "PR-members/RODINA PR-1.png",
    "PR-members/ROHEM PR-1.png",
    "PR-members/SHAHD PR-1.png",
    "PR-members/WAEL PR-1.png",
    "PR-members/YASMIN PR-1.png",
]

const PRMemberJobDescriptionList = ["Responsible For All FCAI Permissions.",
    "Responsible For Ushering Permissions.",
    "Responsible For Media Sponsors.",
    "Making And Organizing Opening.",
    "Making And Organizing Closing.",
    "Places For Juniors Sessions.",
    "Place For The Conference.",
    "Build A Positive Relationship With The Public, Partners, Members, And Other Organizations."
]

/* ----------------- CR COMMITTEE ----------------*/
const CRHeadJobDescriptionList = [
    "Always Following Up With The Members With Each Task Given And Always Giving Them Constructive Feedbacks.",
    "Leaving A Positive Impact On The Committee, So The Committee Would Leave A Positive Impact On SCCI.",
    "Communicating With The Committee's Members (One To One Meeting) Regularly To Have Each Member's Feedbacks About (Other Members, Meetings' Efficiency, Tasks, Work Method, Self- Development)."
]

const CRMemberImageList = [
    "CR-members/AMMAR-1.png",
    "CR-members/CR MEMBRRS-01.jpg",
    "CR-members/CR MEMBRRS-02.jpg",
    "CR-members/CR MEMBRRS-03.jpg",
    "CR-members/CR MEMBRRS-04.jpg",
    "CR-members/CR MEMBRRS-06.jpg",
    "CR-members/CR MEMBRRS-07.jpg",
    "CR-members/CR MEMBRRS-08.jpg",
    "CR-members/CR MEMBRRS-09.jpg",
    "CR-members/CR MEMBRRS-11.jpg",
    "CR-members/CR MEMBRRS-12.jpg",
    "CR-members/YOUSEF M-1.png",
]

const CRMemberJobDescriptionList = ["Organizing Charity Events And Campaigns To Help Those In Need.",
    "Organizing Community Event To Raise Awareness Regarding A Specific Issue Facing The Community.",
    "Coffee Break Activities To Help All Participants To Bond With Others Outside Of Their Workshop."
]


/* ----------------- Logistics COMMITTEE ----------------*/
const LogisticsHeadJobDescriptionList = [
    "Logistics Head Is Responsible For Providing All The Goods And Operations Needed By The Organization Through His / Her Team, And To Prepare A Well-Trained Team That Can Work Directly In Any Field Related To The Business Development And In Charge Of All The Operations Processes."
]

const LogisticsMemberImageList = [
    "LOG-members/abdelrahman magdy-1.png",
    "LOG-members/arwa-1.png",
    "LOG-members/aya ashraf-1.png",
    "LOG-members/habiba ashraf-1.png",
    "LOG-members/khadiga mohamed-1.png",
    "LOG-members/malak adel-1.png",
    "LOG-members/Mayar medhat-1.png",
    "LOG-members/salma elsaman-1.png",
    "LOG-members/shehab osama-1.png",
    "LOG-members/yara haytham-1.png",
    "LOG-members/youssef wael-1.png",
    
]

const LogisticsMemberJobDescriptionList = ["Our Role In SCCI Is To Provide The Organization With All Needed Resources And Tangible Goods And Materials Like Wearing, Printings Work, Catering, Different Kinds Of Materials ...Etc.",
    "Also We Are Responsible For All The Kinds Of Operations And The Fun Part Of The Year Like Organizing The Crew Outings And The Mid-Year Trip."
]

/* ----------------- BD COMMITTEE ----------------*/
const BDHeadJobDescriptionList = [
    "Providing The Members With The Needed Trainings.",
    "Ensuring The Good Quality Of The Output To Reach The Goals Of The High Board For This Year.",
    "Providing The Organization With The Needed Fund To Cover The Year's Costs.",
    "Providing SCCI With A Coworking Space With Affordable Costs For The Whole Year's Meetings.",
    "Providing SCCI With The Needed Academic & Services Sponsorships."
]

const BDMemberImageList = [
    "BD-members/Ali sherif.png",
    "BD-members/Donia nashaat.png",
    "BD-members/Fatma el tawil.png",
    "BD-members/Julie tamer.png",
    "BD-members/Kareem hany.png",
    "BD-members/Mohamed hany.png",
    "BD-members/Nourhan el ashker.png",
    "BD-members/Salma emad.png",
    "BD-members/Sama el adawy.png",
    "BD-members/Sarah emad_page-0001.jpg",
    "BD-members/Shahd nour-1.png",
    "BD-members/Shahinaz ibrahim-1.png"
]

const BDMemberJobDescriptionList = ["Providing SCCI With Different Sponsors.",
    "Organizing An Event To Brand The Name Of SCCI.",
    " Cover Up All The Costs Of The Year To Help In Achieving The Main Goal Of SCCI “Seek The Peak.",
    "Help Investeneur Participants To Know More Practically And Judge Their Mid-Year Project And Their Conference Project."
]


function getCommitteeNameFromURL() {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get('com');
}

function handleJobList(list, element) {
    list.forEach(job => {
        element.innerHTML += `<div><li>${job}</li></div>`;
    })
}

function handleImagesFun(list, element) {
    list.forEach(image => {
        element.innerHTML += ` <div class="ticket">
        <div class="title">
            <p class="cinema">Seek The Peak</p>
            
        </div>
        <div class="poster">
            <img src=" ./img/${image} " alt="IT"  class="ticket-poster"/>
        </div>
        <div class="info">
 
        </div>
        <div class="holes-lower"></div>
        <div class="serial">
            <table class="barcode"><tr></tr></table>
            <table class="numbers">
                <tr>
                    <td>9</td>
                    <td>1</td>
                    <td>7</td>
                    <td>3</td>
                    <td>7</td>
                    <td>5</td>
                    <td>4</td>
                    <td>4</td>
                 
                </tr>
            </table>
             
        </div>
    </div>
`;
    })
}

function handleHeadJobList() {
    if (committee == "ac") {
        headTitle.innerHTML = "Academic Head";
        paper.src = "./img/book-heads-images/Ziad ayman-1.png";
        membersTitle.innerHTML = "AC Members";
        handleJobList(ACHeadJobDescriptionList, headJobList);
    } else if (committee == "hr") {
        headTitle.innerHTML = "Human Resources Head";
        paper.src = "./img/book-heads-images/tasneem zahran.-1.png";
        membersTitle.innerHTML = "HR Members";
        handleJobList(HRHeadJobDescriptionList, headJobList);
    } else if (committee == "it") {
        headTitle.innerHTML = "Information Technology Head";
        paper.src = "./img/heads-images/Mohamed ali head.png";
        membersTitle.innerHTML = "IT Members";
        handleJobList(ITHeadJobDescriptionList, headJobList);
    } else if (committee == "smm") {
        headTitle.innerHTML = "Social Media Marketing Head";
        paper.src = "./img/heads-images/ID [Recovered].pdf WAAD-1.png";
        membersTitle.innerHTML = "SMM Members";
        handleJobList(SMMHeadJobDescriptionList, headJobList);
    } else if (committee == "mp") {
        headTitle.innerHTML = "Media Production Head";
        paper.src = "./img/heads-images/ID [ABDELRAHMAN AHMED]-1.png";
        membersTitle.innerHTML = "MP Members";
        handleJobList(MPHeadJobDescriptionList, headJobList);
    } else if (committee == "dd") {
        headTitle.innerHTML = "Design & Decoration Head";
        paper.src = "./img/heads-images/NADA SOLIMAN-1.png";
        membersTitle.innerHTML = "DD Members";
        handleJobList(DDHeadJobDescriptionList, headJobList);
    } else if (committee == "mc") {
        headTitle.innerHTML = "Mobile Craft Head";
        paper.src = "./img/heads-images/ID [HEAD NAEL].jpg"
        membersTitle.innerHTML = "MC Members";
        handleJobList(MCHeadJobDescriptionList, headJobList);
    } else if (committee == "PR") {
        headTitle.innerHTML = "Public Relations Head";
        paper.src = "./img/heads-images/atef pr-1.png";
        membersTitle.innerHTML = "PR Members";
        handleJobList(PRHeadJobDescriptionList, headJobList);
    } else if (committee == "CR") {
        headTitle.innerHTML = "community Relations Head";
        paper.src = "./img/heads-images/AHMED MAREI-1.png";
        membersTitle.innerHTML = "CR Members";
        handleJobList(CRHeadJobDescriptionList, headJobList);
    } else if (committee == "Logistics") {
        headTitle.innerHTML = "Logistics Head";
        paper.src = "./img/heads-images/SEIF SHABAN-1.png";
        membersTitle.innerHTML = "Logistics Members";
        handleJobList(LogisticsHeadJobDescriptionList, headJobList);
    } else if (committee == "BD") {
        headTitle.innerHTML = "Business Deveolpment Head";
        paper.src = "./img/heads-images/Head hanady ahmed -1.png";
        membersTitle.innerHTML = "BD Members";
        handleJobList(BDHeadJobDescriptionList, headJobList);
    }
}

function handleMembersJobList() {
    if (committee == "ac") {
        membersJobListTitle.innerHTML = "AC Job Description";
        handleJobList(ACMemberJobDescriptionList, membersJobList);
    } else if (committee == "hr") {
        membersJobListTitle.innerHTML = "HR Job Description";
        handleJobList(HRMemberJobDescriptionList, membersJobList);
    } else if (committee == "it") {
        membersJobListTitle.innerHTML = "IT Job Description";
        handleJobList(ITMemberJobDescriptionList, membersJobList);
    } else if (committee == "smm") {
        membersJobListTitle.innerHTML = "SMM Job Description";
        handleJobList(SMMMemberJobDescriptionList, membersJobList);
    } else if (committee == "mp") {
        membersJobListTitle.innerHTML = "MP Job Description";
        handleJobList(MPMemberJobDescriptionList, membersJobList);
    } else if (committee == "dd") {
        membersJobListTitle.innerHTML = "DD Job Description";
        handleJobList(DDMemberJobDescriptionList, membersJobList);
    } else if (committee == "mc") {
        membersJobListTitle.innerHTML = "MC Job Description";
        handleJobList(MCMemberJobDescriptionList, membersJobList);
    } else if (committee == "PR") {
        membersJobListTitle.innerHTML = "PR Job Description";
        handleJobList(PRMemberJobDescriptionList, membersJobList);
    } else if (committee == "CR") {
        membersJobListTitle.innerHTML = "CR Job Description";
        handleJobList(CRMemberJobDescriptionList, membersJobList);
    } else if (committee == "Logistics") {
        membersJobListTitle.innerHTML = "Logistics Job Description";
        handleJobList(LogisticsMemberJobDescriptionList, membersJobList);
    } else if (committee == "BD") {
        membersJobListTitle.innerHTML = "BD Job Description";
        handleJobList(BDMemberJobDescriptionList, membersJobList);
    }
}

function handleImages() {
    if (committee == "ac") {
        handleImagesFun(ACMemberImageList, imagesContainer);
    } else if (committee == "hr") {
        handleImagesFun(HRMemberImageList, imagesContainer);
    } else if (committee == "it") {
        handleImagesFun(ITMemberImageList, imagesContainer);
    } else if (committee == "smm") {
        handleImagesFun(SMMMemberImageList, imagesContainer);
    } else if (committee == "mp") {
        handleImagesFun(MPMemberImageList, imagesContainer);
    } else if (committee == "dd") {
        handleImagesFun(DDMemberImageList, imagesContainer);
    } else if (committee == "mc") {
        handleImagesFun(MCMemberImageList, imagesContainer);
    } else if (committee == "PR") {
        handleImagesFun(PRMemberImageList, imagesContainer);
    } else if (committee == "CR") {
        handleImagesFun(CRMemberImageList, imagesContainer);
    } else if (committee == "Logistics") {
        handleImagesFun(LogisticsMemberImageList, imagesContainer);
    } else if (committee == "BD") {
        handleImagesFun(BDMemberImageList, imagesContainer);
    }
}

const committee = getCommitteeNameFromURL();

handleHeadJobList();
handleImages();
handleMembersJobList();