<?
//Page wide variables
$meta['title']= 'MyCompany';
$meta['header'] = 'My Company Questionnaire';
$meta['email_address'] = 'info@myorg.org';

//Section Variables
$settings['Section1'] = true;
$settings['Section2'] = true;
$settings['Section3'] = true;
$settings['Section4'] = true;
$settings['Section5'] = true;
$settings['Section6'] = true;
$settings['Section7'] = true;
$settings['Section8'] = true;
$settings['Section9'] = true;
$settings['Section10'] = true;
$settings['Section11'] = true;
$settings['Section12'] = true;

//Section table details
$settings['Section1sql'] = "Id INTEGER PRIMARY KEY, hhid int, Village int, Cell int, Sector int, District int, treat int, Name varchar(50), comment1 varchar(50), comment2 varchar(50), Enumerator varchar(50), Starttime varchar(50), Endtime varchar(50), firstvisit datetime, secondvisit datetime, Reason int, Outcome int, Dateofchecking int, Operatorname varchar(50), Entrydate datetime, age int, education int, rorw int, maritl int, heducation int, hhmember int, son int, daughter int, children int";

$settings['Section1cols'] = "Id,hhid,Village,Cell,Sector,District,treat,Name,comment1,comment2,Enumerator,Starttime,Endtime,firstvisit,secondvisit,Reason,Outcome,Dateofchecking,Operatorname,Entrydate,age,education,rorw,maritl,heducation,hhmember,son,daughter,children";

$settings['Section2sql'] = "Id INTEGER PRIMARY KEY, plot1 int, plot1name varchar(50), plot1size varchar(50), plot1time datetime, plot1purpose int, plot1puroth varchar(50), plot1value int, plot1acquire int, plot1own int, plot1doc int, plot1nodoc int, plot2 int, plot2name varchar(50), plot2size varchar(50), plot2time datetime, plot2purpose int, plot2puroth varchar(50), plot2value int, plot2acquire int, plot2own int, plot2doc int, plot2nodoc int, plot3 int, plot3name varchar(50), plot3size varchar(50), plot3time datetime, plot3purpose int, plot3puroth varchar(50), plot3value int, plot3acquire int, plot3own int, plot3doc int, plot3nodoc int, plot4 int, plot4name varchar(50), plot4size varchar(50), plot4time datetime, plot4purpose int, plot4puroth varchar(50), plot4value int, plot4acquire int, plot4own int, plot4doc int, plot4nodoc int, plot5 int, plot5name varchar(50), plot5size varchar(50), plot5time datetime, plot5purpose int, plot5puroth varchar(50), plot5value int, plot5acquire int, plot5own int, plot5doc int, plot5nodoc int, plot6 int, plot6name varchar(50), plot6size varchar(50), plot6time datetime, plot6purpose int, plot6puroth varchar(50), plot6value int, plot6acquire int, plot6own int, plot6doc int, plot6nodoc int";
$settings['Section2cols'] = "Id,plot1,plot1name,plot1size,plot1time,plot1purpose,plot1puroth,plot1value,plot1acquire,plot1own,plot1doc,plot1nodoc,plot2,plot2name,plot2size,plot2time,plot2purpose,plot2puroth,plot2value,plot2acquire,plot2own,plot2doc,plot2nodoc,plot3,plot3name,plot3size,plot3time,plot3purpose,plot3puroth,plot3value,plot3acquire,plot3own,plot3doc,plot3nodoc,plot4,plot4name,plot4size,plot4time,plot4purpose,plot4puroth,plot4value,plot4acquire,plot4own,plot4doc,plot4nodoc,plot5,plot5name,plot5size,plot5time,plot5purpose,plot5puroth,plot5value,plot5acquire,plot5own,plot5doc,plot5nodoc,plot6,plot6name,plot6size,plot6time,plot6purpose,plot6puroth,plot6value,plot6acquire,plot6own,plot6doc,plot6nodoc";


$settings['Section3sql'] = "Id INTEGER PRIMARY KEY, doc1 int, doc1_type int, doc1_typeoth varchar(50), doc1_time varchar(50), doc1_name1 int, doc1_name2 int, doc1_name3 int, doc1_name4 int, doc1_name5 int, doc1_name6 int, doc1_name7 int, doc1_name8 int, doc1_name9 int, doc1_name10 int, doc1_name11 int, doc1_name12 int, doc1_name13 varchar(50), doc1_name14 int, doc1_name_reason int, doc1_name_oth varchar(50), doc1_name_noreason int, doc1_name_nooth varchar(50), doc1_name_want int, doc1_want_reason1 int, doc1_want_reason2 int, doc1_want_reason3 int, doc1_want_reason4 varchar(50), doc1_notwant1 int, doc1_notwant2 int, doc1_notwant3 int, doc1_notwant4 varchar(50), doc1_copy int, doc1_copyoth varchar(50), doc1_rname1 int, doc1_rname2 int, doc1_rname3 int, doc1_rname4 int, doc1_rname5 int, doc1_rname6 int, doc1_rname7 int, doc1_rname8 int, doc1_rname9 int, doc1_rname10 int, doc1_rname11 int, doc1_rname12 int, doc1_rname13 varchar(50), doc1_rname14 int, doc1_truesize varchar(50), doc2 int, doc2_type int, doc2_typeoth varchar(50), doc2_time varchar(50), doc2_name1 int, doc2_name2 int, doc2_name3 int, doc2_name4 int, doc2_name5 int, doc2_name6 int, doc2_name7 int, doc2_name8 int, doc2_name9 int, doc2_name10 int, doc2_name11 int, doc2_name12 int, doc2_name13 varchar(50), doc2_name14 int, doc2_name_reason int, doc2_name_oth varchar(50), doc2_name_noreason int, doc2_name_nooth varchar(50), doc2_name_want int, doc2_want_reason1 int, doc2_want_reason2 int, doc2_want_reason3 int, doc2_want_reason4 varchar(50), doc2_notwant1 int, doc2_notwant2 int, doc2_notwant3 int, doc2_notwant4 varchar(50), doc2_copy int, doc2_copyoth varchar(50), doc2_rname1 int, doc2_rname2 int, doc2_rname3 int, doc2_rname4 int, doc2_rname5 int, doc2_rname6 int, doc2_rname7 int, doc2_rname8 int, doc2_rname9 int, doc2_rname10 int, doc2_rname11 int, doc2_rname12 int, doc2_rname13 varchar(50), doc2_rname14 int, doc2_truesize varchar(50), doc3 int, doc3_type int, doc3_typeoth varchar(50), doc3_time varchar(50), doc3_name1 int, doc3_name2 int, doc3_name3 int, doc3_name4 int, doc3_name5 int, doc3_name6 int, doc3_name7 int, doc3_name8 int, doc3_name9 int, doc3_name10 int, doc3_name11 int, doc3_name12 int, doc3_name13 varchar(50), doc3_name14 int, doc3_name_reason int, doc3_name_oth varchar(50), doc3_name_noreason int, doc3_name_nooth varchar(50), doc3_name_want int, doc3_want_reason1 int, doc3_want_reason2 int, doc3_want_reason3 int, doc3_want_reason4 varchar(50), doc3_notwant1 int, doc3_notwant2 int, doc3_notwant3 int, doc3_notwant4 varchar(50), doc3_copy int, doc3_copyoth varchar(50), doc3_rname1 int, doc3_rname2 int, doc3_rname3 int, doc3_rname4 int, doc3_rname5 int, doc3_rname6 int, doc3_rname7 int, doc3_rname8 int, doc3_rname9 int, doc3_rname10 int, doc3_rname11 int, doc3_rname12 int, doc3_rname13 varchar(50), doc3_rname14 int, doc3_truesize varchar(50), doc4 int, doc4_type int, doc4_typeoth varchar(50), doc4_time varchar(50), doc4_name1 int, doc4_name2 int, doc4_name3 int, doc4_name4 int, doc4_name5 int, doc4_name6 int, doc4_name7 int, doc4_name8 int, doc4_name9 int, doc4_name10 int, doc4_name11 int, doc4_name12 int, doc4_name13 varchar(50), doc4_name14 int, doc4_name_reason int, doc4_name_oth varchar(50), doc4_name_noreason int, doc4_name_nooth varchar(50), doc4_name_want int, doc4_want_reason1 int, doc4_want_reason2 int, doc4_want_reason3 int, doc4_want_reason4 varchar(50), doc4_notwant1 int, doc4_notwant2 int, doc4_notwant3 int, doc4_notwant4 varchar(50), doc4_copy int, doc4_copyoth varchar(50), doc4_rname1 int, doc4_rname2 int, doc4_rname3 int, doc4_rname4 int, doc4_rname5 int, doc4_rname6 int, doc4_rname7 int, doc4_rname8 int, doc4_rname9 int, doc4_rname10 int, doc4_rname11 int, doc4_rname12 int, doc4_rname13 varchar(50), doc4_rname14 int, doc4_truesize varchar(50), doc5 int, doc5_type int, doc5_typeoth varchar(50), doc5_time varchar(50), doc5_name1 int, doc5_name2 int, doc5_name3 int, doc5_name4 int, doc5_name5 int, doc5_name6 int, doc5_name7 int, doc5_name8 int, doc5_name9 int, doc5_name10 int, doc5_name11 int, doc5_name12 int, doc5_name13 varchar(50), doc5_name14 int, doc5_name_reason int, doc5_name_oth varchar(50), doc5_name_noreason int, doc5_name_nooth varchar(50), doc5_name_want int, doc5_want_reason1 int, doc5_want_reason2 int, doc5_want_reason3 int, doc5_want_reason4 varchar(50), doc5_notwant1 int, doc5_notwant2 int, doc5_notwant3 int, doc5_notwant4 varchar(50), doc5_copy int, doc5_copyoth varchar(50), doc5_rname1 int, doc5_rname2 int, doc5_rname3 int, doc5_rname4 int, doc5_rname5 int, doc5_rname6 int, doc5_rname7 int, doc5_rname8 int, doc5_rname9 int, doc5_rname10 int, doc5_rname11 int, doc5_rname12 int, doc5_rname13 varchar(50), doc5_rname14 int, doc5_truesize varchar(50), doc6 int, doc6_type int, doc6_typeoth varchar(50), doc6_time varchar(50), doc6_name1 int, doc6_name2 int, doc6_name3 int, doc6_name4 int, doc6_name5 int, doc6_name6 int, doc6_name7 int, doc6_name8 int, doc6_name9 int, doc6_name10 int, doc6_name11 int, doc6_name12 int, doc6_name13 varchar(50), doc6_name14 int, doc6_name_reason int, doc6_name_oth varchar(50), doc6_name_noreason int, doc6_name_nooth varchar(50), doc6_name_want int, doc6_want_reason1 int, doc6_want_reason2 int, doc6_want_reason3 int, doc6_want_reason4 varchar(50), doc6_notwant1 int, doc6_notwant2 int, doc6_notwant3 int, doc6_notwant4 varchar(50), doc6_copy int, doc6_copyoth varchar(50), doc6_rname1 int, doc6_rname2 int, doc6_rname3 int, doc6_rname4 int, doc6_rname5 int, doc6_rname6 int, doc6_rname7 int, doc6_rname8 int, doc6_rname9 int, doc6_rname10 int, doc6_rname11 int, doc6_rname12 int, doc6_rname13 varchar(50), doc6_rname14 int, doc6_truesize varchar(50)";
$settings['Section3cols'] = "Id,doc1,doc1_type,doc1_typeoth,doc1_time,doc1_name1,doc1_name2,doc1_name3,doc1_name4,doc1_name5,doc1_name6,doc1_name7,doc1_name8,doc1_name9,doc1_name10,doc1_name11,doc1_name12,doc1_name13,doc1_name14,doc1_name_reason,doc1_name_oth,doc1_name_noreason,doc1_name_nooth,doc1_name_want,doc1_want_reason1,doc1_want_reason2,doc1_want_reason3,doc1_want_reason4,doc1_notwant1,doc1_notwant2,doc1_notwant3,doc1_notwant4,doc1_copy,doc1_copyoth,doc1_rname1,doc1_rname2,doc1_rname3,doc1_rname4,doc1_rname5,doc1_rname6,doc1_rname7,doc1_rname8,doc1_rname9,doc1_rname10,doc1_rname11,doc1_rname12,doc1_rname13,doc1_rname14,doc1_truesize,doc2,doc2_type,doc2_typeoth,doc2_time,doc2_name1,doc2_name2,doc2_name3,doc2_name4,doc2_name5,doc2_name6,doc2_name7,doc2_name8,doc2_name9,doc2_name10,doc2_name11,doc2_name12,doc2_name13,doc2_name14,doc2_name_reason,doc2_name_oth,doc2_name_noreason,doc2_name_nooth,doc2_name_want,doc2_want_reason1,doc2_want_reason2,doc2_want_reason3,doc2_want_reason4,doc2_notwant1,doc2_notwant2,doc2_notwant3,doc2_notwant4,doc2_copy,doc2_copyoth,doc2_rname1,doc2_rname2,doc2_rname3,doc2_rname4,doc2_rname5,doc2_rname6,doc2_rname7,doc2_rname8,doc2_rname9,doc2_rname10,doc2_rname11,doc2_rname12,doc2_rname13,doc2_rname14,doc2_truesize,doc3,doc3_type,doc3_typeoth,doc3_time,doc3_name1,doc3_name2,doc3_name3,doc3_name4,doc3_name5,doc3_name6,doc3_name7,doc3_name8,doc3_name9,doc3_name10,doc3_name11,doc3_name12,doc3_name13,doc3_name14,doc3_name_reason,doc3_name_oth,doc3_name_noreason,doc3_name_nooth,doc3_name_want,doc3_want_reason1,doc3_want_reason2,doc3_want_reason3,doc3_want_reason4,doc3_notwant1,doc3_notwant2,doc3_notwant3,doc3_notwant4,doc3_copy,doc3_copyoth,doc3_rname1,doc3_rname2,doc3_rname3,doc3_rname4,doc3_rname5,doc3_rname6,doc3_rname7,doc3_rname8,doc3_rname9,doc3_rname10,doc3_rname11,doc3_rname12,doc3_rname13,doc3_rname14,doc3_truesize,doc4,doc4_type,doc4_typeoth,doc4_time,doc4_name1,doc4_name2,doc4_name3,doc4_name4,doc4_name5,doc4_name6,doc4_name7,doc4_name8,doc4_name9,doc4_name10,doc4_name11,doc4_name12,doc4_name13,doc4_name14,doc4_name_reason,doc4_name_oth,doc4_name_noreason,doc4_name_nooth,doc4_name_want,doc4_want_reason1,doc4_want_reason2,doc4_want_reason3,doc4_want_reason4,doc4_notwant1,doc4_notwant2,doc4_notwant3,doc4_notwant4,doc4_copy,doc4_copyoth,doc4_rname1,doc4_rname2,doc4_rname3,doc4_rname4,doc4_rname5,doc4_rname6,doc4_rname7,doc4_rname8,doc4_rname9,doc4_rname10,doc4_rname11,doc4_rname12,doc4_rname13,doc4_rname14,doc4_truesize,doc5,doc5_type,doc5_typeoth,doc5_time,doc5_name1,doc5_name2,doc5_name3,doc5_name4,doc5_name5,doc5_name6,doc5_name7,doc5_name8,doc5_name9,doc5_name10,doc5_name11,doc5_name12,doc5_name13,doc5_name14,doc5_name_reason,doc5_name_oth,doc5_name_noreason,doc5_name_nooth,doc5_name_want,doc5_want_reason1,doc5_want_reason2,doc5_want_reason3,doc5_want_reason4,doc5_notwant1,doc5_notwant2,doc5_notwant3,doc5_notwant4,doc5_copy,doc5_copyoth,doc5_rname1,doc5_rname2,doc5_rname3,doc5_rname4,doc5_rname5,doc5_rname6,doc5_rname7,doc5_rname8,doc5_rname9,doc5_rname10,doc5_rname11,doc5_rname12,doc5_rname13,doc5_rname14,doc5_truesize,doc6,doc6_type,doc6_typeoth,doc6_time,doc6_name1,doc6_name2,doc6_name3,doc6_name4,doc6_name5,doc6_name6,doc6_name7,doc6_name8,doc6_name9,doc6_name10,doc6_name11,doc6_name12,doc6_name13,doc6_name14,doc6_name_reason,doc6_name_oth,doc6_name_noreason,doc6_name_nooth,doc6_name_want,doc6_want_reason1,doc6_want_reason2,doc6_want_reason3,doc6_want_reason4,doc6_notwant1,doc6_notwant2,doc6_notwant3,doc6_notwant4,doc6_copy,doc6_copyoth,doc6_rname1,doc6_rname2,doc6_rname3,doc6_rname4,doc6_rname5,doc6_rname6,doc6_rname7,doc6_rname8,doc6_rname9,doc6_rname10,doc6_rname11,doc6_rname12,doc6_rname13,doc6_rname14,doc6_truesize";


$settings['Section4sql'] = "Id INTEGER PRIMARY KEY, p1right int,p1use int, p1use_law int, p1use_hus int, p1use_com int, p1use_5yr int, p1sell int, p1sell_law int, p1sell_hus int, p1sell_com int, p1sell_5yr int, p1beq int, p1beq_law int, p1beq_hus int, p1beq_com int, p1beq_5yr int, p2right int,p2use int, p2use_law int, p2use_hus int, p2use_com int, p2use_5yr int, p2sell int, p2sell_law int, p2sell_hus int, p2sell_com int, p2sell_5yr int, p2beq int, p2beq_law int, p2beq_hus int, p2beq_com int, p2beq_5yr int, p3right int,p3use int, p3use_law int, p3use_hus int, p3use_com int, p3use_5yr int, p3sell int, p3sell_law int, p3sell_hus int, p3sell_com int, p3sell_5yr int, p3beq int, p3beq_law int, p3beq_hus int, p3beq_com int, p3beq_5yr int, p4right int,p4use int, p4use_law int, p4use_hus int, p4use_com int, p4use_5yr int, p4sell int, p4sell_law int, p4sell_hus int, p4sell_com int, p4sell_5yr int, p4beq int, p4beq_law int, p4beq_hus int, p4beq_com int, p4beq_5yr int, p5right int,p5use int, p5use_law int, p5use_hus int, p5use_com int, p5use_5yr int, p5sell int, p5sell_law int, p5sell_hus int, p5sell_com int, p5sell_5yr int, p5beq int, p5beq_law int, p5beq_hus int, p5beq_com int, p5beq_5yr int, p6right int,p6use int, p6use_law int, p6use_hus int, p6use_com int, p6use_5yr int, p6sell int, p6sell_law int, p6sell_hus int, p6sell_com int, p6sell_5yr int, p6beq int, p6beq_law int, p6beq_hus int, p6beq_com int, p6beq_5yr int";
$settings['Section4cols'] = "Id,p1right,p1use,p1use_law,p1use_hus,p1use_com,p1use_5yr,p1sell,p1sell_law,p1sell_hus,p1sell_com,p1sell_5yr,p1beq,p1beq_law,p1beq_hus,p1beq_com,p1beq_5yr,p2right,p2use,p2use_law,p2use_hus,p2use_com,p2use_5yr,p2sell,p2sell_law,p2sell_hus,p2sell_com,p2sell_5yr,p2beq,p2beq_law,p2beq_hus,p2beq_com,p2beq_5yr,p3right,p3use,p3use_law,p3use_hus,p3use_com,p3use_5yr,p3sell,p3sell_law,p3sell_hus,p3sell_com,p3sell_5yr,p3beq,p3beq_law,p3beq_hus,p3beq_com,p3beq_5yr,p4right,p4use,p4use_law,p4use_hus,p4use_com,p4use_5yr,p4sell,p4sell_law,p4sell_hus,p4sell_com,p4sell_5yr,p4beq,p4beq_law,p4beq_hus,p4beq_com,p4beq_5yr,p5right,p5use,p5use_law,p5use_hus,p5use_com,p5use_5yr,p5sell,p5sell_law,p5sell_hus,p5sell_com,p5sell_5yr,p5beq,p5beq_law,p5beq_hus,p5beq_com,p5beq_5yr,p6right,p6use,p6use_law,p6use_hus,p6use_com,p6use_5yr,p6sell,p6sell_law,p6sell_hus,p6sell_com,p6sell_5yr,p6beq,p6beq_law,p6beq_hus,p6beq_com,p6beq_5yr";


$settings['Section5sql'] = "Id INTEGER PRIMARY KEY, info int, info_num varchar(50), info_issue1 int, info_issue2 int, info_issue3 int, info_issue4 int, info_issue5 int, info_issue6 int, info_issue7 int, info_issue8 int, info_issue9 int, info_issue10 int, info_issue11 int, info_issue12 varchar(50), info_where1 int, info_where2 int, info_where3 int, info_where4 int, info_where5 int, info_where6 int, info_where7 int, info_where8 int, info_where9 int, info_where10 int, info_where11 int, info_where12  varchar(50),info_sat int, info_reason1 int, info_reason2 int, info_reason3 int, info_reason4 int, info_reason5 int, info_reason6 int, info_reason7 varchar(50), info_dispute int, dispute_num int, dispute_issue1 int, dispute_issue2 int, dispute_issue3 int, dispute_issue4 varchar(50), dispute_where1 int, dispute_where2 int, dispute_where3 int, dispute_where4 int, dispute_where5 int, dispute_where6 int, dispute_where7 int, dispute_where8 int, dispute_where9 int, dispute_where10 int, dispute_where11 int, dispute_where12 varchar(50), dispute_sat int, dispute_reason1 int, dispute_reason2 int, dispute_reason3 int, dispute_reason4 int, dispute_reason5 int, dispute_reason6 varchar(50)";
$settings['Section5cols'] = "Id,info,info_num,info_issue1,info_issue2,info_issue3,info_issue4,info_issue5,info_issue6,info_issue7,info_issue8,info_issue9,info_issue10,info_issue11,info_issue12,info_where1,info_where2,info_where3,info_where4,info_where5,info_where6,info_where7,info_where8,info_where9,info_where10,info_where11,info_where12,info_sat,info_reason1,info_reason2,info_reason3,info_reason4,info_reason5,info_reason6,info_reason7,info_dispute,dispute_num,dispute_issue1,dispute_issue2,dispute_issue3,dispute_issue4,dispute_where1,dispute_where2,dispute_where3,dispute_where4,dispute_where5,dispute_where6,dispute_where7,dispute_where8,dispute_where9,dispute_where10,dispute_where11,dispute_where12,dispute_sat,dispute_reason1,dispute_reason2,dispute_reason3,dispute_reason4,dispute_reason5,dispute_reason6";

$settings['Section6sql'] = "Id INTEGER PRIMARY KEY, st1_who int, st1_whooth varchar(50), st1_whoelse1 int, st1_whoelse1oth varchar(50), st1_whoelse2 int, st1_whoelse2oth varchar(50),st2_who int, st2_whooth varchar(50), st2_whoelse1 int, st2_whoelse1oth varchar(50), st2_whoelse2 int, st2_whoelse2oth varchar(50),st3_who int, st3_whooth varchar(50), st3_whoelse1 int, st3_whoelse1oth varchar(50), st3_whoelse2 int, st3_whoelse2oth varchar(50)";
$settings['Section6cols'] = "Id,st1_who,st1_whooth,st1_whoelse1, st1_whoelse1oth,st1_whoelse2,st1_whoelse2oth,st2_who,st2_whooth,st2_whoelse1, st2_whoelse1oth,st2_whoelse2,st2_whoelse2oth,st3_who,st3_whooth,st3_whoelse1, st3_whoelse1oth,st3_whoelse2,st3_whoelse2oth";

$settings['Section7sql'] = "Id INTEGER PRIMARY KEY, trust_umudugudu int, trust_cellexesec int, trust_cellabu int, trust_secabu int, trust_landcomm int, trust_court int, solve_umudugudu int, solve_cellexesec int, solve_cellabu int, solve_secabu int, solve_landcomm int, solve_court int, fair_umudugudu int, fair_cellexesec int, fair_cellabu int, fair_secabu int, fair_landcomm int, fair_court int, fee_umudugudu int, fee_cellexesec int, fee_cellabu int, fee_secabu int, fee_landcomm int, fee_court int, help_umudugudu int, help_cellexesec int, help_cellabu int, help_secabu int, help_landcomm int, help_court int";
$settings['Section7cols'] = "Id,trust_umudugudu,trust_cellexesec,trust_cellabu,trust_secabu,trust_landcomm,trust_court,solve_umudugudu,solve_cellexesec,solve_cellabu,solve_secabu,solve_landcomm,solve_court,fair_umudugudu,fair_cellexesec,fair_cellabu,fair_secabu,fair_landcomm,fair_court,fee_umudugudu,fee_cellexesec,fee_cellabu,fee_secabu,fee_landcomm,fee_court,help_umudugudu,help_cellexesec,help_cellabu,help_secabu,help_landcomm,help_court";

$settings['Section8sql'] = "Id INTEGER PRIMARY KEY, disp int, dispexp_times int, disp1_type int, disp1_typeoth varchar(50), disp1_ave1 int, disp1_ave1oth varchar(50), disp1_planave1 int, disp1_planave1oth varchar(50), disp1_sat1 int, disp1_solve1 int, disp1_ave2 int, disp1_ave2oth varchar(50), disp1_sat2 int, disp1_solve2 int, disp1_sta int, disp1_staoth varchar(50), disp2_type int, disp2_typeoth varchar(50), disp2_ave1 int, disp2_ave1oth varchar(50), disp2_planave1 int, disp2_planave1oth varchar(50), disp2_sat1 int, disp2_solve1 int, disp2_ave2 int, disp2_ave2oth varchar(50), disp2_sat2 int, disp2_solve2 int, disp2_sta int, disp2_staoth varchar(50), disp3_type int, disp3_typeoth varchar(50), disp3_ave1 int, disp3_ave1oth varchar(50), disp3_planave1 int, disp3_planave1oth varchar(50), disp3_sat1 int, disp3_solve1 int, disp3_ave2 int, disp3_ave2oth varchar(50), disp3_sat2 int, disp3_solve2 int, disp3_sta int, disp3_staoth varchar(50)";
$settings['Section8cols'] = "Id,disp,dispexp_times,disp1_type,disp1_typeoth,disp1_ave1,disp1_ave1oth,disp1_planave1,disp1_planave1oth,disp1_sat1,disp1_solve1,disp1_ave2,disp1_ave2oth,disp1_sat2,disp1_solve2,disp1_sta,disp1_staoth,disp2_type,disp2_typeoth,disp2_ave1,disp2_ave1oth,disp2_planave1,disp2_planave1oth,disp2_sat1,disp2_solve1,disp2_ave2,disp2_ave2oth,disp2_sat2,disp2_solve2,disp2_sta,disp2_staoth,disp3_type,disp3_typeoth,disp3_ave1,disp3_ave1oth,disp3_planave1,disp3_planave1oth,disp3_sat1,disp3_solve1,disp3_ave2,disp3_ave2oth,disp3_sat2,disp3_solve2,disp3_sta,disp3_staoth";

$settings['Section9sql'] = "Id INTEGER PRIMARY KEY, perc1 int, perc2 int, perc3 int, perc4 int, perc5 int, perc6 int, perc7 int, perc8 int, perc9 int, perc10 int, perc11 int, perc12 int, perc13 int, perc14 int, perc15 int, perc16 int, perc17 int, perc18 int";
$settings['Section9cols'] = "Id,perc1,perc2,perc3,perc4,perc5,perc6,perc7,perc8,perc9,perc10,perc11,perc12,perc13,perc14,perc15,perc16,perc17,perc18";

$settings['Section10sql'] = "Id INTEGER PRIMARY KEY, know1 int, judge1 int, know2 int, know2oth varchar(50), judge2 int, know3 int, know3oth varchar(50), judge3 int, know4 int, know4oth varchar(50), judge4 int, know5 int, know5oth varchar(50), judge5 int, know6 int, know6oth varchar(50), judge6 int, know7 int, know7oth varchar(50), judge7 int";
$settings['Section10cols'] = "Id,know1,judge1,know2,know2oth,judge2,know3,know3oth,judge3,know4,know4oth,judge4,know5,know5oth,judge5,know6,know6oth,judge6,know7,know7oth,judge7";

$settings['Section11sql'] = "Id INTEGER PRIMARY KEY, right_husdied int, right_husdiv int, right_newwife int, right_relation int";
$settings['Section11cols'] = "Id,right_husdied,right_husdiv,right_newwife,right_relation";

$settings['Section12sql'] = "Id INTEGER PRIMARY KEY, acc_elec int, acc_prisch varchar(50), acc_secsch varchar(50), acc_pavedroad varchar(50), acc_health varchar(50), acc_advice varchar(50), acc_abunzi varchar(50), acc_police varchar(50)";
$settings['Section12cols'] = "Id,acc_elec,acc_prisch,acc_secsch,acc_pavedroad,acc_health,acc_advice,acc_abunzi,acc_police";

//Section Questions
/*
Section Questions
Diagram of a Question  array(
[Question Name],
[Type 1=text,2=combo],
['option list separated by |,# for number only, A for Text,D for Date,T for Time],
[Default value]
[introductory paragraph]
) */
//Section 1
$Section1[] = array('1.1 Househod Identification',1,'#');
$Section1[] = array('1.2 Village',1,'#');
$Section1[] = array('1.3 Cell',1,'#');
$Section1[] = array('1.4 Sector',1,'#');
$Section1[] = array('1.5 District',1,'#');
$Section1[] = array('1.6 Cell Category',2,'0| ; 1|Treat;2|Control;');
$Section1[] = array('1.7 Name of primary respondent',1,'A');
$Section1[] = array('Comments from Enumerator (if any)',1,'A');
$Section1[] = array('Comments from Supervisor (if any)',1,'A');
$Section1[] = array('1.8 Name of enumerator',1,'A');
// 1.9
$Section1[] = array('1.9 Start time of interview(hh:mm)',1,'T');
$Section1[] = array('1.10 End time of interview(hh:mm)',1,'A');
// 1.11
$Section1[] = array('1.11 Date of first visit',1,'D');
$Section1[] = array('1.12 Date of second visit',1,'D');
$Section1[] = array('1.13 Reason for second visit',2,'0| ;1|To complete some incomplete part;2|HH ask to come second time in half way of the interview;3|To recheck some information;888|other;',0);
$Section1[] = array('1.14 Outcome of interview',2,'0| ;1|Complete;2|Incomplete;3|Refused;4|Absent;5|Cound not locate;',0);
$Section1[] = array('1.15 Date of checking',1,'D');
$Section1[] = array('1.16 Name/ data entry operator',1,'A');
$Section1[] = array('1.17 Date of data entry',1,'D');
$Section1[] = array('1.18 Age',1,'#','','INFORMATION OF RESPONDENT');
$Section1[] = array('1.19 Highest level of education the respondent completed',2,'0| ;1|Never been to school;2|Lower primary;3|Upper primary;4|Ordinary level;5|TEVT;6|Advanced level;7|University;8|Other tertiary education;',0);
$Section1[] = array('1.20 Can the respondent read and write',2,'0| ;1|Yes;2|No;',0);
$Section1[] = array('1.21 Status',2,'0| ;1|Single;2|Legally married monogamous;3|Traditionally married monogamous;4|Cohabiting;5|Polygamous senior wife;6|Polygamous junior wife;7|widowed;8|Seperated;9|Divorced;',0);
$Section1[] = array("1.22 Husband's highest level education completed",2,'0| ;1|Never been to school;2|Lower primary;3|Upper primary;4|Ordinary level;5|TEVT;6|Advanced level;7|University;8|Other tertiary education;',0);
$Section1[] = array('1.23 Number of household members',1,'#');
$Section1[] = array('1.24 How many sons do you have',1,'#');
$Section1[] = array('1.25 How many daughters do you have',1,'#');
$Section1[] = array('1.26 How many of your children are living with you',1,'#');


//Section 2 
$a = array('Plot 1','Plot 2','Plot 3','Plot 4','Plot 5','Plot 6',); 
foreach ($a as $value){
$Section2[] = array("$value",2,'1|Yes;2|No;',2,"$value");
$Section2[] = array("2.1 ($value) Name or description of plot",1,'A');
$Section2[] = array("2.2 ($value) What is the size of this plot (sq. meters)",1,'#',0);
$Section2[] = array("2.3 ($value) When did you acquire/first got access to this plot",1,'D');
$Section2[] = array("2.4 ($value) What is/are the purpose of this plot",2,'0| ;1|1. Homestead;2|2. Agriculture home consumption;3|3. Agriculture for market;4|4. Livestock;5|5. Timber and forest products;6|6. Non-farm business;7|7. leased out;8|8. Mortgaged;888|888. Other;',0);
$Section2[] = array("($value) Other(Specify)",1,'A');
$Section2[] = array("2.5 ($value) What is the total value of the plot if you were to buy a similar one today",1,'#',0);
$Section2[] = array("2.6 ($value) How did your household acquire this land",2,'0| ;1|1. Inheritance;2|2. Purchase;3|3. Leased in;4|4. Encroached;5|5. Donation;888|888. other;',0);
$Section2[] = array("2.7 ($value) Does your household consider the plot as its own",2,'0| ;1|1. Yes;2|2. No;',0);
$Section2[] = array("2.8 ($value) Does your household have a document for this plot",2,'0| ;1|1. Yes;2|2. No;');
$Section2[] = array("2.9 ($value) Why does your household NOT have documents?",2,'0| ;1|1. Lost documents;2|2. Formal documents expected from the government;3|3. Did not claim documents;4|4. Do not know about documents;5|5. Someone outside household legally owns land;');
}

//Section 3 Land Documents
$a = array('Plot 1','Plot 2','Plot 3','Plot 4','Plot 5','Plot 6'); 
foreach ($a as $value){
$Section3[] = array("$value Documents",2,'1|Yes;2|No;',2,"$value Documents");
$Section3[] = array("3.1 ($value) What type of document does your household have for this plot",2,'0| ;1|1. Title;2|2. Receipt from land committee;3|3. Will;4|4. Slip of paper;888|888. other;');
$Section3[] = array("($value) Other document (Specify)",1,'A');
$Section3[] = array("3.2 ($value) When did your household acquire/received this document (mm/yyyy)",1,'A');
// 3.3
$Section3[] = array("3.3 ($value) 1. Women",2,'0| ;1|Yes;',0,"($value) Whose names are on the document?");
$Section3[] = array("($value) 2. Her husband",2,'0| ;1|Yes;');
$Section3[] = array("($value) 3. Her sons",2,'0| ;1|Yes;');
$Section3[] = array("($value) 4. Her daughters",2,'0| ;1|Yes;');
$Section3[] = array("($value) 5. Her father/father in-law",2,'0| ;1|Yes;');
$Section3[] = array("($value) 6. Her mother/mother in-law",2,'0| ;1|Yes;');
$Section3[] = array("($value) 7. Her siblings",2,'0| ;1|Yes;');
$Section3[] = array("($value) 50. Everyone in the household",2,'0| ;1|Yes;');
$Section3[] = array("($value) 51. Other family members",2,'0| ;1|Yes;');
$Section3[] = array("($value) 52. Non-relative",2,'0| ;1|Yes;');
$Section3[] = array("($value) 53. Government",2,'0| ;1|Yes;');
$Section3[] = array("($value) 54. Someone who is now deceased",2,'0| ;1|Yes;');
$Section3[] = array("($value) 888. Other (specify)",1,'A');
$Section3[] = array("($value) 999. Not applicable",2,'0| ;1|Yes;');
// 3.3 end
$Section3[] = array("3.4 ($value) (If the respondent's name is on the document) What is the primary reason your name was included on the document?",2,'0| ;1|1. It was required by government program;2|2. My husband wanted my name on the document;3|3. I asked for my name to be included;4|4. I am the only adult in my household;888|888. other;'); 
$Section3[] = array("($value) Other (specify)",1,'A');
$Section3[] = array("3.5 ($value) What is the primary reason your name is NOT included on the document?",2,'0| ;1|1. My husband/male family member refused to include me on the document;2|2. They only asked to register one person on the document;3|3. I do not own this land;4|4. It was my preference not to be included;888|888. Other;');
$Section3[] = array("($value) Other (specify)",1,'A');
$Section3[] = array("3.6 ($value) Would you want to have your name on the document?",2,'0| ;1|1. Yes;2|2. No;');
$Section3[] = array("3.7 ($value) 1. For my own security",2,'0| ;1|Yes;',0,'Why do you want to have your name on this document?');
$Section3[] = array("($value) 2. For my children's security",2,'0| ;1|Yes;');
$Section3[] = array("($value) 3. To secure a loan",2,'0| ;1|Yes;');
$Section3[] = array("($value) 888. Other (Specify)",1,'A');
$Section3[] = array("3.8 ($value) 1. To maintain household harmony",2,'0| ;1|Yes;',0,'Why do you NOT want to have your name on this document?');
$Section3[] = array("($value) 2. To maintain community",2,'0| ;1|Yes;');
$Section3[] = array("($value) 3. To maintain inheritance patterns",2,'0| ;1|Yes;');
$Section3[] = array("($value) 888. Other (Specify)",1,'A');
$Section3[] = array("3.9 ($value) Was she able to show you a copy of the document for this plot?",2,'0| ;1|1. Yes;2|2. No, she does not know where the document is;3|3. No, she has no access to it;4|4. No, because they did not claim the document at the Government land office;5|5. No, because she refused to show the copy of document;6|6. No, for some other reason;');
$Section3[] = array("($value) Specify the reason",1,'A','','If 6 is chosen in the above');
$Section3[] = array("3.10 ($value) 1. Women",2,'0| ;1|Yes;',0,"($value) Whose names are on the document?");
$Section3[] = array("($value) 2. Her husband",2,'0| ;1|Yes;');
$Section3[] = array("($value) 3. Her sons",2,'0| ;1|Yes;');
$Section3[] = array("($value) 4. Her daughters",2,'0| ;1|Yes;');
$Section3[] = array("($value) 5. Her father/father in-law",2,'0| ;1|Yes;');
$Section3[] = array("($value) 6. Her mother/mother in-law",2,'0| ;1|Yes;');
$Section3[] = array("($value) 7. Her siblings",2,'0| ;1|Yes;');
$Section3[] = array("($value) 50. Everyone in the household",2,'0| ;1|Yes;');
$Section3[] = array("($value) 51. Other family members",2,'0| ;1|Yes;');
$Section3[] = array("($value) 52. Non-relative",2,'0| ;1|Yes;');
$Section3[] = array("($value) 53. Government",2,'0| ;1|Yes;');
$Section3[] = array("($value) 54. Someone who is now deceased",2,'0| ;1|Yes;');
$Section3[] = array("($value) 888. Other (specify)",1,'A');
$Section3[] = array("($value) 999. Not applicable",2,'0| ;1|Yes;');
$Section3[] = array("3.11 ($value) What is the exact size of the plot? (sq. meters)",1,'#',0);
}

//Section 4
$a = array('Plot 1','Plot 2','Plot 3','Plot 4','Plot 5','Plot 6'); 
foreach ($a as $value){
$Section4[] = array("$value",2,'1|Yes;2|2. No;',2,"$value Right to Land");
$Section4[] = array("($value) 4.1 Do you have the right to use this land?",2,"0| ;1|1. Yes;2|2. No;999|999. I don't know;");
$Section4[] = array("($value) 4.2 Is this right recognized by law?",2,"0| ;1|1. Yes;2|2. No;999|999. I don't know;");
$Section4[] = array("($value) 4.3 Is this right recognized by your husband?",2,"0| ;1|1. Yes;2|2. No;999|999. I don't know;");
$Section4[] = array("($value) 4.4 Is this right recognized by you community?",2,"0| ;1|1. Yes;2|2. No;999|I don't know;");
$Section4[] = array("($value) 4.5 Will you still have this right in 5 years?",2,"0| ;1|1. Yes;2|2. No;999|999. I don't know;");
$Section4[] = array("($value) 4.6 Do you have the right to sell this land?",2,"0| ;1|1. Yes;2|2. No;999|999. I don't know;");
$Section4[] = array("($value) 4.7 Is this right recognized by law?",2,"0| ;1|1. Yes;2|2. No;999|999. I don't know;");
$Section4[] = array("($value) 4.8 Is this right recognized by your husband?",2,"0| ;1|1. Yes;2|2. No;999|999. I don't know;");
$Section4[] = array("($value) 4.9 Is this right recognized by your community?",2,"0| ;1|1. Yes;2|2. No;999|999. I don't know;");
$Section4[] = array("($value) 4.10 Will you still have this right in 5 years?",2,"0| ;1|1. Yes;2|2. No;999|999. I don't know;");
$Section4[] = array("($value) 4.11 Do you have the right to bequeath this land?",2,"0| ;1|1. Yes;2|2. No;999|999. I don't know;");
$Section4[] = array("($value) 4.12 Is this right recognized by law?",2,"0| ;1|1. Yes;2|2. No;999|999. I don't know;");
$Section4[] = array("($value) 4.13 Is this right recognized by your husband?",2,"0| ;1|1. Yes;2|2. No;999|999. I don't know;");
$Section4[] = array("($value) 4.14 Is this right recognized by your community?",2,"0| ;1|1. Yes;2|2. No;999|999. I don't know;");
$Section4[] = array("($value) 4.15 Will you still have this right in 5 years?",2,"0| ;1|1. Yes;2|2. No;999|999. I don't know;");
}
unset($value);

//Section 5
$Section5[] = array('Have you ever asked for any information about your land rights in the 2 last years?',2,'0| ;1|Yes;2|No;');
$Section5[] = array('How many times have you requested information about land rights in the past 2 years?',1,'A');
// 5.3
$Section5[] = array('1. Boundary',2,'0| ;1|Yes;',0,'What was the specific issue?');
$Section5[] = array('2. Inheritance',2,'0| ;1|Yes;');
$Section5[] = array('3. Legacy',2,'0| ;1|Yes;');
$Section5[] = array('4. Land issue related to polygamy',2,'0| ;1|Yes;');
$Section5[] = array('5. Land sales',2,'0| ;1|Yes;');
$Section5[] = array('6. Land registration process',2,'0| ;1|Yes;');
$Section5[] = array('7. Land subdivision',2,'0| ;1|Yes;');
$Section5[] = array('8. Land use consolidation',2,'0| ;1|Yes;');
$Section5[] = array('9. Villagization',2,'0| ;1|Yes;');
$Section5[] = array('10. Compensation for land taken for public use by the government',2,'0| ;1|Yes;');
$Section5[] = array('11. Rights of returnees',2,'0| ;1|Yes;');
$Section5[] = array('888. Other (Specify)',1,'A');
//5.4
$Section5[] = array('1. Family Council',2,'0| ;1|Yes;',0,'Where did you go to find such information?');
$Section5[] = array('2. Umudugudu head',2,'0| ;1|Yes;');
$Section5[] = array('3. Cell executive secretary',2,'0| ;1|Yes;');
$Section5[] = array("4. National Women's Council representative",2,'0| ;1|Yes;');
$Section5[] = array('5. Cell land committee',2,'0| ;1|Yes;');
$Section5[] = array('6. Cell abunzi',2,'0| ;1|Yes;');
$Section5[] = array('7. Sector land committee',2,'0| ;1|Yes;');
$Section5[] = array('8. Sector abunzi',2,'0| ;1|Yes;');
$Section5[] = array('9. Religious leaders',2,'0| ;1|Yes;');
$Section5[] = array('10. Paralegal or lawyer',2,'0| ;1|Yes;');
$Section5[] = array('11. Expert on a (call-in) radio program',2,'0| ;1|Yes;');
$Section5[] = array('888. Other(Specify)',1,'A');
//5.5
$Section5[] = array('How satisfied were you with the information that [...] provided',2,'0| ;1|Very satisfied;2|Satisfied;3|Neutral;4|Dissatisfied;5|Very dissatisfied;');
//5.6
$Section5[] = array('1. I do not have any land rights issue so I do not need the information',2,'0| ;1|Yes;',0,'Why not');
$Section5[] = array('2. I already know about my land rights so I do not need the information',2,'0| ;1|Yes;');
$Section5[] = array('3. I do not know where to get information in my cell',2,'0| ;1|Yes;');
$Section5[] = array('4. There is no reliable source of information in my cell',2,'0| ;1|Yes;');
$Section5[] = array('5. It is difficult to get information about my land rights in my cell',2,'0| ;1|Yes;');
$Section5[] = array('6. I only get information from my husband/I ask my husband to get information about my land rights',2,'0| ;1|Yes;');
$Section5[] = array('888. Other(Specify)',1,'A');
//5.7
$Section5[] = array('Have you ever asked for any advice about land dispute resolustion in the last 2 years?',2,'0| ;1|Yes;2|No;');
$Section5[] = array('How many times have you requested information about dispute resolustion in the last 2 years?',1,'A');
//5.9
$Section5[] = array('1. Where to settle the dispute',2,'0| ;1|Yes;',0,'What was the specific issue?');
$Section5[] = array('2. Where to appeal a decision',2,'0| ;1|Yes;');
$Section5[] = array('3. How to appeal a decision',2,'0| ;1|Yes;');
$Section5[] = array('888. Other (Specify)',1,'A');
//5.10
$Section5[] = array('1. Family Council',2,'0| ;1|Yes;',0,'Where did you go to seek advice?');
$Section5[] = array('2. Umudugudu head',2,'0| ;1|Yes;');
$Section5[] = array('3. Cell executive secretary',2,'0| ;1|Yes;');
$Section5[] = array("4. National Women's Council representative",2,'0| ;1|Yes;');
$Section5[] = array('5. Cell land committee',2,'0| ;1|Yes;');
$Section5[] = array('6. Cell abunzi',2,'0| ;1|Yes;');
$Section5[] = array('7. Sector land committee',2,'0| ;1|Yes;');
$Section5[] = array('8. Sector abunzi',2,'0| ;1|Yes;');
$Section5[] = array('9. Religious leaders',2,'0| ;1|Yes;');
$Section5[] = array('10. Paralegal or lawyer',2,'0| ;1|Yes;');
$Section5[] = array('11. Expert on a (call-in) radio program',2,'0| ;1|Yes;');
$Section5[] = array('888. Other(Specify)',1,'A');
$Section5[] = array('How satisfied were you with the advice that [...] provided',2,'0| ;1|Very satisfied;2|Satisfied;3|Neutral;4|Dissatisfied;5|Very dissatisfied;');
//5.12
$Section5[] = array('1. I do not have any land dispute',2,'0| ;1|Yes;',0,'Why not');
$Section5[] = array('2. I already know how to handle my dispute',2,'0| ;1|Yes;');
$Section5[] = array('3. I do not know where to get information',2,'0| ;1|Yes;');
$Section5[] = array('4. There is no reliable source of information in my village',2,'0| ;1|Yes;');
$Section5[] = array('5. It is difficult to get information about land dispute resolution in my cell',2,'0| ;1|Yes;');
$Section5[] = array('888. Other(Specify)',1,'A');

//Section 6
//situation1
$Section6[] = array('If this happens in this village, who should resolve the issue?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Other;999|Do not know;",0,'Situation 1: A woman who is cohabiting with her husband has a land dispute with him.');
$Section6[] = array('Other (specify)',1,'A');
$Section6[] = array('If this first person does not solve the problem, who else could solve this issue?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Other;999|Do not know;");
$Section6[] = array('Other (specify)',1,'A');
$Section6[] = array('If this second person does not help either, who else could resolve this issue?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Other;999|Do not know;");
$Section6[] = array('Other (specify)',1,'A');
//situation2
$Section6[] = array('If this happens in this village, who should resolve the issue?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Other;999|Do not know;",0,"Situation 2: A woman has a land dispute with her brothers about her inheritance on her deceased parents' land.");
$Section6[] = array('Other (specify)',1,'A');
$Section6[] = array('If this first person does not solve the problem, who else could solve this issue?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Other;999|Do not know;");
$Section6[] = array('Other (specify)',1,'A');
$Section6[] = array('If this second person does not help either, who else could resolve this issue?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Other;999|Do not know;");
$Section6[] = array('Other (specify)',1,'A');
//situaton3
$Section6[] = array('If this happens in this village, who should resolve the issue?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Other;999|Do not know;",0,"Situation 3: A woman has a land dispute with her brothers about her inheritance on her deceased parents' land and they reside in another cell.");
$Section6[] = array('Other (specify)',1,'A');
$Section6[] = array('If this first person does not solve the problem, who else could solve this issue?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Other;999|Do not know;");
$Section6[] = array('Other (specify)',1,'A');
$Section6[] = array('If this second person does not help either, who else could resolve this issue?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Other;999|Do not know;");
$Section6[] = array('Other (specify)',1,'A');

//Section 7
$a = array('Umudugudu leader','Cell executive secretary','Cell abunzi','Sector abunzi','Cell land committee','Court'); 
foreach ($a as $value){
$Section7[] = array("$value can be trusted",2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
}
foreach ($a as $value){
$Section7[] = array("If you report a land dispute or a land related issue to be the $value, to what extent are you sure that it will be resolved peacefully?",2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
}
foreach ($a as $value){
$Section7[] = array("If you report a land dispute or a land related issue to be the $value, to what extent are you sure that the process and the results is fair?",2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
}
foreach ($a as $value){
$Section7[] = array("If you report a land dispute or a land related issue to be the $value, how likely is it that unofficial fees will be asked?",2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
}
foreach ($a as $value){
$Section7[] = array("If a woman in this village loses access to land due to a family dispute, she can report her case to the $value and the he/she/they will be able to help her regain her access to land.",2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
}
unset($value); 

//Section 8
$Section8[] = array('Have you directly experienced a land dispute in the previous two years?',2,'0| ;1|Yes;2|No;');
$Section8[] = array('How many land disputes have you directly experienced in the previous two years?',1,'A');
//Dispute 1
$Section8[] = array('What was the land dispute about?',2,"0| ;1|Boundary dispute;2|Inheritance dispute among children;3|Legacy dispute;4|Land dispute between husband and wife;5|Land dispute between polygamous husbands and wives;6|Land dispute among wives in polygamous marriage;7|Legacy dispute between polygamous parent-child;8|Land dispute woman with in-laws and other relatives(i.e. father/mother-in-law, brother/sister-in-law);9|Land sale;10|Land subdivision;11|Land use consolidation;12|“Villagization”;13|Dispute regarding the compensation for land taken for public use by the government;14|Dispute concerning returnees;15|Dispute concerning orphans;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');
$Section8[] = array('Where did you go first?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell Executive abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Haven't gone to anyone yet but planing to;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');
$Section8[] = array('Where do you plan to go?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell Executive abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Haven't gone to anyone yet but planing to;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');
$Section8[] = array('How satisfied where you with your dispute was handled?',2,'0| ;1|Very satisfied;2|Satisfied;3|Neutral;4|Dissatisfied;5|Very dissatisfied;'); 
$Section8[] = array('Was it resolved there?',2,'0| ;1|Yes;2|No;');
$Section8[] = array('Where did you go next?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell Executive abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Haven't gone to anyone yet but planing to;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');
$Section8[] = array('How satisfied where you with your dispute was handled?',2,'0| ;1|Very satisfied;2|Satisfied;3|Neutral;4|Dissatisfied;5|Very dissatisfied;');
$Section8[] = array('Was it resolved there?',2,'0| ;1|Yes;2|No;');
$Section8[] = array('What is the current status of that dispute?',2,"0| ;1|Resolved peacefully;2|On-going;3|Resolved but the resolution/decision has not yet been implemented;4|Resolved but unhappy with the decision;5|Haven’t started a dispute yet but planning to go to someone soon;6|Unresolved but no plans of taking this dispute to any institution/person;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');
//Dispute 2
$Section8[] = array('What was the land dispute about?',2,"0| ;1|Boundary dispute;2|Inheritance dispute among children;3|Legacy dispute;4|Land dispute between husband and wife;5|Land dispute between polygamous husbands and wives;6|Land dispute among wives in polygamous marriage;7|Legacy dispute between polygamous parent-child;8|Land dispute woman with in-laws and other relatives(i.e. father/mother-in-law, brother/sister-in-law);9|Land sale;10|Land subdivision;11|Land use consolidation;12|“Villagization”;13|Dispute regarding the compensation for land taken for public use by the government;14|Dispute concerning returnees;15|Dispute concerning orphans;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');
$Section8[] = array('Where did you go first?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell Executive abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Haven't gone to anyone yet but planing to;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');
$Section8[] = array('Where do you plan to go?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell Executive abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Haven't gone to anyone yet but planing to;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');
$Section8[] = array('How satisfied where you with your dispute was handled?',2,'0| ;1|Very satisfied;2|Satisfied;3|Neutral;4|Dissatisfied;5|Very dissatisfied;'); 
$Section8[] = array('Was it resolved there?',2,'0| ;1|Yes;2|No;');
$Section8[] = array('Where did you go next?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell Executive abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Haven't gone to anyone yet but planing to;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');
$Section8[] = array('How satisfied where you with your dispute was handled?',2,'0| ;1|Very satisfied;2|Satisfied;3|Neutral;4|Dissatisfied;5|Very dissatisfied;');
$Section8[] = array('Was it resolved there?',2,'0| ;1|Yes;2|No;');
$Section8[] = array('What is the current status of that dispute?',2,"0| ;1|Resolved peacefully;2|On-going;3|Resolved but the resolution/decision has not yet been implemented;4|Resolved but unhappy with the decision;5|Haven’t started a dispute yet but planning to go to someone soon;6|Unresolved but no plans of taking this dispute to any institution/person;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');
//Dispute 3
$Section8[] = array('What was the land dispute about?',2,"0| ;1|Boundary dispute;2|Inheritance dispute among children;3|Legacy dispute;4|Land dispute between husband and wife;5|Land dispute between polygamous husbands and wives;6|Land dispute among wives in polygamous marriage;7|Legacy dispute between polygamous parent-child;8|Land dispute woman with in-laws and other relatives(i.e. father/mother-in-law, brother/sister-in-law);9|Land sale;10|Land subdivision;11|Land use consolidation;12|“Villagization”;13|Dispute regarding the compensation for land taken for public use by the government;14|Dispute concerning returnees;15|Dispute concerning orphans;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');
$Section8[] = array('Where did you go first?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell Executive abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Haven't gone to anyone yet but planing to;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');
$Section8[] = array('Where do you plan to go?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell Executive abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Haven't gone to anyone yet but planing to;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');
$Section8[] = array('How satisfied where you with your dispute was handled?',2,'0| ;1|Very satisfied;2|Satisfied;3|Neutral;4|Dissatisfied;5|Very dissatisfied;'); 
$Section8[] = array('Was it resolved there?',2,'0| ;1|Yes;2|No;');
$Section8[] = array('Where did you go next?',2,"0| ;1|Immediate family;2|Friend/Neighbor;3|Inyangamugayo;4|Family Council;5|Umudugudu leader;6|Cell Executive Secretary;7|Cell Executive abunzi;8|Sector Executive Secretary;9|Sector abunzi;10|Court;11|Religious leader;12|National Women’s Council Representative;13|Police ;14|Cell land committee;15|Sector land committee;16|Paralegal;17|Haven't gone to anyone yet but planing to;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');
$Section8[] = array('How satisfied where you with your dispute was handled?',2,'0| ;1|Very satisfied;2|Satisfied;3|Neutral;4|Dissatisfied;5|Very dissatisfied;');
$Section8[] = array('Was it resolved there?',2,'0| ;1|Yes;2|No;');
$Section8[] = array('What is the current status of that dispute?',2,"0| ;1|Resolved peacefully;2|On-going;3|Resolved but the resolution/decision has not yet been implemented;4|Resolved but unhappy with the decision;5|Haven’t started a dispute yet but planning to go to someone soon;6|Unresolved but no plans of taking this dispute to any institution/person;888|Other;");
$Section8[] = array('888. Other (specify)',1,'A');

//Section9
$Section9[] = array('Usually women in this village who have questions about their land rights can quickly find the information they need.',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('The National Women’s Council representatives in my village/cell/sector are good source of information about my rights as a woman.', 2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('The National Women’s Council representatives in my village/cell/sector are good source of information about my land rights.', 2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('Usually women in this village who have land disputes could find someone who could help them resolve the problem.', 2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('Women in this village are confident that their land dispute will be resolved fairly and peacefully.',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('People with more money and power always win when there is a dispute about land.',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('If a land dispute involves a woman, the result will typically protect the woman’s rights to land.',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('When the land dispute is between household members, village leaders usually only make the problem worse.',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('The cell abunzis in my cell can peacefully and fairly resolve land disputes.',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('Cell leaders in my cell can peacefully and fairly resolve land disputes.',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('Dispute on land inheritance is a common problem in this village.',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('Land boundary dispute is a common problem in this village.',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('Land dispute between wives or children of polygamous households  is a common problem in this village.',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('Land dispute is a big problem in this country.',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('Generally, married women in this village have the same rights to land as their husbands.',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('Widows who were not legally married always lose when they have a land dispute with their late husband’s family (brother-in-law, father/mother-in-law, etc).',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('Land dispute between family members in polygamous households is difficult to resolve in this village.',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');
$Section9[] = array('Most women in this village (legally married or not) have their names registered on their household land title.',2,'0| ;1|strongly agree;2|Agree;3|Neutral;4|Disagree;5|Strongly disagree;');

//Section 10 Knowledge
$Section10[] = array('According to the law, do men and women have equal rights to own land?',2,"0| ;1|Yes;2|No;999|I don't know;");
$Section10[] = array("Enumerator's judgement",2,'1|Sure of answer;2|Guessed;');
$Section10[] = array('Assume that a legally married couple under community of property regime has two minor children (a son and a daughter). If (god forbid) the husband were to die, who has ownership rights to the land?',2,"0| ;1|The wife manages all the land for the children;2|The wife owns 50% share, daughter owns 25% and son owns 25% share;3|The children own the land;4|The son owns the land;5|The wife and children own 33% share each;888|Other;999|I don't know;");
$Section10[] = array('Other (specify)',1,'A');
$Section10[] = array("Enumerator's judgement",2,'1|Sure of answer;2|Guessed;');
$Section10[] = array('If subsequently, (god forbid) the wife were to die, who would inherit the land? ',2,"0| ;1|The son will inherit the entire land;2|The son will take all the land but will be required to look after the daughter until she marries;3|The daughter will inherit the entire land;4|The land will be divided equally between the son and the daughter;888|Other;999|I don't know;");
$Section10[] = array('Other (specify)',1,'A');
$Section10[] = array("Enumerator's judgement",2,'1|Sure of answer;2|Guessed;');
$Section10[] = array('Assume that a man and a woman in a consensual union (not legally married) separated and the husband legally married a new woman. Under the law, can she claim rights over their household land?',2,"0| ;1|Yes;2|No;888|Other;999|I don't know;");
$Section10[] = array('Other (specify)',1,'A');
$Section10[] = array("Enumerator's judgement",2,'1|Sure of answer;2|Guessed;');
$Section10[] = array('If a woman is in a consensual union (not legally married), what can she do to ensure that she has or continues to have rights to access her household’s land? ',2,"0| ;1|Have her name included on the land title;2|Claim her children’s rights over their household land;888|Other;999|I don't know;");
$Section10[] = array('Other (specify)',1,'A');
$Section10[] = array("Enumerator's judgement",2,'1|Sure of answer;2|Guessed;');
$Section10[] = array('Assume that a woman and a man are in a consensual union (not legally married) and they have children together. Her name was not included on the document of their household land. Her husband passed away and her in-laws are claiming the land. What can she do to ensure that she continues to have rights to access her household’s land?',2,"0| ;1|Go to authorities and claim her children’s rights over their household land;2| Go to authorities and claim her right over land;3|She has no right over this land so she cannot continue to have access if her in-laws are claiming the land;888|Other;999|I don't know;");
$Section10[] = array('Other (specify)',1,'A');
$Section10[] = array("Enumerator's judgement",2,'1|Sure of answer;2|Guessed;');
$Section10[] = array('Assume that in a polygamous household, one woman is legally married to the husband while the other is not. Which of the following statement is true for the children of the woman who is not legally married to the husband?',2,"0| ;1|Her children have no rights over land;2|Her children have the same rights over land as the children of the legally married wife;3|Her children have rights over their father’s portion of land when they are legally recognized;888|Other;999|I don't know;");
$Section10[] = array('Other (specify)',1,'A');
$Section10[] = array("Enumerator's judgement",2,'1|Sure of answer;2|Guessed;');

//Section 11 Women's land rights vulnerability
$Section11[] = array('How common is it for women in this cell to lose access to land because their husband died?',2,'0| ;1|Very common;2|Somewhat common;3|Uncommon;4|Very uncommon;');
$Section11[] = array('How common is it for women in this cell to lose access to land because their husbands abandoned/divorced them?',2,'0| ;1|Very common;2|Somewhat common;3|Uncommon;4|Very uncommon;');
$Section11[] = array('How common is it for women in this cell to lose access to land because their husbands married another wife?',2,'0| ;1|Very common;2|Somewhat common;3|Uncommon;4|Very uncommon;');
$Section11[] = array('How common is it for women in this cell to lose access to land because their relation with their kin became bad or broke down',2,'0| ;1|Very common;2|Somewhat common;3|Uncommon;4|Very uncommon;');

//Section 12 Access to facilities and services
$Section12[] = array('Does your current house have an electricity connection?',2,'0| ;1|Yes;2|No;');
$Section12[] = array('What is the distance from your homestead to the nearest primary school?',1,'A');
$Section12[] = array('What is the distance from your homestead to the nearest secondary school?',1,'A');
$Section12[] = array('What is the distance from your homestead to the nearest paved road?',1,'A');
$Section12[] = array('What is the distance from your homestead to the nearest health center?',1,'A');
$Section12[] = array('What is the distance from your homestead to the nearest person who can solve land disputes?',1,'A');
$Section12[] = array('What is the distance from your homestead to the nearest abunzi?',1,'A');
$Section12[] = array('What is the distance from your homestead to the nearest police?',1,'A');
 

// Want to turn off any of the sections on your resume?  You can do that in the settings.  Just change any section from true to false and it'll disappear.  (Note: You can't turn off your work history--that's sort of important!)

// There are also a few other settings you can toggle on and off, such as offering a printable version of your resume and whether to use a dark or light style (set style to "dark" or "light" to choose).
$settings['printable'] = true;
$settings['style'] = "light";
$settings['lang'] = "en";
$settings['education'] = true;
$settings['skills'] = true;
$settings['social_media'] = true;

?>
