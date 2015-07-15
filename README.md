# boses-pinas
Collects hashtags and posts from facebook, twitter, instagram and google plus that are related to Philippine Government

Requirements
* composer [https://getcomposer.org/]
* git [https://git-scm.com/]

Installation

1. Clone repository by using this commands

  > cd C:\xampp\htdocs\
  
  > git clone https://github.com/BosesPinas/boses-pinas.git
  
  > cd boses-pinas
  
  > C:\xampp\php\php composer.phar self-update
  
  > C:\xampp\php\php composer.phar install

2. Add this code on the bottom of the vhost file

  ```
    For XAMMP here is the location `C:\xampp\apache\conf\extra`
      <VirtualHost *:80>
          ServerName pinasboses.com
          DocumentRoot C:\xampp\htdocs\boses-pinas\public
      
          <Directory C:\xampp\htdocs\boses-pinas\public>
              AllowOverride All
              Order allow,deny
              Allow from all
          </Directory>
      
          ErrorLog "logs/pinasboses.com-error.log"
          CustomLog "logs/pinasboses.com-access.log" common
      </VirtualHost>
    ```
    
3. Add this line in you host file

  > `127.0.0.1   pinasboses.com`
  
4. Restart server

5. Open browser and open this link `http://pinasboses.com`
  
