# boses-pinas
Collects hashtags and posts from facebook, twitter, instagram and google plus that are related to Philippine Government

Installation

1. Clone repository by using this command

  > if you're using XAMPP, go to this directory `C:\xampp\htdocs\`
  > git clone https://github.com/BosesPinas/boses-pinas.git

2. Do this if you still don't have composer

  > Go to this link [https://getcomposer.org/] and download and install the application

3. Add this code on the bottom of the vhost file

  > For XAMMP here is the location `C:\xampp\apache\conf\extra`
```
  <VirtualHost *:80>
   ServerName pinasboses.com
   DocumentRoot C:\xampp\htdocs\boses-pinas\public
   <Directory C:\xampp\htdocs\boses-pinas\public>
       AllowOverride All
       Order allow,deny
       Allow from all
   </Directory>
</VirtualHost>
```

4. Add this line in you host file

  > 127.0.0.1   pinasboses.com
  
5. Restart server

6. Open browser and open this link `http://pinasboses.com`
  
