abdn-admin
---------//------------

1.project name: abdn-admin

2.db name:abdn_tracker. DB contain 2 tables,tables are
                         a.course_details_tbl -
                         b.api_key - for api security
                         
3.open in localhost, link is http://localhost/abdn-admin/

       First page is course adding form.Features are validation and flash message.
       Extra validation added,that is duplicate course can't add. validation done by checking same ucas_id exist.
       Second page is course listing table(http://localhost/abdn-admin/add_course/course_list). 
       Basic table contain edit and delete feature.
       
Api
--------
Api folder added in same project folder.

Added 2 security feature


              1.key and value 
              
                  ->open postman and put key and value under headers.(key=X-API-KEY ,value=test_uni)
                  
              2.basic auth 
              
                  ->add username and password under authorization tab. select basic auth on type option.
                      username=admin password=1234
  api link
-------------------------------
   1. http://localhost/abdn-admin/api_tst for course name list
   2. http://localhost/abdn-admin/api_course for full course details
                  
3 files couldnt upload in github so renamed (.htaccess,.gitignore,.editorconfig).Please add .prefix if htaccess file if need.     
If you have any doubt,please contact me on priyankaphilip93@gmail.com or 07570327077
